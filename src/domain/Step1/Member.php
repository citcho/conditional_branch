<?php

declare(strict_types=1);

namespace Domain\Step1;

final class Member
{
    public function __construct(
        private string $id,
        private string $name,
        private int $hitPoint = 100,
        private int $magicPoint = 100
    ) {
    }

    public function hitPoint(): int
    {
        return $this->hitPoint;
    }

    public function magicPoint(): int
    {
        return $this->magicPoint;
    }

    public function canAct(): bool
    {
        return rand(0, 1) === 1;
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
