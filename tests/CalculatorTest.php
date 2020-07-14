<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{

    function testSum()
    {
        $calc = new Calculator();
        
        $this->assertEquals(
            4,
            $calc->sum(2, 2)
        );
        $this->assertIsInt($calc->sum(0, 1));
    }

    function testDif()
    {
        $calc = new Calculator();

        $this->assertEquals(
            8,
            $calc->dif(10, 2)
        );
        $this->assertIsInt($calc->dif(3, 1));
    }

    function testMul()
    {
        $calc = new Calculator();

        $this->assertEquals(
            20,
            $calc->mul(10, 2)
        );
        $this->assertIsInt($calc->mul(3, 1));
    }

    function testDel()
    {
        $calc = new Calculator();

        $this->assertEquals(
            5,
            $calc->del(10, 2)
        );
        $this->assertIsFloat($calc->del(10, 5));
    }
}
