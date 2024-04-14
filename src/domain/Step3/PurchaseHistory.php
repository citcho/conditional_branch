<?php

declare(strict_types=1);

namespace Domain\Step3;

class PurchaseHistory
{
    public function __construct(
        public int $totalAmount,
        public int $purchaseFrequencyPerMonth,
        public float $returnRate,
    ) {
    }
}
