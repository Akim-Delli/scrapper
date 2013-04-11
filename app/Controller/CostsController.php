<?php
App::uses('AppController', 'Controller');
/**
 * Costs Controller
 *
 * @property Cost $Cost
 */
class CostsController extends AppController {

//Disable the layout
  public    $layout = false;

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cost->recursive = 0;
		$this->set('costs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cost->exists($id)) {
			throw new NotFoundException(__('Invalid cost'));
		}
		$options = array('conditions' => array('Cost.' . $this->Cost->primaryKey => $id));
		$this->set('cost', $this->Cost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cost->create();
			if ($this->Cost->save($this->request->data)) {
				degug("cost saved correctly");
				//$this->flash(__('Cost saved.'));
			} else {
			}
		}
		$users = $this->Cost->User->find('list');
		$usersfirstname = $this->Cost->User->find('list', array('fields'  => 'User.firstname'));

		$projects = $this->Cost->Project->find('list');
		$projectslist = $this->Cost->Project->find('list', array('fields'  => 'Project.project_name'));
		debug($projectslist);
		$this->set(compact('users', 'usersfirstname', 'projects', 'projectslist'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cost->exists($id)) {
			throw new NotFoundException(__('Invalid cost'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cost->save($this->request->data)) {
				$this->flash(__('The cost has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$options = array('conditions' => array('Cost.' . $this->Cost->primaryKey => $id));
			$this->request->data = $this->Cost->find('first', $options);
		}
		$users = $this->Cost->User->find('list');
		$projects = $this->Cost->Project->find('list');
		$this->set(compact('users', 'projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cost->id = $id;
		if (!$this->Cost->exists()) {
			throw new NotFoundException(__('Invalid cost'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cost->delete()) {
			$this->flash(__('Cost deleted'), array('action' => 'index'));
		}
		$this->flash(__('Cost was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
