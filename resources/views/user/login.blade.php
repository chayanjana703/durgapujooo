<!DOCTYPE html><html class="dark" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Sign In — UNCART</title>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Plus+Jakarta+Sans:wght@100..900&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-secondary-container": "#b0b2ff",
            "on-primary-container": "#636466",
            "on-tertiary-fixed-variant": "#004c69",
            "on-primary": "#2f3132",
            "on-secondary": "#1000a9",
            "on-tertiary": "#00354a",
            "inverse-surface": "#e4e1e7",
            "on-surface": "#e4e1e7",
            "surface-container": "#1f1f23",
            "tertiary": "#ffffff",
            "on-primary-fixed-variant": "#454749",
            "surface-container-lowest": "#0e0e12",
            "surface-bright": "#39393d",
            "secondary-fixed": "#e1e0ff",
            "on-background": "#e4e1e7",
            "on-error": "#690005",
            "on-primary-fixed": "#1a1c1d",
            "on-tertiary-container": "#006c93",
            "error-container": "#93000a",
            "primary-fixed": "#e2e2e4",
            "outline": "#8f9194",
            "tertiary-fixed-dim": "#7bd0ff",
            "surface-container-highest": "#353439",
            "secondary": "#c0c1ff",
            "background": "#131317",
            "on-error-container": "#ffdad6",
            "secondary-container": "#3131c0",
            "surface-container-high": "#2a292e",
            "surface": "#131317",
            "surface-dim": "#131317",
            "tertiary-container": "#c4e7ff",
            "on-secondary-fixed-variant": "#2f2ebe",
            "primary": "#ffffff",
            "surface-variant": "#353439",
            "error": "#ffb4ab",
            "tertiary-fixed": "#c4e7ff",
            "on-secondary-fixed": "#07006c",
            "inverse-primary": "#5d5e60",
            "surface-tint": "#c6c6c8",
            "primary-fixed-dim": "#c6c6c8",
            "primary-container": "#e2e2e4",
            "on-surface-variant": "#c5c7c9",
            "surface-container-low": "#1b1b1f",
            "secondary-fixed-dim": "#c0c1ff",
            "on-tertiary-fixed": "#001e2c",
            "outline-variant": "#44474a",
            "inverse-on-surface": "#303034"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "gutter-sm": "1rem",
            "space-xl": "2.5rem",
            "space-md": "1rem",
            "space-sm": "0.5rem",
            "gutter": "1.5rem",
            "gutter-lg": "2rem",
            "margin": "2rem",
            "space-xs": "0.25rem",
            "margin-mobile": "1.25rem",
            "space-lg": "1.5rem",
            "margin-desktop": "4rem"
          },
          "fontFamily": {
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "display-mobile": ["Plus Jakarta Sans"],
            "label-md": ["Inter"],
            "title-md": ["Inter"],
            "display": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"],
            "body-sm": ["Inter"],
            "title-lg": ["Inter"],
            "body-lg": ["Inter"],
            "headline-md": ["Plus Jakarta Sans"],
            "body-md": ["Inter"],
            "headline-lg": ["Plus Jakarta Sans"],
            "label-sm": ["Inter"]
          },
          "fontSize": {
            "headline-lg-mobile": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
            "display-mobile": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.025em", "fontWeight": "700"}],
            "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500"}],
            "title-md": ["16px", {"lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "500"}],
            "display": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700"}],
            "headline-sm": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
            "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0.005em", "fontWeight": "400"}],
            "title-lg": ["18px", {"lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "body-lg": ["17px", {"lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "400"}],
            "headline-md": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
            "body-md": ["15px", {"lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400"}],
            "headline-lg": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.025em", "fontWeight": "600"}],
            "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600"}]
          }
        }
      }
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
      font-size: 1.25rem;
      line-height: 1;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .glass-panel {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(28px) saturate(190%);
      -webkit-backdrop-filter: blur(28px) saturate(190%);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.16), 0 24px 60px -12px rgba(0, 0, 0, 0.7);
    }
    .glass-input {
      background: rgba(255, 255, 255, 0.035);
      border: 1px solid rgba(255, 255, 255, 0.08);
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .glass-input:focus-within {
      background: rgba(255, 255, 255, 0.05);
      border-color: rgba(99, 102, 241, 0.6);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.18), inset 0 1px 0 0 rgba(255, 255, 255, 0.12);
    }
    .primary-btn-glow {
      box-shadow: 0 0 28px -4px rgba(99, 102, 241, 0.35), 0 1px 0 0 rgba(255, 255, 255, 0.4) inset;
    }
    .primary-btn-glow:hover {
      box-shadow: 0 0 36px 0px rgba(99, 102, 241, 0.55), 0 1px 0 0 rgba(255, 255, 255, 0.6) inset;
      transform: scale(1.012);
    }
  </style>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col justify-between selection:bg-secondary-container selection:text-white relative overflow-x-hidden antialiased font-body-md text-body-md">
