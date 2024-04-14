<?php

declare(strict_types=1);

namespace Domain\Step2;

interface Magic
{
    public function name(): string;
    public function costMagicPoint(): int;
    public function attackPower(): int;
}
