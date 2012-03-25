<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');

class Kohana_StringTest extends PHPUnit_Framework_TestCase {

	/**
	 * String for tests
	 *
	 * @var string
	 */
	protected $string = 'string for tests';

	/**
	 * Test ucfirst method
	 */
	public function test_ucfirst() {

		$this->assertEquals(ucfirst($this->string), String::i($this->string)->ucfirst());

	}

	/**
	 * Test i18n method
	 */
	public function test_i18n() {

		$this->assertEquals(I18n::get('test.test'), String::i('test.test'));

	}

}
