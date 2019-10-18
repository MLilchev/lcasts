function checkDateRange(from_field_id, to_field_id) {

	var start_date = new Date(document.getElementById(from_field_id).value);
	var end_date = new Date(document.getElementById(to_field_id).value);

	if (end_date < start_date) {
		// contextual display
		alert('unless you happen to be a Time Lord, which is unlikely');
	}
}

function checkDateClash(video_1_start, video_1_end, new_date) {
    var start_date = new Date(document.getElementById(video_1_start).value);
    var end_date = new Date(document.getElementById(video_1_end).value);
    var check_date = new Date(document.getElementById(new_date).value);

    if(start_date<check_date && check_date<end_date) {
        alert('Time clash');
    }
};

function dateVal (e, f) {

    var date1;
    var date2;
    var date3;
    var date4;
    var date5;
    var date6;

    if (e === 1) {
        date1 = 'v1_start';
        date2 = 'v1_end';
        date3 = 'v2_start';
        date4 = 'v2_end';
        date5 = 'v3_start';
        date6 = 'v3_end';
    } else if (e === 2) {
        date1 = 'v2_start';
        date2 = 'v2_end';
        date3 = 'v1_start';
        date4 = 'v1_end';
        date5 = 'v3_start';
        date6 = 'v3_end';
    } else if (e === 3) {
        date1 = 'v3_start';
        date2 = 'v3_end';
        date3 = 'v1_start';
        date4 = 'v1_end';
        date5 = 'v2_start';
        date6 = 'v2_end';      
    }
    checkDateRange(date1, date2);
    checkDateClash(date3, date4 , date1);
    checkDateClash(date3, date4 , date2);
    checkDateClash(date5, date6 , date1);
    checkDateClash(date5, date6 , date2);
}

var saved_value1;
var saved_value2;
var saved_value3;
var saved_value4;
var saved_value5;
var saved_value6;

function hideDateElement1 () {

	var dropdown;
	var date1;
	var date2;


    var dropdown = "#video1";
    var date1 = '#v1_start';
    var date2 = '#v1_end';


	//saved_value1 = $(date1).val();
	//saved_value2 = $(date2).val();
	//alert(dropdown);
	if ($(dropdown).val() != "Inactive") {
		if ($(date1).val()!='00 January 0000, 00:00') {
			saved_value1 = $(date1).val();
		}

		if ($(date2).val()!='00 January 0000, 00:00') {
			saved_value2 = $(date2).val();
		}
	}
	
	if ($(dropdown).val() == "Inactive") {
        saved_value1 = $(date1).val();
        saved_value2 = $(date2).val();
		$(date1).val('00 January 0000, 00:00').prop('disabled', true).prop('hidden', true);
		$(date2).val('00 January 0000, 00:00').prop('disabled', true).prop('hidden', true);
	} else { 
		$(date1).val(saved_value1).prop('disabled', false).prop('hidden', false); 
		$(date2).val(saved_value2).prop('disabled', false).prop('hidden', false);
	}
}

function hideDateElement2 () {
    
	var dropdown;
	var date1;
	var date2;


    var dropdown = "#video2";
    var date1 = '#v2_start';
    var date2 = '#v2_end';


	//saved_value1 = $(date1).val();
	//saved_value2 = $(date2).val();
	//alert(dropdown);
	if ($(dropdown).val() != "Inactive") {
		if ($(date1).val()!='00 January 0000, 00:00') {
			saved_value3 = $(date1).val();
		}

		if ($(date2).val()!='00 January 0000, 00:00') {
			saved_value4 = $(date2).val();
		}
	}
	
	if ($(dropdown).val() == "Inactive") {
        saved_value3 = $(date1).val();
        saved_value4 = $(date2).val();
		$(date1).val('00 January 0000, 00:00').prop('disabled', true).prop('hidden', true);
		$(date2).val('00 January 0000, 00:00').prop('disabled', true).prop('hidden', true);
	} else { 
		$(date1).val(saved_value3).prop('disabled', false).prop('hidden', false); 
		$(date2).val(saved_value4).prop('disabled', false).prop('hidden', false);
	}
}

function hideDateElement3 () {
    
	var dropdown;
	var date1;
	var date2;


    var dropdown = "#video3";
    var date1 = '#v3_start';
    var date2 = '#v3_end';


	//saved_value1 = $(date1).val();
	//saved_value2 = $(date2).val();
	//alert(dropdown);
	if ($(dropdown).val() != "Inactive") {
		if ($(date1).val()!='00 January 0000, 00:00') {
			saved_value5 = $(date1).val();
		}

		if ($(date2).val()!='00 January 0000, 00:00') {
			saved_value6 = $(date2).val();
		}
	}
	
	if ($(dropdown).val() == "Inactive") {
        saved_value5 = $(date1).val();
        saved_value6 = $(date2).val();
		$(date1).val('00 January 0000, 00:00').prop('disabled', true).prop('hidden', true);
		$(date2).val('00 January 0000, 00:00').prop('disabled', true).prop('hidden', true);
	} else { 
		$(date1).val(saved_value5).prop('disabled', false).prop('hidden', false); 
		$(date2).val(saved_value6).prop('disabled', false).prop('hidden', false);
	}
}