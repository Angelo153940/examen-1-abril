<?php

namespace Deg540\Examen1Abril;

use function PHPUnit\Framework\isEmpty;

class Examen
{
    // TODO: Examen Kata
    private array $products;
    public function __construct()
    {
        $this->products = [];
    }


    public function getList(string $instruction): string
    {
        $instruction = explode(' ', $instruction);

        if ($instruction[0] == "añadir") {
            if (empty($instruction[2])) {
                array_push($this->products, $instruction[1] . ' ' . 'x1');
                return $instruction[1] . ' ' . 'x1';
            }

            array_push($this->products, $instruction[1] . ' ' . 'x' . $instruction[2]);
            return $instruction[1] . ' ' . 'x' . $instruction[2];
        }

        return '';
    }
}
