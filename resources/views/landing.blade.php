<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Southern Mega Steel Enterprise Inc. — Your Partner in Steel Excellence</title>
<meta name="description" content="Southern Mega Steel Enterprise Inc. — premium structural steel products, fabrication, and reliable delivery across the Philippines. Est. 1996, Bacoor Cavite.">

{{-- Open Graph / Facebook --}}
<meta property="og:type"        content="website">
<meta property="og:site_name"   content="Southern Mega Steel Enterprise Inc.">
<meta property="og:title"       content="Southern Mega Steel Enterprise Inc. — Your Partner in Steel Excellence">
<meta property="og:description" content="Premium structural steel products, fabrication services, and nationwide delivery. I-Beam, Wide Flange, MS Plate, Rebar, Steel Pipes & more. Est. 1996, Bacoor Cavite.">
<meta property="og:url"         content="{{ url('/') }}">
<meta property="og:image"       content="{{ asset('images/hero-banner.jpg') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale"     content="en_PH">

{{-- Twitter Card --}}
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="Southern Mega Steel Enterprise Inc.">
<meta name="twitter:description" content="Premium structural steel products & fabrication. Est. 1996, Bacoor Cavite, Philippines.">
<meta name="twitter:image"       content="{{ asset('images/hero-banner.jpg') }}">

{{-- Google Analytics — replace GA_MEASUREMENT_ID with your actual ID --}}
{{-- e.g. G-XXXXXXXXXX — get it from analytics.google.com --}}
{{--
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
--}}

{{-- Facebook Pixel — replace YOUR_PIXEL_ID with your actual Pixel ID --}}
{{-- Get it from business.facebook.com/events/manager --}}
{{--
<script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', 'YOUR_PIXEL_ID');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&ev=PageView&noscript=1"/></noscript>
--}}

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=Bebas+Neue&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        rust: { DEFAULT:'#b91c1c', dark:'#7f1d1d', light:'#dc2626' },
        gold: { DEFAULT:'#b45309', light:'#d97706', bright:'#fbbf24' },
      },
      fontFamily: {
        display: ['"Bebas Neue"','Impact','sans-serif'],
        gothic:  ['"UnifrakturMaguntia"','serif'],
        body:    ['Manrope','system-ui','sans-serif'],
      },
      animation: {
        marquee: 'marquee 38s linear infinite',
        'fade-up': 'fadeUp 0.6s ease-out both',
      },
      keyframes: {
        marquee:  { '0%':{transform:'translateX(0)'},'100%':{transform:'translateX(-50%)'} },
        fadeUp:   { '0%':{opacity:'0',transform:'translateY(20px)'},'100%':{opacity:'1',transform:'translateY(0)'} },
      },
    }
  }
}
</script>

