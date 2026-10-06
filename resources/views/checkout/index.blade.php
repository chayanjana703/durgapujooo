<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART — Secure Checkout &amp; Instant Payment</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Fonts: Inter & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with Plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "primary-fixed-dim": "#c6c6c8",
            "on-secondary-container": "#b0b2ff",
            "tertiary-fixed-dim": "#7bd0ff",
            "on-primary": "#2f3132",
            "secondary-fixed": "#e1e0ff",
            "on-tertiary-fixed-variant": "#004c69",
            "surface-container-low": "#1b1b1f",
            "inverse-surface": "#e4e1e7",
            "on-tertiary-fixed": "#001e2c",
            "surface-container-highest": "#353439",
            "surface-dim": "#131317",
            "on-secondary-fixed": "#07006c",
            "background": "#131317",
            "on-error": "#690005",
            "secondary-fixed-dim": "#c0c1ff",
            "primary-fixed": "#e2e2e4",
            "tertiary-fixed": "#c4e7ff",
            "on-secondary-fixed-variant": "#2f2ebe",
            "surface-variant": "#353439",
            "surface-container-high": "#2a292e",
            "inverse-on-surface": "#303034",
            "primary-container": "#e2e2e4",
            "secondary-container": "#3131c0",
            "outline-variant": "#44474a",
            "on-secondary": "#1000a9",
            "surface-bright": "#39393d",
            "surface-container-lowest": "#0e0e12",
            "on-primary-fixed-variant": "#454749",
            "primary": "#ffffff",
            "surface-container": "#1f1f23",
            "inverse-primary": "#5d5e60",
            "on-tertiary-container": "#006c93",
            "on-tertiary": "#00354a",
            "tertiary": "#ffffff",
            "error": "#ffb4ab",
            "surface-tint": "#c6c6c8",
            "on-background": "#e4e1e7",
            "tertiary-container": "#c4e7ff",
            "on-surface": "#e4e1e7",
            "outline": "#8f9194",
            "on-error-container": "#ffdad6",
            "surface": "#131317",
            "on-primary-fixed": "#1a1c1d",
            "error-container": "#93000a",
            "secondary": "#c0c1ff",
            "on-surface-variant": "#c5c7c9",
            "on-primary-container": "#636466"
          },
          "borderRadius": {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
          "spacing": {
            "margin-mobile": "1.25rem",
            "margin": "2rem",
            "space-xl": "2.5rem",
            "space-xs": "0.25rem",
            "gutter-sm": "1rem",
            "space-lg": "1.5rem",
            "space-md": "1rem",
            "gutter": "1.5rem",
            "margin-desktop": "4rem",
            "space-sm": "0.5rem",
            "gutter-lg": "2rem"
          },
          "fontFamily": {
            "title-lg": ["Inter"],
            "title-md": ["Inter"],
            "headline-sm": ["Plus Jakarta Sans"],
            "body-sm": ["Inter"],
            "body-lg": ["Inter"],
            "body-md": ["Inter"],
            "label-sm": ["Inter"],
            "display": ["Plus Jakarta Sans"],
            "display-mobile": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "label-md": ["Inter"],
            "headline-lg": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "title-lg": ["18px", { "lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "title-md": ["16px", { "lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "500" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600" }],
            "body-sm": ["13px", { "lineHeight": "18px", "letterSpacing": "0.005em", "fontWeight": "400" }],
            "body-lg": ["17px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "400" }],
            "body-md": ["15px", { "lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400" }],
            "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600" }],
            "display": ["56px", { "lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700" }],
            "display-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.025em", "fontWeight": "700" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "600" }],
            "headline-md": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "600" }],
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
            "headline-lg": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.025em", "fontWeight": "600" }]
          }
        }
      }
    }
  </script>
