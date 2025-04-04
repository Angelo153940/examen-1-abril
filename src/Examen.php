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

    private function emptyList(): void
    {
        while (!empty($this->products)) {
            array_pop($this->products);
        }
    }

    private function addList($instruction): string
    {
        if (empty($instruction[2])) {
            array_push($this->products, $instruction[1] . ' ' . 'x1');
            return $instruction[1] . ' ' . 'x1';
        }

        array_push($this->products, ', ', $instruction[1] . ' ' . 'x' . $instruction[2]);
        return $instruction[1] . ' ' . 'x' . $instruction[2];
    }

    public function getList(string $instruction): string
    {
        $instruction = explode(' ', $instruction);

        if ($instruction[0] == "vaciar") {
            $this->emptyList();
            return '';
        }

        if ($instruction[0] == "añadir") {
            return $this->addList($instruction);
        }

        return '';
    }
}
