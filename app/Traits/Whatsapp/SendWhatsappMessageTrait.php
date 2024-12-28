<?php

namespace App\Traits\Whatsapp;

trait SendWhatsappMessageTrait
{
    public function sendWhatsappMessage(String $phone, String  $message)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wsup.app/api/create-message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'appkey' => env('WHATSAPP_APP_KEY'),
                'authkey' => env('WHATSAPP_AUTH_KEY'),
                'to' => $phone,
                'message' => $message,
                'sandbox' => 'false'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
    }
}