<style>
    .glass-tier-1 {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(24px) saturate(180%);
      -webkit-backdrop-filter: blur(24px) saturate(180%);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.3), inset 0 1px 0 0 rgba(255, 255, 255, 0.12);
    }
    .glass-tier-2 {
      background: rgba(255, 255, 255, 0.07);
      backdrop-filter: blur(40px) saturate(200%);
      -webkit-backdrop-filter: blur(40px) saturate(200%);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 12px 32px -4px rgba(0, 0, 0, 0.5), inset 0 1px 0 0 rgba(255, 255, 255, 0.18);
    }
    .glass-input {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #F5F5F7;
      transition: all 0.2s ease-out;
    }
    .glass-input:focus {
      background: rgba(255, 255, 255, 0.06);
      border-color: rgba(99, 102, 241, 0.6);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.18);
      outline: none;
    }
    .halo-glow {
      box-shadow: 0 0 32px -4px rgba(99, 102, 241, 0.35);
    }
  </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased min-h-screen selection:bg-secondary-container selection:text-white">
<!-- 1. DISTRACTION-FREE SECURE HEADER -->
<header class="sticky top-0 z-40 w-full bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20">
<div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
<!-- Brand Logo & Return Action -->
<div class="flex items-center gap-6">
<a class="flex items-center gap-2.5 text-on-surface-variant hover:text-primary transition-colors duration-200 group" href="{{ route('cart.index') }}">
<span class="material-symbols-outlined text-[20px] transition-transform duration-200 group-hover:-translate-x-1">arrow_back</span>
<span class="hidden sm:inline font-label-md text-label-md">Return to Cart</span>
</a>
<div class="h-4 w-px bg-outline-variant/30 hidden sm:block"></div>
<a class="flex items-center gap-2.5 focus:outline-none" href="{{ route('marketplace.index') }}">
<img alt="UNCART Brand Logo" class="w-7 h-7 rounded-md object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="font-title-lg text-title-lg font-bold tracking-tight text-primary">UNCART</span>
</a>
</div>
<!-- Trust & Security Seal -->
<div class="flex items-center gap-4">
<div class="hidden md:flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-low border border-outline-variant/30">
<span class="material-symbols-outlined text-[16px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">lock</span>
<span class="font-label-sm text-label-sm text-on-surface-variant tracking-wide">256-Bit SSL Encrypted Vault</span>
</div>
<button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high border border-outline-variant/30 text-on-surface transition-colors duration-200" type="button">
<span class="material-symbols-outlined text-[18px]">support_agent</span>
<span class="hidden sm:inline font-label-md text-label-md">Concierge</span>
</a>
</div>
</div>
</header>
<!-- MAIN CANVAS -->
<main class="max-w-7xl mx-auto px-4 md:px-8 py-8 md:py-12">
<!-- 2. CHECKOUT STEPPER INDICATOR -->
<section class="mb-10 max-w-4xl mx-auto">
<div class="grid grid-cols-4 gap-2 md:gap-4 relative">
<!-- Step 1: Address (Completed) -->
<div class="flex flex-col items-center md:items-start group">
<div class="flex items-center gap-2 mb-2">
<div class="w-7 h-7 rounded-full bg-primary text-surface font-label-sm text-label-sm flex items-center justify-center font-bold">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">check</span>
</div>
<span class="hidden md:inline font-label-sm text-label-sm text-primary tracking-wider uppercase">Step 01</span>
</div>
<span class="text-center md:text-left font-body-sm text-body-sm text-primary font-medium">Shipping Address</span>
<div class="w-full h-1 bg-primary rounded-full mt-2"></div>
</div>
<!-- Step 2: Delivery (Completed) -->
<div class="flex flex-col items-center md:items-start group">
<div class="flex items-center gap-2 mb-2">
<div class="w-7 h-7 rounded-full bg-primary text-surface font-label-sm text-label-sm flex items-center justify-center font-bold">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">check</span>
</div>
<span class="hidden md:inline font-label-sm text-label-sm text-primary tracking-wider uppercase">Step 02</span>
</div>
<span class="text-center md:text-left font-body-sm text-body-sm text-primary font-medium">Billing &amp; Method</span>
<div class="w-full h-1 bg-primary rounded-full mt-2"></div>
</div>
<!-- Step 3: Payment (Active) -->
<div class="flex flex-col items-center md:items-start group">
<div class="flex items-center gap-2 mb-2">
<div class="w-7 h-7 rounded-full bg-white text-surface-container-lowest font-label-sm text-label-sm flex items-center justify-center font-bold ring-4 ring-white/20">
              3
            </div>
