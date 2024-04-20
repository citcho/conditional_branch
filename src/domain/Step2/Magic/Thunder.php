<?php

declare(strict_types=1);

namespace Domain\Step2\Magic;

final class Thunder implements MagicInterface
{
    public function name(): string
    {
        return 'サンダー';
    }

    public function costMagicPoint(): int
    {
        return 15;
    }

    public function attackPower(): int
    {
        return 20;
    }
}
