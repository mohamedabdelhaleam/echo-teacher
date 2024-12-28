<?php

namespace App\Traits\Whatsapp;

trait ReceiveWhatsappMessageTrait
{
    public function receiveWhatsappMessage($request)
    {
        $receiver = $request->receiver;
        $sender = $request->sender;
        $message = $request->payload['conversation'];
        return response()->json([
            'receiver' => $receiver,
            'sender' => $sender,
            'message' => $message
        ]);
    }
}
