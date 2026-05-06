<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Not Found — Southern Mega Steel Enterprise Inc.</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=Bebas+Neue&family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      fontFamily: {
        display: ['"Bebas Neue"','Impact','sans-serif'],
        gothic:  ['"UnifrakturMaguntia"','serif'],
      }
    }
  }
}
</script>
<style>
  * { font-family: 'Manrope', sans-serif; }
  .font-display { font-family: 'Bebas Neue', Impact, sans-serif; }
  .font-gothic  { font-family: 'UnifrakturMaguntia', serif; }
  html { scroll-behavior: smooth; }

  .beam { display: inline-block; border-radius: 2px; }
  .beam-animate {
    animation: sway 2.4s ease-in-out infinite alternate;
    transform-origin: bottom center;
  }
  .beam-animate:nth-child(1) { animation-delay: 0s; }
  .beam-animate:nth-child(2) { animation-delay: .3s; }
  .beam-animate:nth-child(3) { animation-delay: .6s; }
  @keyframes sway {
    0%   { transform: rotate(-2deg) scaleY(1); }
    100% { transform: rotate(2deg) scaleY(.94); }
  }
</style>
</head>
<body class="bg-gray-950 text-white antialiased min-h-screen flex flex-col items-center justify-center px-6">

  <div class="text-center max-w-lg">

    {{-- Animated steel beams --}}
    <div class="flex items-end justify-center gap-3 mb-8">
      <svg class="beam-animate" width="22" height="70" viewBox="0 0 22 90">
        <rect x="0" y="0" width="22" height="74" fill="#dc2626" rx="2"/>
        <rect x="2" y="0" width="7" height="74" fill="white" opacity="0.15" rx="1"/>
        <rect x="0" y="74" width="22" height="12" fill="#7f1d1d" rx="1"/>
      </svg>
      <svg class="beam-animate" width="22" height="55" viewBox="0 0 22 75">
        <rect x="0" y="0" width="22" height="60" fill="#ef4444" rx="2"/>
        <rect x="2" y="0" width="7" height="60" fill="white" opacity="0.15" rx="1"/>
        <rect x="0" y="60" width="22" height="10" fill="#991b1b" rx="1"/>
      </svg>
      <svg class="beam-animate" width="22" height="70" viewBox="0 0 22 90">
        <rect x="0" y="0" width="22" height="74" fill="#dc2626" rx="2"/>
        <rect x="2" y="0" width="7" height="74" fill="white" opacity="0.15" rx="1"/>
        <rect x="0" y="74" width="22" height="12" fill="#7f1d1d" rx="1"/>
      </svg>
    </div>

    {{-- 404 --}}
    <div class="font-display text-[7rem] leading-none text-red-700 mb-2" style="letter-spacing:.02em;">404</div>

    <div class="font-gothic text-2xl text-white/80 mb-4">Southern Mega Steel</div>

    <h1 class="text-lg font-semibold text-white mb-3">Page Not Found</h1>
    <p class="text-gray-400 text-sm leading-relaxed mb-8">
      The page you're looking for doesn't exist or has been moved.<br>
      Let's get you back on solid ground.
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
      <a href="{{ route('landing') }}"
         class="inline-flex items-center gap-2 bg-red-800 hover:bg-red-700 text-white px-6 py-3 text-sm font-semibold tracking-wide transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Back to Home
      </a>
      <a href="{{ route('landing') }}#contact"
         class="inline-flex items-center gap-2 border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white px-6 py-3 text-sm font-semibold tracking-wide transition-colors">
        Contact Us
      </a>
    </div>

    <div class="mt-12 pt-8 border-t border-white/10 text-xs text-gray-600">
      &copy; {{ date('Y') }} Southern Mega Steel Enterprise Incorporated &nbsp;·&nbsp; Bacoor, Cavite, Philippines
    </div>
  </div>

</body>
</html>
