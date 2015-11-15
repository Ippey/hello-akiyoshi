<?php


/**
 * class-akiyoshiTest
 *
 */
class classAkiiyoshiTest extends \WP_UnitTestCase
{

    private $akiyoshi;
    protected function setUp() {
        parent::setUp();

        $this->akiyoshi = new Akiyoshi();

    }


    public function testGet_words()
    {
        $rowds = $this->akiyoshi->getWords();
        $this->assertTrue(is_array($rowds));
    }
}

