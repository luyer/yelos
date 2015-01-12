<?php
App::uses('Slid', 'Model');

/**
 * Slid Test Case
 *
 */
class SlidTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.slid'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Slid = ClassRegistry::init('Slid');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Slid);

		parent::tearDown();
	}

}
