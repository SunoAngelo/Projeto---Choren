<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 4;
    }

    public static function validateNumber(int|float $value)
    {
        return $value > 0;
    }

    public static function validateBarCode(string $barCode):bool
    {
        return mb_strlen($barCode) == 13 && mb_substr($barCode, 0, 3) == '789';
    }

    public static function validateCnpj(string $cnpj):bool{
        return mb_strlen($cnpj) == 14;
    }

    public static function validatePhoneNumber(int|float $phoneNumber){
        return $phoneNumber >= 8; 
    }

    public static function validatePostalCode(string $postalCode){
        return mb_strlen($postalCode) == 8;
    }

}

