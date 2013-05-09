

function extract_element ( element) {
	return jQuery(element , frames['unitFrame'].document).text();
}

			// akimdelli.net test
            // var employeeName = jQuery("h5").html();
            // console.log (employeeName);
            // alert(employeeName);
// Create a new timesheetObject
// timesheet Object structure :
// properties : { employeeName : "string" ,
//				  periodending :"string" ,
//                projects : "array[ Objects]"   -> Object { billingcode : "strings" , chargedescrition : "string" ,  date : hours}
var timesheet = new Object();


// extract status
 timesheet.Status = extract_element('div#statusCodeSpan.val').trim();

 // extract employee name
 timesheet.employeeName = extract_element('html #headerTable #emplName').trim();

 //extract Bi-weekly Period Ending
 timesheet.periodending = extract_element("div#endingDateSpan.val").trim();

//extract Billing Code
// timesheet.billingCode = extract_element("div#udt0_2.u");

// extract the list of Charge description
var i = 0 ;
var projects = [];
// loop through all the charge description and stop at 50 in case of very long list
while( (billingCode = extract_element('div#udt' + i + '_2.u')) && i < 50) {
	project = new Object();
	project.billingCode = billingCode;
	project.chargeDescription = extract_element('div#udt' + i + '_0.u');

	// loop through the timesheet table for the 14 days biweekly period
	var time = {};
	for (var j = 0; j < 13 ; j++) {
		var date = extract_element('div#hrsHeaderText' + j + '.hrsHeaderText');
		if (hours = extract_element('div#hrs' + i + '_' + j + '.d' )) {
			time[date] = hours;
		}
	};
    project.time = time;
	projects.push(project);
	i++;
}
timesheet.projects = projects;
console.log( timesheet);

$.ajax({
  type: "POST",
  url: 'http://akimdelli.net/timesheets/collect',
  data: JSON.stringify(timesheet),
  dataType: 'json',
});
console.log(timesheet.employeeName  + "Timesheet Data sent to eServices Projects Tool");
alert(timesheet.employeeName + " Timesheet Data sent to eServices Projects Tool");
