<?php

namespace App\Interfaces;

interface GameNumberGenerator
{
    public function generateNumber(): array;

    public function gameName(): string;
}
