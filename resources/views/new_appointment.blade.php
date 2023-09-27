<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>New Appointment Notification</title>
    <style>
         body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Container styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        p {
            font-size: 15px;
            margin-top: 10px;
        }

        /* Header styles */
        .header {
            background-color: #F8AF5B;
            padding: 10px;
        }

        /* Content styles */
        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
        }
        .footer {
            background-color: #f5f5f5;
            padding: 10px;
            text-align: center;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="header">
            <h3>Hello Admin,</h3>
            <p>A new appointment request has been submitted:</p>
        </div>
    <div class="content">
    <p><strong>Name:</strong> {{ $appointment->name }}</p>
    <p><strong>Email:</strong> {{ $appointment->email }}</p>
    <p><strong>Service:</strong> {{ $appointment->service->type }}</p>
    <p><strong>Date:</strong> {{ $appointment->schedule->date }}</p>
    <p><strong>Time:</strong> {{ $appointment->timeslot->start_time }} - {{ $appointment->timeslot->end_time }}</p>
    <p><strong>Address:</strong> {{ $appointment->address }}</p>
    <p><strong>Contact Number:</strong> {{ $appointment->phone_no }}</p>
        <br><br>
    <div class="footer">
            <p>Click <a href="{{ route('login') }}">here</a> to Approve or Reject this appointment request.</p>
        </div>
    </div> 
</body>
</html>