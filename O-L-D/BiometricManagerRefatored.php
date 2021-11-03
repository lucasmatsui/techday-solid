<?php

declare(strict_types=1);

class BiometricManager
{
    public function calculateScore(Biometric $biometric)
    {
        return $biometric->calculateScore() ?? 0;
    }
}

(new BiometricManager())->calculateScore(new BrScanAdapter(31));
(new BiometricManager())->calculateScore(new BrSafeAdapter(31));
(new BiometricManager())->calculateScore(new BrFlowAdapter(31));