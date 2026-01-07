<?php

namespace App\Services\Services\Games;

use App\Enums\GameNameEnum;
use App\Interfaces\GameNumberGenerator;

/**
 * Class LottoNumberGenerator.
 */
final class LottoNumberGenerator implements GameNumberGenerator
{
    public function generateNumber(): array
    {
        $numbers = collect(range(1, 59))->shuffle()->take(6)->sort()->values()->all();
        $life_number = null;

        return [
            'numbers' => $numbers,
            'life_number' => $life_number
        ];
    }

    public function gameName(): string
    {
        return GameNameEnum::LOTTO->value;
    }
}
