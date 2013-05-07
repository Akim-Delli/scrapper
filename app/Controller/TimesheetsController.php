<?php
App::uses('AppController', 'Controller', 'CakeTime');
/**
 * Costs Controller
 *
 * @property Cost $Cost
 */
class TimesheetsController extends AppController {

    var $uses = array('Cost', 'Project', 'User');

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
 * get and process the JSON Object from the Request sent by the Chrome extension
 * The format of the JSON Object is as follow:
 * 
 *
 * @return void
 */
    public function collect() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
                // get the Json object from the request        
                $objJsonTimesheet = $this->request->input('json_decode');
                $employeeName = $objJsonTimesheet->{'employeeName'};
                $employeeIproID = $this->extract_ipro_id ( $employeeName);
                CakeLog::write( 'info', "Processing Timesheet data for " . $this->extract_employee_name($objJsonTimesheet->{'employeeName'}) ." IPRO ID : " . $employeeIproID, 'timesheet');
                if (!$user = $this->User->findByIproid($employeeIproID)) {
                    CakeLog::write('warning','team Member : ' . $employeeName .' is not in the system!', array('timesheet','warning'));
                }


                // Process each projects
                foreach ($objJsonTimesheet->{'projects'} as $arrProject) {
                    $billingCode = $arrProject->{'billingCode'};
                    if ($project = $this->Project->findByProjectBillingCode($billingCode)) {
                        CakeLog::write('info', "Project Id : " .  $project['Project']['id'] . " | Project name : ". $project['Project']['project_name'], 'timesheet');

                        foreach ( $arrProject->{'time'} as $date => $hours) {
                            $date = $this->convert_date( $date);
                            
                            $CostDataToSave = array( "Cost" => array ( 'date' => $date,
                                                                       'user_id' => $user['User']['id'],
                                                                       'project_id' => $project['Project']['id'],
                                                                       'billinghours' => $hours)
                            );
                            $CostDataAlreadyPresentCheck = array(     'date' => $date,
                                                                       'user_id' => $user['User']['id'],
                                                                       'project_id' => $project['Project']['id'],
                            );
                            //Check if the Data to save is not already in the DB based on User id, Date and project Id.
                            if (! ($this->Cost->hasAny($CostDataAlreadyPresentCheck))){
                                $this->Cost->create();
                                if ($this->Cost->save( $CostDataToSave)) {
                                    CakeLog::write('info', 'Employee: '. $employeeName. ' | Project name : ' . $project['Project']['project_name'] . ' | Date : ' . $date . '| Hours : ' . $hours, 'timesheet');
                                }else {
                                    CakeLog::write('error',' Failure Saving Timesheet data', array('timesheet','error')); 
                                }
                            }else {
                                CakeLog::write('warning', 'Employee: '. $this->extract_employee_name($employeeName) . ' | Project name : ' . $project['Project']['project_name'] . ' | Date : ' . $date . ' already exists in the database', array('timesheet','warning'));   
                            }
                        }
                    }else {
                        CakeLog::write('warning','Billing  code : ' . $billingCode .' is not in the system!', array('timesheet','warning'));
                    }
                }
        }
         CakeLog::write( 'info', "################################################################", 'timesheet');
    }

/**
 * Extract the IPRO Id Number from a string 
 * Input String format exzample "Delli, Akim  (015087)"
 * @param string
 * @return int
 */

protected function extract_ipro_id ( $employeeNameAndIproID = null) {
    if ( $employeeNameAndIproID) {
        preg_match('/\((\d+)\)/', $employeeNameAndIproID, $arrMatches);
        if (! empty($arrMatches)){
            return (int) $arrMatches[1];
        }
    }
    return false;
}

/**
 * Extract the IPRO Id Number from a string 
 * Input String format exzample "Delli, Akim  (015087)"
 * @param string
 * @return int
 */

protected function extract_employee_name ( $employeeNameAndIproID = null) {
    if ( $employeeNameAndIproID) {
            return preg_replace('/(.*?\(\d+\)).*?$/', '${1}', $employeeNameAndIproID);
        }
    return false;
}

/**
 * Convert Date from Thu4/16 to 2013-04-16
 * @param string
 * @return string
 */

protected function convert_date ( $date = null) {
    App::uses('CakeTime', 'Utility');
    if ($date) {
        $date = preg_replace('/^\w{3}/', '', $date);
        $date = new DateTime($date."/2013");
        return CakeTime::format('Y-m-d', $date);
    }
}

}
