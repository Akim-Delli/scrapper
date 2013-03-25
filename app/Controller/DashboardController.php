<?php

/**
 * Users Controller
 *
 * @property Dashboard $User
 */
class DashboardController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $data = array(2,3,4);
        
        $this->set('data', $data);
    }
}