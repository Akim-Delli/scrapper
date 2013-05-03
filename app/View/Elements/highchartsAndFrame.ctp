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
                        
                            
                            
                                <div class="widget-content chart" id="container-charts-<?php echo $SerieId ?>" style="padding: 0px; position: relative; width:100%; height:400px;"></div>
                            
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
                //backgroundColor: 'rgba(255, 0, 0, 0.3)',

                
            },
            plotOptions: {
                series: {
                    marker: {
                        fillColor: 'none',
                        lineColor: null,
                        enabled: false,
                    },
                dataLabels :  {

                }

                }
           },
           
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: {
                    month: '%e. %b',
                },
                plotBands : [{
                    //if a due date is set then timestamp it in ms, otherwise from 1767160800000 to 1767160800000
                    from : <?php echo ((strtotime($DueDate))? strtotime($DueDate) * 1000 : 1767160800000) ?>,
                    to : 1767160800000,
                    color : 'rgba(68, 170, 213, 0.2)',
                    label : {
                        text : 'Project Overdue'
                    }
                }]
            },
            yAxis: {
                title: {
                    text: '$'
                },
                min: 0,
                
            },
            credits: { 
                enabled: true,
                href: 'http://www.ipro.org',
                text: 'IPRO',
            },

        });

        var charts = $('#container-charts-<?php echo $SerieId ?>').highcharts({
            title: {
                text: '<?php echo $ProjectName; ?>' + 'Project Cost'
            },
 

            series: [
                    <?php echo $finalHcliteralSerie; ?>  
            ],
           
        });
 //Highcharts.setOptions({ chart:{ backgroundColor : 'rgba(255, 0, 0, 0.3)'}});
 console.log(Highcharts.charts[0].series[1].data.length);
 console.log(Highcharts.charts[0]);
 Highcharts.charts[0].options.loading.style = {
    position: 'absolute',
    backgroundColor: 'rgba(255, 0, 0, 1)',
    opacity: 0.3,
    textAlign: 'center',
    color : 'blue',
};
Highcharts.charts[0].options.loading.labelStyle = {
    top : '50%',
    color: 'white',
    'font-size': '50pt',
};
 console.log(Highcharts.charts[0].showLoading('Project out of Budget'));
  console.log(Highcharts.charts[0].backgroundColor = 'Project out of Budget');
  //alert ('Project out of Budget');

$('#highcharts-0').mouseover(function() {
   Highcharts.charts[0].hideLoading();
});

    });
});

</script>