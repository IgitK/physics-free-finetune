<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> New Contact Form Submision </title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: white; padding: 20px; border-radius: 10px;">
        <h2 style="color: #333;"> New Contact Form Submision </h2>
        <hr style="border-top: 1px solid #ccc;">

        <p><strong>Full Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>

        <p><strong>Message:</strong> {{ $data['message'] }} </p>

    </div>
</body>

</html>
