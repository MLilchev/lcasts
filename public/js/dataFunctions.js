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