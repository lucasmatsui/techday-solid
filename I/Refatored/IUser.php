<?php 

declare(strict_types=1);

interface IUser
{
    public function receiveTransfer(float $amount): void;
}