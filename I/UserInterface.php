<?php 

declare(strict_types=1);

interface UserInterface 
{
    public function receiveTransfer(float $amount): void;
    public function transfer(float $amount): void;
}