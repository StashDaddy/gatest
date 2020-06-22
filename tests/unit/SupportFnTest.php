<?php

use Codeception\Test\Unit;

/**
* Unit tests
* @see https://codeception.com/docs/05-UnitTests Unit Testing with Codeception
*
*/
class SupportTest extends Unit {

	/**
	* @var UnitTester
	*/
	protected $tester;

	/**
	 * Helper function, executed before each test
	*/
	protected function _before() {

	}

	/**
	 * Helper function, executed after each test
	*/
	protected function _after() {

	}

	/**
	 * Helper function to override verbosity param
	*/
	public function _allowVerbosity() {

	}

	// tests
	public function testSuccess() {
        $this->assertEquals(true, true, "testSuccess Passes");
	}

	public function testFail() {
	    $this->assertEquals(true, false, "testFail Failed");
    }

}

