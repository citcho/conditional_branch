<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Step2\Member;
use Domain\Step2\Thunder;

class Step2Controller extends Controller
{
    public function __invoke()
    {
        // メンバーを作成
        $member = new Member(
            name: 'Sora',
        );
        // 魔法を作成
        $magic = new Thunder();

        // 魔法を唱える
        $member->chant($magic);

        // メンバーの魔法ポイントを消費
        $member->consumeMagicPoint($magic->costMagicPoint());
    }
}
