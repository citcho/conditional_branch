<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Step1\Magic;
use Domain\Step1\Member;

final class Step1Controller extends Controller
{
    public function __invoke()
    {
        $member = new Member('Sora');
        $magic = new Magic('サンダガ', 20);

        // 生存しているか確認
        if (0 > $member->hitPoint()) {
            echo $member->name() . ' は力尽きている...';
            return;
        }
        // 行動可能か確認
        if (!$member->canAct()) {
            echo $member->name() . ' は行動できない...';
            return;
        }
        // 魔法力が残存しているかを確認
        if ($magic->costMagicPoint() > $member->magicPoint()) {
            echo $member->name() . ' は魔法を使う力がない...';
            return;
        }

        $member->consumeMagicPoint($magic->costMagicPoint());
        $member->chant($magic);
    }
}
