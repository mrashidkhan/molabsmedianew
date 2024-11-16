<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message from Molabs Media</title>
</head>
<body>
    <h1>New Contact Message</h1>
    <p><strong>Full Name:</strong> {{ $contactData['full_name'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $contactData['phone_number'] ?? 'No Phone provided' }}</p>
    <p><strong>Message:</strong> {{ $contactData['msg'] }}</p>
</body>
</html>
