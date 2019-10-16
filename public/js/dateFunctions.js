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

