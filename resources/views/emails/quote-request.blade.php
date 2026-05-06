<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Quotation Request</title>
<style>
  body { font-family: Arial, sans-serif; background:#f3f4f6; margin:0; padding:20px; }
  .card { max-width:600px; margin:0 auto; background:#fff; border-radius:4px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,.08); }
  .header { background:#991b1b; color:#fff; padding:28px 32px; }
  .header h1 { margin:0; font-size:20px; font-weight:700; letter-spacing:.04em; }
  .header p { margin:6px 0 0; font-size:13px; opacity:.8; }
  .badge { display:inline-block; background:rgba(255,255,255,.2); color:#fff; font-size:11px; font-weight:700; letter-spacing:.12em; text-transform:uppercase; padding:4px 10px; border-radius:2px; margin-top:10px; }
  .body { padding:32px; }
  .section-title { font-size:10px; text-transform:uppercase; letter-spacing:.15em; font-weight:700; color:#991b1b; border-bottom:2px solid #fef2f2; padding-bottom:8px; margin-bottom:18px; margin-top:28px; }
  .section-title:first-of-type { margin-top:0; }
  .grid { display:grid; grid-template-columns:1fr 1fr; gap:18px; }
  .field { margin-bottom:16px; }
  .label { font-size:10px; text-transform:uppercase; letter-spacing:.15em; font-weight:700; color:#6b7280; margin-bottom:4px; }
  .value { font-size:15px; color:#111827; line-height:1.5; }
  .highlight { background:#fef2f2; border-left:3px solid #991b1b; padding:12px 16px; border-radius:2px; }
  .message-box { background:#f9fafb; border:1px solid #e5e7eb; padding:16px; border-radius:4px; font-size:15px; color:#374151; line-height:1.7; white-space:pre-wrap; }
  .footer { background:#f9fafb; padding:18px 32px; font-size:12px; color:#9ca3af; text-align:center; border-top:1px solid #e5e7eb; }
</style>
</head>
<body>
<div class="card">
  <div class="header">
    <h1>New Quotation Request</h1>
    <p>Received via southernmegasteel.com · {{ now()->format('F j, Y · g:i A') }}</p>
    <div class="badge">{{ $data['q_product'] }}</div>
  </div>
  <div class="body">
    <div class="section-title">Customer Details</div>
    <div class="grid">
      <div class="field">
        <div class="label">Full Name</div>
        <div class="value">{{ $data['q_name'] }}</div>
      </div>
      @if(!empty($data['q_company']))
      <div class="field">
        <div class="label">Company</div>
        <div class="value">{{ $data['q_company'] }}</div>
      </div>
      @endif
    </div>
    <div class="grid">
      <div class="field">
        <div class="label">Email</div>
        <div class="value"><a href="mailto:{{ $data['q_email'] }}" style="color:#991b1b;">{{ $data['q_email'] }}</a></div>
      </div>
      <div class="field">
        <div class="label">Phone</div>
        <div class="value"><a href="tel:{{ $data['q_phone'] }}" style="color:#991b1b;">{{ $data['q_phone'] }}</a></div>
      </div>
    </div>

    <div class="section-title">Order Requirements</div>
    <div class="grid">
      <div class="field highlight">
        <div class="label">Product of Interest</div>
        <div class="value" style="font-weight:700;">{{ $data['q_product'] }}</div>
      </div>
      <div class="field">
        <div class="label">Estimated Quantity</div>
        <div class="value">{{ $data['q_quantity'] ?? '—' }}</div>
      </div>
    </div>
    <div class="field">
      <div class="label">Delivery Location</div>
      <div class="value">{{ $data['q_location'] }}</div>
    </div>

    @if(!empty($data['q_details']))
    <div class="section-title">Project Details / Specifications</div>
    <div class="message-box">{{ $data['q_details'] }}</div>
    @endif
  </div>
  <div class="footer">
    Southern Mega Steel Enterprise Inc. &nbsp;·&nbsp; Bacoor, Cavite, Philippines<br>
    Reply directly to this email to respond to the quotation request.
  </div>
</div>
</body>
</html>
