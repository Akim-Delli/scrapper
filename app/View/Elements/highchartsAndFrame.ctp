<div class="container-fluid" >
    <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-signal"></i>
                        </span>
                        <h5>Project : <?php echo $ProjectName; ?></h5>
                        <div class="buttons">
                            <a class="btn btn-mini" href="#">
                                <i class="icon-refresh"></i>
                                Update
                            </a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="row-fluid">
                            <div class="span4">
                                <ul class="site-stats">
                                    <li>
                                        <i class="icon-tag"></i>
                                        <?php echo $this->Number->currency($totalCosts[$SerieId -1 ], 'USD', array('places'  => 0)); ?>
                                        <small>Outstanding Cost</small>
                                    </li>
                                    
                                    <li>
                                    <i class="icon-screenshot"></i>
                                        <?php echo $this->Number->currency($Projects[$SerieId -1 ]['Project']['project_budget'], 'USD' , array('places'  => 0)); ?>
                                        <small>Budget</small>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <i class="icon-user"></i>
                                        <?php echo $Projects[$SerieId -1 ]['Project']['project_client']; ?>
                                        <small>Client</small>
                                    </li>
                                    <li>
                                        <i class="icon-barcode"></i>
                                        <?php echo $Projects[$SerieId -1 ]['Project']['project_billing_code']; ?>
                                        <small>Billing Code</small>
                                    </li>
                                    <li>
                                        <i class="icon-calendar"></i>
                                        <?php echo CakeTime::format('F jS, Y', mktime()); ?>
                                        <small>Last Update</small>
                                    </li>
                                </ul>
                            </div>
                            <div class="span8">
                                <div class="widget-content chart" id="container-charts-<?php echo $SerieId ?>" style="padding: 0px; position: relative; width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $(function () { 
        // Highcharts Global Options
        Highcharts.setOptions({
            chart: {
                renderTo: 'container-charts-<?php echo $SerieId ?>',
                borderWidth: 1,
                borderColor: '#383951',
            },
            plotOptions: {
                series: {
                    marker: {
                        fillColor: 'none',
                        lineColor: null
                    }
                }
           },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: {
                    month: '%e. %b',
                }
            },
            yAxis: {
                title: {
                    text: 'Dollar Amount'
                },
                min: 0
            },
            credits: { 
                enabled: true,
                href: 'http://www.ipro.org',
                text: 'IPRO',
            },
        });

        $('#container-charts-<?php echo $SerieId ?>').highcharts({
            
            title: {
                text: '<?php echo $ProjectName; ?>' 
            },
 

            series: [
                    <?php echo $finalHcliteralSerie; ?>  
            ]
        });
    });
});
</script>