<?php

/**
 * abstract class Hello_Akiyoshi_Speaker
 */
abstract class Hello_Akiyoshi_Speaker {

	/**
	 * @return string
	 */
	abstract public function whoami();

	/**
	 * @return string
	 */
	abstract public function say();

	/**
	 * @return string
	 */
	final public function talk_message() {
		return apply_filters( 'hello_akiyoshi_talk_message', $this->say() );
	}
}
