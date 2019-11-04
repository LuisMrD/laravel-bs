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
    const Hordas = 0;
    const Comuns = 5;
    const Unipoder = 7;
    const Estendido = 3;
    const Afiliações = 6;
    const Unleashed = 4;
    const Commander = 2;
    const Guerra_infinita = 1;
}