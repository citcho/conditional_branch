<?php

declare(strict_types=1);

namespace Domain\Step3\Policy;

use Domain\Step3\PurchaseHistory;
use Domain\Step3\Rule\GoldCustomerPurchaseAmountRule;
use Domain\Step3\Rule\PurchaseFrequencyRule;
use Domain\Step3\Rule\ReturnRateRule;

class GoldCustomerPolicy
{
    private ExcellentCustomerPolicy $policy;

    public function __construct()
    {
        $this->policy = new ExcellentCustomerPolicy();
        $this->policy->addRule(new GoldCustomerPurchaseAmountRule());
        $this->policy->addRule(new PurchaseFrequencyRule());
        $this->policy->addRule(new ReturnRateRule());
    }

    public function complyWithAll(PurchaseHistory $history): bool
    {
        return $this->policy->complyWithAll($history);
    }
}
