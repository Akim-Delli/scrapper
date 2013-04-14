<?php //echo $this->Html->script('http://code.highcharts.com/highcharts.js'); ?>
<?php //echo $this->Html->script('http://code.highcharts.com/modules/exporting.js'); ?>

<?php //echo $this->Html->script('charts/eservices-highcharts'); ?>
<?php //debug( $finalHcliteralSeries)?>

<div id="content-header">
    <h1>Dashboard</h1>
</div>
<div class="container-fluid" >
    <?php
    echo $this->element('addcostform', array('usersfirstname', 'projectslist')); 
    echo $this->Session->flash();
    
    $SerieId = 1;
    foreach ($finalHcliteralSeries as $finalHcliteralSerie) {
        //debug($finalHcliteralSerie);
        echo $this->element('highchartsAndFrame', array('finalHcliteralSerie' => $finalHcliteralSerie, 
                                                        'SerieId'             => $SerieId, 
                                                        'ProjectName'         => $projectslist[$SerieId],
                                                        'Projects'            => $projects,
                                                        'TotalCosts'          =>  $totalCosts));
        $SerieId ++;
    }
    ?>  
</div>
