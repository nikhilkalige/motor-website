<?php
App::uses('Variant', 'Model');

/**
 * Variant Test Case
 *
 */
class VariantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.variant',
		'app.device',
		'app.firmware',
		'app.firmwares_variant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Variant = ClassRegistry::init('Variant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Variant);

		parent::tearDown();
	}

}
