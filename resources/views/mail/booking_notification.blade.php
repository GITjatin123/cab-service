<!DOCTYPE html>
<html>
<head>
    <title>New Ride Booking</title>
</head>
<body>
    <h2>New Ride Booking Received</h2>
    <p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Start Destination:</strong> {{ $data['start_dest'] }}</p>
    <p><strong>End Destination:</strong> {{ $data['end_dest'] }}</p>
    <p><strong>Ride Date:</strong> {{ $data['ride_date'] }}</p>
    <p><strong>Ride Time:</strong> {{ $data['ride_time'] }}</p>
</body>
</html>