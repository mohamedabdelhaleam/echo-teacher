<?php

namespace App\Http\Controllers\Dashboard;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class PaymobController extends Controller
{

    private $PAYMOB_API_KEY;
    private $token;
    private $id;
    private $integration_id;
    private $price;
    private $iframe_token;
    public function __construct($price = null)
    {
        $this->PAYMOB_API_KEY = env("PAYMOB_API_KEY");
        $this->id = null;
        $this->integration_id = env("PAYMOB_INTEGERATION_ID");
        $this->price = $price;
        $this->iframe_token = null;
    }

    public function getToken()
    {
        $url = "https://accept.paymobsolutions.com/api/auth/tokens";
        $response = Http::withHeaders(['content-type' => 'application/json'])->post(
            $url,
            ["api_key" => $this->PAYMOB_API_KEY]
        );

        if (isset($response->json()['token'])) {
            $this->token = $response->json()['token'];
            return $this->token;
        }

        return false;
    }

    public function getId()
    {

        $this->token = $this->getToken();

        $response = Http::withHeaders(['content-type' => 'application/json'])->post(
            'https://accept.paymobsolutions.com/api/ecommerce/orders',
            [
                "auth_token" => $this->token,
                "delivery_needed" => "false",
                "amount_cents" => (int) $this->price * 100,
                "items" => []
            ]
        );

        if (isset($response->json()['id'])) {
            $this->id = $response->json()['id'];
            return $this->id;
        }

        return false;
    }

    public function makeOrder($user, $id)
    {


        $url = "https://accept.paymobsolutions.com/api/acceptance/payment_keys";
        $data = [
            "auth_token" => $this->getToken(),
            "expiration" => 36000,
            "amount_cents" => (int) $this->price * 100,
            "order_id" => $id,
            "billing_data" => [
                "apartment" => "NA",
                "email" => $user->email,
                "floor" => "NA",
                "first_name" => $user->name,
                "street" => "NA",
                "building" => "NA",
                "phone_number" => $user->mobile ?? '',
                "shipping_method" => "NA",
                "postal_code" => "NA",
                "city" => "NA",
                "country" => "NA",
                "last_name" => $user->name,
                "state" => "NA"
            ],
            "currency" => "EGP",
            "integration_id" => $this->integration_id
        ];
        $response = Http::withHeaders(['content-type' => 'application/json'])->post(
            $url,
            $data
        );
        if (isset($response->json()['token'])) {
            $this->iframe_token = $response->json()['token'];
            return $this->iframe_token;
        }

        return false;
    }

    public function get_link($data)
    {
        $id = $this->getId();
        if (!$id) {
            $error = "cannot get transction id";
        }
        $iframeToken = $this->makeOrder($data['user'], $id);
        if (!$iframeToken) {
            $error = "Unable to create PayMob iframe token";
        }

        if (isset($error)) {
            return [
                "success" => false,
                "msg" => $error
            ];
        }

        return [
            "success" => true,
            "link" => "https://accept.paymob.com/api/acceptance/iframes/" . env("PAYMOB_CARD_IFRAME_ID") . "?payment_token=" . $iframeToken,
            "id" => $id
        ];
    }

    private function getNestedValue($data, $key)
    {
        $keys = explode('.', $key);
        foreach ($keys as $subkey) {
            if (is_array($data) && array_key_exists($subkey, $data)) {
                $data = $data[$subkey];
            } else {
                return ''; // إعادة سلسلة نصية فارغة إذا لم يتم العثور على المفتاح
            }
        }
        return $data;
    }
    public function webhook(Request $request)
    {
        Storage::put("file.txt", json_encode($request->all()));
        $data = $request->only([
            'obj.amount_cents',
            'obj.created_at',
            'obj.currency',
            'obj.error_occured',
            'obj.has_parent_transaction',
            'obj.id',
            'obj.integration_id',
            'obj.is_3d_secure',
            'obj.is_auth',
            'obj.is_capture',
            'obj.is_refunded',
            'obj.is_standalone_payment',
            'obj.is_voided',
            'obj.order.id',
            'obj.owner',
            'obj.pending',
            'obj.source_data.pan',
            'obj.source_data.sub_type',
            'obj.source_data.type',
            'obj.success'
        ]);

        $values = array_values($data['obj']);
        foreach ($values as &$val) {
            if (is_array($val)) {
                $val = array_values($val);
                $val = implode($val);
            }
            if ($val === true)
                $val = "true";
            if ($val === false)
                $val = "false";
        }

        $concatenate = implode($values);
        $hash = hash_hmac('sha512', $concatenate, env('PAYMOB_HMAC'));



        if (hash_equals($hash, $request->hmac)) {

            if ($request->obj['success'] == "true") {
                $code = 200;
                $msg = "done";
                $trans_id = $request->obj["order"]["id"];
                $amount = $request->obj["amount_cents"] / 100;
            } else {
                $code = 200;
                $msg = $this->getErrorMessage($request->txn_response_code);
            }
        } else {
            $code = 400;
            $msg = "PAYMENT FAILED";
        }

        $check = ["code" => $code, "msg" => $msg, "trans_id" => "$trans_id", "amount" => "$amount", "currency" => $request->obj["currency"], 'method' => 'card'];

        $verify = app(PaymentController::class);
        $ver_payment = $verify->verify($check);
        return $ver_payment;
    }

    public function getErrorMessage($code)
    {
        $errors = [
            'BLOCKED' => __('Process Has Been Blocked From System'),
            'B' => __('Process Has Been Blocked From_System'),
            '5' => __('Balance is not enough'),
            'F' => __('Your card is not authorized with 3D secure'),
            '7' => __('Incorrect card expiration date'),
            '2' => __('Declined'),
            '6051' => __('Balance is not enough'),
            '637' => __('The OTP number was entered incorrectly'),
            '11' => __('Security checks are not passed by the system'),
        ];
        if (isset($errors[$code]))
            return $errors[$code];
        else
            return __('An error occurred while executing the operation');
    }
}
