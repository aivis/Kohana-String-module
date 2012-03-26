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
	
	/**
	 * Test anchor method
	 */
	public function test_anchor() {

		$uri = '/test/west/';
		$attributes = array('class' => 'test');

		$this->assertEquals(
			Html::anchor($uri, $this->string, $attributes), 
			String::i($this->string)->to_anchor($uri, $attributes)
		);

	}

	/**
	 * Test form input method
	 */
	public function test_to_input() {

		$name = 'test';
		$attributes = array('class' => 'login');

		$this->assertEquals(
			Form::hidden($name, $this->string, $attributes),
			String::i($this->string)->to_input($name, 'hidden', $attributes)
		);

	}

	/**
	 * Test limit method
	 */
	public function test_limit() {

		$expected_string = 'tes...';

		$this->assertEquals($expected_string, String::i('test')->limit(3));

	}

}
