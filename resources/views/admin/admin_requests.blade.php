<!DOCTYPE html>
<html>
<body>
  <nav>
    <a href="/">Home</a>
    <a href="/admin/services">Services</a>
    <a href="/admin/schedule">Schedule</a>
    <a href="/admin/requests">Request</a>
    <a href="/admin/appointments">Appointments</a>
  </nav>

  <header>
    <h1>Requests Table</h1>
  </header>

  <table border=1>
    <tr>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Actions</th>
    </tr>
    @foreach ($requests as $requests)
    <tr>
      <td>{{ $requests->start_time}}</td>
      <td>{{ $requests->end_time}}</td>
      <td>
        <a href="">Check</a>
        <a href="">Wrong</a>
        <a href="{{ url('/admin/requests/'. $requests->id) }}" >Settings</a>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
