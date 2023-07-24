<style>
  form {
    display:flex;
    flex-direction: column;
    width: 500px;
  }
</style>
<body>
<form action="/admin/schedule/create/info" method="POST">
  @csrf <!-- Include this line if using Laravel's CSRF protection -->
  <h1>Create Schedule</h1>
  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required>
  
  <select id="select" name="status">
    <option value="Approved">Approved</option>
    <option value="Rejected">Rejected</option>
  </select><br>
  
  <button type="submit">Submit</button>
</form>

</body>