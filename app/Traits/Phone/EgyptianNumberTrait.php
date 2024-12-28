<?php

namespace App\Traits\Phone;

trait EgyptianNumberTrait
{
    public function getEgyptianNumber($phone)
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (preg_match('/^(010|011|012|015)[0-9]{8}$/', $phone)) {

            return '2' . $phone;
        } elseif (preg_match('/^(10|11|12|15)[0-9]{8}$/', $phone)) {

            return '20' . $phone;
        } elseif (preg_match('/^20(10|11|12|15)[0-9]{8}$/', $phone)) {

            return $phone;
        }

        return null;
    }
}
