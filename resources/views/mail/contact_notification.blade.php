<!DOCTYPE html>
<html>
<head>
    <title>New Contact Inquiry</title>
</head>
<body>
    <h2>New Contact Inquiry Received</h2>
    <p><strong>First Name:</strong> {{ $data['firstname'] }}</p>
    <p><strong>Last Name:</strong> {{ $data['lastname'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>