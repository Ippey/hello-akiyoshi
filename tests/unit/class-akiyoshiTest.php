<?php


/**
 * class-akiyoshiTest
 *
 */
class classAkiiyoshiTest extends \WP_UnitTestCase
{

    private $akiyoshi;
    public function setUp() {
        parent::setUp();

        $this->akiyoshi = new Akiyoshi();

    }


    public function testGet_words()
    {
        $rowds = $this->akiyoshi->get_words();
        $this->assertTrue(is_array($rowds));
    }
}

