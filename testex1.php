<?php

use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase
{
	public static function setUpBeforeClass()
	{
		echo "setUpBeforeClass\n";
	}

	public static function tearDownAfterClass()
	{
		echo "tearDownAfterClass\n";
	}

	public function test_equal()
	{
		$result = 1 + 2;
		$this->assertEquals(3, $result);
	}

	public function test_notequal()
	{
		$this->markTestIncomplete("not implemented yet");

		$result = 1 + 2;
		$this->assertNotEquals(100, $result);
	}

	public function test_string1()
	{
		$result = 'Hello'.'World';
		$this->assertEquals('HelloWorld', $result);
	}

	public function test_string2()
	{
		$string = 'HelloWorld';
		$this->assertStringStartsWith('H', $string);
	}

	public function test_string3()
	{
		$string = 'HelloWorld';
		$this->assertContains('oWo', $string);
	}
}
