<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header {
            background-color: #8EC2BA;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 20px;
        }

        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #8EC2BA;
            margin: 20px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Agent Choice!</h1>
        </div>
        <div class="content">
            <p>Dear {{ ucfirst($name) }},</p>
            <p>Thank you for registering with us! To access your account, please use the following credentials:</p>

            <p><strong>Email:</strong> {{ $email ?? 'Email' }}</p>
            <p>
                <strong>
                    Use this link to login:
                </strong>
                <a target="_blank" href="{!! $url !!}">
                    {{ $url }}
                </a>
            </p>

            <p>We recommend that you change your password after your first login for security purposes.</p>

            <p>If you did not register for an account, please ignore this email or contact our support team for
                assistance.</p>

            <p>Thank you for choosing Agent Choice! We look forward to serving you.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Agent Choice. All rights reserved.</p>
        </div>
    </div>

</body>

</html>
