<?php

declare(strict_types=1);

namespace Domain\Step3;

use Domain\Step3\PurchaseHistory;

class ExcellentCustomerManager
{
    public function isGoldCustomer(PurchaseHistory $history): bool
    {
        if (100000 <= $history->totalAmount) {
            if (10 <= $history->purchaseFrequencyPerMonth) {
                if ($history->returnRate <= 0.001) {
                    return true;
                }
            }
        }
    }

    public function isSilverCustomer(PurchaseHistory $history): bool
    {
        if (10 <= $history->purchaseFrequencyPerMonth) {
            if ($history->returnRate <= 0.001) {
                return true;
            }
        }
    }
}
