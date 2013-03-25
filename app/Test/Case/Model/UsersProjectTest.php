<?php
App::uses('UsersProject', 'Model');

/**
 * UsersProject Test Case
 *
 */
class UsersProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_project',
		'app.user',
		'app.cost',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersProject = ClassRegistry::init('UsersProject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersProject);

		parent::tearDown();
	}

}
