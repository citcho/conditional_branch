<?php

declare(strict_types=1);

namespace Domain\Step2;

final class MagicManager
{
    public function getName(MagicType $magicType): string
    {
        $name = '';

        switch ($magicType) {
            case MagicType::FIRE:
                $name = 'ファイア';
                break;
            case MagicType::BLIZZARD:
                $name = 'ブリザド';
                break;
            case MagicType::THUNDER:
                $name = 'サンダー';
                break;
        }

        return $name;
    }

    public function costMagicPoint(MagicType $magicType): int
    {
        $magicPoint = 0;

        switch ($magicType) {
            case MagicType::FIRE:
                $magicPoint = 5;
                break;
            case MagicType::BLIZZARD:
                $magicPoint = 10;
                break;
            case MagicType::THUNDER:
                $magicPoint = 15;
                break;
        }

        return $magicPoint;
    }

    public function attackPower(MagicType $magicType): int
    {
        $attackPower = 0;

        switch ($magicType) {
            case MagicType::FIRE:
                $attackPower = 10;
                break;
            case MagicType::BLIZZARD:
                $attackPower = 15;
                break;
            case MagicType::THUNDER:
                $attackPower = 20;
                break;
        }

        return $attackPower;
    }
}
