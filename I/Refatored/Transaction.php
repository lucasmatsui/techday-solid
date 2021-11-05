<?php 

declare(strict_types=1);

class TransactionRefatored
{
    private IUser $payer;
    private IUser $payee;
    private float $amount;

    public function __construct(
        IUser $payer,
        IUser $payee,
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

new TransactionRefatored(new Seller(), new Consumer(), 500);
