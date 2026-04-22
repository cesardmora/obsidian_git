<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Thank you for your enquiry | Case dei Nobili</title>
  <style>
    body { font-family: Georgia, serif; background: #F5F2ED; color: #1A1917; margin: 0; padding: 40px 20px; }
    .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 48px; }
    .header { border-bottom: 1px solid #B8956B; padding-bottom: 24px; margin-bottom: 32px; }
    .label { font-size: 11px; letter-spacing: 0.15em; text-transform: uppercase; color: #B8956B; }
    .value { font-size: 16px; margin-top: 4px; margin-bottom: 24px; }
    .message-box { background: #F5F2ED; padding: 24px; margin-top: 8px; }
    .footer { margin-top: 48px; font-size: 12px; color: #9B9690; }
  </style>
</head>

<body style="font-family: sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee;">
        <h2 style="color: #b8956b;">Thank you for your enquiry</h2>
        <p>Dear <strong>{{ $inquiry->name }}</strong>,</p>
        <p>We have received your request regarding our properties at <strong>Case dei Nobili</strong>.</p>
        
        <div style="background: #f9f9f9; padding: 15px; border-radius: 5px; margin: 20px 0;">
            <p style="margin: 0;"><strong>Your Message:</strong></p>
            <p style="font-style: italic; color: #666;">"{{ $inquiry->message }}"</p>
        </div>

        <p>Our team will review your details and contact you within the next 48 hours.</p>
        
        <hr style="border: 0; border-top: 1px solid #eee; margin: 30px 0;">
        <p style="font-size: 12px; color: #999; text-align: center;">
            Case dei Nobili — Korčula, Croatia  

            <a href="https://casedeinobili.com" style="color: #b8956b; text-decoration: none;">casedeinobili.com</a>
        </p>
    </div>
</body>
</html>
