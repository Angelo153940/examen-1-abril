<?php

namespace Deg540\Examen1Abril;

use function PHPUnit\Framework\isEmpty;

class Examen
{
    // TODO: Examen Kata

    public function getList(string $instruction): string
    {
        $instruction = explode(' ', $instruction);

        if (empty($instruction[2])) {
            return $instruction[1] . ' ' . 'x1';
        }

        return $instruction[1] . ' ' . 'x' . $instruction[2];
    }
}