<style>
  *  { font-family: 'Manrope', sans-serif; }
  .font-display { font-family: 'Bebas Neue', Impact, sans-serif; letter-spacing: 0.03em; }
  .font-gothic  { font-family: 'UnifrakturMaguntia', serif; }
  ::selection { background: #b91c1c; color: #fff; }
  [x-cloak]   { display: none !important; }
  html { scroll-behavior: smooth; }
  ::-webkit-scrollbar { width: 8px; }
  ::-webkit-scrollbar-track { background: #f3f4f6; }
  ::-webkit-scrollbar-thumb { background: #374151; border-radius: 4px; }
  ::-webkit-scrollbar-thumb:hover { background: #b91c1c; }

  /* Hero background image — place file at public/images/hero-banner.jpg */
  .hero-img-bg {
    background-image: url('{{ asset("images/hero-banner.jpg") }}');
    background-size: cover;
    background-position: center 20%;
    background-repeat: no-repeat;
    background-color: #1c1917; /* fallback while image loads */
  }

  /* Section fade-in on scroll */
  .reveal { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
  .reveal.visible { opacity: 1; transform: translateY(0); }

  /* Form input focus ring */
  .form-input:focus { outline: none; border-color: #b91c1c; box-shadow: 0 0 0 3px rgba(185,28,28,.15); }

  /* Preloader */
  #sms-preloader {
    position: fixed; inset: 0; z-index: 9999;
    background: #0f0a0a;
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    transition: opacity .5s ease, visibility .5s ease;
  }
  #sms-preloader.hidden { opacity: 0; visibility: hidden; pointer-events: none; }
  .preloader-bar {
    width: 180px; height: 3px; background: rgba(255,255,255,.1); border-radius: 2px; overflow: hidden; margin-top: 28px;
  }
  .preloader-bar-fill {
    height: 100%; background: linear-gradient(90deg, #991b1b, #ef4444);
    animation: preload-progress 1.4s ease-in-out forwards;
  }
  @keyframes preload-progress { 0%{width:0%} 60%{width:80%} 100%{width:100%} }
  .preloader-beams {
    display: flex; gap: 8px; align-items: flex-end;
  }
  .preloader-beam {
    width: 14px; border-radius: 2px;
    animation: beam-pulse 1.2s ease-in-out infinite alternate;
  }
  .preloader-beam:nth-child(1) { height: 52px; background: linear-gradient(to bottom, #dc2626, #7f1d1d); animation-delay: 0s; }
  .preloader-beam:nth-child(2) { height: 44px; background: linear-gradient(to bottom, #dc2626, #7f1d1d); animation-delay: .15s; }
  .preloader-beam:nth-child(3) { height: 52px; background: linear-gradient(to bottom, #dc2626, #7f1d1d); animation-delay: .3s; }
  .preloader-base { width: 60px; height: 8px; background: #7f1d1d; border-radius: 1px; margin-top: 0; }
  @keyframes beam-pulse {
    0%   { transform: scaleY(1); opacity: .9; }
    100% { transform: scaleY(.7); opacity: .5; }
  }
</style>
</head>
<body class="bg-white text-gray-900 antialiased overflow-x-hidden">

{{-- Preloader --}}
<div id="sms-preloader" aria-hidden="true">
  <div style="display:flex;flex-direction:column;align-items:center;gap:0;">
    <div class="preloader-beams">
      <div class="preloader-beam"></div>
      <div class="preloader-beam"></div>
      <div class="preloader-beam"></div>
    </div>
    <div class="preloader-base"></div>
  </div>
  <div class="preloader-bar"><div class="preloader-bar-fill"></div></div>
  <div style="margin-top:20px;text-align:center;">
    <div style="font-family:'UnifrakturMaguntia',serif;font-size:1.1rem;color:rgba(255,255,255,.85);letter-spacing:.02em;">Southern Mega Steel</div>
    <div style="font-size:10px;letter-spacing:.25em;text-transform:uppercase;color:#ef4444;margin-top:4px;font-weight:600;">Enterprise Incorporated</div>
  </div>
</div>

{{-- ── Cookie Consent Banner ── --}}
<div x-data="{
       show: false,
       init() {
         if (!localStorage.getItem('sms_cookie_consent')) {
           setTimeout(() => this.show = true, 1800);
         }
       },
       accept() { localStorage.setItem('sms_cookie_consent', 'accepted'); this.show = false; },
       decline() { localStorage.setItem('sms_cookie_consent', 'declined'); this.show = false; }
     }"
     x-show="show"
     x-transition:enter="transition ease-out duration-400"
     x-transition:enter-start="opacity-0 translate-y-6"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 translate-y-6"
     x-cloak
     class="fixed bottom-0 inset-x-0 z-[9998] bg-gray-950 border-t-2 border-red-800 shadow-2xl">
  <div class="container mx-auto px-6 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <div class="flex items-start gap-3 flex-1">
      <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
      </svg>
      <p class="text-sm text-gray-300 leading-relaxed">
        We use cookies to improve your experience on our website. By continuing to browse, you agree to our
        <a href="{{ route('privacy') }}" class="text-red-400 hover:text-red-300 underline font-semibold">Privacy Policy</a>.
      </p>
    </div>
    <div class="flex items-center gap-3 flex-shrink-0">
      <button @click="decline()"
              class="text-xs font-semibold tracking-wider text-gray-500 hover:text-gray-300 transition-colors px-3 py-2">
        DECLINE
      </button>
      <button @click="accept()"
              class="bg-red-800 hover:bg-red-700 text-white text-xs font-semibold tracking-wider px-5 py-2.5 transition-colors">
        ACCEPT ALL
      </button>
    </div>
  </div>
</div>

@include('partials._nav')

<main>

<!-- ================================================================
     HERO  — full-screen dark-overlay banner
================================================================ -->
<section id="home" class="relative min-h-screen flex flex-col">

  {{-- Video / image background with layered overlays --}}
  {{-- Place your video at public/videos/hero.mp4 (download from Facebook page) --}}
  <div class="absolute inset-0 overflow-hidden hero-img-bg">
    <video autoplay muted loop playsinline
           poster="{{ asset('images/hero-banner.jpg') }}"
           class="absolute inset-0 w-full h-full object-cover opacity-95">
      <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/55 via-black/25 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-black/10"></div>
  </div>

  {{-- Main hero content --}}
  <div class="relative flex-1 flex items-center">
    <div class="container mx-auto px-6 py-24 lg:py-32">

      {{-- Eyebrow --}}
      <div class="flex items-center gap-3 mb-7">
        <div class="h-0.5 w-8 sm:w-14 bg-red-500 flex-shrink-0"></div>
        <span class="text-[10px] tracking-[0.18em] sm:tracking-[0.35em] uppercase text-red-400 font-semibold leading-relaxed">Est. 1996 &nbsp;·&nbsp; Bacoor, Cavite &nbsp;·&nbsp; Philippines</span>
      </div>

      {{-- Logo identity (shows brand in hero at glance) --}}
      <div class="mb-10">
        <img src="{{ asset('images/sms-logo.png') }}"
             alt="Southern Mega Steel Enterprise Incorporated"
             class="h-20 sm:h-24 w-auto object-contain drop-shadow-2xl">
      </div>

      {{-- Main headline --}}
      <h1 class="font-display leading-none text-white max-w-5xl"
          style="font-size: clamp(2.2rem, 9vw, 8rem); line-height: 0.92;">
        YOUR PARTNER IN<br>
        <span class="text-red-500">STEEL</span><br>
        EXCELLENCE
      </h1>

      {{-- Description --}}
      <p class="mt-6 text-sm md:text-base lg:text-lg text-white/70 max-w-2xl leading-relaxed">
        Supplying premium structural steel — I-beams, H-beams, MS plates, pipes, sheet piles, rebars, purlins, and more — serving contractors and builders across Manila, Calabarzon, Bicol, and the Philippines since 1996.
      </p>

      {{-- CTA buttons --}}
      <div class="mt-8 flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3">
        <a href="#inquire"
           class="group inline-flex items-center justify-center gap-3 bg-red-700 hover:bg-red-600 text-white px-7 py-3.5 font-semibold tracking-wider text-sm transition-all duration-200 shadow-lg shadow-red-900/40">
          GET A QUOTE
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        <a href="#products"
           class="inline-flex items-center justify-center gap-3 border-2 border-white/50 hover:border-white text-white hover:bg-white/10 px-7 py-3.5 font-semibold tracking-wider text-sm transition-all duration-200">
          VIEW PRODUCTS
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </a>
        <a href="{{ asset('downloads/sms-catalog.pdf') }}" download
           class="inline-flex items-center justify-center gap-2 text-white/70 hover:text-white text-sm font-semibold tracking-wider transition-colors py-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
          </svg>
          DOWNLOAD CATALOG
        </a>
      </div>

      {{-- Scroll hint --}}
      <div class="mt-16 hidden md:flex items-center gap-3 text-white/30">
        <div class="relative w-px h-12 bg-white/20 overflow-hidden">
          <div class="absolute inset-x-0 top-0 h-6 bg-gradient-to-b from-white/80 to-transparent animate-bounce"></div>
        </div>
        <span class="text-[10px] tracking-[0.35em] uppercase">Scroll to explore</span>
      </div>
    </div>
  </div>

  {{-- Stats bar — pinned to bottom of full-screen hero --}}
  <div class="relative bg-black/65 backdrop-blur-sm border-t border-white/10">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-white/10">
        <div class="py-6 px-4 text-center">
          <div class="font-display text-4xl text-white leading-none">
            <span class="counter" data-target="30">0</span><span class="text-red-500">+</span>
          </div>
          <div class="text-[10px] tracking-widest uppercase text-white/45 mt-1.5">Years of Excellence</div>
        </div>
        <div class="py-6 px-4 text-center">
          <div class="font-display text-4xl text-white leading-none">
            <span class="counter" data-target="17">0</span><span class="text-red-500">+</span>
          </div>
          <div class="text-[10px] tracking-widest uppercase text-white/45 mt-1.5">Product Lines</div>
        </div>
        <div class="py-6 px-4 text-center">
          <div class="font-display text-4xl text-white leading-none">
            <span class="counter" data-target="100">0</span><span class="text-red-500">%</span>
          </div>
          <div class="text-[10px] tracking-widest uppercase text-white/45 mt-1.5">Quality Assured</div>
        </div>
        <div class="py-6 px-4 text-center">
          <div class="font-display text-4xl text-white leading-none">
            <span class="counter" data-target="500">0</span><span class="text-red-500">+</span>
          </div>
          <div class="text-[10px] tracking-widest uppercase text-white/45 mt-1.5">Projects Delivered</div>
        </div>
      </div>
    </div>
  </div>

  {{-- Gold gradient separator --}}
  <div class="h-[6px]" style="background:linear-gradient(90deg,#78350f 0%,#d97706 25%,#fbbf24 50%,#d97706 75%,#78350f 100%);"></div>
</section>

{{-- Brand Banner --}}
<div class="w-full bg-gray-100 border-b border-gray-200 overflow-hidden">
  <a href="#products">
    <img src="{{ asset('images/brand-banner.jpg') }}"
         alt="Southern Mega Steel Enterprise Inc. — Your Steel Solution Provider"
         class="w-full object-contain max-h-[180px] block mx-auto"
         style="max-width:1400px;">
  </a>
</div>

{{-- Products ticker --}}
<div class="bg-gray-950 text-white/55 py-3.5 overflow-hidden border-b border-white/5">
  <div class="flex gap-14 animate-marquee whitespace-nowrap font-display tracking-widest text-base">
    <span class="flex items-center gap-14 flex-shrink-0">
      <span>I-BEAM</span><span class="text-red-600">●</span>
      <span>H-BEAM</span><span class="text-red-600">●</span>
      <span>WIDE FLANGE</span><span class="text-red-600">●</span>
      <span>MS PLATE</span><span class="text-red-600">●</span>
      <span>CHEQUERED PLATE</span><span class="text-red-600">●</span>
      <span>WELDED STEEL PIPES</span><span class="text-red-600">●</span>
      <span>SEAMLESS PIPES</span><span class="text-red-600">●</span>
      <span>SHEET PILE</span><span class="text-red-600">●</span>
      <span>DEFORMED BAR</span><span class="text-red-600">●</span>
      <span>PLAIN ROUND BAR</span><span class="text-red-600">●</span>
      <span>C-Z PURLINS</span><span class="text-red-600">●</span>
      <span>CHANNEL BAR</span><span class="text-red-600">●</span>
      <span>ANGLE BAR</span><span class="text-red-600">●</span>
      <span>STEEL DECKING</span><span class="text-red-600">●</span>
      <span>STEEL MATTING</span><span class="text-red-600">●</span>
      <span>SQUARE &amp; RECT. TUBING</span><span class="text-red-600">●</span>
      <span>SHEETS &amp; COILS</span><span class="text-red-600">●</span>
    </span>
    <span class="flex items-center gap-14 flex-shrink-0" aria-hidden="true">
      <span>I-BEAM</span><span class="text-red-600">●</span>
      <span>H-BEAM</span><span class="text-red-600">●</span>
      <span>WIDE FLANGE</span><span class="text-red-600">●</span>
      <span>MS PLATE</span><span class="text-red-600">●</span>
      <span>CHEQUERED PLATE</span><span class="text-red-600">●</span>
      <span>WELDED STEEL PIPES</span><span class="text-red-600">●</span>
      <span>SEAMLESS PIPES</span><span class="text-red-600">●</span>
      <span>SHEET PILE</span><span class="text-red-600">●</span>
      <span>DEFORMED BAR</span><span class="text-red-600">●</span>
      <span>PLAIN ROUND BAR</span><span class="text-red-600">●</span>
      <span>C-Z PURLINS</span><span class="text-red-600">●</span>
      <span>CHANNEL BAR</span><span class="text-red-600">●</span>
      <span>ANGLE BAR</span><span class="text-red-600">●</span>
      <span>STEEL DECKING</span><span class="text-red-600">●</span>
      <span>STEEL MATTING</span><span class="text-red-600">●</span>
      <span>SQUARE &amp; RECT. TUBING</span><span class="text-red-600">●</span>
      <span>SHEETS &amp; COILS</span><span class="text-red-600">●</span>
    </span>
  </div>
</div>


<!-- ================================================================
     PARTNER / SUPPLIER LOGOS
================================================================ -->
<section class="py-10 bg-white border-b border-gray-100">
  <div class="container mx-auto px-6">
    <div class="text-center mb-8">
      <p class="text-[10px] tracking-[0.4em] uppercase text-gray-400 font-semibold">Our Accredited Mill & Supplier Partners</p>
    </div>
    <div class="flex flex-wrap items-center justify-center gap-8 md:gap-14 opacity-60 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-500">
      @php
      $partners = [
        ['name'=>'SteelAsia',         'abbr'=>'SA'],
        ['name'=>'Pag-asa Steel',      'abbr'=>'PS'],
        ['name'=>'ArcelorMittal',      'abbr'=>'AM'],
        ['name'=>'Nippon Steel',       'abbr'=>'NS'],
        ['name'=>'POSCO',              'abbr'=>'PC'],
        ['name'=>'Pacific Steel',      'abbr'=>'PSC'],
      ];
      @endphp
      @foreach($partners as $p)
      <div class="flex flex-col items-center gap-1.5 group">
        <div class="w-14 h-14 rounded bg-gray-100 group-hover:bg-red-50 border border-gray-200 group-hover:border-red-200 flex items-center justify-center transition-colors font-display text-xl text-gray-500 group-hover:text-red-700 transition-colors">
          {{ $p['abbr'] }}
        </div>
        <span class="text-[10px] text-gray-400 group-hover:text-gray-700 font-semibold tracking-wide transition-colors whitespace-nowrap">{{ $p['name'] }}</span>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- ================================================================
     ABOUT
================================================================ -->
<section id="about" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-6">
    <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

      {{-- Left: text --}}
      <div class="lg:col-span-6 reveal">
        <div class="flex items-center gap-3 mb-5">
          <div class="h-px w-10 bg-red-800"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Who We Are</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
          BUILDING THE<br><span class="text-red-800">PHILIPPINES</span><br>ONE BEAM AT A TIME
        </h2>
        <p class="mt-6 text-gray-600 leading-relaxed">
          Southern Mega Steel Enterprise Incorporated was established in <strong>1996</strong> in a small office in Imus, Cavite, with a dream to provide quality and standard steel products across the Philippines at an affordable price. Today, operating from <strong>Bacoor, Cavite</strong>, we have grown into a premier steel supplier trusted by contractors, builders, and developers nationwide.
        </p>
        <p class="mt-4 text-gray-600 leading-relaxed">
          We ensure that all products conform to international standards — guaranteeing superior efficiency, safety, stability, and product excellence. From Manila to Mindanao, our comprehensive range of structural steel solutions powers construction projects of every scale.
        </p>
        <div class="mt-8 grid grid-cols-2 gap-4">
          <div class="border-l-2 border-red-800 pl-4">
            <div class="font-display text-3xl text-gray-900">30<span class="text-red-800">+</span></div>
            <div class="text-xs tracking-widest uppercase text-gray-500 mt-1">Years in Business</div>
          </div>
          <div class="border-l-2 border-red-800 pl-4">
            <div class="font-display text-3xl text-gray-900">Nationwide</div>
            <div class="text-xs tracking-widest uppercase text-gray-500 mt-1">Delivery Coverage</div>
          </div>
          <div class="border-l-2 border-red-800 pl-4">
            <div class="font-display text-3xl text-gray-900">500<span class="text-red-800">+</span></div>
            <div class="text-xs tracking-widest uppercase text-gray-500 mt-1">Projects Completed</div>
          </div>
          <div class="border-l-2 border-red-800 pl-4">
            <div class="font-display text-3xl text-gray-900">100<span class="text-red-800">%</span></div>
            <div class="text-xs tracking-widest uppercase text-gray-500 mt-1">Quality Guaranteed</div>
          </div>
        </div>
      </div>

      {{-- Right: visual block --}}
      <div class="lg:col-span-6 reveal">
        <div class="relative">
          {{-- Main card --}}
          <div class="bg-gray-900 text-white p-10 md:p-12 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-40 h-40 bg-red-800 opacity-10 rounded-bl-full"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-red-800 opacity-10 rounded-tr-full"></div>
            <div class="relative z-10">
              <div class="font-display text-6xl text-red-600 mb-1">OUR MISSION</div>
              <p class="text-gray-300 leading-relaxed mt-4">
                To be the Philippines' most reliable steel supplier — delivering premium products on time, every time, with unmatched service and integrity.
              </p>
              <div class="mt-8 pt-8 border-t border-white/10">
                <div class="font-display text-6xl text-red-600 mb-1">OUR VISION</div>
                <p class="text-gray-300 leading-relaxed mt-4">
                  To power Philippine construction with world-class structural steel, building stronger communities and a more resilient infrastructure for generations to come.
                </p>
              </div>
            </div>
          </div>
          {{-- Accent bar --}}
          <div class="h-3 w-full" style="background: linear-gradient(90deg,#7f1d1d,#dc2626,#d97706);"></div>
          {{-- Offset tag --}}
          <div class="hidden sm:block absolute -bottom-4 -right-4 bg-red-800 text-white px-6 py-3 shadow-xl">
            <div class="font-display text-2xl">EST. 1996</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     PRODUCTS — with detail modal
================================================================ -->
@php
$products = [
  ['name'=>'I-Beam','img'=>'i-beam.jpg','select'=>'I-Beam',
   'icon'=>'M4 4h2v16H4V4zm7 0h2v16h-2V4zm7 0h2v16h-2V4z',
   'desc'=>'Standard I-section structural steel for beams, columns, and girders in buildings and bridges.',
   'spec_hdr'=>'Depth × Flange','specs'=>[['size'=>'3"×1.89"','w'=>'4.3'],['size'=>'4"×2.66"','w'=>'6.7'],['size'=>'5"×3"','w'=>'10.0'],['size'=>'6"×3.33"','w'=>'12.5'],['size'=>'8"×4"','w'=>'18.4'],['size'=>'10"×4.75"','w'=>'25.4'],['size'=>'12"×5"','w'=>'31.8']],
   'lengths'=>['6m'],'uses'=>['Building beams & girders','Mezzanine floor framing','Bridge construction','Industrial structures'],
   'note'=>'S-shape (American Standard). PNS / ASTM A36.'],

  ['name'=>'H-Beam','img'=>'h-beam.jpg','select'=>'H-Beam',
   'icon'=>'M3 5h18v2H3V5zm0 6h18v2H3v-2zm0 6h18v2H3v-2z',
   'desc'=>'Wide H-section beams used in heavy structural applications including columns, piles, and composite construction.',
   'spec_hdr'=>'H × B (mm)','specs'=>[['size'=>'100×100','w'=>'17.2'],['size'=>'125×125','w'=>'23.8'],['size'=>'150×150','w'=>'31.1'],['size'=>'175×175','w'=>'40.3'],['size'=>'200×200','w'=>'49.9'],['size'=>'250×250','w'=>'72.4']],
   'lengths'=>['6m','9m','12m'],'uses'=>['Columns','Heavy load-bearing','Industrial buildings','Bridge girders'],
   'note'=>'Grade SS400 / A36. Cut-to-length available.'],

  ['name'=>'Wide Flange','img'=>'wide-flange.jpg','select'=>'Wide Flange',
   'icon'=>'M4 3h4v18H4V3zm6 0h4v18h-4V3zm6 0h4v18h-4V3z',
   'desc'=>'H-shaped wide flange sections providing superior load distribution and bending resistance for structural frames.',
   'spec_hdr'=>'Designation','specs'=>[['size'=>'W4×13','w'=>'19.3'],['size'=>'W5×16','w'=>'23.8'],['size'=>'W6×20','w'=>'29.8'],['size'=>'W8×24','w'=>'35.7'],['size'=>'W10×30','w'=>'44.6'],['size'=>'W12×40','w'=>'59.5']],
   'lengths'=>['6m','9m','12m'],'uses'=>['Structural frames','Column-beam connections','Heavy-duty supports'],
   'note'=>'AISC / PNS standard. Grade A36 / A992.'],

  ['name'=>'Mild Steel Plate','img'=>'ms-plate.jpg','select'=>'Mild Steel Plate',
   'icon'=>'M3 3h18v18H3V3zm2 2v14h14V5H5z',
   'desc'=>'Flat mild steel plates in a wide range of thicknesses for fabrication, base plates, gussets, and general construction.',
   'spec_hdr'=>null,'specs'=>null,
   'sizes'=>['1.5mm','2mm','3mm','4.5mm','6mm','8mm','10mm','12mm','16mm','19mm','25mm'],
   'sheet_sizes'=>["4'×8' (1219×2438mm)","5'×10' (1524×3048mm)","6'×20' (1829×6096mm)"],
   'lengths'=>null,'uses'=>['Base & gusset plates','Equipment platforms','Fabrication','Structural connections'],
   'note'=>'Hot-rolled mild steel. Grade A36 / SS400.'],

  ['name'=>'Chequered Plate','img'=>'chequered-plate.jpg','select'=>'Chequered Plate',
   'icon'=>'M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z',
   'desc'=>'Raised-pattern mild steel plates offering slip resistance — ideal for flooring, walkways, ramps, and platforms.',
   'spec_hdr'=>null,'specs'=>null,
   'sizes'=>['2mm','2.5mm','3mm','4.5mm','6mm'],
   'sheet_sizes'=>["4'×8' (1219×2438mm)"],
   'lengths'=>null,'uses'=>['Industrial flooring','Walkways & ramps','Vehicle platforms','Safety flooring'],
   'note'=>'Diamond raised pattern, slip-resistant surface.'],

  ['name'=>'Welded Steel Pipes','img'=>'welded-pipes.jpg','select'=>'Welded Steel Pipes',
   'icon'=>'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z',
   'desc'=>'ERW (electric resistance welded) steel pipes for water, gas, structural columns, and general construction piping.',
   'spec_hdr'=>'Nominal Size (OD)','specs'=>[['size'=>'1/2" (15mm)','w'=>'1.27'],['size'=>'3/4" (20mm)','w'=>'1.69'],['size'=>'1" (25mm)','w'=>'2.50'],['size'=>'1½" (40mm)','w'=>'4.05'],['size'=>'2" (50mm)','w'=>'5.44'],['size'=>'3" (80mm)','w'=>'11.3'],['size'=>'4" (100mm)','w'=>'16.1'],['size'=>'6" (150mm)','w'=>'28.3']],
   'lengths'=>['6m'],'uses'=>['Water & gas lines','Structural columns','Scaffolding','Fencing & gates'],
   'note'=>'ERW, Schedule 40. ASTM A53 / PNS.'],

  ['name'=>'Seamless Pipes','img'=>'seamless-pipes.jpg','select'=>'Seamless Pipes',
   'icon'=>'M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1zm0 2c4.97 0 9 4.03 9 9s-4.03 9-9 9-9-4.03-9-9 4.03-9 9-9z',
   'desc'=>'High-pressure seamless steel pipes for oil & gas, mechanical, boiler, and structural applications requiring high integrity.',
   'spec_hdr'=>'Nominal Size (OD)','specs'=>[['size'=>'1" (25mm)','w'=>'2.50'],['size'=>'1½" (40mm)','w'=>'4.05'],['size'=>'2" (50mm)','w'=>'5.44'],['size'=>'3" (80mm)','w'=>'11.3'],['size'=>'4" (100mm)','w'=>'16.1'],['size'=>'6" (150mm)','w'=>'28.3']],
   'lengths'=>['6m','9m'],'uses'=>['Oil & gas lines','High-pressure systems','Boiler piping','Hydraulic systems'],
   'note'=>'Hot-finished, Sch 40/80. ASTM A106 / API 5L.'],

  ['name'=>'Square & Rect. Tubing','img'=>'square-tubing.jpg','select'=>'Square & Rectangular Tubing',
   'icon'=>'M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z',
   'desc'=>'Square and rectangular hollow steel sections (HSS) for columns, trusses, frames, gates, and architectural metalwork.',
   'spec_hdr'=>'Size × Wall Thickness','specs'=>[['size'=>'1"×1"×1.5mm','w'=>'0.89'],['size'=>'1½"×1½"×1.5mm','w'=>'1.37'],['size'=>'2"×2"×1.5mm','w'=>'1.87'],['size'=>'2"×4"×2mm','w'=>'3.73'],['size'=>'3"×3"×2mm','w'=>'4.64'],['size'=>'4"×4"×2mm','w'=>'6.28']],
   'lengths'=>['6m'],'uses'=>['Columns & posts','Trusses & frames','Gates & grilles','Furniture & fixtures'],
   'note'=>'Cold-formed ERW. Grade SS400.'],

  ['name'=>'Sheet Pile','img'=>'sheet-pile.jpg','select'=>'Sheet Pile',
   'icon'=>'M4 2h4v20H4V2zm6 0h4v20h-4V2zm6 0h4v20h-4V2z',
   'desc'=>'Interlocking Z- and U-profile steel sheet piles for retaining walls, cofferdams, and excavation support.',
   'spec_hdr'=>null,'specs'=>null,
   'sizes'=>['Z-Profile 400mm wide','Z-Profile 500mm wide','U-Profile 400mm wide','U-Profile 600mm wide'],
   'sheet_sizes'=>null,
   'lengths'=>['6m','9m','12m','Custom lengths'],'uses'=>['Retaining walls','Cofferdams','Excavation support','Waterfront structures'],
   'note'=>'Interlocking hot-rolled sections. EN 10248 / JIS A 5528.'],

  ['name'=>'Sheets & Coils','img'=>'sheets-coils.jpg','select'=>'Sheets & Coils',
   'icon'=>'M3 9h18v6H3V9zm0-6h18v4H3V3zm0 12h18v4H3v-4z',
   'desc'=>'Hot-rolled and cold-rolled steel sheets and coils for fabrication, roofing, cladding, and industrial manufacturing.',
   'spec_hdr'=>null,'specs'=>null,
   'sizes'=>['HR: 2mm · 2.5mm · 3mm · 4mm · 5mm · 6mm','CR: 0.4mm · 0.6mm · 0.8mm · 1.0mm · 1.2mm · 1.5mm · 2mm'],
   'sheet_sizes'=>["4'×8'","5'×10'","Coil form available"],
   'lengths'=>null,'uses'=>['Roofing & cladding','Fabrication works','Automotive & appliance','Industrial manufacturing'],
   'note'=>'HR (hot-rolled) & CR (cold-rolled). ASTM A36 / A1008.'],

  ['name'=>'Deformed Bar (Rebar)','img'=>'deformed-bar.jpg','select'=>'Deformed Bar (Rebar)',
   'icon'=>'M4 11h16v2H4v-2zm-1-5h18v2H3V6zm2 10h14v2H5v-2z',
   'desc'=>'Ribbed high-yield reinforcing bars (Grade 40/60) for reinforced concrete structures — columns, beams, slabs, footings.',
   'spec_hdr'=>'Diameter & Grade','specs'=>[['size'=>'10mm — Gr.40','w'=>'0.617'],['size'=>'12mm — Gr.40','w'=>'0.888'],['size'=>'16mm — Gr.60','w'=>'1.580'],['size'=>'20mm — Gr.60','w'=>'2.470'],['size'=>'25mm — Gr.60','w'=>'3.850'],['size'=>'28mm — Gr.60','w'=>'4.830'],['size'=>'32mm — Gr.60','w'=>'6.310']],
   'lengths'=>['6m','9m','12m'],'uses'=>['Concrete columns','Beams & slabs','Footings & piles','Road pavement'],
   'note'=>'PNS 49 / ASTM A615. Grade 40 (275MPa) & Grade 60 (415MPa).'],

  ['name'=>'Plain Round Bar','img'=>'round-bar.jpg','select'=>'Plain Round Bar',
   'icon'=>'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z',
   'desc'=>'Smooth solid round steel bars for concrete reinforcement, fabrication, bolts, shafts, pins, and general metalworking.',
   'spec_hdr'=>'Diameter','specs'=>[['size'=>'10mm','w'=>'0.617'],['size'=>'12mm','w'=>'0.888'],['size'=>'16mm','w'=>'1.580'],['size'=>'20mm','w'=>'2.470'],['size'=>'25mm','w'=>'3.850'],['size'=>'32mm','w'=>'6.310'],['size'=>'38mm','w'=>'8.900']],
   'lengths'=>['6m'],'uses'=>['Bolts & fasteners','Shafts & pins','Concrete reinforcement','General fabrication'],
   'note'=>'Mild steel Grade A36. Cut-to-length on request.'],

  ['name'=>'Channel Bar','img'=>'channel-bar.jpg','select'=>'Channel Bar',
   'icon'=>'M5 3h14v4H9v10h10v4H5V3z',
   'desc'=>'C-channel (U-channel) structural steel sections for beams, purlins, framing, and equipment support structures.',
   'spec_hdr'=>'H × B (mm)','specs'=>[['size'=>'75×40','w'=>'5.58'],['size'=>'100×50','w'=>'8.07'],['size'=>'125×65','w'=>'12.5'],['size'=>'150×65','w'=>'15.2'],['size'=>'180×70','w'=>'18.8'],['size'=>'200×75','w'=>'22.4']],
   'lengths'=>['6m'],'uses'=>['Beams & lintels','Equipment supports','Framing & bracing','Conveyor rails'],
   'note'=>'Hot-rolled C-channel. Grade A36 / SS400.'],

  ['name'=>'C-Z Purlins','img'=>'cz-purlins.jpg','select'=>'C-Z Purlins',
   'icon'=>'M3 4h18v4H3V4zm4 8h14v4H7v-4zm-4 8h18v4H3v-4z',
   'desc'=>'Lightweight cold-formed C and Z steel purlins for roof and wall framing in pre-engineered buildings and steel structures.',
   'spec_hdr'=>'Section × Thickness','specs'=>[['size'=>'C75×45mm, 1.5mm','w'=>'1.50'],['size'=>'C100×50mm, 1.5mm','w'=>'1.90'],['size'=>'C150×65mm, 2.0mm','w'=>'3.80'],['size'=>'C200×65mm, 2.5mm','w'=>'5.50'],['size'=>'Z150×65mm, 2.0mm','w'=>'4.00'],['size'=>'Z200×65mm, 2.5mm','w'=>'5.80']],
   'lengths'=>['6m'],'uses'=>['Roof purlins','Wall girts','Pre-engineered buildings','Steel warehouse framing'],
   'note'=>'Cold-formed. Galvanized or bare. G550 / A36.'],

  ['name'=>'Angle Bar','img'=>'angle-bar.jpg','select'=>'Angle Bar',
   'icon'=>'M3 3h8v18H3V3zm2 2v14h4V5H5zm8 14h8v2h-8v-2z',
   'desc'=>'L-shaped equal and unequal leg steel angles for bracing, frames, brackets, shelving, and general structural fabrication.',
   'spec_hdr'=>'L × L × Thickness','specs'=>[['size'=>'25×25×3mm','w'=>'1.12'],['size'=>'30×30×3mm','w'=>'1.36'],['size'=>'40×40×4mm','w'=>'2.42'],['size'=>'50×50×5mm','w'=>'3.77'],['size'=>'65×65×6mm','w'=>'5.91'],['size'=>'75×75×6mm','w'=>'6.85'],['size'=>'100×100×8mm','w'=>'12.2']],
   'lengths'=>['6m'],'uses'=>['Bracing & supports','Shelving frames','Brackets & clips','Handrail posts'],
   'note'=>'Equal leg angles, hot-rolled. Grade A36 / SS400.'],

  ['name'=>'Steel Decking','img'=>'steel-decking.jpg','select'=>'Steel Decking',
   'icon'=>'M3 5h18v2H3V5zm0 4h18v2H3V9zm0 4h18v2H3v-2zm0 4h18v2H3v-2z',
   'desc'=>'Corrugated steel deck panels used as permanent formwork and structural floor decking for composite concrete slab systems.',
   'spec_hdr'=>null,'specs'=>null,
   'sizes'=>['0.8mm × 50mm profile','1.0mm × 50mm profile','1.2mm × 76mm profile','1.5mm × 76mm profile'],
   'sheet_sizes'=>['600mm coverage width','900mm coverage width'],
   'lengths'=>['Custom cut lengths'],'uses'=>['Composite floor slabs','Roof decking','Permanent formwork','Industrial flooring'],
   'note'=>'Galvanized, structural grade. ASC profiles.'],

  ['name'=>'Steel Matting','img'=>'steel-matting.jpg','select'=>'Steel Matting',
   'icon'=>'M3 3h18v2H3V3zm0 4h18v2H3V7zm0 4h18v2H3v-2zm0 4h18v2H3v-2zm0 4h18v2H3v-2zM3 3v18h2V3H3zm4 0v18h2V3H7zm4 0v18h2V3h-2zm4 0v18h2V3h-2zm4 0v18h2V3h-2z',
   'desc'=>'Welded wire mesh (WWM) steel matting for concrete slab reinforcement, walls, and road pavement applications.',
   'spec_hdr'=>null,'specs'=>null,
   'sizes'=>['4mm wire, 150×150mm grid','5mm wire, 150×150mm grid','6mm wire, 200×200mm grid','8mm wire, 200×200mm grid'],
   'sheet_sizes'=>['2.4m × 6.0m sheets','1.2m × 2.4m sheets'],
   'lengths'=>null,'uses'=>['Concrete slab reinforcement','Road pavement','Wall mesh','Precast elements'],
   'note'=>'Welded wire mesh (WWM). PNS 49 compliant.'],
];
@endphp

<script>
const smsProducts = @json($products);
document.addEventListener('alpine:init', () => {
  Alpine.data('productSection', () => ({
    modal: false,
    product: {},
    imgErrors: {},
    open(i) {
      this.product = smsProducts[i];
      this.modal = true;
      document.body.style.overflow = 'hidden';
    },
    close() {
      this.modal = false;
      document.body.style.overflow = '';
    },
    goQuote() {
      const name = this.product.select || this.product.name;
      this.close();
      this.$nextTick(() => {
        const sel = document.querySelector('select[name="q_product"]');
        if (sel && name) {
          for (let o of sel.options) {
            if (o.text === name || o.text.startsWith(name.split(' ')[0])) {
              o.selected = true;
              break;
            }
          }
        }
        document.getElementById('inquire').scrollIntoView({ behavior: 'smooth' });
      });
    }
  }));
});
</script>

<section id="products" class="py-20 md:py-28 bg-gray-50"
  x-data="productSection"
  @keydown.escape.window="modal && close()">

  <div class="container mx-auto px-6">

    <div class="text-center mb-14 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-800"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Our Products</span>
        <div class="h-px w-10 bg-red-800"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
        PREMIUM STEEL <span class="text-red-800">PRODUCT LINE</span>
      </h2>
      <p class="mt-4 text-gray-600 max-w-xl mx-auto">
        Click any product to view sizes, weights, and specifications. Industry-standard steel ready for your project.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 reveal">
      @foreach($products as $i => $product)
      <div class="group bg-white border border-gray-200 hover:border-red-800 hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden cursor-pointer"
           @click="open({{ $i }})">

        <div class="relative h-48 overflow-hidden bg-gray-100 flex-shrink-0">
          <img src="{{ asset('images/products/'.$product['img']) }}"
               alt="{{ $product['name'] }}"
               x-on:error="imgErrors[{{ $i }}] = true"
               :class="imgErrors[{{ $i }}] ? 'hidden' : ''"
               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          {{-- Placeholder when no image --}}
          <div :class="imgErrors[{{ $i }}] ? 'flex' : 'hidden'"
               class="absolute inset-0 flex-col items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200 gap-3">
            <div class="w-14 h-14 bg-white border border-gray-200 flex items-center justify-center shadow-sm">
              <svg class="w-7 h-7 text-red-700" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $product['icon'] }}"/>
              </svg>
            </div>
            <span class="text-[11px] text-gray-400 font-semibold tracking-wide uppercase text-center px-2">{{ $product['name'] }}</span>
          </div>
          <div :class="imgErrors[{{ $i }}] ? 'hidden' : ''"
               class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent pointer-events-none"></div>
          <div :class="imgErrors[{{ $i }}] ? 'hidden' : ''"
               class="absolute bottom-0 left-0 right-0 px-4 pb-3.5 pointer-events-none">
            <div class="font-display text-lg text-white leading-tight drop-shadow">{{ $product['name'] }}</div>
          </div>
          <div class="absolute top-3 right-3 bg-red-700 text-white text-[9px] tracking-widest uppercase px-2 py-0.5 font-semibold shadow">In Stock</div>
        </div>

        <div class="p-5 flex-1 flex flex-col">
          <div :class="imgErrors[{{ $i }}] ? 'block' : 'hidden'"
               class="font-display text-xl text-gray-900 group-hover:text-red-800 transition-colors mb-2 mt-1">
            {{ $product['name'] }}
          </div>
          <p class="text-sm text-gray-500 leading-relaxed flex-1 line-clamp-3">{{ $product['desc'] }}</p>
          <div class="mt-4 border-t border-gray-100 pt-4 flex items-center justify-between">
            <span class="text-xs font-semibold tracking-widest uppercase text-red-800 group-hover:text-red-900 flex items-center gap-1.5 transition-colors">
              View Details
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
              </svg>
            </span>
            @if(!empty($product['specs']))
            <span class="text-[10px] text-gray-400 font-semibold">{{ count($product['specs']) }} sizes</span>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
      <a href="#inquire"
         class="inline-flex items-center gap-2 border-2 border-gray-900 hover:bg-gray-900 hover:text-white text-gray-900 px-8 py-3.5 font-semibold tracking-wider text-sm transition-all duration-200">
        REQUEST FULL PRODUCT LIST
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
      <a href="{{ asset('downloads/sms-catalog.pdf') }}" download
         class="inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white px-8 py-3.5 font-semibold tracking-wider text-sm transition-all duration-200">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
        </svg>
        DOWNLOAD CATALOG (PDF)
      </a>
    </div>
  </div>

  {{-- ── Product Detail Modal ── --}}
  <div x-show="modal"
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0"
       x-transition:enter-end="opacity-100"
       x-transition:leave="transition ease-in duration-150"
       x-transition:leave-start="opacity-100"
       x-transition:leave-end="opacity-0"
       x-cloak
       class="fixed inset-0 z-[9000] bg-black/80 overflow-y-auto"
       @click.self="close()">
    <div class="min-h-full flex items-center justify-center p-4 py-8">

      <div class="bg-white w-full max-w-3xl shadow-2xl"
           x-show="modal"
           x-transition:enter="transition ease-out duration-200"
           x-transition:enter-start="opacity-0 scale-95 translate-y-4"
           x-transition:enter-end="opacity-100 scale-100 translate-y-0"
           x-transition:leave="transition ease-in duration-150"
           x-transition:leave-start="opacity-100 scale-100 translate-y-0"
           x-transition:leave-end="opacity-0 scale-95 translate-y-4"
           @click.stop>

        {{-- Modal header --}}
        <div class="bg-red-800 px-6 py-5 flex items-start justify-between gap-4">
          <div>
            <div class="text-[10px] tracking-[0.35em] uppercase text-red-300 font-semibold mb-1">Product Specifications</div>
            <h3 class="font-display text-2xl md:text-3xl text-white leading-none" x-text="product.name"></h3>
          </div>
          <div class="flex items-center gap-3 flex-shrink-0">
            <span class="hidden sm:inline bg-green-500 text-white text-[9px] tracking-widest uppercase px-2.5 py-1 font-bold">In Stock</span>
            <button @click="close()"
                    class="w-9 h-9 rounded-full bg-white/15 hover:bg-white/30 flex items-center justify-center transition-colors"
                    aria-label="Close">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
        </div>

        {{-- Modal body --}}
        <div class="grid md:grid-cols-5">

          {{-- Left: description + uses + lengths --}}
          <div class="md:col-span-2 p-6 border-b md:border-b-0 md:border-r border-gray-100">
            <p class="text-sm text-gray-600 leading-relaxed" x-text="product.desc"></p>

            <div class="mt-5">
              <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-gray-500 mb-3">Common Uses</div>
              <ul class="space-y-2">
                <template x-for="u in product.uses" :key="u">
                  <li class="flex items-start gap-2 text-sm text-gray-700">
                    <span class="w-1.5 h-1.5 bg-red-700 rounded-full mt-1.5 flex-shrink-0"></span>
                    <span x-text="u"></span>
                  </li>
                </template>
              </ul>
            </div>

            <template x-if="product.lengths && product.lengths.length">
              <div class="mt-5 pt-4 border-t border-gray-100">
                <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-gray-500 mb-2">Standard Lengths</div>
                <div class="flex flex-wrap gap-2">
                  <template x-for="l in product.lengths" :key="l">
                    <span class="bg-gray-100 text-gray-700 text-xs font-semibold px-3 py-1" x-text="l"></span>
                  </template>
                </div>
              </div>
            </template>
          </div>

          {{-- Right: sizes / specs table --}}
          <div class="md:col-span-3 p-6">
            <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-gray-500 mb-3">Available Sizes</div>

            {{-- Size + weight table --}}
            <template x-if="product.specs">
              <div>
                <div class="overflow-x-auto">
                <table class="w-full text-sm border-collapse">
                  <thead>
                    <tr class="bg-gray-900 text-white">
                      <th class="text-left px-3 py-2.5 text-[10px] tracking-widest uppercase font-semibold" x-text="product.spec_hdr"></th>
                      <th class="text-right px-3 py-2.5 text-[10px] tracking-widest uppercase font-semibold">kg / m</th>
                    </tr>
                  </thead>
                  <tbody>
                    <template x-for="(s, i) in product.specs" :key="i">
                      <tr :class="i % 2 === 0 ? 'bg-white' : 'bg-gray-50'" class="border-b border-gray-100 hover:bg-red-50 transition-colors">
                        <td class="px-3 py-2.5 font-semibold text-gray-900" x-text="s.size"></td>
                        <td class="px-3 py-2.5 text-right font-bold text-red-700 tabular-nums" x-text="s.w"></td>
                      </tr>
                    </template>
                  </tbody>
                </table>
                </div>
                <p class="mt-2 text-[10px] text-gray-400 italic">*Theoretical weight ±3%. Cut-to-length available on request.</p>
              </div>
            </template>

            {{-- Size badges (plates, sheets, etc.) --}}
            <template x-if="product.sizes && !product.specs">
              <div>
                <div class="flex flex-wrap gap-2">
                  <template x-for="(sz, i) in product.sizes" :key="i">
                    <span class="bg-gray-900 text-white text-xs font-semibold px-3 py-1.5" x-text="sz"></span>
                  </template>
                </div>
                <template x-if="product.sheet_sizes">
                  <div class="mt-4">
                    <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-gray-500 mb-2">Sheet / Panel Sizes</div>
                    <div class="flex flex-wrap gap-2">
                      <template x-for="(ss, i) in product.sheet_sizes" :key="i">
                        <span class="border border-gray-300 text-gray-700 text-xs font-semibold px-3 py-1.5" x-text="ss"></span>
                      </template>
                    </div>
                  </div>
                </template>
              </div>
            </template>

            {{-- Compliance note --}}
            <template x-if="product.note">
              <div class="mt-5 bg-gray-50 border border-gray-200 px-4 py-3">
                <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-gray-500 mb-1">Standard / Compliance</div>
                <div class="text-xs text-gray-600 leading-relaxed" x-text="product.note"></div>
              </div>
            </template>
          </div>
        </div>

        {{-- Modal footer CTA --}}
        <div class="border-t border-gray-200 px-6 py-4 bg-gray-50 flex flex-col sm:flex-row items-center justify-between gap-4">
          <p class="text-sm text-gray-500">Need a specific size or quantity? We deliver nationwide.</p>
          <button @click="goQuote()"
                  class="flex-shrink-0 inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white px-6 py-3 font-semibold text-sm tracking-wider transition-colors w-full sm:w-auto justify-center">
            GET A QUOTE FOR THIS PRODUCT
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </button>
        </div>

      </div>
    </div>
  </div>

</section>


<!-- ================================================================
     PROJECT GALLERY  — with lightbox
================================================================ -->
@php
$gallery = [
  ['file'=>'project-1.jpg','label'=>'Commercial Building','loc'=>'Metro Manila'],
  ['file'=>'project-2.jpg','label'=>'Industrial Warehouse','loc'=>'Cavite'],
  ['file'=>'project-3.jpg','label'=>'Bridge Structure','loc'=>'Calabarzon'],
  ['file'=>'project-4.jpg','label'=>'Steel Fabrication','loc'=>'Bacoor'],
  ['file'=>'project-5.jpg','label'=>'Residential Complex','loc'=>'Batangas'],
  ['file'=>'project-6.jpg','label'=>'Road Infrastructure','loc'=>'Laguna'],
  ['file'=>'project-7.jpg','label'=>'Steel Delivery','loc'=>'Nationwide'],
  ['file'=>'project-8.jpg','label'=>'High-rise Frame','loc'=>'Makati'],
];
$galleryJson = json_encode(array_map(fn($g) => [
  'src'   => asset('images/gallery/'.$g['file']),
  'label' => $g['label'],
  'loc'   => $g['loc'],
], $gallery));
@endphp

<section id="gallery" class="py-20 md:py-28 bg-gray-900 text-white"
  x-data="{
    open: false,
    idx: 0,
    images: {{ $galleryJson }},
    show(i)  { this.idx = i; this.open = true; document.body.style.overflow = 'hidden'; },
    close()  { this.open = false; document.body.style.overflow = ''; },
    prev()   { this.idx = (this.idx - 1 + this.images.length) % this.images.length; },
    next()   { this.idx = (this.idx + 1) % this.images.length; }
  }"
  @keydown.escape.window="open && close()"
  @keydown.arrow-left.window="open && prev()"
  @keydown.arrow-right.window="open && next()">

  <div class="container mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-600"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-400 font-semibold">Our Work</span>
        <div class="h-px w-10 bg-red-600"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none">
        OUR STEEL <span class="text-red-500">BUILT THIS</span>
      </h2>
      <p class="mt-4 text-gray-400 max-w-xl mx-auto">
        From residential buildings to commercial towers and infrastructure — our structural steel is at the core of projects across the Philippines.
      </p>
    </div>

    {{-- Gallery grid --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 reveal">
      @foreach($gallery as $i => $g)
      <div class="group relative overflow-hidden aspect-square bg-gray-800 cursor-zoom-in"
           x-data="{ err: false }"
           @click="!err && show({{ $i }})">
        <img src="{{ asset('images/gallery/'.$g['file']) }}"
             alt="{{ $g['label'] }}"
             x-on:error="err = true"
             x-show="!err"
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
        {{-- Placeholder --}}
        <div x-show="err" x-cloak
             class="absolute inset-0 flex flex-col items-center justify-center bg-gray-800 gap-2">
          <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 3h18M3 21h18"/>
          </svg>
          <span class="text-xs text-gray-600">Add photo</span>
        </div>
        {{-- Hover overlay --}}
        <div x-show="!err"
             class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
          <div class="font-display text-base text-white leading-tight">{{ $g['label'] }}</div>
          <div class="text-xs text-red-400 mt-1">{{ $g['loc'] }}</div>
          <div class="mt-2 flex items-center gap-1 text-[10px] text-white/60 font-semibold tracking-wider">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
            CLICK TO ENLARGE
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="mt-10 text-center reveal">
      <a href="https://www.facebook.com/southernmegasteel/photos" target="_blank" rel="noopener"
         class="inline-flex items-center gap-2 border border-white/30 hover:border-white text-white hover:bg-white/10 px-7 py-3 text-sm font-semibold tracking-wider transition-all">
        SEE MORE ON FACEBOOK ↗
      </a>
    </div>
  </div>

  {{-- ── Lightbox overlay ── --}}
  <div x-show="open"
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0"
       x-transition:enter-end="opacity-100"
       x-transition:leave="transition ease-in duration-150"
       x-transition:leave-start="opacity-100"
       x-transition:leave-end="opacity-0"
       x-cloak
       class="fixed inset-0 z-[9000] bg-black/95 flex items-center justify-center"
       @click.self="close()">

    {{-- Close --}}
    <button @click="close()"
            class="absolute top-5 right-5 w-10 h-10 rounded-full bg-white/10 hover:bg-white/25 flex items-center justify-center transition-colors z-10"
            aria-label="Close">
      <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    {{-- Prev --}}
    <button @click="prev()"
            class="absolute left-3 md:left-6 w-11 h-11 rounded-full bg-white/10 hover:bg-red-800 flex items-center justify-center transition-colors z-10"
            aria-label="Previous">
      <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
      </svg>
    </button>

    {{-- Image --}}
    <div class="max-w-5xl w-full mx-16 flex flex-col items-center">
      <template x-for="(img, i) in images" :key="i">
        <div x-show="idx === i" class="w-full text-center">
          <img :src="img.src" :alt="img.label"
               class="max-h-[78vh] max-w-full mx-auto object-contain shadow-2xl">
          <div class="mt-5 flex items-center justify-center gap-3">
            <span class="font-display text-lg text-white tracking-wider" x-text="img.label"></span>
            <span class="text-red-400 text-sm" x-text="'· ' + img.loc"></span>
          </div>
          <div class="mt-3 text-xs text-white/40" x-text="(i + 1) + ' / ' + images.length"></div>
        </div>
      </template>
    </div>

    {{-- Next --}}
    <button @click="next()"
            class="absolute right-3 md:right-6 w-11 h-11 rounded-full bg-white/10 hover:bg-red-800 flex items-center justify-center transition-colors z-10"
            aria-label="Next">
      <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
      </svg>
    </button>

    {{-- Dot indicators --}}
    <div class="absolute bottom-5 flex gap-2">
      <template x-for="(img, i) in images" :key="i">
        <button @click="idx = i"
                :class="idx === i ? 'bg-red-600 w-5' : 'bg-white/30 hover:bg-white/60 w-2'"
                class="h-2 rounded-full transition-all duration-200">
        </button>
      </template>
    </div>
  </div>

</section>


<!-- ================================================================
     SERVICES
================================================================ -->
<section id="services" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-6">

    <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-start">

      {{-- Left: heading --}}
      <div class="reveal">
        <div class="flex items-center gap-3 mb-5">
          <div class="h-px w-10 bg-red-800"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">What We Offer</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
          COMPREHENSIVE<br><span class="text-red-800">STEEL SERVICES</span>
        </h2>
        <p class="mt-6 text-gray-600 leading-relaxed max-w-md">
          Beyond supplying steel, we provide end-to-end support — from specification advice to last-mile delivery — so your project runs without delay.
        </p>
        <a href="#contact" class="mt-8 inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white px-7 py-3.5 font-semibold text-sm tracking-wider transition-all">
          TALK TO US
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>

      {{-- Right: service cards --}}
      <div class="grid sm:grid-cols-2 gap-5 reveal">

        @php
        $services = [
          [
            'title' => 'Steel Trading',
            'desc'  => 'Competitive supply of a full range of structural steel products direct from accredited mills and distributors.',
            'num'   => '01',
          ],
          [
            'title' => 'Nationwide Delivery',
            'desc'  => 'Reliable delivery fleet covering Luzon, Visayas, and Mindanao with on-time, damage-free logistics.',
            'num'   => '02',
          ],
          [
            'title' => 'Custom Fabrication',
            'desc'  => 'Steel cutting, drilling, and fabrication services tailored to your project drawings and specifications.',
            'num'   => '03',
          ],
          [
            'title' => 'Technical Consultation',
            'desc'  => 'Expert guidance on material selection, load requirements, and cost optimization for your structure.',
            'num'   => '04',
          ],
          [
            'title' => 'Volume Pricing',
            'desc'  => 'Tiered bulk pricing and flexible payment terms for contractors and developers with high-volume needs.',
            'num'   => '05',
          ],
          [
            'title' => 'Project Sourcing',
            'desc'  => 'One-call sourcing for complete project steel lists — saving you time, cost, and coordination effort.',
            'num'   => '06',
          ],
        ];
        @endphp

        @foreach($services as $svc)
        <div class="group border border-gray-200 hover:border-red-800 p-6 transition-all duration-200 hover:shadow-md">
          <div class="font-display text-4xl text-gray-100 group-hover:text-red-100 leading-none mb-3 transition-colors">
            {{ $svc['num'] }}
          </div>
          <div class="font-display text-xl text-gray-900 group-hover:text-red-800 transition-colors mb-2">
            {{ $svc['title'] }}
          </div>
          <p class="text-sm text-gray-500 leading-relaxed">{{ $svc['desc'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     WHY CHOOSE US
================================================================ -->
<section id="why-us" class="py-20 md:py-28 bg-gray-900 text-white relative overflow-hidden">
  {{-- Background accent --}}
  <div class="absolute inset-0 opacity-5 pointer-events-none"
       style="background-image: repeating-linear-gradient(0deg,transparent,transparent 39px,#fff 39px,#fff 40px), repeating-linear-gradient(90deg,transparent,transparent 39px,#fff 39px,#fff 40px);"></div>

  <div class="container mx-auto px-6 relative">

    <div class="text-center mb-14 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-600"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-400 font-semibold">Why Choose Us</span>
        <div class="h-px w-10 bg-red-600"></div>
      </div>
      <h2 class="font-display text-3xl sm:text-4xl md:text-5xl lg:text-[3.5rem] leading-none">
        THE <span class="text-red-500">SOUTHERN MEGA STEEL</span> ADVANTAGE
      </h2>
      <p class="mt-4 text-gray-400 max-w-xl mx-auto">
        Here's why hundreds of contractors and developers across the Philippines trust us as their steel partner.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal">

      @php
      $whys = [
        [
          'title' => 'Competitive Pricing',
          'desc'  => 'Direct mill partnerships allow us to offer the most competitive market prices without compromising on quality.',
          'icon'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        ],
        [
          'title' => 'Premium Quality Steel',
          'desc'  => 'Every product meets Philippine National Standards (PNS) and is sourced from certified, accredited steel mills.',
          'icon'  => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
        ],
        [
          'title' => 'Nationwide Delivery',
          'desc'  => 'Our own fleet of trucks ensures fast, safe, and on-schedule delivery to any project site in the Philippines.',
          'icon'  => 'M8 17a2 2 0 100-4 2 2 0 000 4zm8 0a2 2 0 100-4 2 2 0 000 4zm-8-7h8m-9 0H4a1 1 0 01-1-1V5a1 1 0 011-1h3m10 0h1a1 1 0 011 1v9M10 5V4m0 1v9m-4-9v9',
        ],
        [
          'title' => 'Industry Expertise',
          'desc'  => 'Over 25 years of steel industry experience means we understand your project needs and provide the right solutions.',
          'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        ],
        [
          'title' => 'Reliable Stock Availability',
          'desc'  => 'Extensive warehousing ensures consistent stock levels so your project never stalls waiting for materials.',
          'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
        ],
        [
          'title' => 'Fast Quote Turnaround',
          'desc'  => 'Submit your material list and receive a detailed quotation within 24 hours — no waiting, no hassle.',
          'icon'  => 'M13 10V3L4 14h7v7l9-11h-7z',
        ],
      ];
      @endphp

      @foreach($whys as $why)
      <div class="group border border-white/10 hover:border-red-600 bg-white/5 hover:bg-white/10 p-7 transition-all duration-200">
        <div class="w-12 h-12 bg-red-800/30 group-hover:bg-red-800 flex items-center justify-center mb-5 transition-colors duration-200">
          <svg class="w-6 h-6 text-red-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $why['icon'] }}"/>
          </svg>
        </div>
        <div class="font-display text-2xl text-white mb-2">{{ $why['title'] }}</div>
        <p class="text-sm text-gray-400 leading-relaxed">{{ $why['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- ================================================================
     CERTIFICATIONS & ACCREDITATIONS
================================================================ -->
<section class="py-16 md:py-20 bg-white border-t border-gray-100">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-800"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Standards & Compliance</span>
        <div class="h-px w-10 bg-red-800"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl leading-none text-gray-900">
        CERTIFIED & <span class="text-red-800">ACCREDITED</span>
      </h2>
      <p class="mt-4 text-gray-500 max-w-lg mx-auto text-sm">
        Every product we supply conforms to Philippine and international quality standards, giving you confidence in every ton delivered.
      </p>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 reveal">
      @php
      $certs = [
        ['icon'=>'⚙️','code'=>'PNS','label'=>'Philippine National Standard','color'=>'red'],
        ['icon'=>'🏗️','code'=>'DPWH','label'=>'Accredited DPWH Supplier','color'=>'blue'],
        ['icon'=>'🏅','code'=>'ISO','label'=>'ISO 9001 Quality Management','color'=>'amber'],
        ['icon'=>'🔬','code'=>'BPS','label'=>'Bureau of Product Standards','color'=>'green'],
        ['icon'=>'📋','code'=>'BIR','label'=>'BIR Registered Enterprise','color'=>'purple'],
      ];
      @endphp
      @foreach($certs as $c)
      <div class="flex flex-col items-center text-center p-6 border-2 border-gray-100 hover:border-red-200 hover:shadow-md transition-all group">
        <div class="text-3xl mb-3">{{ $c['icon'] }}</div>
        <div class="font-display text-2xl text-gray-900 group-hover:text-red-800 transition-colors">{{ $c['code'] }}</div>
        <div class="text-xs text-gray-500 mt-2 leading-relaxed">{{ $c['label'] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- ================================================================
     TESTIMONIALS
================================================================ -->
<section class="py-20 md:py-28 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="text-center mb-14 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-800"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Client Testimonials</span>
        <div class="h-px w-10 bg-red-800"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
        WHAT OUR <span class="text-red-800">CLIENTS SAY</span>
      </h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6 reveal">
      @php
      $testimonials = [
        [
          'name'    => 'Engr. Ramon Santos',
          'company' => 'RSR Construction Corp.',
          'location'=> 'Cavite',
          'rating'  => 5,
          'text'    => 'Southern Mega Steel has been our go-to supplier for years. Competitive pricing, on-time delivery, and the quality is consistently top grade. Highly recommended for any contractor.',
          'product' => 'I-Beam & Wide Flange',
        ],
        [
          'name'    => 'Arch. Maria dela Cruz',
          'company' => 'MDC Builders & Developers',
          'location'=> 'Metro Manila',
          'rating'  => 5,
          'text'    => 'Responsive team, complete product line, and they deliver even to our Laguna project site without issues. Ang bilis pa ng quotation — 24 hours palagi.',
          'product' => 'MS Plate & Angle Bar',
        ],
        [
          'name'    => 'Mr. Jose Reyes',
          'company' => 'Reyes Hardware & Supply',
          'location'=> 'Batangas',
          'rating'  => 5,
          'text'    => 'Trusted supplier since 2018. Their sheet piles and deformed bars are always PNS compliant with mill certificates. Our clients in Batangas trust us because we trust Southern Mega Steel.',
          'product' => 'Sheet Pile & Rebar',
        ],
      ];
      @endphp
      @foreach($testimonials as $t)
      <div class="bg-white border border-gray-200 hover:border-red-200 hover:shadow-lg p-8 flex flex-col transition-all duration-200 group">
        {{-- Stars --}}
        <div class="flex items-center gap-1 mb-5">
          @for($i = 0; $i < $t['rating']; $i++)
          <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          @endfor
        </div>
        <blockquote class="text-sm text-gray-600 leading-relaxed flex-1 italic">"{{ $t['text'] }}"</blockquote>
        <div class="mt-6 pt-6 border-t border-gray-100 flex items-center justify-between">
          <div>
            <div class="font-semibold text-sm text-gray-900">{{ $t['name'] }}</div>
            <div class="text-xs text-gray-500">{{ $t['company'] }} · {{ $t['location'] }}</div>
          </div>
          <div class="text-[10px] text-red-700 font-semibold tracking-wider uppercase bg-red-50 px-2 py-1">{{ $t['product'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- ================================================================
     DELIVERY COVERAGE MAP
================================================================ -->
<section id="coverage" class="py-20 md:py-28 bg-gray-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-5 pointer-events-none"
       style="background-image:repeating-linear-gradient(0deg,transparent,transparent 39px,#fff 39px,#fff 40px),repeating-linear-gradient(90deg,transparent,transparent 39px,#fff 39px,#fff 40px);"></div>
  <div class="container mx-auto px-6 relative">
    <div class="text-center mb-14 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-600"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-400 font-semibold">Delivery Coverage</span>
        <div class="h-px w-10 bg-red-600"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none">
        WE DELIVER <span class="text-red-500">NATIONWIDE</span>
      </h2>
      <p class="mt-4 text-gray-400 max-w-xl mx-auto">
        From our warehouse in Bacoor, Cavite — we reach every major region across Luzon, Visayas, and Mindanao.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-14 items-center reveal">

      {{-- Simplified Philippines SVG Map --}}
      <div class="flex justify-center">
        <div class="relative">
          <svg viewBox="0 0 260 580" class="w-56 md:w-64 drop-shadow-2xl" xmlns="http://www.w3.org/2000/svg">
            {{-- LUZON --}}
            <g class="luzon-group">
              <polygon points="120,10 150,8 175,25 185,55 175,90 190,120 180,155 165,170 145,165 130,180 110,170 95,145 85,115 90,85 75,60 90,35" fill="#ef4444" opacity="0.85" stroke="#7f1d1d" stroke-width="1.5"/>
              {{-- Bicol Peninsula --}}
              <polygon points="165,170 175,195 170,225 155,240 145,225 148,200 145,175 165,170" fill="#ef4444" opacity="0.75" stroke="#7f1d1d" stroke-width="1"/>
              {{-- Manila bay notch --}}
              <polygon points="95,145 105,158 110,170" fill="#ef4444" opacity="0.85" stroke="none"/>
              {{-- Palawan --}}
              <polygon points="40,230 50,240 55,270 50,300 40,310 30,295 28,265 35,240" fill="#f87171" opacity="0.7" stroke="#b91c1c" stroke-width="1"/>
            </g>

            {{-- VISAYAS --}}
            <g class="visayas-group">
              {{-- Samar/Leyte --}}
              <polygon points="190,265 205,268 210,285 205,305 195,310 185,300 182,282" fill="#fbbf24" opacity="0.85" stroke="#92400e" stroke-width="1.5"/>
              {{-- Cebu --}}
              <polygon points="158,268 165,275 163,295 155,305 148,298 150,278" fill="#fbbf24" opacity="0.85" stroke="#92400e" stroke-width="1.5"/>
              {{-- Negros --}}
              <polygon points="132,268 145,272 145,295 135,315 122,305 120,285" fill="#fbbf24" opacity="0.85" stroke="#92400e" stroke-width="1.5"/>
              {{-- Panay --}}
              <polygon points="100,252 120,248 130,260 125,278 110,282 98,270" fill="#fbbf24" opacity="0.8" stroke="#92400e" stroke-width="1"/>
              {{-- Bohol --}}
              <polygon points="165,308 178,310 180,322 170,328 160,322 162,310" fill="#fbbf24" opacity="0.8" stroke="#92400e" stroke-width="1"/>
            </g>

            {{-- MINDANAO --}}
            <g class="mindanao-group">
              <polygon points="110,370 145,355 175,360 205,375 225,400 220,435 200,460 175,470 155,465 130,470 108,460 90,440 85,415 95,390" fill="#34d399" opacity="0.75" stroke="#065f46" stroke-width="1.5"/>
              {{-- Zamboanga Peninsula --}}
              <polygon points="90,390 75,400 60,420 58,445 70,455 85,445 88,425 90,405" fill="#34d399" opacity="0.7" stroke="#065f46" stroke-width="1"/>
            </g>

            {{-- Location pin — Bacoor, Cavite --}}
            <g transform="translate(97,133)">
              <circle cx="0" cy="0" r="6" fill="#ef4444" stroke="white" stroke-width="2"/>
              <circle cx="0" cy="0" r="10" fill="#ef4444" opacity="0.25"/>
            </g>
            {{-- Labels --}}
            <text x="130" y="98" text-anchor="middle" fill="white" font-size="9" font-weight="bold" font-family="sans-serif" opacity="0.9">LUZON</text>
            <text x="157" y="290" text-anchor="middle" fill="white" font-size="9" font-weight="bold" font-family="sans-serif" opacity="0.9">VISAYAS</text>
            <text x="155" y="420" text-anchor="middle" fill="white" font-size="9" font-weight="bold" font-family="sans-serif" opacity="0.9">MINDANAO</text>
          </svg>

          {{-- Legend --}}
          <div class="absolute -right-28 top-0 flex flex-col gap-2 text-xs">
            <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-sm bg-red-500 flex-shrink-0"></span><span class="text-gray-300">Luzon</span></div>
            <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-sm bg-yellow-400 flex-shrink-0"></span><span class="text-gray-300">Visayas</span></div>
            <div class="flex items-center gap-2"><span class="w-3 h-3 rounded-sm bg-emerald-400 flex-shrink-0"></span><span class="text-gray-300">Mindanao</span></div>
            <div class="flex items-center gap-2 mt-2"><span class="w-3 h-3 rounded-full bg-red-500 flex-shrink-0"></span><span class="text-gray-300">Our Base</span></div>
          </div>
        </div>
      </div>

      {{-- Coverage details --}}
      <div class="space-y-6">
        @php
        $coverage = [
          [
            'island' => 'LUZON',
            'color'  => 'red',
            'areas'  => ['Metro Manila','Cavite (Base)','Laguna','Batangas','Rizal','Quezon','Pampanga','Bulacan','Tarlac','Pangasinan','La Union','Ilocos Norte/Sur','Isabela','Cagayan','Bicol Region'],
            'eta'    => '1–3 business days',
          ],
          [
            'island' => 'VISAYAS',
            'color'  => 'yellow',
            'areas'  => ['Cebu City','Iloilo City','Bacolod','Tacloban','Dumaguete','Ormoc','Bohol'],
            'eta'    => '3–5 business days',
          ],
          [
            'island' => 'MINDANAO',
            'color'  => 'emerald',
            'areas'  => ['Davao City','Cagayan de Oro','General Santos','Zamboanga','Iligan','Bukidnon','Koronadal'],
            'eta'    => '5–7 business days',
          ],
        ];
        $colorMap = ['red'=>'bg-red-500','yellow'=>'bg-yellow-400','emerald'=>'bg-emerald-400'];
        $borderMap = ['red'=>'border-red-800','yellow'=>'border-yellow-700','emerald'=>'border-emerald-800'];
        @endphp

        @foreach($coverage as $cov)
        <div class="border border-white/10 hover:border-white/25 p-5 transition-colors group">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-sm {{ $colorMap[$cov['color']] }} flex-shrink-0"></span>
              <span class="font-display text-xl text-white">{{ $cov['island'] }}</span>
            </div>
            <span class="text-[10px] text-white/50 tracking-widest uppercase border border-white/20 px-2 py-0.5">ETA {{ $cov['eta'] }}</span>
          </div>
          <div class="flex flex-wrap gap-1.5">
            @foreach($cov['areas'] as $area)
            <span class="text-xs bg-white/10 text-gray-300 px-2 py-0.5 rounded-sm">{{ $area }}</span>
            @endforeach
          </div>
        </div>
        @endforeach

        <div class="pt-2">
          <a href="#inquire" class="inline-flex items-center gap-2 bg-red-700 hover:bg-red-600 text-white px-6 py-3 font-semibold text-sm tracking-wider transition-all">
            INQUIRE ABOUT DELIVERY
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     STEEL WEIGHT ESTIMATOR TOOL
================================================================ -->
<section id="estimator" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-6">
    <div class="max-w-3xl mx-auto">
      <div class="text-center mb-12 reveal">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="h-px w-10 bg-red-800"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Quick Estimator</span>
          <div class="h-px w-10 bg-red-800"></div>
        </div>
        <h2 class="font-display text-4xl md:text-5xl leading-none text-gray-900">
          STEEL WEIGHT <span class="text-red-800">CALCULATOR</span>
        </h2>
        <p class="mt-4 text-gray-500 max-w-md mx-auto text-sm">
          Estimate the weight of your order in seconds. Results are approximate — contact us for an exact quote.
        </p>
      </div>

      <div class="bg-gray-50 border border-gray-200 p-8 md:p-10 reveal"
           x-data="{
             type: '',
             size: '',
             length: '',
             qty: 1,
             unit: 'pcs',
             result: null,
             sizes: {
               ibeam:   [['S100x50','8.34'],['S125x65','11.9'],['S150x75','14.7'],['S175x90','18.8'],['S200x100','25.3'],['S250x118','37.4'],['S300x126','48.3'],['S350x140','60.7']],
               wflange: [['W150x13','13.0'],['W150x18','17.9'],['W200x19','19.3'],['W200x26','26.1'],['W250x25','25.1'],['W250x39','38.5'],['W300x32','32.3'],['W300x52','52.2'],['W350x45','44.8'],['W400x60','60.3']],
               rebar:   [['10mm Ø','0.617'],['12mm Ø','0.888'],['16mm Ø','1.578'],['20mm Ø','2.466'],['25mm Ø','3.854'],['28mm Ø','4.834'],['32mm Ø','6.313']],
               anglebar:[['25x25x3mm','1.12'],['32x32x3mm','1.46'],['40x40x3mm','1.84'],['40x40x5mm','2.97'],['50x50x5mm','3.77'],['65x65x6mm','5.91'],['75x75x6mm','6.85'],['100x100x8mm','12.2']],
               msplate: [['3mm','23.55'],['4.5mm','35.33'],['6mm','47.10'],['8mm','62.80'],['10mm','78.50'],['12mm','94.20']],
             },
             get sizeOptions() { return this.sizes[this.type] || []; },
             get weightPerUnit() { if(!this.size) return 0; let s=this.sizeOptions.find(x=>x[0]===this.size); return s ? parseFloat(s[1]) : 0; },
             calculate() {
               let w = this.weightPerUnit;
               if(!w || !this.length || !this.qty) { this.result = null; return; }
               let L = parseFloat(this.length), Q = parseFloat(this.qty);
               if(this.type === 'msplate') {
                 // MS Plate: weight per m², length = area in m²
                 this.result = { totalKg: (w * L * Q).toFixed(1), tons: (w * L * Q / 1000).toFixed(3), pcsPerTon: Math.round(1000 / (w * L)) };
               } else {
                 this.result = { totalKg: (w * L * Q).toFixed(1), tons: (w * L * Q / 1000).toFixed(3), pcsPerTon: Math.round(1000 / (w * L)) };
               }
             }
           }">

        <div class="grid sm:grid-cols-2 gap-5 mb-6">
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Product Type</label>
            <select x-model="type" @change="size=''; result=null"
                    class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white">
              <option value="">Select product…</option>
              <option value="ibeam">I-Beam</option>
              <option value="wflange">Wide Flange / H-Beam</option>
              <option value="rebar">Deformed Bar (Rebar)</option>
              <option value="anglebar">Angle Bar</option>
              <option value="msplate">Mild Steel Plate</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Size / Section</label>
            <select x-model="size" :disabled="!type" @change="result=null"
                    class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white disabled:opacity-40">
              <option value="">Select size…</option>
              <template x-for="s in sizeOptions" :key="s[0]">
                <option :value="s[0]" x-text="s[0] + '  (' + s[1] + ' kg/m' + (type==='msplate'?'²':'/m') + ')'"></option>
              </template>
            </select>
          </div>
        </div>

        <div class="grid sm:grid-cols-3 gap-5 mb-8">
          <div class="sm:col-span-1">
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2"
                   x-text="type === 'msplate' ? 'Area (m²/pc)' : 'Length per pc (m)'"></label>
            <input type="number" x-model="length" min="0.1" step="0.1" @input="result=null"
                   :placeholder="type === 'msplate' ? 'e.g. 5.76' : 'e.g. 6'"
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white">
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Quantity (pcs)</label>
            <input type="number" x-model="qty" min="1" step="1" @input="result=null"
                   placeholder="e.g. 100"
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white">
          </div>
          <div class="flex items-end">
            <button @click="calculate()"
                    class="w-full bg-red-800 hover:bg-red-700 text-white py-3 font-semibold text-sm tracking-wider transition-all">
              CALCULATE
            </button>
          </div>
        </div>

        {{-- Result --}}
        <div x-show="result" x-transition x-cloak
             class="border-2 border-red-800 bg-red-50 p-6">
          <div class="text-xs tracking-widest uppercase text-red-700 font-semibold mb-4">Estimated Weight</div>
          <div class="grid grid-cols-3 gap-4 text-center">
            <div>
              <div class="font-display text-3xl text-gray-900" x-text="result ? result.totalKg : ''"></div>
              <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Kilograms</div>
            </div>
            <div class="border-x border-red-200">
              <div class="font-display text-3xl text-red-800" x-text="result ? result.tons : ''"></div>
              <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Metric Tons</div>
            </div>
            <div>
              <div class="font-display text-3xl text-gray-900" x-text="result ? '~'+result.pcsPerTon : ''"></div>
              <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Pcs / Ton</div>
            </div>
          </div>
          <p class="text-xs text-gray-400 mt-5 text-center">*Theoretical weight based on standard density. Actual weight may vary ±3%.</p>
          <div class="mt-4 text-center">
            <a href="#inquire" class="text-sm font-semibold text-red-800 hover:underline">
              → Get an exact quote for this order
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     FAQ ACCORDION
================================================================ -->
<section id="faq" class="py-20 md:py-28 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="max-w-3xl mx-auto">
      <div class="text-center mb-12 reveal">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="h-px w-10 bg-red-800"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">FAQ</span>
          <div class="h-px w-10 bg-red-800"></div>
        </div>
        <h2 class="font-display text-4xl md:text-5xl leading-none text-gray-900">
          FREQUENTLY ASKED <span class="text-red-800">QUESTIONS</span>
        </h2>
      </div>

      <div class="space-y-2 reveal" x-data="{ open: null }">
        @php
        $faqs = [
          [
            'q' => 'What is your minimum order quantity (MOQ)?',
            'a' => 'We generally do not impose a strict MOQ for most products. However, for structural steel items like I-beams, wide flanges, and sheet piles, a minimum of 1 ton is recommended for cost-efficient pricing. Smaller quantities can be accommodated — contact us to discuss your specific needs.',
          ],
          [
            'q' => 'How long does delivery take after I place an order?',
            'a' => 'Metro Manila and nearby provinces (Cavite, Laguna, Batangas, Rizal, Pampanga, Bulacan): 1–3 business days. Luzon provincial areas: 2–5 business days. Visayas: 3–5 business days via cargo/shipping. Mindanao: 5–7 business days. Lead times may vary depending on order volume and current stock.',
          ],
          [
            'q' => 'Do you deliver to all provinces nationwide?',
            'a' => 'Yes. We serve all major regions across Luzon, Visayas, and Mindanao. Our own fleet covers Luzon deliveries directly. For Visayas and Mindanao, we coordinate with trusted cargo forwarders to ensure safe and timely delivery to your project site.',
          ],
          [
            'q' => 'What are your payment terms?',
            'a' => 'For new clients, we require full payment before release of goods. For established clients with good transaction history, we offer open account / credit terms. We accept bank transfers, PDC (post-dated checks), and online payments. Contact our sales team to discuss terms that work for your business.',
          ],
          [
            'q' => 'Can you provide mill certificates and test reports?',
            'a' => 'Yes. All our steel products come with mill certificates from our accredited suppliers confirming conformance to Philippine National Standards (PNS) and relevant ASTM or JIS standards. These are available upon request with each delivery.',
          ],
          [
            'q' => 'Do you offer custom cutting, bending, or fabrication?',
            'a' => 'Yes. We offer value-added services including steel cutting to specific lengths, drilling, and basic fabrication. This helps reduce waste and labor costs on your project site. Inquire with our team for pricing and lead times on custom work.',
          ],
          [
            'q' => 'What sizes and specifications do you normally carry in stock?',
            'a' => 'We maintain ready stock of the most common structural steel sizes — I-beams from S100 to S400, wide flanges from W150 to W400, deformed bars from 10mm to 32mm, angle bars from 25x25 to 100x100, MS plates from 3mm to 25mm, and more. For less common sizes, we can source within 5–10 business days.',
          ],
          [
            'q' => 'How do I request a quotation?',
            'a' => 'You can fill out our online quotation form on this page, send us a message on Facebook Messenger, call us at 0931 059 9611 or 0926 278 8298, or email southernmegasteel@gmail.com. Provide your product list, quantities, sizes, and delivery location for the fastest response. We aim to reply within 24 hours.',
          ],
        ];
        @endphp

        @foreach($faqs as $i => $faq)
        <div class="border border-gray-200 bg-white hover:border-red-200 transition-colors">
          <button @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                  class="w-full text-left px-6 py-5 flex items-center justify-between gap-4 group">
            <span class="font-semibold text-sm md:text-base text-gray-900 group-hover:text-red-800 transition-colors leading-snug">
              {{ $faq['q'] }}
            </span>
            <svg class="w-5 h-5 text-red-700 flex-shrink-0 transition-transform duration-200"
                 :class="open === {{ $i }} ? 'rotate-45' : ''"
                 fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
          </button>
          <div x-show="open === {{ $i }}"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 -translate-y-2"
               x-transition:enter-end="opacity-100 translate-y-0"
               x-cloak
               class="px-6 pb-6">
            <p class="text-sm text-gray-600 leading-relaxed border-t border-gray-100 pt-4">{{ $faq['a'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     CONTACT (Direct Contact Form + Map)
================================================================ -->
<section id="contact" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-6">

    <div class="text-center mb-14 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-800"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Get In Touch</span>
        <div class="h-px w-10 bg-red-800"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
        CONTACT <span class="text-red-800">US DIRECTLY</span>
      </h2>
      <p class="mt-4 text-gray-600 max-w-xl mx-auto">
        Have a question or need a quick answer? Reach out to our team and we'll respond within one business day.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 reveal">

      {{-- Contact Form --}}
      <div>
        @if(session('contact_success'))
        <div class="mb-6 flex items-start gap-3 bg-green-50 border border-green-200 text-green-800 px-5 py-4">
          <svg class="w-5 h-5 flex-shrink-0 mt-0.5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <div>
            <div class="font-semibold text-sm">Message sent successfully!</div>
            <div class="text-sm mt-0.5">Thank you, we'll reply within one business day.</div>
          </div>
        </div>
        @endif
        @if($errors->any())
        <div class="mb-6 flex items-start gap-3 bg-red-50 border border-red-200 text-red-800 px-5 py-4">
          <svg class="w-5 h-5 flex-shrink-0 mt-0.5 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          <div class="text-sm">Please fix the highlighted fields and try again.</div>
        </div>
        @endif
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
          @csrf
          <div class="grid sm:grid-cols-2 gap-5">
            <div>
              <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Full Name *</label>
              <input type="text" name="name" required
                     class="form-input w-full border border-gray-300 px-4 py-3 text-sm text-gray-900 bg-white transition-all"
                     placeholder="Juan dela Cruz">
            </div>
            <div>
              <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Company</label>
              <input type="text" name="company"
                     class="form-input w-full border border-gray-300 px-4 py-3 text-sm text-gray-900 bg-white transition-all"
                     placeholder="Your Company Name">
            </div>
          </div>
          <div class="grid sm:grid-cols-2 gap-5">
            <div>
              <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Email Address *</label>
              <input type="email" name="email" required
                     class="form-input w-full border border-gray-300 px-4 py-3 text-sm text-gray-900 bg-white transition-all"
                     placeholder="you@company.com">
            </div>
            <div>
              <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Phone Number *</label>
              <input type="tel" name="phone" required
                     class="form-input w-full border border-gray-300 px-4 py-3 text-sm text-gray-900 bg-white transition-all"
                     placeholder="+63 9XX XXX XXXX">
            </div>
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Subject *</label>
            <input type="text" name="subject" required
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm text-gray-900 bg-white transition-all"
                   placeholder="e.g. Product Inquiry, Pricing, Delivery">
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Message *</label>
            <textarea name="message" rows="5" required
                      class="form-input w-full border border-gray-300 px-4 py-3 text-sm text-gray-900 bg-white transition-all resize-none"
                      placeholder="Tell us how we can help you…"></textarea>
          </div>
          <button type="submit"
                  class="w-full bg-red-800 hover:bg-red-900 text-white py-4 font-semibold tracking-wider text-sm transition-all duration-200 flex items-center justify-center gap-2">
            SEND MESSAGE
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
            </svg>
          </button>
        </form>

        {{-- Contact details --}}
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-5 pt-8 border-t border-gray-200">
          <div>
            <div class="text-[10px] tracking-[0.3em] uppercase text-gray-500 font-semibold mb-1.5">Phone</div>
            <a href="tel:+639310599611" class="text-sm font-medium text-gray-900 hover:text-red-800 transition-colors">
              0931 059 9611
            </a>
          </div>
          <div>
            <div class="text-[10px] tracking-[0.3em] uppercase text-gray-500 font-semibold mb-1.5">Email</div>
            <a href="mailto:southernmegasteel@gmail.com" class="text-sm font-medium text-gray-900 hover:text-red-800 transition-colors break-all">
              southernmegasteel@gmail.com
            </a>
          </div>
          <div>
            <div class="text-[10px] tracking-[0.3em] uppercase text-gray-500 font-semibold mb-1.5">Hours</div>
            <div class="text-sm font-medium text-gray-900">Mon–Sat · 8AM–6PM</div>
          </div>
        </div>
      </div>

      {{-- Map --}}
      <div class="flex flex-col gap-5">
        <div class="flex-1 relative bg-gray-100 overflow-hidden" style="min-height: 380px;">
          {{-- Replace the src below with your actual Google Maps embed URL for your exact address in Bacoor, Cavite --}}
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61862.23!2d120.9499!3d14.4342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d43c8a4a8e9d%3A0x0!2sBacoor%2C+Cavite%2C+Philippines!5e0!3m2!1sen!2sph!4v1700000000000"
            width="100%"
            height="100%"
            style="border:0; min-height:380px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Southern Mega Steel Location">
          </iframe>
        </div>
        <div class="bg-red-800 text-white p-5">
          <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-red-200 mb-1.5">Our Location</div>
          <div class="font-semibold text-sm leading-relaxed">Southern Mega Steel Enterprise Inc.<br>Bacoor, Cavite, Philippines</div>
          <a href="https://maps.google.com" target="_blank" rel="noopener"
             class="mt-3 inline-flex items-center gap-1.5 text-xs text-red-200 hover:text-white transition-colors font-semibold tracking-wider uppercase">
            Get Directions ↗
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ================================================================
     INQUIRE / GET A QUOTE
================================================================ -->
<section id="inquire" class="py-20 md:py-28 bg-gray-50">
  <div class="container mx-auto px-6">

    <div class="max-w-3xl mx-auto">

      <div class="text-center mb-12 reveal">
        <div class="flex items-center justify-center gap-3 mb-4">
          <div class="h-px w-10 bg-red-800"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Inquire / Quote</span>
          <div class="h-px w-10 bg-red-800"></div>
        </div>
        <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
          REQUEST A <span class="text-red-800">QUOTATION</span>
        </h2>
        <p class="mt-4 text-gray-600 max-w-lg mx-auto">
          Fill in your material requirements and we'll get back to you with a detailed quote within 24 hours.
        </p>
      </div>

      @if(session('quote_success'))
      <div class="mb-8 flex items-start gap-3 bg-green-50 border border-green-200 text-green-800 px-5 py-4 reveal">
        <svg class="w-5 h-5 flex-shrink-0 mt-0.5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <div>
          <div class="font-semibold text-sm">Quotation request submitted!</div>
          <div class="text-sm mt-0.5">We received your inquiry and will send you a detailed quote within 24 hours.</div>
        </div>
      </div>
      @endif
      <form action="{{ route('contact.quote') }}" method="POST" class="bg-white border border-gray-200 p-8 md:p-10 space-y-6 reveal">
        @csrf

        <div class="grid sm:grid-cols-2 gap-6">
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Full Name *</label>
            <input type="text" name="q_name" required
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all"
                   placeholder="Juan dela Cruz">
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Company Name</label>
            <input type="text" name="q_company"
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all"
                   placeholder="ABC Construction Inc.">
          </div>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Email *</label>
            <input type="email" name="q_email" required
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all"
                   placeholder="you@company.com">
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Phone *</label>
            <input type="tel" name="q_phone" required
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all"
                   placeholder="+63 9XX XXX XXXX">
          </div>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Product of Interest *</label>
            <select name="q_product" required
                    class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all text-gray-900">
              <option value="" disabled selected>Select a product…</option>
              <option>I-Beam</option>
              <option>H-Beam</option>
              <option>Wide Flange</option>
              <option>Mild Steel Plate</option>
              <option>Chequered Plate</option>
              <option>Welded Steel Pipes</option>
              <option>Seamless Pipes</option>
              <option>Square &amp; Rectangular Tubing</option>
              <option>Sheet Pile</option>
              <option>Sheets &amp; Coils</option>
              <option>Deformed Bar (Rebar)</option>
              <option>Plain Round Bar</option>
              <option>Channel Bar</option>
              <option>C-Z Purlins</option>
              <option>Angle Bar</option>
              <option>Steel Decking</option>
              <option>Steel Matting</option>
              <option>Multiple Products</option>
              <option>Other</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Estimated Quantity</label>
            <input type="text" name="q_quantity"
                   class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all"
                   placeholder="e.g. 10 tons, 500 pcs">
          </div>
        </div>

        <div>
          <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Delivery Location *</label>
          <input type="text" name="q_location" required
                 class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all"
                 placeholder="e.g. Cebu City, Davao, Metro Manila">
        </div>

        <div>
          <label class="block text-xs font-semibold tracking-widest uppercase text-gray-700 mb-2">Project Details / Specifications</label>
          <textarea name="q_details" rows="5"
                    class="form-input w-full border border-gray-300 px-4 py-3 text-sm bg-white transition-all resize-none"
                    placeholder="Describe your project, required sizes/specs, timeline, or any other details…"></textarea>
        </div>

        <div class="flex items-start gap-3">
          <input type="checkbox" id="agree" name="agree" required class="mt-0.5 accent-red-800 w-4 h-4 flex-shrink-0">
          <label for="agree" class="text-sm text-gray-600 leading-relaxed">
            I agree to be contacted by Southern Mega Steel Enterprise Inc. regarding my inquiry. My information will not be shared with third parties.
          </label>
        </div>

        <button type="submit"
                class="w-full bg-red-800 hover:bg-red-900 text-white py-4 font-semibold tracking-wider text-sm transition-all duration-200 flex items-center justify-center gap-3">
          SUBMIT QUOTATION REQUEST
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </button>
      </form>

      <p class="mt-6 text-center text-sm text-gray-500 reveal">
        Prefer to call? Reach us at
        <a href="tel:+639310599611" class="text-red-800 font-semibold hover:underline">0931 059 9611</a>
        or email
        <a href="mailto:southernmegasteel@gmail.com" class="text-red-800 font-semibold hover:underline">southernmegasteel@gmail.com</a>
      </p>
    </div>
  </div>
</section>

</main>


<!-- ================================================================
     FACEBOOK FEED
================================================================ -->
<section class="py-20 md:py-24 bg-gray-50 border-t border-gray-200">
  <div class="container mx-auto px-6">

    <div class="text-center mb-12 reveal">
      <div class="flex items-center justify-center gap-3 mb-4">
        <div class="h-px w-10 bg-red-800"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-red-800 font-semibold">Social</span>
        <div class="h-px w-10 bg-red-800"></div>
      </div>
      <h2 class="font-display text-4xl md:text-5xl lg:text-[3.5rem] leading-none text-gray-900">
        FOLLOW US ON <span class="text-red-800">FACEBOOK</span>
      </h2>
      <p class="mt-4 text-gray-600 max-w-lg mx-auto">
        Stay updated with our latest products, project highlights, and announcements.
      </p>
    </div>

    <div class="flex flex-col lg:flex-row items-start gap-10 justify-center reveal">

      {{-- Facebook Page Plugin --}}
      <div class="w-full lg:w-auto flex-shrink-0 flex flex-col items-center overflow-hidden">
        <div id="fb-root"></div>
        <div class="fb-page shadow-lg w-full"
             data-href="https://www.facebook.com/southernmegasteel"
             data-tabs="timeline"
             data-width="500"
             data-height="600"
             data-small-header="false"
             data-adapt-container-width="true"
             data-hide-cover="false"
             data-show-facepile="true">
          {{-- Fallback while SDK loads --}}
          <blockquote cite="https://www.facebook.com/southernmegasteel"
                      class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/southernmegasteel">Southern Mega Steel Enterprise Inc.</a>
          </blockquote>
        </div>
      </div>

      {{-- Side panel --}}
      <div class="max-w-sm w-full">
        <div class="bg-white border border-gray-200 p-8">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </div>
            <div>
              <div class="font-bold text-gray-900 text-base">Southern Mega Steel</div>
              <div class="text-sm text-gray-500">Enterprise Incorporated</div>
            </div>
          </div>
          <p class="text-sm text-gray-600 leading-relaxed mb-6">
            See our latest steel products, ongoing projects, delivery updates, and promotions on our official Facebook page.
          </p>
          <div class="space-y-3">
            <a href="https://www.facebook.com/southernmegasteel" target="_blank" rel="noopener"
               class="flex items-center justify-center gap-2 w-full bg-blue-600 hover:bg-blue-700 text-white py-3 font-semibold text-sm tracking-wider transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
              LIKE OUR PAGE
            </a>
            <a href="https://m.me/southernmegasteel" target="_blank" rel="noopener"
               class="flex items-center justify-center gap-2 w-full border-2 border-blue-600 text-blue-600 hover:bg-blue-50 py-3 font-semibold text-sm tracking-wider transition-colors">
              SEND US A MESSAGE
            </a>
          </div>
        </div>

        <div class="mt-5 bg-red-800 text-white p-6">
          <div class="text-[10px] tracking-[0.3em] uppercase font-semibold text-red-300 mb-2">Business Hours</div>
          <div class="font-semibold">Monday – Saturday</div>
          <div class="text-red-200 text-sm">8:00 AM – 6:00 PM PHT</div>
          <div class="mt-3 pt-3 border-t border-red-700">
            <a href="tel:+639310599611" class="text-sm hover:text-red-200 transition-colors">📞 0931 059 9611</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Facebook SDK --}}
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0">
</script>

<!-- ================================================================
     FOOTER
================================================================ -->
<footer class="bg-gray-950 text-white">
  <div class="container mx-auto px-6 pt-14 pb-8">
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

      {{-- Brand --}}
      <div class="lg:col-span-1">
        <div class="mb-5">
          <img src="{{ asset('images/sms-logo.png') }}"
               alt="Southern Mega Steel Enterprise Inc."
               class="h-16 w-auto object-contain brightness-0 invert">
        </div>
        <p class="text-sm text-gray-400 leading-relaxed max-w-xs">
          Your trusted partner for premium structural steel products in the Philippines.
        </p>
        <div class="mt-5">
          <a href="https://www.facebook.com/southernmegasteel" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-white transition-colors">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            Facebook
          </a>
        </div>
      </div>

      {{-- Quick Links --}}
      <div>
        <div class="text-[10px] tracking-[0.3em] uppercase text-gray-500 font-semibold mb-5">Quick Links</div>
        <ul class="space-y-3">
          <li><a href="#home"     class="text-sm text-gray-400 hover:text-white transition-colors">Home</a></li>
          <li><a href="#about"    class="text-sm text-gray-400 hover:text-white transition-colors">About Us</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Products</a></li>
          <li><a href="#services" class="text-sm text-gray-400 hover:text-white transition-colors">Services</a></li>
          <li><a href="#why-us"   class="text-sm text-gray-400 hover:text-white transition-colors">Why Choose Us</a></li>
          <li><a href="#contact"  class="text-sm text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
          <li><a href="#inquire"  class="text-sm text-gray-400 hover:text-white transition-colors">Inquire / Get Quote</a></li>
        </ul>
      </div>

      {{-- Products --}}
      <div>
        <div class="text-[10px] tracking-[0.3em] uppercase text-gray-500 font-semibold mb-5">Products</div>
        <ul class="space-y-3">
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">I-Beam</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Wide Flange</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">MS Plate</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Steel Pipes</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Deformed Bar</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">C-Channel</a></li>
          <li><a href="#products" class="text-sm text-gray-400 hover:text-white transition-colors">Angle Bar</a></li>
        </ul>
      </div>

      {{-- Contact --}}
      <div>
        <div class="text-[10px] tracking-[0.3em] uppercase text-gray-500 font-semibold mb-5">Contact</div>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <a href="tel:+639310599611" class="text-sm text-gray-400 hover:text-white transition-colors">0931 059 9611</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <a href="mailto:southernmegasteel@gmail.com" class="text-sm text-gray-400 hover:text-white transition-colors break-all">southernmegasteel@gmail.com</a>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-4 h-4 text-red-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-400">Mon–Sat · 8AM–6PM</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
      <div class="text-xs text-gray-600">
        &copy; {{ date('Y') }} Southern Mega Steel Enterprise Incorporated. All rights reserved.
      </div>
      <div class="flex items-center gap-4 text-xs text-gray-600">
        <a href="{{ route('privacy') }}" class="hover:text-gray-400 transition-colors">Privacy Policy</a>
        <span class="text-gray-700">·</span>
        <span>Your Partner in Steel Excellence</span>
      </div>
    </div>
    <div class="mt-5 pt-4 border-t border-white/5 text-center text-[11px] text-gray-700 tracking-wide">
      Developed by
      <a href="https://www.facebook.com/profile.php?id=100089882257864"
         target="_blank" rel="noopener noreferrer"
         class="text-gray-500 hover:text-gray-300 font-semibold tracking-wider uppercase transition-colors">
        JJ Tech Solutions Studio
      </a>
    </div>
  </div>
</footer>


<script>
  // ── Scroll reveal ──────────────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal');
  const revealObs = new IntersectionObserver(
    (entries) => entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); } }),
    { threshold: 0.1 }
  );
  revealEls.forEach(el => revealObs.observe(el));

  // ── Animated number counters ───────────────────────────────────
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const duration = 1800;
    const start = performance.now();
    function step(now) {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 3); // ease-out cubic
      el.textContent = Math.floor(ease * target);
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = target;
    }
    requestAnimationFrame(step);
  }
  const counterObs = new IntersectionObserver(
    (entries) => entries.forEach(e => {
      if (e.isIntersecting) { animateCounter(e.target); counterObs.unobserve(e.target); }
    }),
    { threshold: 0.5 }
  );
  document.querySelectorAll('.counter').forEach(el => counterObs.observe(el));

  // ── Back-to-top visibility ─────────────────────────────────────
  const btt = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      btt.classList.remove('opacity-0','translate-y-4','pointer-events-none');
      btt.classList.add('opacity-100','translate-y-0');
    } else {
      btt.classList.add('opacity-0','translate-y-4','pointer-events-none');
      btt.classList.remove('opacity-100','translate-y-0');
    }
  }, { passive: true });

  // ── Preloader ──────────────────────────────────────────────────
  const preloader = document.getElementById('sms-preloader');
  window.addEventListener('load', () => {
    setTimeout(() => preloader.classList.add('hidden'), 300);
  });
  // Safety fallback — hide after 4s regardless
  setTimeout(() => preloader.classList.add('hidden'), 4000);

  // ── Auto-scroll to flash section after form submit ─────────────
  @if(session('contact_success'))
    document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
  @endif
  @if(session('quote_success'))
    document.getElementById('inquire').scrollIntoView({ behavior: 'smooth' });
  @endif
</script>

<!--
  ══════════════════════════════════════════════════════════
  TAWK.TO LIVE CHAT
  ══════════════════════════════════════════════════════════
  SETUP (2 minutes):
  1. Go to https://www.tawk.to and create a free account
  2. Create a new Property → name it "Southern Mega Steel"
  3. Go to Administration → Chat Widget → copy your embed code
  4. Replace YOUR_PROPERTY_ID and YOUR_WIDGET_ID below
     (looks like: 64abc123abc/1he12abc3)
  ══════════════════════════════════════════════════════════
-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
  (function(){
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/YOUR_PROPERTY_ID/YOUR_WIDGET_ID';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>


<!-- ================================================================
     FLOATING CONTACT BUTTONS
================================================================ -->
<!-- Back to top button -->
<button id="backToTop"
        onclick="window.scrollTo({top:0,behavior:'smooth'})"
        class="fixed bottom-6 left-5 z-50 w-11 h-11 bg-gray-900/80 hover:bg-red-800 text-white rounded-full
               flex items-center justify-center shadow-lg transition-all duration-300
               opacity-0 translate-y-4 pointer-events-none"
        aria-label="Back to top">
  <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"/>
  </svg>
</button>

<div class="fixed bottom-6 right-5 z-50 flex flex-col items-end gap-3"
     x-data="{ shown: false }"
     x-init="setTimeout(() => shown = true, 900)">

  {{-- WhatsApp button --}}
  <div x-show="shown"
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0 translate-y-6 scale-90"
       x-transition:enter-end="opacity-100 translate-y-0 scale-100"
       x-cloak
       class="relative group flex items-center">
    <div class="mr-3 bg-gray-900 text-white text-xs font-semibold px-3 py-1.5 rounded-full whitespace-nowrap
                opacity-0 group-hover:opacity-100 transition-all duration-200 pointer-events-none shadow-lg
                translate-x-2 group-hover:translate-x-0">
      Chat on WhatsApp
    </div>
    <a href="https://wa.me/639310599611?text=Hello%20Southern%20Mega%20Steel%2C%20I%20would%20like%20to%20inquire%20about%20your%20steel%20products."
       target="_blank" rel="noopener noreferrer"
       aria-label="Chat with us on WhatsApp"
       class="w-[52px] h-[52px] rounded-full flex items-center justify-center
              shadow-lg shadow-green-700/40 hover:scale-110 active:scale-95 transition-all duration-200"
       style="background: #25d366;">
      <svg class="w-6 h-6" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.126.557 4.123 1.528 5.855L.057 23.882l6.186-1.438A11.934 11.934 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.797 9.797 0 01-5.031-1.388l-.36-.214-3.733.868.933-3.625-.235-.372A9.778 9.778 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/>
      </svg>
    </a>
  </div>

  {{-- Phone / Call button --}}
  <div x-show="shown"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0 translate-y-6 scale-90"
       x-transition:enter-end="opacity-100 translate-y-0 scale-100"
       x-cloak
       class="relative group flex items-center">
    {{-- Tooltip --}}
    <div class="mr-3 bg-gray-900 text-white text-xs font-semibold px-3 py-1.5 rounded-full whitespace-nowrap
                opacity-0 group-hover:opacity-100 transition-all duration-200 pointer-events-none shadow-lg
                translate-x-2 group-hover:translate-x-0">
      0931 059 9611
    </div>
    <a href="tel:+639310599611"
       aria-label="Call us"
       class="w-13 h-13 w-[52px] h-[52px] rounded-full bg-green-500 hover:bg-green-400 shadow-lg shadow-green-600/40
              flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-95">
      <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
      </svg>
    </a>
  </div>

  {{-- Facebook Messenger button --}}
  <div x-show="shown"
       x-transition:enter="transition ease-out duration-400"
       x-transition:enter-start="opacity-0 translate-y-6 scale-90"
       x-transition:enter-end="opacity-100 translate-y-0 scale-100"
       x-cloak
       class="relative group flex items-center">
    {{-- Tooltip --}}
    <div class="mr-3 bg-gray-900 text-white text-xs font-semibold px-3 py-1.5 rounded-full whitespace-nowrap
                opacity-0 group-hover:opacity-100 transition-all duration-200 pointer-events-none shadow-lg
                translate-x-2 group-hover:translate-x-0">
      Chat on Messenger
    </div>
    {{-- Outer pulse ring --}}
    <span class="absolute right-0 w-[60px] h-[60px] rounded-full animate-ping pointer-events-none"
          style="background: rgba(0,120,255,0.25);"></span>
    {{-- Button --}}
    <a href="https://m.me/southernmegasteel"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Chat with us on Messenger"
       class="relative w-[60px] h-[60px] rounded-full flex items-center justify-center
              shadow-xl shadow-blue-700/40 hover:scale-110 active:scale-95 transition-all duration-200"
       style="background: linear-gradient(145deg, #00c6ff 0%, #0078ff 60%, #0050d0 100%);">
      {{-- Official Messenger "M" wordmark path --}}
      <svg class="w-8 h-8" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
        <path fill="white"
              d="M24 4C12.954 4 4 12.453 4 22.9c0 5.868 2.874 11.112 7.41
                 14.593V44l6.83-3.752c1.816.502 3.74.773 5.76.773
                 11.046 0 20-8.453 20-18.9S35.046 4 24 4zm2.013
                 25.456l-5.1-5.44-9.967 5.44 10.975-11.664
                 5.23 5.44 9.83-5.44-10.968 11.664z"/>
      </svg>
    </a>
  </div>
</div>

</body>
</html>
