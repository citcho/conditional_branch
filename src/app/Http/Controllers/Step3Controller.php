<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Step3\ExcellentCustomerManager;
use Domain\Step3\PurchaseHistory;

class Step3Controller extends Controller
{
    public function __invoke()
    {
        $history = new PurchaseHistory(
            totalAmount: 200000,
            purchaseFrequencyPerMonth: 20,
            returnRate: 0,
        );

        $manager = new ExcellentCustomerManager();
        echo $manager->isGoldCustomer($history) ? 'Gold customer!' : 'Not Gold';
        echo nl2br("\n");
        echo $manager->isSilverCustomer($history) ? 'Silver customer!' : 'Not Silver';
    }
}
