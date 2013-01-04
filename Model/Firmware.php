<?php
App::uses('AppModel', 'Model');
/**
 * Firmware Model
 *
 * @property Device $Device
 * @property Variant $Variant
 */
class Firmware extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'version' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Codename' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Device' => array(
			'className' => 'Device',
			'foreignKey' => 'firmware_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Variant' => array(
			'className' => 'Variant',
			'joinTable' => 'firmwares_variants',
			'foreignKey' => 'firmware_id',
			'associationForeignKey' => 'variant_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

    public $belongsTo = array(
        'Upload' => array(
            'className' => 'Upload',
            'foreignKey' => 'upload_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    // Plugin for file upload
    public $actsAs = array('FileUpload.FileUpload');

}
