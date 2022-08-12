<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PostStatusEnum extends Enum
{
    public const PENDING =  0;
    public const APPROVE =  1;
    public const CANCEL  =  2;
}
