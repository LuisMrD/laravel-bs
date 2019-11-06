<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Format extends Enum
{
    const Padrão = 8;
    const Hordas = 7;
    const Comuns = 6;
    const Unipoder = 5;
    const Estendido = 4;
    const Afiliações = 3;
    const Unleashed = 2;
    const Commander = 1;
    const Guerra_infinita = 0;
}