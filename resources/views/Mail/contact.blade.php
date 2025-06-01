<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
</head>

<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $data['sender_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['sender_email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['sender_phone'] }}</p>
    <p><strong>Subject:</strong> {{ $data['sender_subject'] }}</p>
    <p><strong>Message:</strong><br>{{ $data['sender_message'] }}</p>
</body>

</html>
