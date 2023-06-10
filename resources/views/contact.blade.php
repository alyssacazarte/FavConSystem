<h1>Contact Page</h1>

<form action="{{ route('contact.book') }}" method="POST">
    @csrf

    <label for="service_id">Select Service:</label>
    <select name="service_id" id="service_id">
        @foreach ($services as $service)
            <option value="{{ $service->service_id }}">{{ $service->service_type }}</option>
        @endforeach
    </select>

    <!-- <label for="schedule_id">Select Schedule:</label>
    <select name="schedule_id" id="schedule_id">
        @foreach ($schedules as $schedule)
            <option value="{{ $schedule->schedule_id }}">{{ $schedule->date }}</option>
        @endforeach
    </select> -->

    <label for="date">Date:</label>
    <input type="date" name="date" id="date">
    @dd($schedules)
    <label for="start_time">Start Time:</label>
    <input type="time" name="start_time" id="start_time">

    <label for="end_time">End Time:</label>
    <input type="time" name="end_time" id="end_time">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email">

    <label for="address">Address:</label>
    <input type="text" name="address" id="address">

    <label for="phone_no">Phone Number:</label>
    <input type="text" name="phone_no" id="phone_no">

    <label for="notes">Notes:</label>
    <textarea name="notes" id="notes"></textarea>

    <button type="submit">Book Now</button>
</form>
