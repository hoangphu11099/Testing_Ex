<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase
{

    public function testAdd()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->add(2, 2));
        $this->assertEquals(0, $calc->add(-2, 2));
        $this->assertEquals(-4, $calc->add(-2, -2));
        $this->assertEquals(2.5, $calc->add(1.5, 1));
        $this->assertEquals(10, $calc->add(5, 5));
        $this->assertEquals(6, $calc->add(3, 3));
        $this->assertEquals(100, $calc->add(50, 50));
        $this->assertEquals(0, $calc->add('a', 2));
        $this->assertEquals(13, $calc->add(7, 5));
        $this->assertEquals(0, $calc->add(null, 2));
    }

    public function testSubtract()
    {
        $calc = new Calculator();
        $this->assertEquals(0, $calc->subtract(2, 2));
        $this->assertEquals(-4, $calc->subtract(-2, 2));
        $this->assertEquals(0, $calc->subtract(-2, -2));
        $this->assertEquals(0.5, $calc->subtract(1.5, 1));
        $this->assertEquals(0, $calc->subtract(5, 5));
        $this->assertEquals(0, $calc->subtract(3, 3));
        $this->assertEquals(0, $calc->subtract(50, 50));
        $this->assertEquals(2, $calc->subtract(7, 5));
        $this->assertEquals(-2, $calc->subtract(3, 5));
        $this->assertEquals(0, $calc->subtract(7, 'abc'));
    }
    public function testMultiply()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->multiply(2, 2));
        $this->assertEquals(-4, $calc->multiply(-2, 2));
        $this->assertEquals(4, $calc->multiply(-2, -2));
        $this->assertEquals(1.5, $calc->multiply(1.5, 1));
        $this->assertEquals(25, $calc->multiply(5, 5));
        $this->assertEquals(9, $calc->multiply(3, 3));
        $this->assertEquals(2500, $calc->multiply(50, 50));
        $this->assertEquals(35, $calc->multiply(7, 5));
        $this->assertEquals(15, $calc->multiply(3, 5));
        $this->assertEquals(0, $calc->multiply(7, 'abc'));
    }
    public function testDivide()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->divide(2, 2));
        $this->assertEquals(-1, $calc->divide(-2, 2));
        $this->assertEquals(2, $calc->divide(-4, -2));
        $this->assertEquals(20, $calc->divide(100, 5));
        $this->assertEquals(1, $calc->divide(5, 5));
        $this->assertEquals(3, $calc->divide(9, 3));
        $this->assertEquals(1, $calc->divide(50, 50));
        $this->assertEquals(1.4, $calc->divide(7, 5));
        $this->assertEquals(0.6, $calc->divide(3, 5));
        $this->assertEquals(0, $calc->divide(7, 'abc'));
    }
    public function testSquareRoot()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->squareRoot(2));
    }
    public function TestAbsolute()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->absolute(-5));
        $this->assertEquals(5, $calc->absolute(5));
        $this->assertEquals(0, $calc->absolute(0));
        $this->assertEquals(3.5, $calc->absolute(-3.5));
        $this->assertEquals(9, $calc->absolute(9));
        $this->assertEquals(7.2, $calc->absolute(-7.2));
        $this->assertEquals(100, $calc->absolute(-100));
        $this->assertEquals(0, $calc->absolute('abc'));
        $this->assertEquals(50, $calc->absolute(-50));
        $this->assertEquals(0, $calc->absolute(null));
    }
}
