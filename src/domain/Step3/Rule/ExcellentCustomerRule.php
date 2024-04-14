<?php

declare(strict_types=1);

namespace Domain\Step3\Rule;

use Domain\Step3\PurchaseHistory;

interface ExcellentCustomerRule
{
    public function ok(PurchaseHistory $history): bool;
}
