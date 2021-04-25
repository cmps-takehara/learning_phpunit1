<?php

require_once 'calc.php';

use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase
{
	public function test_add()
	{
		$calc = new Calc();
		$this->assertEquals(8, $calc->add(6, 2));
	}

	public function test_sub()
	{
		$calc = new Calc();
		$this->assertEquals(4, $calc->sub(6, 2));
	}

	public function test_mul()
	{
		$calc = new Calc();
		$this->assertEquals(12, $calc->mul(6, 2));
	}

	public function test_div()
	{
		$calc = new Calc();
		$this->assertEquals(3, $calc->div(6, 2));
	}
}
