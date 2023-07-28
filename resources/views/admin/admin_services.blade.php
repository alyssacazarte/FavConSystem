<body>
  <nav>
    <a href="/admin">Home</a>
    <a href="/admin/services">Services</a>
    <a href="/admin/schedule">Schedule</a>
    <a href="/admin/requests">Request</a>
    <a href="/admin/appointments">Appointments</a>
  </nav>

  <header>
    <h1>Services Table</h1>
  </header>
  <a href="/admin/services/create">Create</a>
  <table border = "1">
    <tr>
      <th>Services Type</th>
      <th>Service Description</th>
      <th>Service Duration</th>
      <th>Actions</th>
    </tr>
    @foreach ($services as $services)
    <tr>
      <td>{{ $services->type}}</td>
      <td>{{ $services->description}}</td>
      <td>{{ $services->duration}}</td>
      <td>
        <a href="{{ url('/admin/services/update/'. $services->id) }}" style="background-color: #4CAF50; ">Update</a>
        <a href="{{ url('/admin/services/delete/'. $services->id) }}" style="background-color: #f44336;">Delete</a>
        <a href="{{ url('/admin/services/view/'. $services->id) }}" style="background-color: yellow;">View</a>

      </td>
    </tr>
    @endforeach
  </table>


</body>
</html>
