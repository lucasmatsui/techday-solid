<?php

declare(strict_types=1);

class BiometricManager
{
    public function calculateScore(string $biometric, $userId)
    {
        if ($biometric == 'Brscan') {
            return (new Brscan($userId))->calculateScore();
        }

        if ($biometric == 'BrSafe') {
            return (new BrSafe($userId))->calculateScoreSafe() * 0.2;
        }

        if ($biometric == 'BrFlow') {
            return (new BrFlow($userId))->calculateScoreFlow() * 0.1;
        }

        return 0;
    }
}

(new BiometricManager())->calculateScore('Brscan', 31);
(new BiometricManager())->calculateScore('BrSafe', 31);
(new BiometricManager())->calculateScore('BrFlow', 31);