<span class="hidden md:inline font-label-sm text-label-sm text-white tracking-wider uppercase">Step 03</span>
</div>
<span class="text-center md:text-left font-body-sm text-body-sm text-white font-medium">Payment Vault</span>
<div class="w-full h-1 bg-white rounded-full mt-2 halo-glow"></div>
</div>
<!-- Step 4: Confirmation (Upcoming) -->
<div class="flex flex-col items-center md:items-start group opacity-40">
<div class="flex items-center gap-2 mb-2">
<div class="w-7 h-7 rounded-full bg-surface-container-high border border-outline-variant text-on-surface-variant font-label-sm text-label-sm flex items-center justify-center">
              4
            </div>
<span class="hidden md:inline font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase">Step 04</span>
</div>
<span class="text-center md:text-left font-body-sm text-body-sm text-on-surface-variant font-medium">Confirmation</span>
<div class="w-full h-1 bg-outline-variant/30 rounded-full mt-2"></div>
</div>
</div>
</section>
<!-- 3 & 4. DUAL PANE CHECKOUT INTERFACE -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
<!-- LEFT COLUMN: FORMS & PAYMENT MATRIX (Cols 1-7) -->
<div class="lg:col-span-7 space-y-8">
<!-- EXPRESS ONE-TOUCH SECTION -->
<div class="glass-tier-1 rounded-xl p-6 relative overflow-hidden">
<div class="flex items-center justify-between mb-4">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Express One-Touch</span>
<div class="flex items-center gap-1.5 text-on-secondary-container font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary-fixed"></span>
              Fastest route
            </div>
