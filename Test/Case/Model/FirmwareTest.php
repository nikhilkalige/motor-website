<?php
App::uses('Firmware', 'Model');

/**
 * Firmware Test Case
 *
 */
class FirmwareTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.firmware',
		'app.device',
		'app.variant',
		'app.firmwares_variant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Firmware = ClassRegistry::init('Firmware');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Firmware);

		parent::tearDown();
	}

}
