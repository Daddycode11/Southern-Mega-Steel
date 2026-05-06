{{-- Topbar --}}
<div class="hidden md:block bg-gray-900 text-white/70 text-xs">
  <div class="container mx-auto px-6 flex justify-between items-center h-9">
    <div class="flex items-center gap-6">
      <span class="flex items-center gap-2">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
        </svg>
        <span class="tracking-wider">0931 059 9611 / 0926 278 8298</span>
      </span>
      <span class="flex items-center gap-2">
        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
          <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
        </svg>
        <span>southernmegasteel@gmail.com</span>
      </span>
    </div>
    <div class="flex items-center gap-4">
      <span class="tracking-[0.2em] uppercase text-[10px] text-yellow-400">Mon–Sat · 8AM–6PM</span>
      <a href="https://www.facebook.com/southernmegasteel" target="_blank" rel="noopener"
         class="hover:text-red-400 transition-colors">Facebook ↗</a>
    </div>
  </div>
</div>

{{-- Main Navigation --}}
<nav x-data="{ open: false, scrolled: false }"
     @scroll.window="scrolled = (window.scrollY > 20)"
     :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-200/80' : 'bg-white border-b border-gray-200'"
     class="sticky top-0 z-50 transition-all duration-300">
  <div class="container mx-auto px-6">
    <div class="flex items-center justify-between h-[4.5rem]">

      {{-- Brand Logo --}}
      <a href="#home" class="flex items-center flex-shrink-0 group">
        <img src="{{ asset('images/sms-logo.png') }}"
             alt="Southern Mega Steel Enterprise Inc."
             class="h-12 w-auto object-contain group-hover:opacity-90 transition-opacity">
      </a>

      {{-- Desktop Nav Links --}}
      <div class="hidden lg:flex items-center gap-0.5">
        <a href="#home"
           class="px-3.5 py-2 text-sm font-medium text-gray-700 hover:text-red-800 relative group transition-colors">
          Home
          <span class="absolute left-3.5 right-3.5 -bottom-px h-0.5 bg-red-800 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
        </a>
        <a href="#about"
           class="px-3.5 py-2 text-sm font-medium text-gray-700 hover:text-red-800 relative group transition-colors">
          About
          <span class="absolute left-3.5 right-3.5 -bottom-px h-0.5 bg-red-800 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
        </a>
        <a href="#products"
           class="px-3.5 py-2 text-sm font-medium text-gray-700 hover:text-red-800 relative group transition-colors">
          Products
          <span class="absolute left-3.5 right-3.5 -bottom-px h-0.5 bg-red-800 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
        </a>
        <a href="#services"
           class="px-3.5 py-2 text-sm font-medium text-gray-700 hover:text-red-800 relative group transition-colors">
          Services
          <span class="absolute left-3.5 right-3.5 -bottom-px h-0.5 bg-red-800 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
        </a>
        <a href="#why-us"
           class="px-3.5 py-2 text-sm font-medium text-gray-700 hover:text-red-800 relative group transition-colors whitespace-nowrap">
          Why Choose Us
          <span class="absolute left-3.5 right-3.5 -bottom-px h-0.5 bg-red-800 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
        </a>
        <a href="#contact"
           class="px-3.5 py-2 text-sm font-medium text-gray-700 hover:text-red-800 relative group transition-colors">
          Contact Us
          <span class="absolute left-3.5 right-3.5 -bottom-px h-0.5 bg-red-800 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
        </a>
      </div>

      {{-- CTA Button --}}
      <div class="hidden lg:block flex-shrink-0">
        <a href="#inquire"
           class="inline-flex items-center gap-2 bg-red-800 hover:bg-red-900 text-white px-5 py-2.5 text-sm font-semibold tracking-wide transition-all duration-200">
          INQUIRE NOW
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>

      {{-- Hamburger Button --}}
      <button @click="open = !open"
              class="lg:hidden w-11 h-11 flex flex-col items-center justify-center gap-1.5"
              aria-label="Toggle menu">
        <span :class="open ? 'rotate-45 translate-y-2' : ''"
              class="w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
        <span :class="open ? 'opacity-0 scale-x-0' : ''"
              class="w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
        <span :class="open ? '-rotate-45 -translate-y-2' : ''"
              class="w-6 h-0.5 bg-gray-900 transition-all duration-300"></span>
      </button>
    </div>

    {{-- Mobile Dropdown --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         x-cloak
         class="lg:hidden pb-5 border-t border-gray-200 mt-1">
      <div class="pt-3 space-y-0.5">
        <a href="#home" @click="open = false"
           class="flex items-center px-4 py-3 text-sm font-medium text-gray-800 hover:bg-red-800 hover:text-white transition-colors border-l-2 border-transparent hover:border-red-600">Home</a>
        <a href="#about" @click="open = false"
           class="flex items-center px-4 py-3 text-sm font-medium text-gray-800 hover:bg-red-800 hover:text-white transition-colors border-l-2 border-transparent hover:border-red-600">About</a>
        <a href="#products" @click="open = false"
           class="flex items-center px-4 py-3 text-sm font-medium text-gray-800 hover:bg-red-800 hover:text-white transition-colors border-l-2 border-transparent hover:border-red-600">Products</a>
        <a href="#services" @click="open = false"
           class="flex items-center px-4 py-3 text-sm font-medium text-gray-800 hover:bg-red-800 hover:text-white transition-colors border-l-2 border-transparent hover:border-red-600">Services</a>
        <a href="#why-us" @click="open = false"
           class="flex items-center px-4 py-3 text-sm font-medium text-gray-800 hover:bg-red-800 hover:text-white transition-colors border-l-2 border-transparent hover:border-red-600">Why Choose Us</a>
        <a href="#contact" @click="open = false"
           class="flex items-center px-4 py-3 text-sm font-medium text-gray-800 hover:bg-red-800 hover:text-white transition-colors border-l-2 border-transparent hover:border-red-600">Contact Us</a>
        <div class="pt-3 px-4">
          <a href="#inquire" @click="open = false"
             class="flex items-center justify-center gap-2 py-3 bg-red-800 text-white font-semibold text-sm tracking-wider hover:bg-red-900 transition-colors">
            INQUIRE NOW
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
