<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Step2\Magic;
use Domain\Step2\MagicManager;
use Domain\Step2\MagicType;
use Domain\Step2\Member;

class Step2Controller extends Controller
{
    public function __invoke()
    {
        $magicManager = new MagicManager();

        // メンバーを作成
        $member = new Member(
            name: 'Sora',
        );
        // 魔法を作成
        $magic = new Magic(
            name: $magicManager->getName(MagicType::THUNDER),
            costMagicPoint: $magicManager->costMagicPoint(MagicType::THUNDER)
        );

        // 魔法を唱える
        $member->chant($magic);

        // メンバーの魔法ポイントを消費
        $member->consumeMagicPoint($magic->costMagicPoint());
    }
}
