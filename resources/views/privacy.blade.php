<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Privacy Policy — Southern Mega Steel Enterprise Inc.</title>
<meta name="description" content="Privacy policy of Southern Mega Steel Enterprise Incorporated in compliance with RA 10173 (Philippine Data Privacy Act).">
<meta name="robots" content="noindex, follow">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=Bebas+Neue&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        gothic: ['"UnifrakturMaguntia"','serif'],
        body:   ['Manrope','system-ui','sans-serif'],
      }
    }
  }
}
</script>
<style>
  * { font-family: 'Manrope', sans-serif; }
  .font-gothic { font-family: 'UnifrakturMaguntia', serif; }
  html { scroll-behavior: smooth; }
  h2 { font-size: 1.1rem; font-weight: 700; color: #111827; margin-top: 2rem; margin-bottom: .5rem; }
  p, li { color: #374151; line-height: 1.8; font-size: .95rem; }
  ul { list-style: disc; padding-left: 1.5rem; }
  li { margin-bottom: .35rem; }
</style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

{{-- Nav --}}
<nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
  <div class="max-w-4xl mx-auto px-6 h-14 flex items-center justify-between">
    <a href="{{ route('landing') }}" class="flex items-center gap-3">
      <svg width="28" height="34" viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
        <rect x="2" y="4" width="22" height="84" fill="#dc2626" rx="2"/>
        <rect x="39" y="4" width="22" height="84" fill="#ef4444" rx="2"/>
        <rect x="76" y="4" width="22" height="84" fill="#dc2626" rx="2"/>
        <rect x="24" y="26" width="15" height="8" fill="#9a1a1a" rx="1"/>
        <rect x="61" y="26" width="15" height="8" fill="#9a1a1a" rx="1"/>
        <rect x="24" y="55" width="15" height="8" fill="#9a1a1a" rx="1"/>
        <rect x="61" y="55" width="15" height="8" fill="#9a1a1a" rx="1"/>
        <rect x="2" y="88" width="96" height="14" fill="#7f1d1d" rx="2"/>
      </svg>
      <span class="font-gothic text-red-800 text-base leading-none">Southern Mega Steel</span>
    </a>
    <a href="{{ route('landing') }}"
       class="text-sm font-semibold text-gray-600 hover:text-red-800 transition-colors flex items-center gap-1.5">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
      </svg>
      Back to Home
    </a>
  </div>
</nav>

{{-- Content --}}
<main class="max-w-4xl mx-auto px-6 py-14 pb-20">

  <div class="mb-10">
    <div class="flex items-center gap-3 mb-4">
      <div class="h-px w-8 bg-red-800"></div>
      <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Legal</span>
    </div>
    <h1 class="text-3xl font-bold text-gray-900 mb-2">Privacy Policy</h1>
    <p class="text-sm text-gray-500">Last updated: {{ date('F j, Y') }} &nbsp;·&nbsp; Southern Mega Steel Enterprise Incorporated</p>
  </div>

  <div class="bg-amber-50 border border-amber-200 rounded px-5 py-4 mb-8 text-sm text-amber-800">
    <strong>Compliance Notice:</strong> This Privacy Policy is issued in compliance with Republic Act No. 10173,
    also known as the <strong>Data Privacy Act of 2012</strong>, and its Implementing Rules and Regulations.
  </div>

  <h2>1. Who We Are</h2>
  <p>
    Southern Mega Steel Enterprise Incorporated ("SMS", "we", "us", or "our") is a structural steel trading
    company established in 1996 and headquartered in Bacoor, Cavite, Philippines. We operate this website
    at <a href="{{ url('/') }}" class="text-red-800 hover:underline font-medium">{{ url('/') }}</a> to provide
    information about our products and services, and to facilitate business inquiries.
  </p>
  <p class="mt-2">
    For data privacy matters, you may contact our Data Protection Officer at:<br>
    <strong>Email:</strong> <a href="mailto:southernmegasteel@gmail.com" class="text-red-800 hover:underline">southernmegasteel@gmail.com</a><br>
    <strong>Phone:</strong> <a href="tel:+639310599611" class="text-red-800 hover:underline">0931 059 9611</a>
  </p>

  <h2>2. Information We Collect</h2>
  <p>We collect the following personal information only when you voluntarily submit our contact or inquiry forms:</p>
  <ul>
    <li>Full name</li>
    <li>Company name (optional)</li>
    <li>Email address</li>
    <li>Phone number</li>
    <li>Delivery location (for quotation requests)</li>
    <li>Project details and product specifications you choose to share</li>
  </ul>
  <p class="mt-3">
    We do <strong>not</strong> use tracking cookies, collect browsing data, or use third-party analytics on this website
    beyond what is disclosed below.
  </p>

  <h2>3. How We Use Your Information</h2>
  <p>Your personal information is used solely for the following purposes:</p>
  <ul>
    <li>To respond to your inquiry or quotation request</li>
    <li>To provide pricing, availability, and delivery information relevant to your project</li>
    <li>To follow up on submitted quotation requests</li>
    <li>To comply with legal obligations</li>
  </ul>
  <p class="mt-3">
    We will only contact you in connection with your inquiry. We do not conduct unsolicited marketing without your consent.
  </p>

  <h2>4. Legal Basis for Processing</h2>
  <p>
    We process your personal data based on your consent (when you submit a form) and on legitimate business interest
    (responding to commercial inquiries). You may withdraw your consent at any time by contacting us directly.
  </p>

  <h2>5. Data Sharing and Disclosure</h2>
  <p>
    We do <strong>not</strong> sell, rent, or trade your personal information to any third party. Your data may only
    be disclosed:
  </p>
  <ul>
    <li>To our authorized staff handling your inquiry</li>
    <li>To comply with a lawful court order or government directive under Philippine law</li>
  </ul>

  <h2>6. Data Retention</h2>
  <p>
    Inquiry and quotation data received via email is retained for up to <strong>two (2) years</strong> for business
    record-keeping purposes, after which it is securely deleted. You may request earlier deletion at any time.
  </p>

  <h2>7. Your Rights Under RA 10173</h2>
  <p>As a data subject under the Data Privacy Act of 2012, you have the right to:</p>
  <ul>
    <li><strong>Access</strong> — request a copy of personal data we hold about you</li>
    <li><strong>Correction</strong> — request correction of inaccurate or incomplete data</li>
    <li><strong>Erasure or Blocking</strong> — request deletion or blocking of your personal data</li>
    <li><strong>Object</strong> — object to the processing of your personal data</li>
    <li><strong>Complain</strong> — file a complaint with the National Privacy Commission (NPC) at <a href="https://www.privacy.gov.ph" target="_blank" rel="noopener" class="text-red-800 hover:underline">privacy.gov.ph</a></li>
  </ul>
  <p class="mt-3">
    To exercise any of these rights, contact us at
    <a href="mailto:southernmegasteel@gmail.com" class="text-red-800 hover:underline font-medium">southernmegasteel@gmail.com</a>.
    We will respond within <strong>fifteen (15) business days</strong>.
  </p>

  <h2>8. Security</h2>
  <p>
    We take reasonable precautions to protect your personal data. All form submissions are transmitted over
    HTTPS-encrypted connections. Received data is stored in our business email system protected by strong
    authentication measures.
  </p>

  <h2>9. Third-Party Services</h2>
  <p>This website may use the following third-party services:</p>
  <ul>
    <li><strong>Google Maps</strong> — to display our location. Subject to <a href="https://policies.google.com/privacy" target="_blank" rel="noopener" class="text-red-800 hover:underline">Google's Privacy Policy</a>.</li>
    <li><strong>Google Fonts</strong> — to render website typography. Subject to Google's Privacy Policy.</li>
    <li><strong>Facebook Messenger</strong> — optional direct messaging link. No data is sent to Facebook unless you click the link.</li>
  </ul>

  <h2>10. Children's Privacy</h2>
  <p>
    Our website is intended for business use. We do not knowingly collect personal information from individuals
    under 18 years of age.
  </p>

  <h2>11. Changes to This Policy</h2>
  <p>
    We may update this Privacy Policy from time to time. Any changes will be reflected on this page with an updated
    "Last updated" date. Your continued use of the website after changes are posted constitutes acceptance of
    the revised policy.
  </p>

  <h2>12. Contact Us</h2>
  <p>
    For any questions, concerns, or requests regarding this Privacy Policy or your personal data, please contact us:
  </p>
  <div class="mt-4 bg-white border border-gray-200 rounded px-6 py-5 text-sm">
    <div class="font-bold text-gray-900 mb-2">Southern Mega Steel Enterprise Incorporated</div>
    <div class="space-y-1 text-gray-700">
      <div>Bacoor, Cavite, Philippines</div>
      <div>Email: <a href="mailto:southernmegasteel@gmail.com" class="text-red-800 hover:underline">southernmegasteel@gmail.com</a></div>
      <div>Phone: <a href="tel:+639310599611" class="text-red-800 hover:underline">0931 059 9611</a> / <a href="tel:+639262788298" class="text-red-800 hover:underline">0926 278 8298</a></div>
      <div>Hours: Monday–Saturday, 8:00 AM – 6:00 PM PHT</div>
    </div>
  </div>

</main>

<footer class="bg-gray-900 text-gray-500 text-center py-5 text-xs">
  &copy; {{ date('Y') }} Southern Mega Steel Enterprise Incorporated. All rights reserved. &nbsp;·&nbsp;
  <a href="{{ route('landing') }}" class="hover:text-gray-300 transition-colors">Back to Home</a>
</footer>

</body>
</html>
