
<div id="content-header">
    <h1>Dashboard</h1>
</div>
<div class="container-fluid" >
    <?php
    echo $this->element('addcostform', array('usersfirstname', 'projectslist')); 

    
    
    foreach ($finalHcliteralSeries as $serieId => $finalHcliteralSerie) {

        echo $this->element('highchartsAndFrame', array('finalHcliteralSerie' => $finalHcliteralSerie, 
                                                        'SerieId'             => $serieId, 
                                                        'ProjectName'         => $projectslist[$serieId],
                                                        'Projects'            => $projects,
                                                        'TotalCosts'          => $totalCosts,
                                                        'DueDate'            => $arrDueDate[$serieId]));   
    }
    
    ?>  
</div>
