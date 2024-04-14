<?php

declare(strict_types=1);

namespace Domain\Step3\Rule;

use Domain\Step3\PurchaseHistory;

class ReturnRateRule implements ExcellentCustomerRule
{
    public function ok(PurchaseHistory $history): bool
    {
        return 0.001 >= $history->returnRate;
    }
}
