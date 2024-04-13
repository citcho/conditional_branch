<?php

declare(strict_types=1);

namespace Domain\Step2;

final class Magic
{
    public function __construct(
        private string $name,
        private int $costMagicPoint,
    ) {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function costMagicPoint(): int
    {
        return $this->costMagicPoint;
    }
}
