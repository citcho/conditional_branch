<?php

declare(strict_types=1);

namespace Domain\Step2;

final class Member
{
    public function __construct(
        private string $name,
        private int $hitPoint = 100,
        private int $magicPoint = 100
    ) {
    }

    public function consumeMagicPoint(int $costMagicPoint): void
    {
        $this->magicPoint -= $costMagicPoint;
    }

    public function chant(Magic $magic): void
    {
        echo $this->name . ' の ' . $magic->name() . ' !';
    }
}
