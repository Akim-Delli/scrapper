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
            $arrBillingHoursUsers[$arrData['User']['firstname']][] =  array( strtotime($arrData['Cost']['date']) * 1000 , $arrData['Cost']['billinghours'] );
           
        }
        
          $finalHcliteralSeries = $this->_formatSerieToHighcharts($arrBillingHoursUsers);
          $this->set('finalHcliteralSeries', $finalHcliteralSeries );
          $this->set('datax', $arrBillingHoursUsers );
          debug( $finalHcliteralSeries); 
    } 
    /**
     * Format an array of array into a string of x,y pairs
     * to match the data series format in HighCharts:
     * { name : 'John' , data:  [ [x1,y1],[x2,y2],....] }
     * 
     **/
    protected function _formatSerieToHighcharts( $arrBillingHoursUsers ) { 
        $hcSeries = "";
        if ( !empty( $arrBillingHoursUsers)) {

            $finalHcliteralSeries = "" ;
            foreach ($arrBillingHoursUsers as $User => $arrBillingHours) {

                $hcSeries = "{ name: '" . $User . "' , data : [";
                $dateVsHours = "";
                foreach ($arrBillingHours as $arrBillingHour) {
                    $dateVsHours .= "[" .implode($arrBillingHour, ",") . "],";
                }
                $dateVsHours = rtrim( $dateVsHours, ',');
                $hcSeries .= $dateVsHours . "]} ,";
                $finalHcliteralSeries .= $hcSeries ;
            }
            $finalHcliteralSeries = rtrim( $finalHcliteralSeries, ",");      
        }
        return $finalHcliteralSeries;
    }
}
