<?php

/**
 * Users Controller
 *
 * @property Dashboard $User
 */
class DashboardController extends AppController {
    var $uses = array('Cost');

    public $helpers = array('Time');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
         $rawData = $this->Cost->find('all', array('conditions' => array('Project.id' => 1),
                                                          'fields'     => array( 'date', 'billinghours', 'fixedcost', 'User.firstname', 'Project.project_name')
                                                          )
                                            );

        foreach( $rawData as $arrData) {
            // array of array of timestamp in milliseconds and billing hours
            $datax[$arrData['User']['firstname']][] =  array( strtotime($arrData['Cost']['date']) * 1000 , $arrData['Cost']['billinghours'] );
           
        }
        debug($datax); die;
          $listCostvsDateForHC = $this->_formatSerieToHighcharts($datax);
          $this->set('listCostvsDateForHC', $listCostvsDateForHC );
          $this->set('datax', $datax );
    } 
    /**
     * Format an array of array into a string of x,y pairs
     * to match the data series in HighCharts:
     * data : [ [x1,y1],[x2,y2],....]
     * 
     **/
    protected function _formatSerieToHighcharts( $datax ) {
        foreach ($datax as $pair) {
            $values[] = "[" .implode($pair, ",") . "]";
        }      
        $point = implode ($values, ",") ;
        return $point;
    }
}
