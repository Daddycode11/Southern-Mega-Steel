<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Contact Inquiry</title>
<style>
  body { font-family: Arial, sans-serif; background:#f3f4f6; margin:0; padding:20px; }
  .card { max-width:600px; margin:0 auto; background:#fff; border-radius:4px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,.08); }
  .header { background:#991b1b; color:#fff; padding:28px 32px; }
  .header h1 { margin:0; font-size:20px; font-weight:700; letter-spacing:.04em; }
  .header p { margin:6px 0 0; font-size:13px; opacity:.8; }
  .body { padding:32px; }
  .field { margin-bottom:20px; }
  .label { font-size:10px; text-transform:uppercase; letter-spacing:.15em; font-weight:700; color:#6b7280; margin-bottom:4px; }
  .value { font-size:15px; color:#111827; line-height:1.5; }
  .message-box { background:#f9fafb; border:1px solid #e5e7eb; padding:16px; border-radius:4px; font-size:15px; color:#374151; line-height:1.7; white-space:pre-wrap; }
  .divider { border:none; border-top:1px solid #e5e7eb; margin:24px 0; }
  .footer { background:#f9fafb; padding:18px 32px; font-size:12px; color:#9ca3af; text-align:center; border-top:1px solid #e5e7eb; }
</style>
</head>
<body>
<div class="card">
  <div class="header">
    <h1>New Contact Inquiry</h1>
    <p>Received via southernmegasteel.com · {{ now()->format('F j, Y · g:i A') }}</p>
  </div>
  <div class="body">
    <div class="field">
      <div class="label">Full Name</div>
      <div class="value">{{ $data['name'] }}</div>
    </div>
    @if(!empty($data['company']))
    <div class="field">
      <div class="label">Company</div>
      <div class="value">{{ $data['company'] }}</div>
    </div>
    @endif
    <div class="field">
      <div class="label">Email Address</div>
      <div class="value"><a href="mailto:{{ $data['email'] }}" style="color:#991b1b;">{{ $data['email'] }}</a></div>
    </div>
    <div class="field">
      <div class="label">Phone Number</div>
      <div class="value"><a href="tel:{{ $data['phone'] }}" style="color:#991b1b;">{{ $data['phone'] }}</a></div>
    </div>
    <div class="field">
      <div class="label">Subject</div>
      <div class="value">{{ $data['subject'] }}</div>
    </div>
    <hr class="divider">
    <div class="field">
      <div class="label">Message</div>
      <div class="message-box">{{ $data['message'] }}</div>
    </div>
  </div>
  <div class="footer">
    Southern Mega Steel Enterprise Inc. &nbsp;·&nbsp; Bacoor, Cavite, Philippines<br>
    Reply directly to this email to respond to the inquiry.
  </div>
</div>
</body>
</html>
