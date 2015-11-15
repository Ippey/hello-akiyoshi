<?php

/**
 * Created by PhpStorm.
 * User: ippey
 * Date: 15/11/11
 * Time: 23:00
 */
abstract class Hello_Akiyoshi_Random_Speaker extends Hello_Akiyoshi_Speaker {

	/**
	 * @var string
	 */
	protected $name = "unknown";

	/**
	 * @return string Name
	 */
	public function whoami() {
		return $this->name;
	}

	/**
	 * @return String
	 */
	public function say() {
		$words = $this->get_words();

		$word =  $words[ array_rand( $words ) ];
		return apply_filters( 'akiyoshi_say', $word );
	}

	/**
	 * @return String[]
	 */
	abstract public function get_words();

}