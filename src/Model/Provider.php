<?php

namespace APP\Model;

class Provider
{
    private int $cnpj;
    private string $name;
    private ?string $phoneNumber;
    private Address $address;

    public function __construct(
        string $cnpj,
        string $name,
        ?string $phoneNumber,
        ?Address $address
    ){
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }
}
