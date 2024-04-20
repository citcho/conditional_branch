<?php

declare(strict_types=1);

namespace Domain\Step2\Magic;

interface MagicInterface
{
    public function name(): string;

    public function costMagicPoint(): int;

    public function attackPower(): int;
}
