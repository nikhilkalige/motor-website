<?php
/**
 * DeviceFixture
 *
 */
class DeviceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'bootloader_version' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'device_no' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'file_link' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'variant_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'firmware_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'device_no' => array('column' => 'device_no', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'bootloader_version' => 1,
			'device_no' => 1,
			'created' => '2013-01-03 10:01:39',
			'modified' => '2013-01-03 10:01:39',
			'file_link' => 'Lorem ipsum dolor sit amet',
			'variant_id' => 1,
			'firmware_id' => 1
		),
	);

}
