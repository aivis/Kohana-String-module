<?php defined('SYSPATH') or die('No direct script access.');

abstract class Kohana_String {

	/**
	 * @var string
	 */
	protected $string;

	/**
	 * Create new instance
	 *
	 * @param string $string
	 * @return String
	 */
	public static function i($string) {

		return new String($string);

	}

	/**
	 * Set string to $string property
	 *
	 * @param string $string
	 */
	public function __construct($string) {

		$this->string = $string;

	}

	/**
	 * @return string
	 */
	public function __toString() {

		return $this->string;

	}

	/**
	 * Make a string first letter to uppercase
	 *
	 * @return String
	 */
	public function ucfirst() {

		$this->string = ucfirst($this->string);
		return $this;

	}
	
}