<!-- Ambient Luxury Radial Glows -->
<div class="pointer-events-none fixed inset-0 z-0 overflow-hidden"><!-- Deep Ambient Radial Glows -->
<div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[500px] bg-gradient-to-b from-[#6366f1]/20 via-[#38bdf8]/15 to-transparent blur-[140px] rounded-full"></div>
<div class="absolute top-1/4 -left-32 w-[600px] h-[600px] bg-[#38bdf8]/10 blur-[150px] rounded-full"></div>
<div class="absolute top-1/3 -right-20 w-[600px] h-[600px] bg-[#6366f1]/15 blur-[150px] rounded-full"></div>
<div class="absolute -bottom-20 left-1/3 w-[700px] h-[500px] bg-gradient-to-t from-[#6366f1]/10 via-[#38bdf8]/5 to-transparent blur-[140px] rounded-full"></div>
<!-- Subtle Luxury Micro-Grid & Constellation Texture -->
<div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] [background-size:24px_24px] opacity-75"></div>
<div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0e0e12]/40 to-[#0e0e12]/90"></div></div>
<!-- Top Floating Minimal Bar -->
<header class="relative z-20 w-full pt-6 px-4 md:px-8">
<nav class="max-w-7xl mx-auto flex items-center justify-between py-3 px-5 rounded-full bg-surface-container-low/60 backdrop-blur-xl border border-outline-variant/30 shadow-lg shadow-black/20">
<!-- Logo cluster -->
<a class="flex items-center gap-3 group transition-transform duration-200 active:scale-95" href="{{ route('user.create') }}">
<img alt="UNCART Logo" class="w-8 h-8 rounded-md object-contain border border-white/10 shadow-sm" src="https://lh3.googleusercontent.com/aida/AEtjO1UdASyaq6WM8Q79irg3EUbCv9i-gFJGgUFsHoYOhf5n6zhLpCZyTNhMFUfIvLltvKcGZUxbyikYxIQiJAKPT76vmy2b1L6a0X1M_HGKXtyTikKPccnxC7ZrSDYrGMtXfLs6ifdOw4oU4eAmN_SW_M6nOULdlZHBgMW85oAgSCTbGGPjHn4cgnjozzk094NmTZ2XAFN7b6OkeY6bJzgh4B6pGvBQ7OExoaxz-7iv1lJhXYkBqkz78QHUnPU">
<span class="text-title-lg font-title-lg font-bold tracking-tight text-primary">UNCART</span>
</a>
<!-- Quick back links -->
<div class="hidden md:flex items-center gap-6">
<a class="text-label-md font-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1.5" href="{{ route('marketplace.index') }}">
<span class="material-symbols-outlined text-[16px]">arrow_back</span>
<span class="">Home</span>
</a>
<a class="text-label-md font-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">
          Shop
        </a>
<a class="text-label-md font-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">
          Atelier Directory
        </a>
</div>
<!-- Vault Security Status Pill -->
<div class="flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-highest/40 border border-outline-variant/40">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
</span>
<span class="text-label-sm font-label-sm text-on-surface-variant tracking-wide">Hardware Vault Encrypted • 256-Bit SSL</span>
</div>
</nav>
</header>
<!-- Central Authentication Canvas -->
<main class="relative z-10 flex-grow flex items-center justify-center px-4 py-12 md:py-16">
<div class="w-full max-w-[480px]">
<!-- Brand Tagline Whisper -->
<div class="text-center mb-6">
<p class="text-label-sm font-label-sm tracking-widest text-on-surface-variant uppercase">Everything You Want. One Beautiful Place.</p>
</div>
<!-- Authentication Tier 1 Frosted Glass Card -->
<div class="glass-panel rounded-xl p-8 md:p-10 transition-all duration-300 relative">
<!-- Header Section -->
<div class="flex flex-col items-center text-center">
<div class="p-2.5 rounded-xl bg-surface-container-high/60 border border-white/10 shadow-inner mb-4">
<img alt="UNCART Mark" class="w-9 h-9 rounded-md object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1UdASyaq6WM8Q79irg3EUbCv9i-gFJGgUFsHoYOhf5n6zhLpCZyTNhMFUfIvLltvKcGZUxbyikYxIQiJAKPT76vmy2b1L6a0X1M_HGKXtyTikKPccnxC7ZrSDYrGMtXfLs6ifdOw4oU4eAmN_SW_M6nOULdlZHBgMW85oAgSCTbGGPjHn4cgnjozzk094NmTZ2XAFN7b6OkeY6bJzgh4B6pGvBQ7OExoaxz-7iv1lJhXYkBqkz78QHUnPU">
</div>
<h1 class="text-headline-sm font-headline-sm text-primary tracking-tight">Welcome back to UNCART</h1>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-2 max-w-sm">
            Sign in to access your curated collection, order escrow, and atelier studio.
          </p>
</div>
<!-- Login Form -->
<!-- Form Fields -->
<form class="space-y-4" action="{{ route('user.login.post') }}" method="POST">
@csrf
@if($errors->any())
<div class="p-3 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 text-sm">
    {{ $errors->first() }}
</div>
@endif
<!-- Email / ID Input -->
<div>
<label class="block text-label-sm font-label-sm text-on-surface-variant mb-1.5 ml-1">Email or Member ID</label>
<div class="glass-input flex items-center rounded-lg px-3.5 py-2.5">
<span class="material-symbols-outlined text-outline mr-2.5 text-[18px]">account_circle</span>
<input name="email" required class="w-full bg-transparent border-0 p-0 text-title-md font-title-md text-primary placeholder:text-outline-variant/60 focus:ring-0 focus:outline-none" placeholder="name@domain.luxury" type="email" value="{{ old('email') }}">
</div>
</div>
<!-- Password Field -->
<div>
<div class="flex items-center justify-between mb-1.5 ml-1 mr-1">
<label class="block text-label-sm font-label-sm text-on-surface-variant">Passcode / Secret Key</label>
<a class="text-label-sm font-label-sm text-secondary hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Forgot keycode?</a>
</div>
<div class="glass-input flex items-center rounded-lg px-3.5 py-2.5 relative">
<span class="material-symbols-outlined text-outline mr-2.5 text-[18px]">key</span>
<input name="password" required class="w-full bg-transparent border-0 p-0 text-title-md font-title-md text-primary placeholder:text-outline-variant/60 focus:ring-0 focus:outline-none" id="password-field" type="password" placeholder="••••••••••••">
<button aria-label="Toggle password visibility" class="text-outline hover:text-primary transition-colors ml-2 focus:outline-none" id="toggle-password" type="button">
<span class="material-symbols-outlined text-[18px]" id="eye-icon">visibility</span>
</button>
</div>
</div>
<!-- Secondary Options Row -->
<div class="flex items-center justify-between pt-1">
<label class="flex items-center gap-2 cursor-pointer group select-none">
<input checked="" class="rounded border-white/20 bg-surface-container-high text-[#6366f1] focus:ring-0 focus:ring-offset-0 focus:outline-none h-4 w-4" type="checkbox">
<span class="text-label-sm font-label-sm text-on-surface-variant group-hover:text-primary transition-colors">Remember 30 days</span>
</label>

</div>
<!-- Primary Submit Action -->
<button class="w-full mt-4 primary-btn-glow py-3.5 px-6 rounded-lg bg-primary text-[#0d0d11] font-title-md text-title-md font-semibold flex items-center justify-center gap-2 transition-all duration-200" type="submit">
<span class="">Authenticate &amp; Enter</span>
<span class="material-symbols-outlined text-[20px] font-bold">arrow_forward</span>
</button>
</form>
<!-- New Account Prompt Footer inside card -->
<div class="mt-8 pt-5 border-t border-outline-variant/20 text-center">
<p class="text-body-sm font-body-sm text-on-surface-variant">
            New to UNCART? 
            <a class="text-primary font-medium hover:underline ml-1" href="{{ route('user.register') }}">Create an account</a>
</p>
</div>
</div>
<!-- Trust Assurance Mini Grid below card -->
<div class="mt-6 grid grid-cols-3 gap-2 text-center px-4">
<div class="p-2">
<p class="text-label-sm font-label-sm text-primary font-medium">Bespoke Escrow</p>
<p class="text-label-sm font-label-sm text-on-surface-variant/70 text-[10px]">Zero counterparty risk</p>
</div>
<div class="p-2 border-x border-outline-variant/20">
<p class="text-label-sm font-label-sm text-primary font-medium">Verified Origin</p>
<p class="text-label-sm font-label-sm text-on-surface-variant/70 text-[10px]">NFC &amp; Atelier audits</p>
</div>
<div class="p-2">
<p class="text-label-sm font-label-sm text-primary font-medium">Concierge White-Glove</p>
<p class="text-label-sm font-label-sm text-on-surface-variant/70 text-[10px]">Armored courier transit</p>
</div>
</div>
</div>
</main>
<!-- Legal & System Trust Footer -->
<footer class="relative z-10 w-full border-t border-outline-variant/20 bg-surface-container-lowest/80 backdrop-blur-md py-6 px-4 md:px-8">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-3">
<span class="text-title-lg font-title-lg font-bold text-primary tracking-tight">UNCART</span>
<span class="text-on-surface-variant/40">•</span>
<p class="text-label-sm font-label-sm text-on-surface-variant">© 2024 UNCART Inc. All rights reserved.</p>
</div>
<div class="flex flex-wrap items-center gap-6 text-label-sm font-label-sm text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Encrypted Escrow Protocol</a>
<a class="hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Security Architecture</a>
<a class="hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Terms of Service</a>
<a class="hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Privacy Policy</a>
</div>
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-[15px] text-secondary">verified_user</span>
<span class="text-label-sm font-label-sm">Secured by VaultOS</span>
</div>
</div>
</footer>
<!-- Interactive Scripts for Toggle & Role Tabs -->
<script>
    // Password toggle
    const togglePasswordBtn = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('password-field');
    const eyeIcon = document.getElementById('eye-icon');

    if (togglePasswordBtn && passwordInput && eyeIcon) {
      togglePasswordBtn.addEventListener('click', () => {
        const isPassword = passwordInput.getAttribute('type') === 'password';
        passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
        eyeIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
      });
    }

    // Role Tab Switcher
    const roleTabs = document.querySelectorAll('.role-tab');
    roleTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        roleTabs.forEach(t => {
          t.classList.remove('bg-surface-container-high', 'text-primary', 'shadow-sm', 'font-semibold');
          t.classList.add('text-on-surface-variant');
        });
        tab.classList.add('bg-surface-container-high', 'text-primary', 'shadow-sm', 'font-semibold');
        tab.classList.remove('text-on-surface-variant');
      });
    });
  </script>


</body></html>