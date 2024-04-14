<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Step3\Policy\GoldCustomerPolicy;
use Domain\Step3\Policy\SilverCustomerPolicy;
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

        $goldCustomerPolicy = new GoldCustomerPolicy();
        $silverCustomerPolicy = new SilverCustomerPolicy();

        echo $goldCustomerPolicy->complyWithAll($history) ? 'Gold customer!' : 'Not Gold';
        echo nl2br("\n");
        echo $silverCustomerPolicy->complyWithAll($history) ? 'Silver customer!' : 'Not Silver';
    }
}
