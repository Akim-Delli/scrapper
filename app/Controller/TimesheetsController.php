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
                CakeLog::write( 'info', "Processing Timesheet data for " . $objJsonTimesheet->{'employeeName'} ." IPRO ID : " . $employeeIproID, 'timesheet');
                $user = $this->User->findByIproid($employeeIproID);


                // Process each projects
                foreach ($objJsonTimesheet->{'projects'} as $arrProject) {
                    $billingCode = $arrProject->{'billingCode'};
                    if ($project = $this->Project->findByProjectBillingCode($billingCode)) {
                        CakeLog::write('info', "Project Id : " .  $project['Project']['id'] . " Project name : ". $project['Project']['project_name'], 'timesheet');

                        foreach ( $arrProject->{'time'} as $date => $hours) {
                            $date = $this->convert_date( $date);
                            CakeLog::write('info','User Id : '. $user['User']['id'] . ' |Project ID: ' . $project['Project']['id'] . ' | Date : ' . $date . '| Hours : ' . $hours, 'timesheet');
                            $CostDataToSave = array( "Cost" => array ( 'date' => $date,
                                                                       'user_id' => $user['User']['id'],
                                                                       'project_id' => $project['Project']['id'],
                                                                       'billinghours' => $hours)
                            );
                            $this->Cost->create();
                            if ($this->Cost->save( $CostDataToSave)) {
                                CakeLog::write('info',' Saved data successfullly', 'timesheet');
                            }else {
                                CakeLog::write('error',' Failure Saving Timesheet data', array('timesheet','error')); 
                            }
                        }
                    }
                }
        }
        
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
