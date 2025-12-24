<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body style="font-family: sans-serif; line-height: 1.6;">
    <h2>Hello!</h2>
    <p>You have successfully issued a queue token from our Smart Queue System.</p>
    
    <div style="background: #f3f4f6; padding: 20px; border-radius: 10px; margin: 20px 0;">
        <p style="font-size: 1.2em; margin: 0;">Your Token Number:</p>
        <h1 style="color: #2563eb; margin: 5px 0;">{{ $token->token_number }}</h1>
        <p style="margin: 0; color: #6b7280;">Service: {{ $token->service_type }}</p>
    </div>

    <p>You can track your live position in the queue by clicking the button below:</p>
    
    <a href="{{ route('token.track', $token->id) }}" class="button">Track My Position Live</a>

    <p style="margin-top: 30px; font-size: 0.8em; color: #9ca3af;">
        If you didn't request this token, please ignore this email.
    </p>
</body>
</html>