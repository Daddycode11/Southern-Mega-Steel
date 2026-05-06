<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quotation Request Received</title>
<style>
  body { font-family: Arial, sans-serif; background: #f3f4f6; margin: 0; padding: 20px; }
  .card { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 4px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,.08); }
  .header { background: #991b1b; color: #fff; padding: 32px; text-align: center; }
  .logo-beams { display: flex; align-items: flex-end; justify-content: center; gap: 6px; margin-bottom: 16px; }
  .beam { border-radius: 2px; }
  .header h1 { margin: 0; font-size: 22px; font-weight: 700; letter-spacing: .04em; }
  .header p { margin: 6px 0 0; font-size: 13px; opacity: .8; }
  .body { padding: 36px 32px; }
  .greeting { font-size: 17px; font-weight: 700; color: #111827; margin-bottom: 12px; }
  .message { font-size: 15px; color: #374151; line-height: 1.75; }
  .steps { margin: 24px 0; }
  .step { display: flex; gap: 14px; margin-bottom: 16px; align-items: flex-start; }
  .step-num { width: 28px; height: 28px; background: #991b1b; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .step-text { font-size: 14px; color: #374151; line-height: 1.6; padding-top: 3px; }
  .summary-box { background: #fef2f2; border-left: 4px solid #991b1b; padding: 16px 20px; margin: 24px 0; border-radius: 2px; }
  .summary-label { font-size: 10px; text-transform: uppercase; letter-spacing: .15em; font-weight: 700; color: #991b1b; margin-bottom: 12px; }
  .summary-row { display: flex; gap: 12px; margin-bottom: 7px; }
  .summary-key { font-size: 12px; font-weight: 700; color: #6b7280; min-width: 90px; }
  .summary-val { font-size: 13px; color: #111827; font-weight: 600; }
  .divider { border: none; border-top: 1px solid #e5e7eb; margin: 24px 0; }
  .contact-row { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; font-size: 14px; color: #374151; }
  .cta { display: block; text-align: center; background: #991b1b; color: #fff; text-decoration: none; font-weight: 700; font-size: 14px; letter-spacing: .06em; padding: 14px 28px; margin: 28px 0 0; border-radius: 2px; }
  .footer { background: #f9fafb; padding: 18px 32px; font-size: 11px; color: #9ca3af; text-align: center; border-top: 1px solid #e5e7eb; line-height: 1.7; }
</style>
</head>
<body>
<div class="card">

  <div class="header">
    <div class="logo-beams">
      <div class="beam" style="width:10px;height:44px;background:#dc2626;"></div>
      <div class="beam" style="width:10px;height:36px;background:#ef4444;"></div>
      <div class="beam" style="width:10px;height:44px;background:#dc2626;"></div>
    </div>
    <h1>Quotation Request Received!</h1>
    <p>Southern Mega Steel Enterprise Inc.</p>
  </div>

  <div class="body">
    <div class="greeting">Hi {{ $data['q_name'] }},</div>
    <div class="message">
      Thank you for your interest in Southern Mega Steel! We have received your quotation request
      and will prepare a detailed quote for you within <strong>24 hours</strong>.
    </div>

    <div class="summary-box">
      <div class="summary-label">Your Request Summary</div>
      <div class="summary-row">
        <span class="summary-key">Product</span>
        <span class="summary-val">{{ $data['q_product'] }}</span>
      </div>
      @if(!empty($data['q_quantity']))
      <div class="summary-row">
        <span class="summary-key">Quantity</span>
        <span class="summary-val">{{ $data['q_quantity'] }}</span>
      </div>
      @endif
      <div class="summary-row">
        <span class="summary-key">Deliver to</span>
        <span class="summary-val">{{ $data['q_location'] }}</span>
      </div>
      @if(!empty($data['q_company']))
      <div class="summary-row">
        <span class="summary-key">Company</span>
        <span class="summary-val">{{ $data['q_company'] }}</span>
      </div>
      @endif
      <div class="summary-row">
        <span class="summary-key">Submitted</span>
        <span class="summary-val">{{ now()->format('F j, Y · g:i A') }}</span>
      </div>
    </div>

    <div class="message" style="margin-bottom:16px;">Here's what happens next:</div>
    <div class="steps">
      <div class="step">
        <div class="step-num">1</div>
        <div class="step-text">Our sales team reviews your requirements and checks current stock and pricing.</div>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <div class="step-text">We send you a detailed quotation with pricing, availability, and delivery timeline.</div>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <div class="step-text">You confirm the order and we coordinate delivery to <strong>{{ $data['q_location'] }}</strong>.</div>
      </div>
    </div>

    <hr class="divider">

    <div class="message" style="margin-bottom:14px;">Need an urgent response? Contact us directly:</div>
    <div class="contact-row">
      <span>📞</span>
      <span><strong>0931 059 9611</strong> / 0926 278 8298</span>
    </div>
    <div class="contact-row">
      <span>📧</span>
      <a href="mailto:southernmegasteel@gmail.com" style="color:#991b1b;">southernmegasteel@gmail.com</a>
    </div>
    <div class="contact-row">
      <span>🕐</span>
      <span>Monday – Saturday · 8:00 AM – 6:00 PM PHT</span>
    </div>

    <a href="https://www.facebook.com/southernmegasteel" class="cta">
      Visit Our Facebook Page ↗
    </a>
  </div>

  <div class="footer">
    Southern Mega Steel Enterprise Inc. &nbsp;·&nbsp; Bacoor, Cavite, Philippines &nbsp;·&nbsp; Est. 1996<br>
    You received this email because you submitted a quotation request on our website.<br>
    Please do not reply directly to this email — use the contact details above.
  </div>
</div>
</body>
</html>
