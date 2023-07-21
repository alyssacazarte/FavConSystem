<html>
<head>
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
</head>
<h1>Schedule Page</h1>

<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
<table>
    <tr>
        <th class="text-center">Date</th>
        <th class="text-center">Start Time</th>
        <th class="text-center">End Time</th>
        <th class="text-center">Action</th>
</tr>
@foreach ($schedules as $schedule)
        <tr id="{{$schedule->id}}"> 
            <td class="text-center">{{$schedule->date}}</td>
            <td class="text-center">{{$schedule->start_time}}</td>
            <td class="text-center">{{$schedule->end_time}}</td>
            <td class="text-center"> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#updateModal" data-date="{{ $schedule->date }}" data-start-time="{{ $schedule->start_time }}" data-end-time="{{ $schedule->end_time }}">
                    Update
          </button> </td>
        </tr>
        @endforeach
    </table>
<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create New Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Schedule Form -->
                <form id="scheduleForm">
                    @csrf
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date">

                    <label for="start_time">Start Time:</label>
                    <input type="time" name="start_time" id="start_time">

                    <label for="end_time">End Time:</label>
                    <input type="time" name="end_time" id="end_time">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitBtn">Create</button>
            </div>
        </div>
    </div>
</div>
<!-- Update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="updateModalLabel">Update Schedule</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<!-- Update Form -->
<form id="updatescheduleForm">
 @csrf
<input type="hidden" name="schedule_id" id="schedule_id">
<label for="date">Date:</label>
<input type="date" name="date" id="date">

<label for="start_time">Start Time:</label>
<input type="time" name="start_time" id="start_time">

<label for="end_time">End Time:</label>
<input type="time" name="end_time" id="end_time">
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary" id="updateBtn">Update</button>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        // Existing code for the create modal
        $("#submitBtn").click(function() {
            // Retrieve the form data
            var formData = $("#scheduleForm").serialize();
            $.ajax({
                url: "{{ route('schedule.create') }}",
                method: "POST",
                data: formData,
                success: function(response) {
                    console.log(response);
                    $("#createModal").modal('hide');
                    window.location.href = "{{ route('schedule.thankyou') }}";
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });

        // Automatically calculate the end time 45 minutes after the start time for the create modal
        $('#createModal #start_time').on('input', function() {
            var startTime = $(this).val();
            var endTime = addMinutesToTime(startTime, 45);
            $('#createModal #end_time').val(endTime);
        });

        // Automatically calculate the end time 45 minutes after the start time for the update modal
        $('#updateModal #start_time').on('input', function() {
            var startTime = $(this).val();
            var endTime = addMinutesToTime(startTime, 45);
            $('#updateModal #end_time').val(endTime);
        });

        // Rest of your script for the update modal
        $('#updateModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var date = button.data('date');
            var start_time = button.data('start-time');
            var end_time = button.data('end-time');
            var schedule_id = button.closest('tr').attr('id');
           
            var modal = $(this);
            modal.find('#date').val(date);
            modal.find('#start_time').val(start_time);
            modal.find('#end_time').val(end_time);
            modal.find('#schedule_id').val(schedule_id);
        });

        // Rest of your script for handling the update form submission
        $("#updateBtn").click(function() {
            var formData = $("#updatescheduleForm").serialize();
            var schedule_id = $("#schedule_id").val();
           
            $.ajax({
                url: "/schedule/update/" + schedule_id,
                method: "POST",
                data: formData,
                success: function(response) {
                    console.log(response);
                    $("#updateModal").modal('hide');
                    window.location.href = "{{ route('schedule.notification') }}";
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });

    // Function to add minutes to a given time (HH:mm format)
    function addMinutesToTime(time, minutes) {
        var timeArray = time.split(':');
        var hours = parseInt(timeArray[0]);
        var mins = parseInt(timeArray[1]);

        var totalMinutes = hours * 60 + mins + minutes;
        var newHours = Math.floor(totalMinutes / 60);
        var newMinutes = totalMinutes % 60;

        return ('0' + newHours).slice(-2) + ':' + ('0' + newMinutes).slice(-2);
    }
</script>

