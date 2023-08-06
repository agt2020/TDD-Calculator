<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
        public function testSum() : void
        {
                $cal = new App\Calculator;
                $this->assertEquals(10,$cal->sum(8,2));
        }

        public function testSub() : void
        {
                $cal = new App\Calculator;
                $this->assertEquals(6,$cal->sub(8,2));
        }

        public function testMul() : void
        {
                $cal = new App\Calculator;
                $this->assertEquals(16,$cal->mul(8,2));
        }

        public function testDiv() : void
        {
                $cal = new App\Calculator;
                $this->assertEquals(4,$cal->div(8,2));
        }
}

?>