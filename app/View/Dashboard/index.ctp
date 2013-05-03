
<div id="content-header">
    <h1>Dashboard</h1>
</div>
<div class="container-fluid" >
    <?php
    echo $this->element('addcostform', array('usersfirstname', 'projectslist')); 

    
    $SerieId = 1;

    foreach ($finalHcliteralSeries as $serieId => $finalHcliteralSerie) {

        echo $this->element('highchartsAndFrame', array('finalHcliteralSerie' => $finalHcliteralSerie, 
                                                        'SerieId'             => $SerieId, 
                                                        'ProjectName'         => $projectslist[$SerieId],
                                                        'Projects'            => $projects,
                                                        'TotalCosts'          => $totalCosts,
                                                        'DueDate'            => $arrDueDate[$SerieId]));
        $SerieId ++;
     //debug($arrDueDate);    
    }
    ?>  
</div>
