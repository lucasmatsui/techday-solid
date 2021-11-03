<?php 

declare(strict_types=1);

class Transaction
{
    public function __construct(
        private UserInterface $payer,
        private UserInterface $payee,
        private float $amount,
    ){}

    public function make()
    {

        if ($this->payer instanceof Seller) {
            throw new Exception('Lojistas não podem fazer transferencias', 403);
        }

        // faz a transação
    }
}