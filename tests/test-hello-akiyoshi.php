<?php

class Test_Hello_Akiyoshi extends WP_UnitTestCase {

	public function test_shortcode() {
		$akiyoshi = new Akiyoshi();
		$words = $akiyoshi->get_words();
		$word = do_shortcode( '[akiyoshi]' );
		$this->assertContains( $word, $words );
		$this->assertNotEmpty( $word );
	}
}