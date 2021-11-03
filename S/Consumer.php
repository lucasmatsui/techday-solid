<?php

declare(strict_types=1);

class Consumer
{
    public function save(){}
    public function getById(int $id){}
    public function delete(int $id){}
    public function update(int $id){}
    public function changeAddress(string $address){}
    public function transfer(float $value){}
    public function deposit(float $value){}
}