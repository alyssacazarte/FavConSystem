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
    <h1>Appointments Table</h1>
  </header>

  <table border=1>
    <tr>
      <th>Request ID</th>
      <th>Service ID</th>
      <th>Date</th>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>Phone Number</th>
      <th>Notes</th>
    </tr>
    @foreach ($appointments as $appointments)
    <tr>
      <td>{{ $appointments->id}}</td>
      <td>{{ $appointments->request_id}}</td>
      <td>{{ $appointments->service_id}}</td>
      <td>{{ $appointments->date}}</td>
      <td>{{ $appointments->start_time}}</td>
      <td>{{ $appointments->end_time}}</td>
      <td>{{ $appointments->email}}</td>
      <td>{{ $appointments->address}}</td>
      <td>{{ $appointments->phone_number}}</td>
      <td>{{ $appointments->notes}}</td>

    </tr>
    @endforeach
  </table>
</body>
</html>
