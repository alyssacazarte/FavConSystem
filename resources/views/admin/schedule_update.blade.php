<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/schedule/update" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Update Schedule</h1>
  <input type="hidden" name="id" value="{{ $data['id'] }}">
  
  <label for="date">Date:</label>
  <input type="date" value="{{ $data['date'] }}" id="date" name="date" required>
  
  <select id="select" name="status">
    <option value="Approved">Approved</option>
    <option value="Rejected">Rejected</option>
  </select>
  
  <button type="submit">Submit</button>
</form>

</body>