</div>
<!-- Apple Pay Prominent Button -->
<button class="w-full h-14 bg-white hover:bg-neutral-100 text-black rounded-lg font-title-md text-title-md flex items-center justify-center gap-2 shadow-lg transition-transform duration-200 active:scale-[0.99] border border-white/20" onclick="triggerCheckoutSuccess()" type="button">
<span class="font-bold tracking-tight">Pay with</span>
<!-- Custom Apple Logo Icon representation -->
<svg class="w-6 h-6 fill-current mb-0.5" viewbox="0 0 170 170">
<path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.19-2.12-9.97-3.17-14.34-3.17-4.58 0-9.49 1.05-14.75 3.17-5.26 2.13-9.5 3.24-12.74 3.35-4.35.13-9.16-1.9-14.42-6.08-3.69-3.04-7.6-7.85-11.75-14.43-5.74-9.14-10.28-19.46-13.62-29.96-3.34-10.5-5.01-20.57-5.01-30.2 0-14.65 3.75-26.68 11.25-36.08 7.5-9.4 16.78-14.19 27.84-14.37 4.9 0 10.35 1.25 16.36 3.75 6 2.5 10.01 3.75 12.03 3.75 1.57 0 5.43-1.2 11.58-3.6 6.16-2.4 11.43-3.6 15.82-3.6 9.38.3 17.58 3.53 24.6 9.7 7.02 6.17 11.78 13.9 14.28 23.2-8.33 5.03-12.63 11.96-12.9 20.8-.27 8.35 3.1 15.42 10.12 21.2 7.02 5.78 15.41 8.87 25.17 9.28-2.3 7.82-5.77 15.9-10.42 24.23zM119.22 31.84c0-7.07 2.6-13.72 7.8-19.95 5.2-6.23 11.63-9.98 19.3-11.25.12 1.05.18 2.05.18 3 0 6.95-2.67 13.62-8.01 20-5.34 6.38-11.91 10.22-19.71 11.52-.13-1.05-.2-2.1-.2-3.15z"></path>
</svg>
</button>
<div class="relative my-6 text-center">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-outline-variant/30"></div>
</div>
<span class="relative px-4 bg-[#141419] font-label-sm text-label-sm text-on-surface-variant">or continue with manual vault checkout</span>
</div>
</div>
<!-- STEP 1 CONTAINER: SHIPPING DESTINATION -->
<div class="glass-tier-1 rounded-xl p-6 sm:p-8 space-y-6">
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[24px]">local_shipping</span>
<h2 class="font-headline-sm text-headline-sm text-primary">Shipping Destination</h2>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Step 1 of 3</span>
</div>
<form class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div class="sm:col-span-2 space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="fullName">Recipient Full Name</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md" id="fullName" placeholder="Enter recipient full name" type="text" value="Julian Vane"/>
</div>
<div class="sm:col-span-2 space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="addressLine">Address Line</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md" id="addressLine" placeholder="Street address, flat, suite" type="text" value="742 Evergreen Atelier Way, Suite 400"/>
</div>
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="city">City</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md" id="city" type="text" value="San Francisco"/>
</div>
<div class="grid grid-cols-2 gap-3">
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="state">State / Region</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md" id="state" type="text" value="CA"/>
</div>
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="postalCode">Postal Code</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md" id="postalCode" type="text" value="94107"/>
</div>
</div>
<div class="sm:col-span-2 space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="phone">Carrier SMS Notification Phone</label>
<div class="relative">
<span class="absolute left-4 top-3.5 text-on-surface-variant font-body-sm text-body-sm">+1 (US)</span>
<input class="glass-input w-full pl-20 pr-4 py-3 rounded-lg font-body-md text-body-md" id="phone" type="tel" value="415 892 4019"/>
</div>
</div>
</form>
</div>
<!-- STEP 2 CONTAINER: DELIVERY SPEED -->
<div class="glass-tier-1 rounded-xl p-6 sm:p-8 space-y-6">
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[24px]">speed</span>
<h2 class="font-headline-sm text-headline-sm text-primary">Delivery Service</h2>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Carbon Neutral</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<!-- Express Option (Active) -->
<label class="relative flex flex-col p-4 rounded-xl border border-secondary-container bg-surface-container cursor-pointer transition-all duration-200">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<input checked="" class="text-secondary-container focus:ring-0 bg-transparent border-outline" name="shipping" type="radio"/>
<span class="font-title-md text-title-md text-primary font-semibold">Express Air Concierge</span>
</div>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container/40 text-secondary-fixed border border-secondary-container">FREE</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant ml-6">1-2 Business Days • Aura Premium Courier with signature verification</p>
</label>
<!-- Standard Option -->
<label class="relative flex flex-col p-4 rounded-xl border border-outline-variant/30 bg-surface-container-low/50 hover:bg-surface-container cursor-pointer transition-all duration-200">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<input class="text-secondary-container focus:ring-0 bg-transparent border-outline" name="shipping" type="radio"/>
<span class="font-title-md text-title-md text-on-surface">Standard Ground</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Free</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant ml-6">3-5 Business Days • Tracked contactless postal dispatch</p>
</label>
</div>
</div>
<!-- STEP 3 CONTAINER: PAYMENT METHOD MATRIX -->
<div class="glass-tier-1 rounded-xl p-6 sm:p-8 space-y-6">
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[24px]">account_balance_wallet</span>
<h2 class="font-headline-sm text-headline-sm text-primary">Payment Architecture</h2>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Hardware Vault</span>
</div>
<!-- Method Selector Tabs -->
<div class="grid grid-cols-3 gap-2 p-1 rounded-lg bg-surface-container-lowest border border-outline-variant/20">
<button class="py-2.5 px-3 rounded-md bg-surface-container font-title-md text-title-md text-primary font-medium flex items-center justify-center gap-2 border border-outline-variant/30 shadow-sm" type="button">
<span class="material-symbols-outlined text-[18px]">credit_card</span>
<span>Credit Card</span>
</button>
<button class="py-2.5 px-3 rounded-md hover:bg-surface-container/50 font-title-md text-title-md text-on-surface-variant transition-colors duration-200 flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined text-[18px]">contactless</span>
<span>UPI / QR</span>
</button>
<button class="py-2.5 px-3 rounded-md hover:bg-surface-container/50 font-title-md text-title-md text-on-surface-variant transition-colors duration-200 flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined text-[18px]">currency_bitcoin</span>
<span>Web3 Vault</span>
</button>
</div>
<!-- Credit Card Input Fields -->
<div class="space-y-4 pt-2">
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center justify-between" for="cardNumber">
<span>Card Number</span>
<span class="flex items-center gap-2">
<span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-white/10 text-white">VISA</span>
<span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-white/10 text-white">MC</span>
<span class="px-1.5 py-0.5 rounded text-[10px] font-bold bg-white/10 text-white">AMEX</span>
</span>
</label>
<div class="relative">
<input class="glass-input w-full pl-11 pr-4 py-3 rounded-lg font-body-md text-body-md tracking-wider" id="cardNumber" type="text" value="4929 •••• •••• 9410"/>
<span class="material-symbols-outlined absolute left-3.5 top-3.5 text-on-surface-variant text-[20px]">credit_card</span>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="cardExpiry">Expiration Date</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md" id="cardExpiry" type="text" value="08 / 28"/>
</div>
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant flex items-center justify-between" for="cardCvc">
<span>Security CVC</span>
<span class="material-symbols-outlined text-[16px] text-on-surface-variant cursor-pointer" title="3 or 4 digit code on the back of your card">info</span>
</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md tracking-widest" id="cardCvc" maxlength="4" type="password" value="849"/>
</div>
</div>
<div class="space-y-1.5">
<label class="font-label-md text-label-md text-on-surface-variant" for="cardHolder">Cardholder Name</label>
<input class="glass-input w-full px-4 py-3 rounded-lg font-body-md text-body-md uppercase" id="cardHolder" type="text" value="JULIAN VANE"/>
</div>
<!-- Same as shipping address toggle -->
<label class="flex items-center gap-3 pt-2 cursor-pointer select-none">
<input checked="" class="w-4 h-4 rounded text-secondary-container focus:ring-0 bg-transparent border-outline" type="checkbox"/>
<span class="font-body-sm text-body-sm text-on-surface">Billing address is identical to shipping destination</span>
</label>
</div>
</div>
</div>
<!-- RIGHT COLUMN: STICKY ORDER SUMMARY (Cols 8-12) -->
<div class="lg:col-span-5">
<div class="sticky top-24 space-y-6">
<div class="glass-tier-2 rounded-2xl p-6 md:p-8 space-y-6">
<div class="flex items-center justify-between border-b border-outline-variant/30 pb-4">
<h2 class="font-title-lg text-title-lg text-primary font-bold">Order Summary</h2>
<span class="font-label-md text-label-md text-on-surface-variant">2 Curated Items</span>
</div>
<!-- Itemized Cart List -->
<div class="space-y-4">
<!-- Item 1 -->
<div class="flex items-center gap-4 group">
<div class="relative w-16 h-16 rounded-xl bg-surface-container-high border border-outline-variant/30 overflow-hidden shrink-0 flex items-center justify-center">
<img class="w-full h-full object-cover" data-alt="A premium wireless spatial audio headphone finished in gunmetal matte aluminum and plush lambskin earcups resting gracefully against a deep slate obsidian surface with soft rim highlights and studio lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFIoEphx-t5o1RHxOkbGJ9UuAEiAKIi7_2UTgvUEJ9zRcmEZAxp-fbdtisGoQTkJw8AOwCoKt0e50aJAZUYX_9HXcsGtP-fW--OM_V7Wid9gR8B7Geyhgz14wEzIMG3IDTdRRb6djqTkRgXl6dCSWzowk4KAQ6KH1JokQ3rYUezYCYtTAlPGYcYxzmsLd3ewXiURqgNfdsweW88dx7cg2tqc2TYW_OJnPAGGfDHsXzir6rs7-WKF_a"/>
<span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm flex items-center justify-center border border-white/20">1</span>
</div>
<div class="flex-1 min-w-0">
<h4 class="font-title-md text-title-md text-primary font-medium truncate">Studio Pro Spatial Audio</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Vendor: Atelier Sound Labs</p>
</div>
<div class="text-right">
<span class="font-title-md text-title-md text-primary font-semibold">$349.00</span>
</div>
</div>
<!-- Item 2 -->
<div class="flex items-center gap-4 group">
<div class="relative w-16 h-16 rounded-xl bg-surface-container-high border border-outline-variant/30 overflow-hidden shrink-0 flex items-center justify-center">
<img class="w-full h-full object-cover" data-alt="An ultra-minimalist optical glass and billet aluminum 3-in-1 magnetic wireless charging dock catching reflections in a dark high-end architectural studio setting with atmospheric soft edge lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMlzV2J8P3aDSRNPfFrv4KeeS2_rlXefLUiXhpg8Hai5VbR4gLcusPTe36exO13jBPwl8yoZipzf7hHWdkqXF7f6cOtC2t9OwOM753MDKahj9FZOJFUxSz0lCq545Hiz-DsZcstoCWUIFi5EoUcMO3p-8REjcy-yfiHdOISfb9rVSaPULiXoUMcgRvsT48NHymAcUe30Pft_HpvqOGYoQpUO3cJkl-dOfqbxjtN7jBLo5O57kUWnt8"/>
<span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm flex items-center justify-center border border-white/20">1</span>
</div>
<div class="flex-1 min-w-0">
<h4 class="font-title-md text-title-md text-primary font-medium truncate">Pure Optical Glass 3-in-1 Dock</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Vendor: Lumina Objects</p>
</div>
<div class="text-right">
<span class="font-title-md text-title-md text-primary font-semibold">$195.00</span>
</div>
</div>
</div>
<!-- Promo Code Applied Pill -->
<div class="pt-2">
<div class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container border border-outline-variant/30">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px] text-secondary">sell</span>
<span class="font-label-md text-label-md font-semibold text-secondary tracking-wide">ATELIER10</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">(-10% Vendor Tier)</span>
</div>
<span class="font-body-sm text-body-sm text-secondary font-medium">-$54.40</span>
</div>
</div>
<!-- Ledger Breakdown -->
<div class="space-y-2.5 border-t border-outline-variant/30 pt-4 text-body-sm font-body-sm">
<div class="flex justify-between text-on-surface-variant">
<span>Subtotal (2 Items)</span>
<span class="text-on-surface font-medium">$489.60</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span>Priority Express Logistics</span>
<span class="text-secondary font-medium uppercase text-label-sm">Complimentary</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span>Estimated Sales Tax (CA 8.00%)</span>
<span class="text-on-surface font-medium">$39.17</span>
</div>
<div class="border-t border-outline-variant/20 pt-3 flex justify-between items-baseline">
<div>
<span class="font-title-lg text-title-lg text-primary font-bold">Total Investment</span>
<p class="font-label-sm text-label-sm text-on-surface-variant">Includes all duties &amp; verification</p>
</div>
<span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">$528.77</span>
</div>
</div>
<!-- Primary Checkout CTA Button -->
<button class="w-full py-4 px-6 rounded-lg bg-primary hover:bg-neutral-100 text-surface-container-lowest font-headline-sm text-headline-sm font-bold flex items-center justify-center gap-3 transition-all duration-200 transform hover:scale-[1.015] halo-glow active:scale-95" onclick="triggerCheckoutSuccess()" type="button">
<span>Complete Order • $528.77</span>
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
<!-- Trust / Guarantee Badges -->
<div class="grid grid-cols-2 gap-3 pt-2 text-center">
<div class="p-3 rounded-lg bg-surface-container-low/60 border border-outline-variant/20 flex flex-col items-center gap-1">
<span class="material-symbols-outlined text-[20px] text-tertiary-fixed-dim">verified_user</span>
<span class="font-label-sm text-label-sm text-on-surface font-medium">30-Day Atelier Guarantee</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Zero-friction returns</span>
</div>
<div class="p-3 rounded-lg bg-surface-container-low/60 border border-outline-variant/20 flex flex-col items-center gap-1">
<span class="material-symbols-outlined text-[20px] text-secondary">eco</span>
<span class="font-label-sm text-label-sm text-on-surface font-medium">Carbon Neutral Route</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">100% offset logistics</span>
</div>
</div>
</div>
<!-- Encrypted Note -->
<div class="text-center font-label-sm text-label-sm text-on-surface-variant px-4">
            By authorizing payment, you verify adherence to UNCART Curated Terms &amp; Collector Privacy Principles.
          </div>
