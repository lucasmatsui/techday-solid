<?php

declare(strict_types=1);

interface Biometric
{
    public function calculateScore(): float;
}