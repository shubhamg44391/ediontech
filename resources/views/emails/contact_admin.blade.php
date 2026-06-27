<!DOCTYPE html>
<html>
<head>
    <title>New Contact Us Submission</title>
</head>
<body>
    <h2>New Contact Us Submission</h2>
    <p><strong>Name:</strong> {{ $data['name'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
    <p><strong>Number:</strong> {{ $data['number'] ?? 'N/A' }}</p>
    <p><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</p>
    <p><strong>Budget:</strong> {{ $data['budget'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong> {{ $data['message'] ?? 'N/A' }}</p>
</body>
</html>
