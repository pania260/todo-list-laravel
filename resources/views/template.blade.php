<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>

<body>
<h2>Your Message:</h2>
<div>
    <p>name: {{ $name }}</p>
    <p>Sender: {{ $email }}</p>
    <p>Subject: {{ $subject }}</p>
    <p>Message: {{ $message }}</p>
</div>
</body>

</html>