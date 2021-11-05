<?php 

declare(strict_types=1);

class Transaction
{
    private UserInterface $payer;
    private UserInterface $payee;
    private float $amount;

    public function __construct(
        UserInterface $payer,
        UserInterface $payee,
        float $amount
    ){}

    public function make()
    {

        if ($this->payer instanceof Seller) {
            throw new Exception('Lojistas não podem fazer transferencias', 403);
        }

        // faz a transação
    }
}

new Transaction(new Seller(), new Consumer(), 500);