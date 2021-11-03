<?php

declare(strict_types=1);

class BrFlowAdapter implements Biometric
{
    private int $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
    public function calculateScore(): float
    {
        return (new BrFlow($this->userId))->calculateScoreFlow() * 0.1;
    }
}