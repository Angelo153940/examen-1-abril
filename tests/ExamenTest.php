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
    public function givenProductWithoutAmountReturnsThisProductWithOneAmount(): void
    {
        $this->assertEquals('pan x1', $this->list->getList('añadir pan'));
    }
}
