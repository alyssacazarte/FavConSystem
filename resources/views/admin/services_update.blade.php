<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/services/update/" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Update Service</h1>
  <input type="hidden" name="id" value="{{ $data['id'] }}">
  <label for="service_type">Service Type:</label>
  <input type="text" id="type" value="{{ $data['type'] }}" name="service_type" required>
  
  <label for="service_description">Service Description:</label>
  <textarea type="text" id="description" value="" name="description" required>{{ $data['description'] }}</textarea>
  
  <label for="service_duration">Service Duration:</label>
  <input type="text" value="{{ $data['duration'] }}" id="duration" name="duration" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>