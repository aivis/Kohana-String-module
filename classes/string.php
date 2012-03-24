<?php

/**
 * String class
 */
class String {
	
	/**
	 * Holds input string
	 *
	 * @var string
	 */
	protected $string;

	/**
	 * Factory for chaining
	 * 
	 * @param string $string
	 * @return String
	 */
	public static function i($string) {
		return new String($string);
	}

	/**
	 * Set string
	 *
	 * @param string $string
	 */
	public function __construct($string) {
		$this->string = $string;
	}
}
