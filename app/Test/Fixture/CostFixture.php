<?php
/**
 * CostFixture
 *
 */
class CostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'week' => array('type' => 'integer', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'billinghours' => array('type' => 'integer', 'null' => false, 'default' => null),
		'fixedcost' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'week' => 1,
			'user_id' => 1,
			'project_id' => 1,
			'billinghours' => 1,
			'fixedcost' => 1
		),
	);

}
