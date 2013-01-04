<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikhil
 * Date: 1/4/13
 * Time: 5:09 PM
 * To change this template use File | Settings | File Templates.
 */

class Upload extends AppModel
{
    public $hasOne = array(
        'Firmware' => array(
            'className' => 'Firmware',
            'foreignKey' => 'upload_id',
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

}