<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Step2\Blizzard;
use Domain\Step2\Fire;
use Domain\Step2\MagicType;
use Domain\Step2\Member;
use Domain\Step2\Thunder;
use FFI;

class Step2Controller extends Controller
{
    public function __invoke()
    {
        $magics = [
            MagicType::Fire => new Fire(),
            MagicType::Blizzard => new Blizzard(),
            MagicType::Thunder => new Thunder(),
        ];

        // メンバーを作成
        $member = new Member(
            name: 'Sora',
        );
        // 魔法を作成
        $magic = $magics[MagicType::Fire];

        // 魔法を唱える
        $member->chant($magic);

        // メンバーの魔法ポイントを消費
        $member->consumeMagicPoint($magic->costMagicPoint());
    }
}
