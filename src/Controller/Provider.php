<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Address;
use APP\Model\Provider;

if (empty($_POST)) {
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$cnpj = $_POST["cnpj"];
$name = $_POST["name"];
$phoneNumber = $_POST["phoneNumber"];

$publicPlace = $_POST["publicPlace"];
$streetNumber = $_POST["streetNumber"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];


$error = array();

if (!Validation::validateName($name)) {
    array_push($error, 'O nome do fornecedor deve conter ao menos 4 caracteres entre letras e números!!!');
}

if (!Validation::validateCnpj($cnpj)){
    array_push($error, 'O CNPJ do fornecedor não é valido, deve conter 14 digitos!!!');
}

if(!Validation::validatePhoneNumber($phoneNumber)){
    array_push($error, 'Insira um numero de telefone válido, deve conter no minimo 8 digitos!!!');
}

if(!Validation::validatePostalCode($postalCode)){
    array_push($error, 'Insira um CEP válido, deve conter 8 digitos!!!');
}

if(!Validation::validateName($city)){
    array_push($error, 'O nome da cidade deve conter ao menos 4 caracteres entre letras e números!!!');
}

if(!Validation::validateName($neighborhood)){
    array_push($error, 'O nome do bairro deve conter ao menos 4 caracteres entre letras e números!!!');
}

if(!Validation::validateNumber($streetNumber)){
    array_push($error, 'O numero deve ser maior do que 0!!!');
}

if(!Validation::validateName($publicPlace)){
    array_push($error, 'O nome do logradouro deve conter ao menos 4 caracteres entre letras e números!!!');
}

if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $provider = new Provider(
        cnpj: $cnpj,
        name: $name,
        phoneNumber: $phoneNumber,
        address: new Address(
            publicPlace: $publicPlace,
            streetNumber: $streetNumber,
            neighborhood: $neighborhood,
            city: $city,
            postalCode: $postalCode
        )
    );
    Redirect::redirect(
        message: 'Fornecedor cadastrado com sucesso!!!'
    );
}


