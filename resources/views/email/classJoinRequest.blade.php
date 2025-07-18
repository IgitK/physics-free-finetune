<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Student Registration</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: white; padding: 20px; border-radius: 10px;">
        <h2 style="color: #333;">New Student Registration</h2>
        <hr style="border-top: 1px solid #ccc;">

        <p><strong>Full Name:</strong>{{ $data['fullname'] }}</p>
        <p><strong>Phone:</strong>{{ $data['phone'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Class:</strong> {{ $data['classroom']->name }}</p>
        <p><strong>Institute:</strong> {{ $data['classroom']->institute }}</p>
        <p><strong>Day:</strong> {{ $data['classroom']->day }}</p>
        <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($data['classroom']->start_time)->format('h:i A') }}</p>
        <p><strong>End Time:</strong> {{ \Carbon\Carbon::parse($data['classroom']->end_time)->format('h:i A') }}</p>


        @if (!empty($data['notes']))
            <p><strong>Additional Notes:</strong></p>
            <div style="background-color: #f1f1f1; padding: 15px; border-left: 4px solid #007bff;">
                {{ $data['notes'] }}
            </div>
        @endif

    </div>
</body>

</html>
