<?php
App::uses('AppController', 'Controller');
/**
 * Costs Controller
 *
 * @property Cost $Cost
 */
class TimesheetsController extends AppController {

//Disable the layout
  //public    $layout = false;

/**
 * index method
 *
 * @return void
 */
    public function index() {
        echo "index";
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
    public function collect() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
                        
                $this->log($this->request->input('json_decode')); 
               
            
        }
        
    }



}
