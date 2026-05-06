<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Southern Mega Steel — Your Partner in Steel Excellence</title>
<meta name="description" content="Southern Mega Steel — premium steel products, fabrication, and nationwide delivery across the Philippines.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Manrope:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        bone: '#f5f1ea',
        ink:  '#0d0d0d',
        rust: { DEFAULT: '#c8451d', dark: '#9a3414', light: '#e25a2c' },
        steel: { 50:'#eef0f2',100:'#dde0e4',200:'#bcc1c8',300:'#9aa2ac',400:'#788390',500:'#566374',600:'#454f5d',700:'#343c46',800:'#23282f',900:'#0f1216' },
      },
      fontFamily: {
        display: ['"Bebas Neue"','Impact','sans-serif'],
        body:    ['Manrope','system-ui','sans-serif'],
        mono:    ['"JetBrains Mono"','monospace'],
      },
      animation: { marquee: 'marquee 35s linear infinite' },
      keyframes: { marquee: { '0%':{transform:'translateX(0)'},'100%':{transform:'translateX(-50%)'} } },
    }
  }
}
</script>
<style>
  body { font-family: 'Manrope', sans-serif; }
  .font-display { font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.02em; }
  .font-mono { font-family: 'JetBrains Mono', monospace; }
  ::selection { background:#c8451d; color:#f5f1ea; }
  [x-cloak] { display: none !important; }
  html { scroll-behavior: smooth; }
  ::-webkit-scrollbar { width: 10px; }
  ::-webkit-scrollbar-track { background: #f5f1ea; }
  ::-webkit-scrollbar-thumb { background: #0d0d0d; }
  ::-webkit-scrollbar-thumb:hover { background: #c8451d; }
</style>
</head>
<body class="bg-bone text-ink antialiased overflow-x-hidden">

<!-- ============ TOPBAR ============ -->
<div class="hidden md:block bg-ink text-bone/70 text-xs">
  <div class="container mx-auto px-6 flex justify-between items-center h-9">
    <div class="flex items-center gap-6">
      <span class="flex items-center gap-2">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
        <span class="tracking-wider">+63 917 000 0000</span>
      </span>
      <span class="flex items-center gap-2">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
        <span>sales@southernmegasteel.ph</span>
      </span>
    </div>
    <div class="flex items-center gap-4">
      <span class="tracking-[0.2em] uppercase text-[10px] text-rust">Mon–Sat · 8AM–6PM</span>
      <a href="https://www.facebook.com/southernmegasteel" target="_blank" rel="noopener" class="hover:text-rust transition-colors">Facebook ↗</a>
    </div>
  </div>
</div>

<!-- ============ NAV ============ -->
<nav x-data="{ open: false, scrolled: false }"
     @scroll.window="scrolled = (window.scrollY > 20)"
     :class="scrolled ? 'bg-bone/95 backdrop-blur-md shadow-md border-b border-ink/10' : 'bg-bone border-b border-ink/5'"
     class="sticky top-0 z-50 transition-all duration-300">
  <div class="container mx-auto px-6">
    <div class="flex items-center justify-between h-20">
      <a href="#home" class="flex items-center gap-3 group">
        <div class="w-11 h-11 bg-ink flex items-center justify-center relative overflow-hidden">
          <span class="font-display text-bone text-2xl leading-none tracking-wider">SM</span>
          <div class="absolute -bottom-0.5 left-0 right-0 h-1 bg-rust"></div>
        </div>
        <div class="leading-none">
          <div class="font-display text-xl text-ink tracking-wide">SOUTHERN MEGA</div>
          <div class="text-[10px] tracking-[0.3em] text-ink/60 uppercase mt-0.5">Steel Trading</div>
        </div>
      </a>
      <div class="hidden lg:flex items-center gap-1">
        <a href="#home" class="px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink relative group transition-colors"><span>Home</span><span class="absolute left-4 right-4 -bottom-0.5 h-0.5 bg-rust scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span></a>
        <a href="#about" class="px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink relative group transition-colors"><span>About</span><span class="absolute left-4 right-4 -bottom-0.5 h-0.5 bg-rust scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span></a>
        <a href="#products" class="px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink relative group transition-colors"><span>Products</span><span class="absolute left-4 right-4 -bottom-0.5 h-0.5 bg-rust scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span></a>
        <a href="#services" class="px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink relative group transition-colors"><span>Services</span><span class="absolute left-4 right-4 -bottom-0.5 h-0.5 bg-rust scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span></a>
        <a href="#gallery" class="px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink relative group transition-colors"><span>Gallery</span><span class="absolute left-4 right-4 -bottom-0.5 h-0.5 bg-rust scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span></a>
        <a href="#contact" class="px-4 py-2 text-sm font-medium text-ink/80 hover:text-ink relative group transition-colors"><span>Contact</span><span class="absolute left-4 right-4 -bottom-0.5 h-0.5 bg-rust scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span></a>
      </div>
      <div class="hidden lg:flex items-center gap-3">
        <a href="#contact" class="text-sm font-semibold text-ink hover:text-rust transition-colors">Contact Us</a>
        <a href="#inquire" class="group inline-flex items-center gap-2 bg-ink hover:bg-rust text-bone px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-300">
          GET A QUOTE
          <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
      <button @click="open = !open" class="lg:hidden w-11 h-11 flex flex-col items-center justify-center gap-1.5" aria-label="Toggle menu">
        <span :class="open ? 'rotate-45 translate-y-2' : ''" class="w-6 h-0.5 bg-ink transition-all duration-300"></span>
        <span :class="open ? 'opacity-0' : ''" class="w-6 h-0.5 bg-ink transition-all duration-300"></span>
        <span :class="open ? '-rotate-45 -translate-y-2' : ''" class="w-6 h-0.5 bg-ink transition-all duration-300"></span>
      </button>
    </div>
    <div x-show="open" x-transition x-cloak class="lg:hidden pb-6 border-t border-ink/10">
      <div class="pt-4 space-y-1">
        <a href="#home" @click="open = false" class="block px-4 py-3 text-base font-medium text-ink hover:bg-ink hover:text-bone transition-colors border-l-2 border-transparent hover:border-rust">Home</a>
        <a href="#about" @click="open = false" class="block px-4 py-3 text-base font-medium text-ink hover:bg-ink hover:text-bone transition-colors border-l-2 border-transparent hover:border-rust">About</a>
        <a href="#products" @click="open = false" class="block px-4 py-3 text-base font-medium text-ink hover:bg-ink hover:text-bone transition-colors border-l-2 border-transparent hover:border-rust">Products</a>
        <a href="#services" @click="open = false" class="block px-4 py-3 text-base font-medium text-ink hover:bg-ink hover:text-bone transition-colors border-l-2 border-transparent hover:border-rust">Services</a>
        <a href="#gallery" @click="open = false" class="block px-4 py-3 text-base font-medium text-ink hover:bg-ink hover:text-bone transition-colors border-l-2 border-transparent hover:border-rust">Gallery</a>
        <a href="#contact" @click="open = false" class="block px-4 py-3 text-base font-medium text-ink hover:bg-ink hover:text-bone transition-colors border-l-2 border-transparent hover:border-rust">Contact</a>
        <div class="pt-4 grid grid-cols-2 gap-3 px-4">
          <a href="#contact" @click="open = false" class="text-center py-3 border-2 border-ink text-ink font-semibold text-sm">CONTACT</a>
          <a href="#inquire" @click="open = false" class="text-center py-3 bg-ink text-bone font-semibold text-sm">GET QUOTE</a>
        </div>
      </div>
    </div>
  </div>
</nav>

<main>

<!-- ============ HERO ============ -->
<section id="home" class="relative bg-bone overflow-hidden">
  <div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: linear-gradient(45deg, #1a1a1a 1px, transparent 1px), linear-gradient(-45deg, #1a1a1a 1px, transparent 1px); background-size: 40px 40px;"></div>
  <div class="container mx-auto px-6 relative">
    <div class="grid lg:grid-cols-12 gap-8 min-h-[calc(100vh-7rem)] items-center py-16 lg:py-0">
      <div class="lg:col-span-7 z-10">
        <div class="flex items-center gap-3 mb-6">
          <div class="h-px w-12 bg-rust"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-rust font-semibold">Steel · Strength · Service</span>
        </div>
        <h1 class="font-display text-[3rem] sm:text-[4rem] md:text-[5.5rem] lg:text-[6.5rem] leading-[0.95] tracking-tight text-ink">
          BUILDING THE<br><span class="text-rust">PHILIPPINES</span><br>ONE BEAM<br>AT A TIME.
        </h1>
        <p class="mt-8 text-lg md:text-xl text-ink/70 max-w-xl leading-relaxed">
          Southern Mega Steel supplies premium structural steel — I-beams, plates, pipes, channels, and more — with reliable nationwide delivery and pricing built for serious builders.
        </p>
        <div class="mt-10 flex flex-wrap items-center gap-4">
          <a href="#inquire" class="group inline-flex items-center gap-3 bg-ink hover:bg-rust text-bone px-8 py-4 font-semibold tracking-wider text-sm transition-all">
            REQUEST A QUOTE
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#products" class="inline-flex items-center gap-2 text-ink hover:text-rust font-semibold tracking-wider text-sm transition-colors border-b-2 border-ink hover:border-rust pb-1">VIEW PRODUCT CATALOG</a>
        </div>
        <div class="mt-14 grid grid-cols-3 gap-6 border-t border-ink/10 pt-8 max-w-2xl">
          <div><div class="font-display text-4xl md:text-5xl text-ink leading-none">25<span class="text-rust">+</span></div><div class="text-xs tracking-widest uppercase text-ink/60 mt-2">Years of Excellence</div></div>
          <div><div class="font-display text-4xl md:text-5xl text-ink leading-none">500<span class="text-rust">+</span></div><div class="text-xs tracking-widest uppercase text-ink/60 mt-2">Projects Delivered</div></div>
          <div><div class="font-display text-4xl md:text-5xl text-ink leading-none">100<span class="text-rust">%</span></div><div class="text-xs tracking-widest uppercase text-ink/60 mt-2">Quality Assured</div></div>
        </div>
      </div>
      <div class="lg:col-span-5 relative h-[500px] lg:h-[640px] hidden lg:block">
        <div class="absolute top-0 right-0 w-[85%] h-[60%] bg-ink overflow-hidden">
          <div class="w-full h-full bg-gradient-to-br from-steel-700 via-steel-800 to-ink flex items-center justify-center relative">
            <div class="absolute inset-0 opacity-20">
              <div class="absolute left-1/2 top-0 bottom-0 w-2 bg-bone -translate-x-1/2"></div>
              <div class="absolute left-1/4 top-0 bottom-0 w-1 bg-bone"></div>
              <div class="absolute right-1/4 top-0 bottom-0 w-1 bg-bone"></div>
              <div class="absolute top-1/2 left-0 right-0 h-2 bg-bone -translate-y-1/2"></div>
            </div>
            <div class="relative text-bone text-center px-8">
              <div class="font-display text-7xl tracking-wider">I-BEAM</div>
              <div class="text-xs tracking-[0.4em] uppercase mt-3 text-bone/60">Structural Steel</div>
            </div>
          </div>
        </div>
        <div class="absolute bottom-0 left-0 w-[60%] h-[45%] bg-rust overflow-hidden flex items-center justify-center">
          <div class="text-bone text-center px-6">
            <div class="font-display text-5xl">PREMIUM</div>
            <div class="text-xs tracking-[0.3em] uppercase mt-2 text-bone/80">Quality Grade Steel</div>
          </div>
        </div>
        <div class="absolute bottom-[35%] right-[5%] w-32 h-32 bg-bone border-4 border-ink rounded-full flex flex-col items-center justify-center shadow-2xl rotate-12">
          <div class="font-display text-3xl text-ink leading-none">EST.</div>
          <div class="font-display text-2xl text-rust leading-none mt-1">2024</div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-ink text-bone/70 py-4 overflow-hidden border-y border-bone/10">
    <div class="flex gap-12 animate-marquee whitespace-nowrap font-display tracking-widest text-lg">
      <span class="flex items-center gap-12 flex-shrink-0"><span>I-BEAM</span><span class="text-rust">●</span><span>WIDE FLANGE</span><span class="text-rust">●</span><span>MS PLATE</span><span class="text-rust">●</span><span>STEEL PIPES</span><span class="text-rust">●</span><span>SHEET PILE</span><span class="text-rust">●</span><span>DEFORMED BAR</span><span class="text-rust">●</span><span>C-CHANNEL</span><span class="text-rust">●</span><span>ANCHOR BOLT</span><span class="text-rust">●</span></span>
      <span class="flex items-center gap-12 flex-shrink-0"><span>I-BEAM</span><span class="text-rust">●</span><span>WIDE FLANGE</span><span class="text-rust">●</span><span>MS PLATE</span><span class="text-rust">●</span><span>STEEL PIPES</span><span class="text-rust">●</span><span>SHEET PILE</span><span class="text-rust">●</span><span>DEFORMED BAR</span><span class="text-rust">●</span><span>C-CHANNEL</span><span class="text-rust">●</span><span>ANCHOR BOLT</span><span class="text-rust">●</span></span>
    </div>
  </div>
</section>

<!-- ============ ABOUT ============ -->
<section id="about" class="bg-bone py-20 md:py-28">
  <div class="container mx-auto px-6">
    <div class="grid lg:grid-cols-12 gap-12 items-start">
      <div class="lg:col-span-5">
        <div class="lg:sticky lg:top-32">
          <div class="flex items-center gap-3 mb-5">
            <span class="font-mono text-xs text-rust">[ 01 ]</span>
            <div class="h-px flex-1 bg-rust/40"></div>
            <span class="text-xs tracking-[0.4em] uppercase text-ink/60">About</span>
          </div>
          <h2 class="font-display text-5xl md:text-6xl leading-[0.95] text-ink">FORGED IN<br><span class="text-rust">EXPERIENCE.</span><br>BUILT ON<br>TRUST.</h2>
          <div class="mt-10 relative">
            <div class="aspect-[4/5] bg-gradient-to-br from-steel-600 to-ink relative overflow-hidden">
              <div class="absolute inset-0 opacity-20">
                <div class="absolute top-1/3 left-0 right-0 h-1 bg-bone"></div>
                <div class="absolute top-2/3 left-0 right-0 h-1 bg-bone"></div>
                <div class="absolute left-1/3 top-0 bottom-0 w-1 bg-bone"></div>
                <div class="absolute right-1/3 top-0 bottom-0 w-1 bg-bone"></div>
              </div>
              <div class="absolute bottom-6 left-6 right-6 text-bone">
                <div class="font-display text-3xl">QUALITY</div>
                <div class="font-display text-3xl text-rust">DELIVERED</div>
                <div class="text-xs tracking-[0.3em] uppercase mt-2 text-bone/60">Since Day One</div>
              </div>
            </div>
            <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-rust"></div>
          </div>
        </div>
      </div>
      <div class="lg:col-span-7 space-y-8">
        <p class="text-2xl md:text-3xl text-ink leading-snug font-light">
          Southern Mega Steel Trading is a Filipino-owned company committed to supplying <span class="font-semibold relative inline-block">high-quality structural steel<span class="absolute -bottom-1 left-0 right-0 h-1 bg-rust"></span></span> across the Philippines — at fair, competitive prices.
        </p>
        <div class="space-y-5 text-ink/75 text-base md:text-lg leading-relaxed">
          <p>We believe great projects deserve great materials. From small contractors to nationwide infrastructure, our steel meets the demanding standards of every job site we serve.</p>
          <p>Our growing inventory covers I-beams, wide flanges, plates, pipes, channels, deformed bars, and specialty steel — all sourced from trusted mills and ready for prompt delivery.</p>
        </div>
        <div class="grid sm:grid-cols-3 gap-5 mt-12">
          <div class="border-l-2 border-rust pl-5 py-1 hover:bg-ink/5 transition-colors"><div class="font-mono text-xs text-rust mb-2">01</div><div class="font-display text-2xl text-ink tracking-wide mb-2">MISSION</div><p class="text-sm text-ink/65 leading-relaxed">Provide premium steel products with reliable service to every Filipino builder.</p></div>
          <div class="border-l-2 border-rust pl-5 py-1 hover:bg-ink/5 transition-colors"><div class="font-mono text-xs text-rust mb-2">02</div><div class="font-display text-2xl text-ink tracking-wide mb-2">VISION</div><p class="text-sm text-ink/65 leading-relaxed">To be the most trusted steel partner across the Philippines.</p></div>
          <div class="border-l-2 border-rust pl-5 py-1 hover:bg-ink/5 transition-colors"><div class="font-mono text-xs text-rust mb-2">03</div><div class="font-display text-2xl text-ink tracking-wide mb-2">VALUES</div><p class="text-sm text-ink/65 leading-relaxed">Integrity, quality, punctuality, and partnership in every transaction.</p></div>
        </div>
        <div class="mt-12 bg-ink text-bone p-8 md:p-10 relative overflow-hidden">
          <div class="absolute -top-10 -right-10 w-40 h-40 border-8 border-rust rotate-45 opacity-30"></div>
          <h3 class="font-display text-3xl tracking-wide mb-6 relative">WHY CHOOSE US</h3>
          <ul class="grid sm:grid-cols-2 gap-x-8 gap-y-3 text-sm relative">
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Premium quality structural steel</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Competitive bulk &amp; retail pricing</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Efficient nationwide delivery</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Customer-centric, on-time service</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Decades of industry expertise</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Trusted partner for every project</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Transparent quotes — no surprises</span></li>
            <li class="flex items-start gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><span class="text-bone/85">Dedicated account managers</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PRODUCTS ============ -->
<section id="products" class="bg-ink text-bone py-20 md:py-28 relative overflow-hidden">
  <div class="absolute inset-0 opacity-[0.05] pointer-events-none" style="background-image: linear-gradient(white 1px, transparent 1px), linear-gradient(90deg, white 1px, transparent 1px); background-size: 60px 60px;"></div>
  <div class="container mx-auto px-6 relative">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-14">
      <div class="max-w-3xl">
        <div class="flex items-center gap-3 mb-5">
          <span class="font-mono text-xs text-rust">[ 02 ]</span>
          <div class="h-px w-12 bg-rust"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-bone/60">Product Catalog</span>
        </div>
        <h2 class="font-display text-5xl md:text-6xl lg:text-7xl leading-[0.95] tracking-tight">THE FULL <span class="text-rust">STEEL</span><br>SPECTRUM.</h2>
        <p class="mt-6 text-lg text-bone/70 max-w-xl">From foundational beams to specialty profiles, we stock the steel that builds the country.</p>
      </div>
      <a href="#inquire" class="hidden md:inline-flex items-center gap-2 text-rust hover:text-bone font-semibold tracking-wider text-sm transition-colors border-b-2 border-rust hover:border-bone pb-1">REQUEST FULL CATALOG →</a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-4 auto-rows-[180px]">
      
      <a href="#inquire" class="group relative md:col-span-2 md:row-span-2 bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 01 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Structural</span>
        </div>
        <div>
          <h3 class="font-display text-5xl md:text-7xl leading-[0.9] tracking-tight">I-BEAM / H-BEAM</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">Heavy-duty I-shaped and H-shaped structural beams. The backbone of every major construction project.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative  bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 02 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Structural</span>
        </div>
        <div>
          <h3 class="font-display text-3xl md:text-4xl leading-[0.9] tracking-tight">WIDE FLANGE</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">High-strength W-section beams.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative  bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 03 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Plates</span>
        </div>
        <div>
          <h3 class="font-display text-3xl md:text-4xl leading-[0.9] tracking-tight">MS PLATE</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">Mild steel plates, all gauges.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative md:col-span-2 bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 04 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Pipes</span>
        </div>
        <div>
          <h3 class="font-display text-4xl md:text-5xl leading-[0.9] tracking-tight">STEEL PIPES B.I/G.I</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">Black iron &amp; galvanized iron pipes — water lines, structural, scaffolding, fencing.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative  bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 05 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Bars</span>
        </div>
        <div>
          <h3 class="font-display text-3xl md:text-4xl leading-[0.9] tracking-tight">C-CHANNEL</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">C-section channel bars.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative  bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 06 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Specialty</span>
        </div>
        <div>
          <h3 class="font-display text-3xl md:text-4xl leading-[0.9] tracking-tight">SHEET PILE / Z-TYPE</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">Z-type interlocking sheet piles.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative md:col-span-2 bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 07 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Rebar</span>
        </div>
        <div>
          <h3 class="font-display text-4xl md:text-5xl leading-[0.9] tracking-tight">DEFORMED BAR</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">High-tensile deformed bars (rebar) for reinforced concrete construction.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative  bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 08 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Hardware</span>
        </div>
        <div>
          <h3 class="font-display text-3xl md:text-4xl leading-[0.9] tracking-tight">ANCHOR BOLT</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">Anchor bolts in all standard sizes.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
      <a href="#inquire" class="group relative  bg-steel-800 hover:bg-rust border border-bone/10 hover:border-rust transition-all duration-500 overflow-hidden p-6 flex flex-col justify-between cursor-pointer">
        <div class="flex justify-between items-start">
          <span class="font-mono text-[10px] tracking-widest uppercase text-rust group-hover:text-bone transition-colors">[ 09 ]</span>
          <span class="text-[10px] tracking-[0.3em] uppercase text-bone/40 group-hover:text-bone/80 transition-colors">Bars</span>
        </div>
        <div>
          <h3 class="font-display text-3xl md:text-4xl leading-[0.9] tracking-tight">PLAIN ROUND BAR</h3>
          <p class="mt-3 text-xs text-bone/50 group-hover:text-bone/90 transition-colors">Smooth round bars for fabrication.</p>
          <div class="mt-4 flex items-center gap-2 text-xs tracking-widest text-bone/0 group-hover:text-bone transition-colors"><span>INQUIRE</span><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></div>
        </div>
      </a>
    </div>
    <div class="mt-12 md:hidden text-center">
      <a href="#inquire" class="inline-flex items-center gap-2 text-rust font-semibold tracking-wider text-sm border-b-2 border-rust pb-1">REQUEST FULL CATALOG →</a>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section id="services" class="bg-bone py-20 md:py-28">
  <div class="container mx-auto px-6">
    <div class="max-w-3xl mb-14">
      <div class="flex items-center gap-3 mb-5">
        <span class="font-mono text-xs text-rust">[ 03 ]</span>
        <div class="h-px w-12 bg-rust"></div>
        <span class="text-xs tracking-[0.4em] uppercase text-ink/60">What We Do</span>
      </div>
      <h2 class="font-display text-5xl md:text-6xl lg:text-7xl leading-[0.95] tracking-tight text-ink">BEYOND <span class="text-rust">SUPPLY.</span><br>FULL SERVICE.</h2>
    </div>
    <div class="space-y-2">
      
      <div x-data="{ open: false }" class="group border-t border-ink/15 hover:bg-ink hover:text-bone transition-all duration-500 cursor-pointer" @click="open = !open">
        <div class="grid grid-cols-12 items-center gap-4 py-7 md:py-8 px-2 md:px-6">
          <div class="col-span-2 md:col-span-1 font-mono text-sm md:text-base text-rust">01</div>
          <div class="col-span-7 md:col-span-7"><h3 class="font-display text-2xl md:text-4xl tracking-wide group-hover:translate-x-2 transition-transform">STEEL SUPPLY &amp; SOURCING</h3></div>
          <div class="col-span-2 hidden md:block text-sm opacity-50 group-hover:opacity-100 transition-opacity"><span x-text="open ? 'CLOSE' : 'EXPAND'" class="tracking-widest"></span></div>
          <div class="col-span-3 md:col-span-2 flex justify-end">
            <div class="w-10 h-10 md:w-12 md:h-12 border border-current flex items-center justify-center transition-transform" :class="open ? 'rotate-45 bg-rust border-rust' : ''">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
          </div>
        </div>
        <div x-show="open" x-collapse x-cloak class="px-2 md:px-6 pb-8 grid md:grid-cols-12 gap-6">
          <div class="md:col-start-2 md:col-span-7">
            <p class="text-base md:text-lg leading-relaxed opacity-80 mb-5">Premium structural steel sourced from trusted local and international mills, with verified specifications and consistent quality control.</p>
            <ul class="flex flex-wrap gap-2"><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Bulk &amp; retail orders</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Verified certifications</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Custom specifications</li></ul>
          </div>
        </div>
      </div>
      <div x-data="{ open: false }" class="group border-t border-ink/15 hover:bg-ink hover:text-bone transition-all duration-500 cursor-pointer" @click="open = !open">
        <div class="grid grid-cols-12 items-center gap-4 py-7 md:py-8 px-2 md:px-6">
          <div class="col-span-2 md:col-span-1 font-mono text-sm md:text-base text-rust">02</div>
          <div class="col-span-7 md:col-span-7"><h3 class="font-display text-2xl md:text-4xl tracking-wide group-hover:translate-x-2 transition-transform">NATIONWIDE DELIVERY</h3></div>
          <div class="col-span-2 hidden md:block text-sm opacity-50 group-hover:opacity-100 transition-opacity"><span x-text="open ? 'CLOSE' : 'EXPAND'" class="tracking-widest"></span></div>
          <div class="col-span-3 md:col-span-2 flex justify-end">
            <div class="w-10 h-10 md:w-12 md:h-12 border border-current flex items-center justify-center transition-transform" :class="open ? 'rotate-45 bg-rust border-rust' : ''">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
          </div>
        </div>
        <div x-show="open" x-collapse x-cloak class="px-2 md:px-6 pb-8 grid md:grid-cols-12 gap-6">
          <div class="md:col-start-2 md:col-span-7">
            <p class="text-base md:text-lg leading-relaxed opacity-80 mb-5">A dedicated fleet of heavy-duty trucks ensures your steel arrives on schedule — anywhere from Luzon to Mindanao.</p>
            <ul class="flex flex-wrap gap-2"><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Tracked dispatch</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">On-time guarantee</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Site-direct unloading</li></ul>
          </div>
        </div>
      </div>
      <div x-data="{ open: false }" class="group border-t border-ink/15 hover:bg-ink hover:text-bone transition-all duration-500 cursor-pointer" @click="open = !open">
        <div class="grid grid-cols-12 items-center gap-4 py-7 md:py-8 px-2 md:px-6">
          <div class="col-span-2 md:col-span-1 font-mono text-sm md:text-base text-rust">03</div>
          <div class="col-span-7 md:col-span-7"><h3 class="font-display text-2xl md:text-4xl tracking-wide group-hover:translate-x-2 transition-transform">CUSTOM CUTTING &amp; FABRICATION</h3></div>
          <div class="col-span-2 hidden md:block text-sm opacity-50 group-hover:opacity-100 transition-opacity"><span x-text="open ? 'CLOSE' : 'EXPAND'" class="tracking-widest"></span></div>
          <div class="col-span-3 md:col-span-2 flex justify-end">
            <div class="w-10 h-10 md:w-12 md:h-12 border border-current flex items-center justify-center transition-transform" :class="open ? 'rotate-45 bg-rust border-rust' : ''">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
          </div>
        </div>
        <div x-show="open" x-collapse x-cloak class="px-2 md:px-6 pb-8 grid md:grid-cols-12 gap-6">
          <div class="md:col-start-2 md:col-span-7">
            <p class="text-base md:text-lg leading-relaxed opacity-80 mb-5">Cut-to-length services and basic fabrication so your team gets jobsite-ready material — saving hours of labor.</p>
            <ul class="flex flex-wrap gap-2"><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Precision cutting</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Drilling &amp; punching</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Surface treatment</li></ul>
          </div>
        </div>
      </div>
      <div x-data="{ open: false }" class="group border-t border-ink/15 hover:bg-ink hover:text-bone transition-all duration-500 cursor-pointer" @click="open = !open">
        <div class="grid grid-cols-12 items-center gap-4 py-7 md:py-8 px-2 md:px-6">
          <div class="col-span-2 md:col-span-1 font-mono text-sm md:text-base text-rust">04</div>
          <div class="col-span-7 md:col-span-7"><h3 class="font-display text-2xl md:text-4xl tracking-wide group-hover:translate-x-2 transition-transform">PROJECT CONSULTATION</h3></div>
          <div class="col-span-2 hidden md:block text-sm opacity-50 group-hover:opacity-100 transition-opacity"><span x-text="open ? 'CLOSE' : 'EXPAND'" class="tracking-widest"></span></div>
          <div class="col-span-3 md:col-span-2 flex justify-end">
            <div class="w-10 h-10 md:w-12 md:h-12 border border-current flex items-center justify-center transition-transform" :class="open ? 'rotate-45 bg-rust border-rust' : ''">
              <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            </div>
          </div>
        </div>
        <div x-show="open" x-collapse x-cloak class="px-2 md:px-6 pb-8 grid md:grid-cols-12 gap-6">
          <div class="md:col-start-2 md:col-span-7">
            <p class="text-base md:text-lg leading-relaxed opacity-80 mb-5">Our experienced team helps you spec the right materials, optimize quantities, and stay on budget from day one.</p>
            <ul class="flex flex-wrap gap-2"><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Material spec advisory</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Bulk pricing strategy</li><li class="text-xs tracking-wider uppercase border border-current/30 px-3 py-1.5">Project-based quoting</li></ul>
          </div>
        </div>
      </div>
      <div class="border-t border-ink/15"></div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section id="gallery" class="bg-steel-50 py-20 md:py-28">
  <div class="container mx-auto px-6" x-data="{ filter: 'all' }">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
      <div class="max-w-2xl">
        <div class="flex items-center gap-3 mb-5">
          <span class="font-mono text-xs text-rust">[ 04 ]</span>
          <div class="h-px w-12 bg-rust"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-ink/60">Project Gallery</span>
        </div>
        <h2 class="font-display text-5xl md:text-6xl leading-[0.95] tracking-tight text-ink">STEEL IN <span class="text-rust">ACTION.</span></h2>
        <p class="mt-5 text-lg text-ink/70">A glimpse of recent projects, deliveries, and our trusted fleet.</p>
      </div>
      <div class="flex flex-wrap gap-2">
        <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-ink text-bone' : 'bg-bone text-ink hover:bg-ink/10'" class="px-4 py-2 text-xs font-semibold tracking-widest uppercase transition-colors">All</button>
        <button @click="filter = 'projects'" :class="filter === 'projects' ? 'bg-ink text-bone' : 'bg-bone text-ink hover:bg-ink/10'" class="px-4 py-2 text-xs font-semibold tracking-widest uppercase transition-colors">Projects</button>
        <button @click="filter = 'fleet'" :class="filter === 'fleet' ? 'bg-ink text-bone' : 'bg-bone text-ink hover:bg-ink/10'" class="px-4 py-2 text-xs font-semibold tracking-widest uppercase transition-colors">Fleet</button>
        <button @click="filter = 'warehouse'" :class="filter === 'warehouse' ? 'bg-ink text-bone' : 'bg-bone text-ink hover:bg-ink/10'" class="px-4 py-2 text-xs font-semibold tracking-widest uppercase transition-colors">Warehouse</button>
      </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 auto-rows-[140px] md:auto-rows-[200px]">
      
      <div x-show="filter === 'all' || filter === 'projects'" x-transition class="col-span-2 row-span-2 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-steel-700 to-steel-900">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">PROJECTS</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">BUILD #1</div>
          <div class="text-xs opacity-80 mt-0.5">Cavite — Commercial</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'fleet'" x-transition class="row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-rust to-rust-dark">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">FLEET</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">TRUCK 04</div>
          <div class="text-xs opacity-80 mt-0.5">On Route</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'warehouse'" x-transition class="row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-steel-600 to-steel-800">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">WAREHOUSE</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">YARD A</div>
          <div class="text-xs opacity-80 mt-0.5">I-Beam Stock</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'fleet'" x-transition class="col-span-2 row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-ink to-steel-800">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">FLEET</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">FLEET</div>
          <div class="text-xs opacity-80 mt-0.5">12 Active Trucks</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'projects'" x-transition class="row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-steel-500 to-steel-700">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">PROJECTS</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">BUILD #2</div>
          <div class="text-xs opacity-80 mt-0.5">Mindoro — Bridge</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'warehouse'" x-transition class="row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-steel-700 to-ink">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">WAREHOUSE</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">YARD B</div>
          <div class="text-xs opacity-80 mt-0.5">Plate Storage</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'projects'" x-transition class="col-span-2 row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-rust-dark to-ink">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">PROJECTS</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">BUILD #3</div>
          <div class="text-xs opacity-80 mt-0.5">Manila — Tower</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'warehouse'" x-transition class="row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-steel-600 to-steel-900">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">WAREHOUSE</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">PIPES</div>
          <div class="text-xs opacity-80 mt-0.5">B.I &amp; G.I Stock</div>
        </div>
      </div>
      <div x-show="filter === 'all' || filter === 'fleet'" x-transition class="row-span-1 group relative overflow-hidden cursor-pointer bg-gradient-to-br from-steel-700 to-rust-dark">
        <div class="absolute inset-0 opacity-15"><div class="absolute left-1/2 top-0 bottom-0 w-1 bg-bone"></div><div class="absolute top-1/2 left-0 right-0 h-1 bg-bone"></div></div>
        <div class="absolute inset-0 bg-ink/0 group-hover:bg-ink/40 transition-colors duration-500"></div>
        <div class="absolute bottom-3 left-3 right-3 text-bone">
          <div class="text-[9px] tracking-[0.3em] uppercase opacity-70 mb-1">FLEET</div>
          <div class="font-display text-xl md:text-2xl tracking-wider">TRUCK 07</div>
          <div class="text-xs opacity-80 mt-0.5">Heavy Haul</div>
        </div>
      </div>
    </div>
    <p class="mt-8 text-sm text-ink/60 text-center"><span class="font-mono">*</span> Replace placeholders with real photos via the admin panel.</p>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section id="contact" class="bg-bone py-20 md:py-28">
  <div class="container mx-auto px-6">
    <div class="grid lg:grid-cols-12 gap-10">
      <div class="lg:col-span-5">
        <div class="flex items-center gap-3 mb-5">
          <span class="font-mono text-xs text-rust">[ 05 ]</span>
          <div class="h-px w-12 bg-rust"></div>
          <span class="text-xs tracking-[0.4em] uppercase text-ink/60">Contact</span>
        </div>
        <h2 class="font-display text-5xl md:text-6xl leading-[0.95] tracking-tight text-ink mb-6">LET'S BUILD<br><span class="text-rust">TOGETHER.</span></h2>
        <p class="text-lg text-ink/70 mb-8">Drop a message, request a quote, or stop by the yard. We respond within 24 hours.</p>
        <div class="space-y-4 mb-8">
          <div class="flex gap-4 group"><div class="w-12 h-12 bg-ink group-hover:bg-rust transition-colors flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-bone" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg></div><div><div class="text-[10px] tracking-[0.3em] uppercase text-ink/50 mb-1">OFFICE / YARD</div><div class="text-base text-ink font-medium leading-snug">Cavite, Philippines<br><span class="text-xs text-ink/50">Update with full address via admin</span></div></div></div>
          <div class="flex gap-4 group"><div class="w-12 h-12 bg-ink group-hover:bg-rust transition-colors flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-bone" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg></div><div><div class="text-[10px] tracking-[0.3em] uppercase text-ink/50 mb-1">TELEPHONE</div><div class="text-base text-ink font-medium leading-snug">+63 (046) 000 0000</div></div></div>
          <div class="flex gap-4 group"><div class="w-12 h-12 bg-ink group-hover:bg-rust transition-colors flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-bone" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z"/></svg></div><div><div class="text-[10px] tracking-[0.3em] uppercase text-ink/50 mb-1">MOBILE</div><div class="text-base text-ink font-medium leading-snug">+63 917 000 0000  ·  +63 919 000 0000</div></div></div>
          <div class="flex gap-4 group"><div class="w-12 h-12 bg-ink group-hover:bg-rust transition-colors flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-bone" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg></div><div><div class="text-[10px] tracking-[0.3em] uppercase text-ink/50 mb-1">EMAIL</div><div class="text-base text-ink font-medium leading-snug">sales@southernmegasteel.ph</div></div></div>
          <div class="flex gap-4 group"><div class="w-12 h-12 bg-ink group-hover:bg-rust transition-colors flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-bone" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg></div><div><div class="text-[10px] tracking-[0.3em] uppercase text-ink/50 mb-1">BUSINESS HOURS</div><div class="text-base text-ink font-medium leading-snug">Mon – Sat · 8:00 AM – 6:00 PM</div></div></div>
        </div>
        <div class="aspect-video bg-ink relative overflow-hidden border-4 border-ink">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61920.93847287!2d120.85!3d14.40!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDI0JzAwLjAiTiAxMjDCsDU2JzAwLjAiRQ!5e0!3m2!1sen!2sph!4v1700000000000" class="w-full h-full grayscale" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="lg:col-span-7" x-data="{ tab: 'contact' }">
        <div class="flex gap-0 border-b-2 border-ink mb-8">
          <button @click="tab = 'contact'" :class="tab === 'contact' ? 'bg-ink text-bone' : 'bg-transparent text-ink hover:bg-ink/10'" class="px-6 md:px-8 py-4 font-display text-base md:text-lg tracking-widest transition-colors">DIRECT MESSAGE</button>
          <button @click="tab = 'inquire'" id="inquire" :class="tab === 'inquire' ? 'bg-rust text-bone' : 'bg-transparent text-ink hover:bg-rust/10'" class="px-6 md:px-8 py-4 font-display text-base md:text-lg tracking-widest transition-colors">REQUEST A QUOTE</button>
        </div>

        <!-- Contact form -->
        <form x-show="tab === 'contact'" class="space-y-5" onsubmit="event.preventDefault(); alert('Form OK — backend will be wired in next step.')">
          <div class="grid md:grid-cols-2 gap-5">
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Full Name *</label><input type="text" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Email *</label><input type="email" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          </div>
          <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Contact Number *</label><input type="tel" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Subject</label><input type="text" class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Message *</label><textarea rows="4" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none resize-none transition-colors"></textarea></div>
          <button type="submit" class="group inline-flex items-center gap-3 bg-ink hover:bg-rust text-bone px-8 py-4 font-semibold tracking-wider text-sm transition-colors mt-4">SEND MESSAGE<svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></button>
        </form>

        <!-- Inquiry form -->
        <form x-show="tab === 'inquire'" x-cloak class="space-y-5" onsubmit="event.preventDefault(); alert('Quote request OK — backend will be wired in next step.')">
          <div class="grid md:grid-cols-2 gap-5">
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Full Name *</label><input type="text" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Company Name</label><input type="text" class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          </div>
          <div class="grid md:grid-cols-2 gap-5">
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Email *</label><input type="email" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Contact Number *</label><input type="tel" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          </div>
          <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Delivery Location *</label><input type="text" placeholder="Street, City, Province" required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          <div class="grid md:grid-cols-2 gap-5">
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Product Needed *</label>
              <select required class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors">
                <option value="">— Select Product —</option>
                <option>I-Beam / H-Beam</option><option>Wide Flange</option><option>MS Plate</option>
                <option>Steel Pipes (B.I / G.I)</option><option>Sheet Pile / Z-Type</option>
                <option>C-Channel / Channel Bar</option><option>Deformed Bar</option>
                <option>Anchor Bolt</option><option>Plain Round Bar</option><option>Other / Mixed</option>
              </select>
            </div>
            <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Quantity / Size</label><input type="text" placeholder="e.g. 50 pcs, 6m length" class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none transition-colors"></div>
          </div>
          <div><label class="block text-[10px] tracking-[0.3em] uppercase text-ink/60 mb-2">Specifications / Additional Notes</label><textarea rows="4" class="w-full bg-transparent border-b-2 border-ink/20 focus:border-rust py-2 text-ink outline-none resize-none transition-colors"></textarea></div>
          <button type="submit" class="group inline-flex items-center gap-3 bg-rust hover:bg-rust-dark text-bone px-8 py-4 font-semibold tracking-wider text-sm transition-colors mt-4">REQUEST QUOTE<svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></button>
        </form>
      </div>
    </div>
  </div>
</section>

</main>

<!-- ============ FOOTER ============ -->
<footer class="bg-ink text-bone/80 relative overflow-hidden">
  <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image: linear-gradient(to right, white 1px, transparent 1px); background-size: 80px 100%;"></div>
  <div class="bg-rust text-bone">
    <div class="container mx-auto px-6 py-8 flex flex-col md:flex-row items-center justify-between gap-6">
      <div>
        <div class="font-display text-2xl md:text-3xl tracking-wide">READY TO BUILD WITH STEEL THAT LASTS?</div>
        <div class="text-sm text-bone/80 mt-1">Get a quote within 24 hours · Nationwide delivery</div>
      </div>
      <a href="#inquire" class="inline-flex items-center gap-2 bg-ink hover:bg-bone hover:text-ink text-bone px-7 py-4 font-semibold tracking-wider text-sm transition-all whitespace-nowrap">REQUEST QUOTE<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
    </div>
  </div>
  <div class="container mx-auto px-6 py-16 relative">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
      <div class="lg:col-span-1">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-11 h-11 bg-rust flex items-center justify-center"><span class="font-display text-bone text-2xl leading-none">SM</span></div>
          <div><div class="font-display text-xl text-bone tracking-wide">SOUTHERN MEGA</div><div class="text-[10px] tracking-[0.3em] text-bone/50 uppercase">Steel Trading</div></div>
        </div>
        <p class="text-sm leading-relaxed text-bone/60 mb-5">A trusted supplier of premium steel products in the Philippines. Backed by years of expertise and an unwavering commitment to quality.</p>
        <div class="flex gap-3">
          <a href="https://www.facebook.com/southernmegasteel" target="_blank" rel="noopener" class="w-10 h-10 border border-bone/20 hover:bg-rust hover:border-rust flex items-center justify-center transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
          <a href="#" class="w-10 h-10 border border-bone/20 hover:bg-rust hover:border-rust flex items-center justify-center transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452z"/></svg></a>
        </div>
      </div>
      <div>
        <h4 class="font-display text-bone text-lg tracking-wider mb-5 relative pl-4"><span class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-rust"></span>QUICK LINKS</h4>
        <ul class="space-y-2.5 text-sm">
          <li><a href="#home" class="hover:text-rust transition-colors">→ Home</a></li>
          <li><a href="#about" class="hover:text-rust transition-colors">→ About Us</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">→ Products</a></li>
          <li><a href="#services" class="hover:text-rust transition-colors">→ Services</a></li>
          <li><a href="#gallery" class="hover:text-rust transition-colors">→ Gallery</a></li>
          <li><a href="#contact" class="hover:text-rust transition-colors">→ Contact</a></li>
          <li><a href="#inquire" class="hover:text-rust transition-colors">→ Get a Quote</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-display text-bone text-lg tracking-wider mb-5 relative pl-4"><span class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-rust"></span>PRODUCTS</h4>
        <ul class="space-y-2.5 text-sm">
          <li><a href="#products" class="hover:text-rust transition-colors">I-Beam / H-Beam</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">Wide Flange</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">MS Plate</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">Steel Pipes B.I / G.I</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">Sheet Pile / Z-Type</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">C-Channel / Channel Bar</a></li>
          <li><a href="#products" class="hover:text-rust transition-colors">Deformed Bar</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-display text-bone text-lg tracking-wider mb-5 relative pl-4"><span class="absolute left-0 top-1/2 -translate-y-1/2 w-2 h-2 bg-rust"></span>GET IN TOUCH</h4>
        <ul class="space-y-4 text-sm">
          <li class="flex gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg><span class="text-bone/70 leading-relaxed">Cavite, Philippines<br><span class="text-xs text-bone/50">(Update with full address)</span></span></li>
          <li class="flex gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg><a href="tel:+639170000000" class="text-bone/70 hover:text-rust transition-colors">+63 917 000 0000</a></li>
          <li class="flex gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg><a href="mailto:sales@southernmegasteel.ph" class="text-bone/70 hover:text-rust transition-colors break-all">sales@southernmegasteel.ph</a></li>
          <li class="flex gap-3"><svg class="w-5 h-5 text-rust flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg><span class="text-bone/70">Mon–Sat · 8:00AM – 6:00PM</span></li>
        </ul>
      </div>
    </div>
    <div class="mt-14 pt-6 border-t border-bone/10 flex flex-col md:flex-row justify-between items-center gap-3 text-xs text-bone/40">
      <div>© 2026 <span class="text-bone/70 font-semibold">SOUTHERN MEGA STEEL TRADING</span>. All rights reserved.</div>
      <div class="flex items-center gap-2 tracking-wider uppercase"><span>Designed &amp; Developed by</span><span class="text-rust font-semibold">Jowel Paña</span></div>
    </div>
  </div>
</footer>

<!-- ============ FLOATING ============ -->
<div x-data="{ visible: false }" @scroll.window="visible = (window.scrollY > 600)" x-show="visible" x-transition x-cloak class="fixed bottom-6 right-6 z-40 flex flex-col gap-3">
  <a href="https://m.me/southernmegasteel" target="_blank" rel="noopener" class="w-14 h-14 bg-[#0084ff] hover:bg-[#0066cc] rounded-full shadow-2xl flex items-center justify-center transition-all hover:scale-110">
    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.36 2 2 6.13 2 11.7c0 2.91 1.19 5.44 3.14 7.17.16.13.26.33.27.55l.05 1.78a.8.8 0 001.12.71l1.99-.88c.17-.07.35-.09.52-.04.91.25 1.88.38 2.91.38 5.64 0 10-4.13 10-9.7S17.64 2 12 2zm6.01 7.46l-2.94 4.66c-.46.74-1.46.92-2.16.41l-2.34-1.75a.6.6 0 00-.72 0l-3.16 2.39c-.42.32-.97-.18-.69-.62l2.94-4.66c.46-.74 1.46-.92 2.16-.41l2.34 1.75a.6.6 0 00.72 0l3.16-2.39c.42-.32.97.18.69.62z"/></svg>
  </a>
  <a href="#inquire" class="bg-rust hover:bg-rust-dark text-bone shadow-2xl flex items-center gap-2 px-5 py-3 font-semibold tracking-wider text-sm transition-all hover:scale-105">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
    QUOTE
  </a>
</div>

</body>
</html>