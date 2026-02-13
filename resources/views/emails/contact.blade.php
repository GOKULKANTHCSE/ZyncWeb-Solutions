<!DOCTYPE html>
<html>
<head>
    <title>New Contact Inquiry</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="background-color: #f4f4f4; padding: 20px;">
        <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px;">
            <h2 style="color: #255BA9; border-bottom: 2px solid #eee; padding-bottom: 10px;">New Contact Inquiry</h2>
            
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] ?? 'N/A' }}</p>
            <p><strong>Subject:</strong> {{ $data['subject'] ?? 'General Inquiry' }}</p>
            
            <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
            
            <h3 style="color: #444;">Message:</h3>
            <p style="background: #f9f9f9; padding: 15px; border-left: 4px solid #3FBFB8; border-radius: 4px;">
                {{ nl2br(e($data['message'])) }}
            </p>
            
            <br>
            <p style="font-size: 12px; color: #999;">Sent from ZyncWeb Solutions Website.</p>
        </div>
    </div>
</body>
</html>
