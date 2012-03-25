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
	 * Set string
	 *
	 * @param string $string
	 */
	public function __construct($string) {

		$this->set($string);

	}

	/**
	 * @return string
	 */
	public function __toString() {

		return $this->get();

	}

	/**
	 * Set string to $string property
	 *
	 * @param string $string
	 * @return String
	 */
	public function set($string) {

		$this->string = $string;
		return $this;

	}

	/**
	 * Return object string
	 *
	 * @return string
	 */
	public function get() {

		return $this->string;

	}

	/**
	 * Make a string first letter to uppercase
	 *
	 * @return String
	 */
	public function ucfirst() {

		return $this->set(ucfirst($this->string));

	}

	/**
	 * Escape string
	 *
	 * @return String
	 */
	public function escape() {

		return $this->set(htmlspecialchars($this->string));

	}

	/**
	 * Translate string with Kohana i18n class
	 *
	 * @return String
	 */
	public function i18n($lang = null) {

		return $this->set(I18n::get($this->string, $lang));

	}

	/**
	 * Create html <a> tag where title is current string
	 *
	 * @param string $url
	 * @param array $attributes 
	 * @return String
	 */
	public function to_anchor($url, array $attributes = null) {

		return $this->set(Html::anchor($url, $this->string, $attributes));

	}

	/**
	 * Create html for input where 'value' is current string
	 *
	 * @param string $name
	 * @param string $type
	 * @param string $attributes
	 * @return String
	 */
	public function to_input($name, $type = 'text', $attributes = array()) {

		$attributes['type'] = $type;
		return $this->set(Form::input($name, $this->string, $attributes)); 	

	}
}
