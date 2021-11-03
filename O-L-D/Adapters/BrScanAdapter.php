<?php

declare(strict_types=1);

class BrScanAdapter implements Biometric
{
    private int $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function calculateScore(): float
    {
        return (new Brscan($this->userId))->calculateScore();
    }
}