</div>
</div>
</div>
</main>
<!-- 5. INTEGRATED ORDER CONFIRMATION MODAL (Hidden by default, triggered via JS) -->
<div class="fixed inset-0 z-50 bg-black/80 backdrop-blur-2xl hidden items-center justify-center p-4" id="confirmationModal">
<div class="glass-tier-2 max-w-xl w-full rounded-2xl p-8 md:p-10 text-center relative border border-white/20 shadow-2xl transform transition-all duration-300">
<!-- Glowing Checkmark Halo -->
<div class="mx-auto w-20 h-20 rounded-full bg-secondary-container/30 border border-secondary flex items-center justify-center mb-6 relative halo-glow">
<span class="material-symbols-outlined text-[44px] text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<!-- Heading & Reference -->
<h3 class="font-headline-lg text-headline-lg text-primary font-bold mb-2">Order Confirmed</h3>
<p class="font-title-md text-title-md text-secondary font-semibold mb-6">Reference ID: #UNC-892419</p>
<div class="glass-tier-1 rounded-xl p-5 mb-8 text-left space-y-3">
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-2.5">
<span class="font-label-md text-label-md text-on-surface-variant">Delivery Window</span>
<span class="font-title-md text-title-md text-primary font-semibold">Tuesday, Oct 24</span>
</div>
<div class="flex items-center justify-between border-b border-outline-variant/20 pb-2.5">
<span class="font-label-md text-label-md text-on-surface-variant">Logistics Partner</span>
<span class="font-body-md text-body-md text-on-surface">Aura Air Express • Signature Verified</span>
</div>
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant">Payment Settled</span>
<span class="font-body-md text-body-md text-on-surface">$528.77 (Apple Pay Vault)</span>
</div>
</div>
<!-- Action Buttons -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<button class="py-3.5 px-6 rounded-lg bg-surface-container hover:bg-surface-container-high border border-outline-variant text-primary font-title-md text-title-md font-semibold transition-colors duration-200 flex items-center justify-center gap-2" onclick="closeConfirmation()" type="button">
<span class="material-symbols-outlined text-[20px]">explore</span>
<span>Continue Shopping</span>
</button>
<a class="py-3.5 px-6 rounded-lg bg-primary hover:bg-neutral-100 text-surface font-title-md text-title-md font-semibold transition-transform duration-200 flex items-center justify-center gap-2 active:scale-95" href="#tracking">
<span class="material-symbols-outlined text-[20px]">radar</span>
<span>Live Tracking</span>
</a>
</div>
<button class="absolute top-4 right-4 text-on-surface-variant hover:text-primary transition-colors duration-200" onclick="closeConfirmation()" type="button">
<span class="material-symbols-outlined text-[24px]">close</span>
</button>
</div>
</div>
<!-- Distraction-free Minimal Footer -->
<footer class="w-full bg-surface-container-lowest border-t border-outline-variant/20 mt-16">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-10 flex flex-col sm:flex-row items-center justify-between gap-4 font-body-sm text-body-sm text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="font-title-lg text-title-lg font-bold text-primary">UNCART</span>
<span class="ml-2">© 2024 UNCART Inc. All rights reserved.</span>
</div>
<div class="flex items-center gap-6">
<a class="hover:text-primary transition-colors duration-200" href="#privacy">Privacy Policy</a>
<a class="hover:text-primary transition-colors duration-200" href="#terms">Terms of Service</a>
<a class="hover:text-primary transition-colors duration-200" href="#care">Customer Care</a>
</div>
</div>
</footer>
<script>
    function triggerCheckoutSuccess() {
      const modal = document.getElementById('confirmationModal');
      modal.classList.remove('hidden');
      modal.classList.add('flex');
    }

    function closeConfirmation() {
      const modal = document.getElementById('confirmationModal');
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }
  </script>

