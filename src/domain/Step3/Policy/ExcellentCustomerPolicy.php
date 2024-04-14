<?php

namespace Domain\Step3\Policy;

use Domain\Step3\PurchaseHistory;
use Domain\Step3\Rule\ExcellentCustomerRule;

class ExcellentCustomerPolicy
{
    private array $rules = [];

    public function addRule(ExcellentCustomerRule $rule): void
    {
        $this->rules[] = $rule;
    }

    public function complyWithAll(PurchaseHistory $history): bool
    {
        foreach ($this->rules as $rule) {
            if (!$rule->ok($history)) {
                return false;
            }
        }

        return true;
    }
}
