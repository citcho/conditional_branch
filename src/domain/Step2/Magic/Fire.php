<?php

declare(strict_types=1);

namespace Domain\Step2\Magic;

final class Fire implements MagicInterface
{
    public function name(): string
    {
        return 'ファイア';
    }

    public function costMagicPoint(): int
    {
        return 5;
    }

    public function attackPower(): int
    {
        return 10;
    }
}
