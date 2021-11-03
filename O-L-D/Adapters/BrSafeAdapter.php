<?php

declare(strict_types=1);

class BrSafeAdapter implements Biometric
{
    private int $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function calculateScore(): float
    {
        return (new BrSafe($this->userId))->calculateScoreSafe() * 0.2;
    }
}