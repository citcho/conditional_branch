<?php

declare(strict_types=1);

namespace Domain\Step3\Rule;

use Domain\Step3\PurchaseHistory;

class PurchaseFrequencyRule implements ExcellentCustomerRule
{
    public function ok(PurchaseHistory $history): bool
    {
        return 10 <= $history->purchaseFrequencyPerMonth;
    }
}
