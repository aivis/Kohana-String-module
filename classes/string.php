<?php

/**
 * String class
 */
class String {
	
	/**
	 * @var string
	 */
	protected $string;

	/**
	 * Create instance
	 * 
	 * @param string $string
	 * @return object String
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
		$this->set($string);
	}

	/**
	 * Escape string
	 */
	public function xss() {
		return $this->set(htmlspecialchars($this->string));
	}

	/**
	 * Set new string
	 *
	 * @param string
	 * @return string
	 */
	protected function set($string) {
		return $this->string = $string;
	}

}
