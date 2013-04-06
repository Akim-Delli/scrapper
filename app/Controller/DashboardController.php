<?php

/**
 * Users Controller
 *
 * @property Dashboard $User
 */
class DashboardController extends AppController {
    var $uses = array('Cost', 'Project');

    public $helpers = array('Time');

    /**
     * index method
     *
     * @return void
     */
    public function index() {

        if ($this->request->is('post')) {
            $this->Cost->create();
            if ($this->Cost->save($this->request->data)) {
                $this->Session->setFlash(__('Cost saved.'));
            } else {
            }
        }

        $projectsListId = $this->Project->find('list', array('fields'     => 'id'));

        foreach ( $projectsListId as $projectId) {
             $rawData = $this->Cost->find('all', array('conditions' => array('Project.id' => $projectId),
                                                              'fields'     => array( 'date', 'billinghours', 'fixedcost', 'User.firstname', 'Project.project_name'),
                                                              'order' => 'date ASC',
                                                              )
                                                );

             //debug( $rawData); 
             $arrBillingHoursUsers = array();
            foreach( $rawData as $arrData) {
                // array of array of timestamp in milliseconds and billing hours
                $arrBillingHoursUsers[$arrData['User']['firstname']][] =  array( strtotime($arrData['Cost']['date']) * 1000 , $arrData['Cost']['billinghours'] );
               
            }
            
            $finalHcliteralSeries[] = $this->_formatSerieToHighcharts($arrBillingHoursUsers);
            
        }
            $this->set('finalHcliteralSeries', $finalHcliteralSeries );

            $users = $this->Cost->User->find('list');
            $usersfirstname = $this->Cost->User->find('list', array('fields'  => 'User.firstname'));

            $projects = $this->Cost->Project->find('list');
            $projectslist = $this->Cost->Project->find('list', array('fields'  => 'Project.project_name'));
            $this->set(compact('users', 'usersfirstname', 'projects', 'projectslist'));
    } 
    /**
     * Format an array of array into a string of x,y pairs
     * to match the data series format in HighCharts:
     * { name : 'John' , data:  [ [x1,y1],[x2,y2],....] }
     * 
     **/
    protected function _formatSerieToHighcharts( $arrBillingHoursUsers ) { 
        
        if ( !empty( $arrBillingHoursUsers)) {

            $finalHcliteralSeries = "" ;
            $hcSeries = "";
            foreach ($arrBillingHoursUsers as $User => $arrBillingHours) {
                // Timestamp : 1357020060000 = January 1st, 2013
                $hcSeries = "{ name: '" . $User . "' , data : [[1357020060000,0],";
                $dateVsHours = "";
                $billingHoursCumulative = 0;
                foreach ($arrBillingHours as $arrBillingHour) {
                    $billingHoursCumulative = $billingHoursCumulative + $arrBillingHour[1];
                    $dateVsHours .= "[" .$arrBillingHour[0].",".$billingHoursCumulative . "],";
                }
                $dateVsHours = rtrim( $dateVsHours, ',');
                $hcSeries .= $dateVsHours . "]} ,";
                $finalHcliteralSeries .= $hcSeries ;
            }
            $finalHcliteralSeries = rtrim( $finalHcliteralSeries, ",");      
        } else {
            $finalHcliteralSeries = "{ name : 'no User', data : [[1357020060000,0]]}";  
        }
        return $finalHcliteralSeries;
    }
}
