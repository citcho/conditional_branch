<?php

declare(strict_types=1);

namespace Domain\Step2\Magic;

final class Blizzard implements MagicInterface
{
    public function name(): string
    {
        return 'ブリザド';
    }

    public function costMagicPoint(): int
    {
        return 10;
    }

    public function attackPower(): int
    {
        return 15;
    }
}
