<?php
namespace App\component;

class Helper
{
    public static function generateOtp($length = 4)
    {

        $min = pow(10, $length - 1);
        $max = pow(10, $length) - 1;
//        die(random_int($min, $max));
        return random_int($min, $max);
    }
}

?>
