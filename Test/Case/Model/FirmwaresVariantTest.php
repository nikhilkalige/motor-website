<?php
App::uses('FirmwaresVariant', 'Model');

/**
 * FirmwaresVariant Test Case
 *
 */
class FirmwaresVariantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.firmwares_variant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FirmwaresVariant = ClassRegistry::init('FirmwaresVariant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FirmwaresVariant);

		parent::tearDown();
	}

}
