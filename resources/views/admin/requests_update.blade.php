<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/requests/" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Request Edit</h1>
  <input type="hidden" name="id" value="{{ $data['id'] }}">

  <label for="start_time">Start Time:</label>
  <input type="time"  value="{{ $data['start_time'] }}" id="start_time" name="start_time" required>
  
  <label for="end_time">End Time:</label>
  <input type="time"  value="{{ $data['end_time'] }}" id="end_time" name="end_time" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>