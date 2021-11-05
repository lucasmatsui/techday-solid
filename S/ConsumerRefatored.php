<?php

declare(strict_types=1);

class Consumer
{
    private int $id;
    private float $amount;
    private string $address;

    public function changeAddress(string $address){}
    public function transfer(float $value){}
    public function withdraw(float $value){}
}

class ConsumerRepository
{
    public function save(){}
    public function getById(int $id){}
    public function delete(int $id){}
    public function update(int $id){}
}