<?php

class Test_Akiyoshi extends WP_UnitTestCase {

	public function test_get_words() {
		$akiyoshi = new Miyasan();
		$words   = $akiyoshi->get_words();
		$this->assertTrue( is_array( $words ) );

	}

	public function test_say() {
		$akiyoshi = new Akiyoshi();
		$akiyoshi->say();
		$this->assertTrue( is_string( $akiyoshi->say() ) );
		$this->assertNotEmpty( $akiyoshi->say() );
	}

	public function test_name() {
		$akiyoshi = new Akiyoshi();
		$name    = $akiyoshi->whoami();
		$this->assertTrue( is_string( $name ) );
		$this->assertRegExp( '/-?[_a-zA-Z]+[_a-zA-Z0-9-]*/', $name );
	}
}