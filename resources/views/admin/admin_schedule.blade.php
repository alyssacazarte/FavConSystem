<style>
    table{
        width: 500px;
    }
</style>
<body>
  <nav>
    <a href="/">Home</a>
    <a href="/admin/services">Services</a>
    <a href="/admin/schedule">Schedule</a>
    <a href="/admin/requests">Request</a>
    <a href="/admin/appointments">Appointments</a>
  </nav>

  <header>
    <h1>Schedule Table</h1>
  </header>
  <a href="/admin/schedule/create" >Create</a>
  <table border=1>
    <tr>
      <th>Date</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
    @foreach ($schedules as $schedules)
    <tr>
      <td>{{ $schedules->date}}</td>
      <td>{{ $schedules->status}}</td>
      <td>
        <a href=" {{ url('/admin/schedule/update/'. $schedules->id) }}" >Update</a>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
