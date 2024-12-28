<?php

namespace App\Traits;

trait ResponseMessageTrait
{

    /**
     * @param string $name
     * @param int $type
     * @return string
     */

    //   1 = create , 2 = update , 3 = delete
    public function successResponse($name = '', int $type)
    {
        switch ($type) {
            case 1:
                return "تم انشاء $name بنجاح";
            case 2:
                return "تم تحديث $name بنجاح";
            case 3:
                return "تم حذف $name بنجاح";
            case 4:
                return "تم تغير حالة $name بنجاح";
            default:
                return "عملية غير معروفة";
        }
    }


    public function errorResponse($name = '', int $type)
    {
        switch ($type) {
            case 1:
                return "لم يتم انشاء $name بنجاح";
            case 2:
                return "لم يتم تحديث $name بنجاح";
            case 3:
                return "لم يتم حذف $name بنجاح";
            case 4:
                return "لم يتم تغير حالة $name بنجاح";
            default:
                return "عملية غير معروفة";
        }
    }
}
