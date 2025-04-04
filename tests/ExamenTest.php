<?php

namespace Deg540\ExamenTest1Abril\Test;

use Deg540\Examen1Abril\Examen;
use PHPUnit\Framework\TestCase;

class ExamenTest extends TestCase
{
    // TODO: Examen Kata Tests
    private Examen $list;
    protected function setUp(): void
    {
        parent::setUp();
        $this->list = new Examen();
    }


    /**
     * @test
     */
    public function whenAddProductWithoutAmountReturnsThisProductWithOneAmount(): void
    {
        $this->assertEquals('pan x1', $this->list->getList('añadir pan'));
    }

    /**
     * @test
     */
    public function whenAddProductWithAmountReturnsThisProductWithHisAmount(): void
    {
        $this->assertEquals('pan x5', $this->list->getList('añadir pan 5'));
    }

    /**
     * @test
     */
    public function whenDeleteProductReturnsTheListWithoutThisProduct(): void
    {
        $this->list->getList('añadir pan 5');
        $this->assertEquals('', $this->list->getList('eliminar pan'));
    }

    /**
     * @test
     */
    public function whenEmptyTheListReturnsVoidString(): void
    {
        $this->list->getList('añadir pan 5');
        $this->list->getList('añadir leche 3');
        $this->assertEquals('', $this->list->getList('vaciar'));
    }
}
