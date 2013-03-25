<?php
App::uses('Cost', 'Model');

/**
 * Cost Test Case
 *
 */
class CostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cost',
		'app.user',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cost = ClassRegistry::init('Cost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cost);

		parent::tearDown();
	}

}
