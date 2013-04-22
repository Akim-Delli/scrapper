<div id="content-header">
    <h1>Calendar</h1>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="widget-box widget-calendar">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-calendar"></i>
                </span>
                <h5>Calendar</h5>
            </div>
            <div class="widget-content nopadding">
                <div id='calendar'></div>
            </div>
        </div>        
    </div>
</div>
<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        editable: true, 
    })

});
</script>