@extends('layout')

@section('title')

    Projects

@endsection

@section('page_title', 'Laravel')

    
@section('content')
<script type="text/javascript" src="resources\js\dataFunctions.js"></script>

<form method="POST" action="/projects">

    {{csrf_field()}}
    <div class="field">
        <label class="label" for="title">Project Title</label>
        <div class="control">
            <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Project title" value="{{ old('title') }}">
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">Project Description</label>
        <div class="control">
            <textarea name="description" class="input {{$errors->has('title') ? 'is-danger' : ''}}" placeholder="Project description" value="{{ old('description') }}"></textarea>
        </div>

    <div>
        <button type="submit">Create Project</button>
    </div>

    <select id="select-box">
        <option value="1" selected>Yes</option>
        <option value="2">No</option>
        <option value="3">Clear</option>
    </select>
    <div>
        <label calss="label" for="date">Date</label>
        <div class="control">
            <input type="text" id="start-date" size="11" maxlength="10" onblur="" onchange="">
        </div>
    </div>
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
<div>
<h9>Video 1</h9>
<select name="video1" onchange=max(1) id="video1" title="">
    <option label="Inactive" value="Inactive">Inactive</option>
    <option label="In Progress" value="In_Progress">In Progress</option>
    <option label="Future_Project" value="Future_Project">Future_Project</option>
    <option label="Cancelled" value="Cancelled">Cancelled</option>
    <option label="Completed" value="Completed" selected="selected">Completed</option>
</select>
</div>
<div>
<label class="v1-label">Start time</label>
<input autocomplete="off" type="text" id="v1_start" value="09/20/2014 06:15 pm" >
</div>
<div>
<label class="v1-label">End time</label>

<input autocomplete="off" type="text" id="v1_end" value="09/20/2014 06:15 pm" >
</div>
<br>
<div>
<h9>Video 2</h9>
<select name="video2" onchange=max(2) id="video2" title="">
    <option label="Inactive" value="Inactive">Inactive</option>
    <option label="In Progress" value="In_Progress">In Progress</option>
    <option label="Future_Project" value="Future_Project">Future_Project</option>
    <option label="Cancelled" value="Cancelled">Cancelled</option>
    <option label="Completed" value="Completed" selected="selected">Completed</option>
</select>
</div>
<div>
<label>Start time</label>
<input autocomplete="off" type="text" id="v2_start" value="09/20/2014 06:15 pm">
</div>
<div>
<label>End time</label>
<input autocomplete="off" type="text" id="v2_end" value="09/20/2014 06:15 pm">
</div>
<br>
<div>
<h9>Video 3</h9>
<select name="video3" id="video3" title="">
    <option label="Inactive" value="Inactive">Inactive</option>
    <option label="In Progress" value="In_Progress">In Progress</option>
    <option label="Future_Project" value="Future_Project">Future_Project</option>
    <option label="Cancelled" value="Cancelled">Cancelled</option>
    <option label="Completed" value="Completed" selected="selected">Completed</option>
</select>
<div>
<label>Start time</label>
<input autocomplete="off" type="text" id="v3_start" value="09/20/2014 06:15 pm" >
</div>
<div>
<label>End time</label>
<input autocomplete="off" type="text" id="v3_end" value="09/20/2014 06:15 pm" >
</div>
<script>
var date1 = $('#v1_start').val();
var date2 = $('#v1_end').val();
var dateObject1 = new Date(date1);
var dateObject2 = new Date(date2);
//alert(JSON.stringify(dateObject1, null, 4));
alert(dateObject2.getTime());

$("#video1").on("change", function () {
	if($('#v1_start').val()!="00/00/0000 00:00") {
    date1 = $('#v1_start').val();
    date2 = $('#v1_end').val();
  }
   if ($(this).val() == "Inactive") {
     $('#v1_start').val('00/00/0000 00:00').prop('disabled', true).prop('hidden', true);
     $('#v1_end').val('00/00/0000 00:00').prop('disabled', true).prop('hidden', true);
     $('.v1-label').prop('hidden', true);
   } else { 
        $('#v1_start').val(date1).prop('disabled', false).prop('hidden', false); 
        $('#v1_end').val(date2).prop('disabled', false).prop('hidden', false); 
        $('.v1-label').prop('hidden', false);
}
})

//$('#v1_start').on("change", function () {
	//alert('change');
  //});

 function max (e) {

    var com = e;
    if (e === 1){
        
    }
    alert('change');
    checkDateRange('v1_start', 'v1_end');
    checkDateClash('v2_start', 'v2_end', 'v1_start')
  var date1 = $('#v1_start').val();
  var date2 = $('#v1_end').val();
	var dateObject1 = new Date(date1);
  var dateObject2 = new Date(date2);
  alert(JSON.stringify(dateObject1, null, 4));
	if (dateObject1.getTime()<dateObject2.getTime()) {
  	alert('error');
  }
})


$("#status2").on("change", function () {
	if($('#date_completed_date2').val()!="00/00/0000 00:00")
  {date2 = $('#date_completed_date2').val();}
    if ($(this).val() == "Inactive") {
   $('#date_completed_date2').val('00/00/0000 00:00').prop('disabled', true).prop('hidden', true);
   } else { 
        $('#date_completed_date2').val(date2).prop('disabled', false).prop('hidden', false); 
    }
})


</script>
@endsection