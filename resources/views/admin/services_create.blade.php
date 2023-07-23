<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/services/create/info" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Create Service</h1>
  <label for="service_type">Service Type:</label>
  <input type="text" id="service_type" name="service_type" required>
  
  <label for="service_description">Service Description:</label>
  <textarea id="service_description" name="service_description" required></textarea>
  
  <label for="service_duration">Service Duration:</label>
  <input type="time" id="service_duration" name="service_duration" required><br>
  
  <button type="submit">Submit</button>
</form>

</body>