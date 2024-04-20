<?php

declare(strict_types=1);

namespace Domain\Step2\Magic;

use Domain\Step2\MagicType;
use Domain\Step2\Magic\MagicInterface;
use Illuminate\Support\Str;

final class MagicFactory
{
    private const MAGIC_CLASS_PATH = 'Domain\\Step2\\Magic\\%s';

    public static function create(MagicType $magicType): MagicInterface
    {
        return new (sprintf(
            self::MAGIC_CLASS_PATH,
            Str::studly(strtolower($magicType->name)))
        )();
    }
}
