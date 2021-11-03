<?php 

declare(strict_types=1);

interface IUserConsumer extends IUser
{
    public function transfer(float $amount): void;
}