<script>
function toggleProfileDropdown(e) {
    if (e) e.stopPropagation();
    const menu = document.getElementById('profileDropdownMenu');
    if (menu) {
        menu.classList.toggle('hidden');
    }
}
document.addEventListener('click', function(e) {
    const menu = document.getElementById('profileDropdownMenu');
    const dropdown = document.getElementById('userProfileDropdown');
    if (menu && !menu.classList.contains('hidden')) {
        if (!dropdown || !dropdown.contains(e.target)) {
            menu.classList.add('hidden');
        }
    }
});
</script>

<script>
    const csrfToken = '{{ csrf_token() }}';

    function fetchCartFromDB() {
        fetch('{{ route("cart.api.get") }}')
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    renderCartUI(data.items, data.count, data.total, data.formatted_total);
                }
            })
            .catch(err => console.error('Cart fetch error:', err));
    }

    function addToBag(title, price, productId = null, qty = 1, imagePath = '') {
        fetch('{{ route("cart.api.add") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                title: title,
                price: price,
                product_id: productId,
                quantity: qty,
                image_path: imagePath
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                renderCartUI(data.items, data.count, data.total, data.formatted_total);
                showToast('Added "' + title + '" to your shopping bag.');
            }
        });
    }

    function removeCartItem(id) {
        fetch('/cart/api/remove/' + id, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                renderCartUI(data.items, data.count, data.total, data.formatted_total);
            }
        });
    }

    function renderCartUI(items, count, total, formattedTotal) {
        const container = document.getElementById('cart-items-container');
        if (container) {
            container.innerHTML = '';
            if (!items || count === 0 || items.length === 0) {
                container.innerHTML = '<div class="text-center py-12 text-outline">Your shopping bag is empty.</div>';
            } else {
                items.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'flex items-center gap-4 glass-tier-1 p-3 rounded-lg transition-all';
                    div.innerHTML = `
                        <div class="w-14 h-14 rounded bg-surface-container-lowest flex-shrink-0 flex items-center justify-center p-1 overflow-hidden">
                            <img src="${item.image_path || 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&q=80'}" class="w-full h-full object-contain" alt="${item.title}">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="text-body-md font-body-md font-medium text-primary truncate">${item.title}</h4>
                            <p class="text-label-sm font-label-sm text-outline">Qty: ${item.quantity}</p>
                            <span class="text-body-sm font-body-sm font-semibold text-primary">₹${parseFloat(item.price).toLocaleString()}</span>
                        </div>
                        <button onclick="removeCartItem(${item.id})" class="text-outline hover:text-error transition-colors p-1" title="Remove">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    `;
                    container.appendChild(div);
                });
            }
        }

        const badge = document.getElementById('header-cart-badge');
        if (badge) badge.textContent = count;

        const cartCount = document.getElementById('cart-count');
        if (cartCount) cartCount.textContent = count;

        const subtotal = document.getElementById('cart-subtotal');
        if (subtotal) subtotal.textContent = formattedTotal || ('₹' + total.toLocaleString('en-IN', {minimumFractionDigits: 2}));

        const dockCount = document.getElementById('dock-cart-count');
        if (dockCount) dockCount.textContent = count + ' Objects in Cart';

        const dockTotal = document.getElementById('dock-cart-total');
        if (dockTotal) dockTotal.textContent = '· ' + (formattedTotal || ('₹' + total.toLocaleString('en-IN', {minimumFractionDigits: 2})));
    }

    document.addEventListener('DOMContentLoaded', fetchCartFromDB);
</script>
</body></html>