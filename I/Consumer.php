<?php 

declare(strict_types=1);

class Consumer implements UserInterface
{
    public function transfer(float $amount): void {
        //logica de transferencia
    }
    public function receiveTransfer(float $amount):void {
        //logica de receber umas trasferencia
    }
}