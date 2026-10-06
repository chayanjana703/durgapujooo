<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART — Flagship Global Marketplace</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.12), 0 4px 20px -2px rgba(0, 0, 0, 0.4);
    }
    .glass-tier-2 {
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(36px) saturate(200%);
      -webkit-backdrop-filter: blur(36px) saturate(200%);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.2), 0 12px 32px -4px rgba(0, 0, 0, 0.6);
    }
    .glass-pill {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .glow-indigo {
      box-shadow: 0 0 28px -4px rgba(99, 102, 241, 0.35);
    }
    .custom-scroll::-webkit-scrollbar {
      height: 4px;
      width: 4px;
    }
    .custom-scroll::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 9999px;
    }
  </style>
</head>
<body class="bg-background text-on-surface antialiased selection:bg-secondary-container selection:text-primary relative overflow-x-hidden min-h-screen">
<!-- TOP APP BAR -->
<header class="sticky top-0 z-50 w-full bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 dark:border-outline-variant/20 shadow-sm dark:shadow-none">
<div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
<!-- Brand & Ecosystem Switcher -->
<div class="flex items-center gap-6">
<a class="flex items-center gap-3 transition-all duration-200 ease-out active:scale-95 group" href="#">
<img alt="UNCART Brand Logo" class="w-8 h-8 rounded-lg object-contain border border-outline-variant/30 group-hover:border-primary transition-colors" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold tracking-tight text-primary dark:text-primary">UNCART</span>
</a>
<!-- Portal Role Selector Pill -->
<div class="hidden lg:flex items-center p-0.5 rounded-full bg-surface-container-high border border-outline-variant/20 text-label-sm font-label-sm">
<button class="px-3 py-1 rounded-full bg-primary text-on-primary font-medium transition-all shadow-sm">Customer</button>
<button class="px-3 py-1 rounded-full text-on-surface-variant hover:text-primary transition-colors">Vendor Hub</button>
<button class="px-3 py-1 rounded-full text-on-surface-variant hover:text-primary transition-colors">Admin</button>
</div>
</div>
<!-- Navigation Links -->
<nav class="hidden md:flex items-center gap-7">
<a class="text-primary dark:text-primary font-title-md text-title-md hover:text-primary transition-colors duration-200" href="#">Home</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="#shop">Shop</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="#categories">Categories</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="#deals">Deals</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="#new">New Arrivals</a>
</nav>
<!-- Trailing Icon Actions & Global Search -->
<div class="flex items-center gap-3">
<!-- Interactive Search Bar Trigger -->
<div class="relative flex items-center cursor-pointer group" onclick="toggleModal('search-overlay')">
<div class="hidden sm:flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-high/60 border border-outline-variant/30 text-on-surface-variant group-hover:border-primary/40 transition-all">
<span class="material-symbols-outlined text-outline group-hover:text-primary text-lg" data-icon="search">search</span>
<span class="text-body-sm font-body-sm pr-6">Search curated objects...</span>
<kbd class="px-1.5 py-0.5 rounded bg-surface-container text-label-sm font-label-sm border border-outline-variant/30 text-outline">⌘K</kbd>
</div>
<button class="sm:hidden p-2 text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="search">search</span>
</button>
</div>
<!-- Wishlist -->
<button class="p-2 relative rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all active:scale-95" title="Wishlist">
<span class="material-symbols-outlined" data-icon="favorite">favorite</span>
<span class="absolute top-1 right-1 w-2 h-2 rounded-full bg-secondary-fixed"></span>
</button>
<!-- Shopping Bag Trigger -->
<button class="p-2 relative rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all active:scale-95" onclick="toggleDrawer('cart-drawer')" title="Cart">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="absolute -top-0.5 -right-0.5 w-4 h-4 rounded-full bg-primary text-on-primary text-[10px] font-bold flex items-center justify-center" id="header-cart-badge">3</span>
</button>
<!-- Profile Account -->
<button class="p-1 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all active:scale-95" title="Account">
<span class="material-symbols-outlined text-2xl" data-icon="account_circle">account_circle</span>
</button>
</div>
</div>
</header>
<!-- MAIN CANVAS -->
<main class="relative z-10">
<!-- 1. CINEMATIC HERO SECTION -->
<section class="relative pt-12 pb-24 md:pt-20 md:pb-36 overflow-hidden">
<!-- Ambient Lighting Blobs -->
<div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-secondary-container/20 rounded-full blur-[120px] pointer-events-none -z-10"></div>
<div class="absolute -top-10 right-1/4 w-[350px] h-[250px] bg-tertiary-fixed-dim/10 rounded-full blur-[90px] pointer-events-none -z-10"></div>
<div class="max-w-7xl mx-auto px-4 md:px-8">
<!-- Hero Header -->
<div class="text-center max-w-3xl mx-auto mb-14">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full glass-pill mb-6 text-label-md font-label-md text-secondary">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
            Edition 04 — Spring Curations Live
          </div>
<h1 class="text-display-mobile md:text-display font-display font-bold tracking-tight text-primary leading-tight mb-5">
            Everything You Want. <br class="hidden sm:inline"/>One Beautiful Place.
          </h1>
<p class="text-body-lg font-body-lg text-on-surface-variant max-w-xl mx-auto mb-8">
            Discover products from trusted sellers, curated for the way you shop. Apple-grade engineering meets restrained modern luxury.
          </p>
<div class="flex flex-wrap items-center justify-center gap-4">
<a class="px-7 py-3 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:scale-[1.02] transition-all glow-indigo flex items-center gap-2" href="#shop">
<span>Shop Now</span>
<span class="material-symbols-outlined text-sm font-bold" data-icon="arrow_forward">arrow_forward</span>
</a>
<a class="px-7 py-3 rounded-lg glass-tier-1 text-primary font-title-md text-title-md font-medium hover:border-outline transition-all flex items-center gap-2" href="#categories">
<span>Explore Collections</span>
</a>
</div>
</div>
<!-- Hero Bento 3D Tilt Showcase -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-stretch">
<!-- Flagship Main Hero Card: Spatial Audio -->
<div class="md:col-span-7 glass-tier-1 rounded-xl p-6 md:p-8 flex flex-col justify-between relative overflow-hidden group hover:border-outline/40 transition-all duration-300">
<div class="flex items-center justify-between z-10">
<span class="px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-container-high/80 text-secondary border border-outline-variant/30">Master Release</span>
<span class="text-title-lg font-title-lg font-bold text-primary">$349</span>
</div>
<!-- Hero Product Visual Stage -->
<div class="my-8 relative flex items-center justify-center py-6">
<div class="absolute inset-0 bg-surface-container-lowest/60 rounded-xl -z-10"></div>
<img class="w-full max-w-sm h-64 object-contain group-hover:scale-105 transition-transform duration-500" data-alt="Futuristic matte titanium high-fidelity over-ear spatial headphones resting on an obsidian pedestal. Ambient deep indigo and clean edge lighting, photorealistic industrial design studio render, hyper-minimalist composition with dramatic rim highlights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpEOxEXvinXjcetA4gaKbBlYKPCDcyPnSXAgmDxXV8Bc1v1o_ObeG3dcljPlzmi1OJvSZtgCklsWoSkmtMq5noOpXPEF1sbcza1atrPHgvAcvBOvzqF9ewzN2e5RB8ZiX1mRxSUs9NCXLIJf7Xxp6IwSjVqoSkKa5cahywFdDG4HR9g42zcx4sxOtF2hQR7zx-h86cc3OSroo2rRVng9DMx_Wuqw09TCuLAP287EBb0bg_IiRpHlXT"/>
</div>
<div class="z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
<div>
<p class="text-label-md font-label-md text-on-surface-variant">Acoustic Engineering</p>
<h3 class="text-headline-sm font-headline-sm text-primary font-semibold">Studio Pro Spatial Audio</h3>
<div class="flex items-center gap-3 mt-2 text-label-sm font-label-sm text-outline">
<span>Custom Beryllium Drivers</span>
<span>•</span>
<span>Lossless 24-bit</span>
</div>
</div>
<button class="px-5 py-2.5 rounded-lg bg-surface-container-highest text-primary hover:bg-primary hover:text-on-primary text-body-sm font-body-sm font-medium transition-all flex items-center gap-2" onclick="addToBag('Studio Pro Spatial Audio', 349)">
<span class="material-symbols-outlined text-base" data-icon="add">add</span>
<span>Quick Add</span>
</button>
</div>
</div>
<!-- Secondary Right Column Stack -->
<div class="md:col-span-5 flex flex-col gap-6">
<!-- Card 2: Titanium Ceramic Chrono -->
<div class="glass-tier-1 rounded-xl p-6 flex items-center justify-between relative overflow-hidden group hover:border-outline/40 transition-all duration-300 flex-1">
<div class="flex flex-col justify-between h-full z-10 pr-4">
<div>
<span class="text-label-sm font-label-sm text-secondary">Nomad Studio</span>
<h4 class="text-title-md font-title-md font-semibold text-primary mt-1">Titanium Ceramic Chrono</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">Sapphire crystal, 72h reserve</p>
</div>
<div class="mt-4 flex items-center gap-3">
<span class="text-title-lg font-title-lg font-bold text-primary">$799</span>
<button class="p-2 rounded-lg bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary transition-all" onclick="addToBag('Titanium Ceramic Chrono', 799)">
<span class="material-symbols-outlined text-sm" data-icon="add_shopping_cart">add_shopping_cart</span>
</button>
</div>
</div>
<div class="w-36 h-36 flex-shrink-0 relative flex items-center justify-center bg-surface-container-lowest/80 rounded-lg">
<img class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" data-alt="Luxury minimalist timepiece with a brushed titanium body and matte black ceramic bezel shot from an elevated macro perspective. Studio softbox reflection on sapphire crystal, deep dark background with soft violet accent tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQvQ53Bx387j03Y5qR3TE2Yoj5vFXCrplyCYdiLpsX7xd6UbiGBf5KwXmhV3X938kXOLu5KsjKTdniB8GK2EmOMNc_CpD_u-J41sSIwU6nYtos3puYyyyLVMO7mXJt7CqATTPN8MGwo6lym2vxnLVBcS--8HK68F-Ml6tXB085FbWeH8SByNgAPTMQ6lNkTl3dB5elAZQYaCLZSUUo0MY1tuWqLpcao0KZnWtV2fhvAHmstBTWSgAZ"/>
</div>
</div>
<!-- Card 3: Minimalist Precision Trackpad / Studio OLED -->
<div class="glass-tier-1 rounded-xl p-6 flex items-center justify-between relative overflow-hidden group hover:border-outline/40 transition-all duration-300 flex-1">
<div class="flex flex-col justify-between h-full z-10 pr-4">
<div>
<span class="text-label-sm font-label-sm text-secondary">Aura Labs</span>
<h4 class="text-title-md font-title-md font-semibold text-primary mt-1">Ultra-thin M3 OLED Display</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">32-inch 6K Retinal Pure Glass</p>
</div>
<div class="mt-4 flex items-center gap-3">
<span class="text-title-lg font-title-lg font-bold text-primary">$1,299</span>
<button class="p-2 rounded-lg bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary transition-all" onclick="addToBag('Ultra-thin M3 OLED Display', 1299)">
<span class="material-symbols-outlined text-sm" data-icon="add_shopping_cart">add_shopping_cart</span>
</button>
</div>
</div>
<div class="w-36 h-36 flex-shrink-0 relative flex items-center justify-center bg-surface-container-lowest/80 rounded-lg">
<img class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" data-alt="Monolithic razor-thin ultra-wide designer workstation display sitting on a dark oak desk surface with a glowing edge wallpaper. Architectural ambient night lighting, subtle violet and silver hues, hyper-clean minimal aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYb_aecdr3vh6wqB5ekije68d__Iweblv6EmLbZqN2cjbbUV8XkE5YRi4rEEUsVe2SzPUilafLN4tqUVF77a2hzf5WLWEA6y2iochKNmPkd1W3J5Hf4zMvJFtzjMG3F4it7oZt0g0xiKOqsAHri9QMHIMG3gUZIYJQuvm_OrDPVAr92p5g_fFlLLRL2lwIKCgX14ncUruzEvDeWhhu9mLOZm6bTTqwud1QSFeTVmVRBbOUaFTJGDuZ"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 2. FEATURED INTERACTIVE CATEGORY MATRIX -->
<section class="py-16 md:py-24 border-t border-outline-variant/10" id="categories">
<div class="max-w-7xl mx-auto px-4 md:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
<div>
<p class="text-label-md font-label-md text-secondary tracking-widest uppercase">Taxonomy</p>
<h2 class="text-headline-md md:text-headline-lg font-headline-lg font-bold text-primary mt-1">Curated Categorical Index</h2>
</div>
<div class="flex items-center gap-2 overflow-x-auto pb-2 custom-scroll">
<button class="px-4 py-1.5 rounded-full bg-primary text-on-primary text-label-md font-label-md font-medium">All Curations</button>
<button class="px-4 py-1.5 rounded-full glass-pill text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors">Physical Objects</button>
<button class="px-4 py-1.5 rounded-full glass-pill text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors">Sound Architectures</button>
<button class="px-4 py-1.5 rounded-full glass-pill text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors">Wearable Sculptures</button>
</div>
</div>
<!-- 6-Category Grid -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
<!-- Category 1 -->
<div class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
<div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="devices">devices</span>
</div>
<h4 class="text-title-md font-title-md font-medium text-primary">Electronics</h4>
<span class="text-label-sm font-label-sm text-outline mt-1">214 Objects</span>
</div>
<!-- Category 2 -->
<div class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
<div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="chair">chair</span>
</div>
<h4 class="text-title-md font-title-md font-medium text-primary">Living</h4>
<span class="text-label-sm font-label-sm text-outline mt-1">148 Objects</span>
</div>
<!-- Category 3 -->
<div class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
<div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="graphic_eq">graphic_eq</span>
</div>
<h4 class="text-title-md font-title-md font-medium text-primary">Spatial Audio</h4>
<span class="text-label-sm font-label-sm text-outline mt-1">86 Objects</span>
</div>
<!-- Category 4 -->
<div class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
<div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="styler">styler</span>
</div>
<h4 class="text-title-md font-title-md font-medium text-primary">Minimal Fashion</h4>
<span class="text-label-sm font-label-sm text-outline mt-1">320 Objects</span>
</div>
<!-- Category 5 -->
<div class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
<div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="tune">tune</span>
</div>
<h4 class="text-title-md font-title-md font-medium text-primary">Precision Studio</h4>
<span class="text-label-sm font-label-sm text-outline mt-1">94 Objects</span>
</div>
<!-- Category 6 -->
<div class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
<div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="watch">watch</span>
</div>
<h4 class="text-title-md font-title-md font-medium text-primary">Mechanicals</h4>
<span class="text-label-sm font-label-sm text-outline mt-1">62 Objects</span>
</div>
</div>
</div>
</section>
<!-- 3. TRENDING PRODUCTS MATRIX -->
<section class="py-16 md:py-24" id="shop">
<div class="max-w-7xl mx-auto px-4 md:px-8">
<div class="flex items-center justify-between mb-12">
<div>
<span class="text-label-md font-label-md text-secondary">Verified Artisans &amp; Brands</span>
<h2 class="text-headline-md md:text-headline-lg font-headline-lg font-bold text-primary mt-1">Trending Worldwide</h2>
</div>
<a class="hidden sm:flex items-center gap-1 text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">
<span>Browse 1,400+ Pieces</span>
<span class="material-symbols-outlined text-sm" data-icon="north_east">north_east</span>
</a>
</div>
<!-- 4-Column Product Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Product Item 1 -->
<div class="glass-tier-1 rounded-xl p-4 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 relative">
<button class="absolute top-6 right-6 z-20 w-8 h-8 rounded-full glass-tier-2 flex items-center justify-center text-outline hover:text-error transition-colors" onclick="toggleWishlist(this)" title="Save item">
<span class="material-symbols-outlined text-lg" data-icon="favorite">favorite</span>
</button>
<div class="w-full h-56 rounded-lg bg-surface-container-lowest flex items-center justify-center overflow-hidden mb-4 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Monochrome CNC anodized aluminum mechanical keyboard with stealth keycaps displayed at an angle against a deep graphite background. Pristine product lighting accentuating smooth sandblasted textures and tight tolerances." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCy4On2wI_nm3Z0S4UTH7nqhZ5DHSgCFMmV-cnx0c6EkMIeGoY81L-cTsZnGY1zrg28yIJW1Bt_Nd0d9JCYLp5lljEab5zKFMsx_7R5tgO5bX-gjxkAX1XyTzyK-ZyJFZbpbo1i6v7eRbx7Mi699qnR8TazxsFs-nhkPsPtIwR-rck1JdxW87NV5_9sdYa2s1tL-a5iE5n0XbKSmpNAhUY6se0spBViHXJhKPROky0eNv4YcQmwMD9Y"/>
</div>
<div>
<div class="flex items-center justify-between mb-1.5">
<span class="text-label-sm font-label-sm text-outline flex items-center gap-1">
                  Nomad Tech
                  <span class="material-symbols-outlined text-secondary text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
</span>
<span class="flex items-center text-label-sm font-label-sm text-primary">
<span class="material-symbols-outlined text-amber-400 text-xs mr-0.5" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span> 4.9
                </span>
</div>
<h3 class="text-title-md font-title-md font-semibold text-primary truncate">Apex Linear 65 Mechanical</h3>
<div class="flex items-center justify-between mt-3">
<div class="flex items-center gap-2">
<span class="text-title-md font-title-md font-bold text-primary">$285</span>
<span class="text-label-sm font-label-sm text-outline line-through">$320</span>
</div>
<button class="px-3.5 py-1.5 rounded-lg bg-primary text-on-primary hover:opacity-90 text-label-md font-label-md font-semibold transition-all" onclick="addToBag('Apex Linear 65 Mechanical', 285)">
                  Add to Bag
                </button>
</div>
</div>
</div>
<!-- Product Item 2 -->
<div class="glass-tier-1 rounded-xl p-4 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 relative">
<button class="absolute top-6 right-6 z-20 w-8 h-8 rounded-full glass-tier-2 flex items-center justify-center text-outline hover:text-error transition-colors" onclick="toggleWishlist(this)" title="Save item">
<span class="material-symbols-outlined text-lg" data-icon="favorite">favorite</span>
</button>
<div class="w-full h-56 rounded-lg bg-surface-container-lowest flex items-center justify-center overflow-hidden mb-4 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Brutalist architectural table lamp crafted from cast concrete and opalescent blown glass orb. Ambient warm luminous glow casting gentle shadows across a moody dark slate environment, high-end interior editorial catalog shot." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHKbLuUEPWDSvrWcC1Ti_W_DNoq4LojIJoOiMxpf02QpvqDg6dMO6fgFLuiiwB0-X8tmtZZM5SIgxZ8tDtY6DpQysGR6x6Eauv7Zz-tndL0JoeIwvJj-MT_H3KHN3kx0jBDjO3IWJWZ3M5ETHohFnKUZYCSwsTXAswe2uc7U8t1ST23k7i-wY5d66EA0Dm8BpntQC_s-6Oa5XdHo400it8-Ao3lwp8wAgF9schSt0iIBRFSQ-7WjEp"/>
</div>
<div>
<div class="flex items-center justify-between mb-1.5">
<span class="text-label-sm font-label-sm text-outline flex items-center gap-1">
                  Kvadrat Studio
                  <span class="material-symbols-outlined text-secondary text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
</span>
<span class="flex items-center text-label-sm font-label-sm text-primary">
<span class="material-symbols-outlined text-amber-400 text-xs mr-0.5" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span> 5.0
                </span>
</div>
<h3 class="text-title-md font-title-md font-semibold text-primary truncate">Brutalist Glass Lumin</h3>
<div class="flex items-center justify-between mt-3">
<div class="flex items-center gap-2">
<span class="text-title-lg font-title-lg font-bold text-primary">$440</span>
</div>
<button class="px-3.5 py-1.5 rounded-lg bg-primary text-on-primary hover:opacity-90 text-label-md font-label-md font-semibold transition-all" onclick="addToBag('Brutalist Glass Lumin', 440)">
                  Add to Bag
                </button>
</div>
</div>
</div>
<!-- Product Item 3 -->
<div class="glass-tier-1 rounded-xl p-4 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 relative">
<span class="absolute top-6 left-6 z-20 px-2 py-0.5 rounded text-[10px] font-bold bg-secondary-container text-on-secondary-container">Popular</span>
<button class="absolute top-6 right-6 z-20 w-8 h-8 rounded-full glass-tier-2 flex items-center justify-center text-outline hover:text-error transition-colors" onclick="toggleWishlist(this)" title="Save item">
<span class="material-symbols-outlined text-lg" data-icon="favorite">favorite</span>
</button>
<div class="w-full h-56 rounded-lg bg-surface-container-lowest flex items-center justify-center overflow-hidden mb-4 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Seamless black Cordura technical modular sling bag with magnetic Fidlock hardware and subtle indigo stitch accents. Floating product photography against a dark charcoal matte background with razor sharp studio keylights." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6vMIaMl8kkOtcIsOdVaozCT-tMaUActR20Za8zOaJkotvZRQuIEqkigHpZLiDAq-fb2TlZRyuogKO0gNlWPlPLYfD-IPmKUPs95LzfxPpw0aLIsI-NfHmyVPoYU0Azy4ROp29AnoLFMOfKoUSe2RIHwsoK-VMdGEQAn7Wsc2jcdIEfbn1Sl3hYVN7tEJSTjlBTLICPPUjXa7ACx3kC5anadfrcxFGrm6F98F8D3y2UMwHwUYNCDDQ"/>
</div>
<div>
<div class="flex items-center justify-between mb-1.5">
<span class="text-label-sm font-label-sm text-outline flex items-center gap-1">
                  Aura Design Labs
                  <span class="material-symbols-outlined text-secondary text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
</span>
<span class="flex items-center text-label-sm font-label-sm text-primary">
<span class="material-symbols-outlined text-amber-400 text-xs mr-0.5" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span> 4.8
                </span>
</div>
<h3 class="text-title-md font-title-md font-semibold text-primary truncate">Vektor Modular Carry Pod</h3>
<div class="flex items-center justify-between mt-3">
<div class="flex items-center gap-2">
<span class="text-title-lg font-title-lg font-bold text-primary">$195</span>
</div>
<button class="px-3.5 py-1.5 rounded-lg bg-primary text-on-primary hover:opacity-90 text-label-md font-label-md font-semibold transition-all" onclick="addToBag('Vektor Modular Carry Pod', 195)">
                  Add to Bag
                </button>
</div>
</div>
</div>
<!-- Product Item 4 -->
<div class="glass-tier-1 rounded-xl p-4 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 relative">
<button class="absolute top-6 right-6 z-20 w-8 h-8 rounded-full glass-tier-2 flex items-center justify-center text-outline hover:text-error transition-colors" onclick="toggleWishlist(this)" title="Save item">
<span class="material-symbols-outlined text-lg" data-icon="favorite">favorite</span>
</button>
<div class="w-full h-56 rounded-lg bg-surface-container-lowest flex items-center justify-center overflow-hidden mb-4 relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Monolithic obsidian wireless charging pad and precision milled aluminum stylus dock resting on a smoked glass desk surface. Crisp edge reflections, ultra-soft specular highlights, luxurious Apple-grade consumer electronics aesthetics." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJLzzYyAFU4fpH_4OY-MeHM8oc0K5YFFKae5G6GyDRxbl8DfkGTXKhVcGjpYCMAJgCwKjqziRA3sp2taYSaKGjvxkbPa_q4ycLuleDQo1VVNKt2K6pkSKYQk1VvcrfIxMCvvz2bKtp1aRZrD76Bt_fBaaAmZ6ans1IW7EhkmH_zA8CB0K5ypfIMS8tijJexTG3fKV63GquMVq9-34oRWVO_gh5xgKFs8_0SqvHtreaJSOqusihJ2N3"/>
</div>
<div>
<div class="flex items-center justify-between mb-1.5">
<span class="text-label-sm font-label-sm text-outline flex items-center gap-1">
                  Nomad Tech
                  <span class="material-symbols-outlined text-secondary text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span>
</span>
<span class="flex items-center text-label-sm font-label-sm text-primary">
<span class="material-symbols-outlined text-amber-400 text-xs mr-0.5" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span> 4.9
                </span>
</div>
<h3 class="text-title-md font-title-md font-semibold text-primary truncate">MagDock Pure Glass MagSafe</h3>
<div class="flex items-center justify-between mt-3">
<div class="flex items-center gap-2">
<span class="text-title-lg font-title-lg font-bold text-primary">$160</span>
</div>
<button class="px-3.5 py-1.5 rounded-lg bg-primary text-on-primary hover:opacity-90 text-label-md font-label-md font-semibold transition-all" onclick="addToBag('MagDock Pure Glass MagSafe', 160)">
                  Add to Bag
                </button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 4. FLASH SALE / LIMITED DROPS SECTION -->
<section class="py-16 md:py-24 border-t border-outline-variant/10 relative overflow-hidden" id="deals">
<div class="absolute -bottom-20 -left-20 w-96 h-96 bg-secondary-container/15 rounded-full blur-[100px] pointer-events-none -z-10"></div>
<div class="max-w-7xl mx-auto px-4 md:px-8">
<div class="glass-tier-2 rounded-2xl p-8 md:p-12 relative overflow-hidden">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
<!-- Left Info & Timer -->
<div class="lg:col-span-6">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-error-container/40 text-error text-label-sm font-label-sm font-semibold mb-4 border border-error/30">
<span class="w-1.5 h-1.5 rounded-full bg-error animate-ping"></span>
                Flash Drop • Rare Archive
              </div>
<h2 class="text-headline-md md:text-headline-lg font-headline-lg font-bold text-primary">Monolith Carbon Wireless Turntable</h2>
<p class="text-body-md font-body-md text-on-surface-variant mt-3 max-w-lg">
                Ultra-stiff carbon fiber tonearm, decoupled motor system, and integrated aptX HD lossless streaming module. Hand-numbered edition of 100 worldwide.
              </p>
<!-- Live Countdown Glass Dials -->
<div class="flex items-center gap-4 my-8">
<div class="flex flex-col items-center p-3 rounded-xl glass-tier-1 min-w-[70px]">
<span class="text-headline-sm font-headline-sm font-bold text-primary" id="drop-hours">08</span>
<span class="text-label-sm font-label-sm text-outline uppercase tracking-wider">Hours</span>
</div>
<span class="text-headline-sm font-headline-sm text-outline">:</span>
<div class="flex flex-col items-center p-3 rounded-xl glass-tier-1 min-w-[70px]">
<span class="text-headline-sm font-headline-sm font-bold text-primary" id="drop-mins">42</span>
<span class="text-label-sm font-label-sm text-outline uppercase tracking-wider">Mins</span>
</div>
<span class="text-headline-sm font-headline-sm text-outline">:</span>
<div class="flex flex-col items-center p-3 rounded-xl glass-tier-1 min-w-[70px]">
<span class="text-headline-sm font-headline-sm font-bold text-secondary" id="drop-secs">19</span>
<span class="text-label-sm font-label-sm text-outline uppercase tracking-wider">Secs</span>
</div>
</div>
<!-- Stock Progress Meter -->
<div class="max-w-md">
<div class="flex items-center justify-between text-body-sm font-body-sm mb-2">
<span class="text-error font-medium">Only 7 left in batch</span>
<span class="text-outline">93 / 100 Claimed</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-error w-[93%] rounded-full"></div>
</div>
</div>
<div class="mt-8 flex items-center gap-4">
<button class="px-8 py-3.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:opacity-95 transition-all glow-indigo" onclick="addToBag('Monolith Carbon Wireless Turntable', 890)">
                  Claim Allocation • $890
                </button>
</div>
</div>
<!-- Right Visual Stage -->
<div class="lg:col-span-6 flex justify-center">
<div class="w-full max-w-md aspect-square rounded-2xl bg-surface-container-lowest p-6 flex items-center justify-center relative border border-outline-variant/30">
<img class="w-full h-full object-contain" data-alt="Minimalist matte black turntable with a raw carbon fiber tonearm and clear acrylic platter. Atmospheric ambient lighting with subtle violet and cool white accents against an obsidian gallery wall, hyper-detailed high luxury product render." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGig6tbIZwiPAWgAwWQ4cUD1xVnKZgD2akHPDnDroKyZPzSZ32yhOkQV2aEFvGzCxjznimoZYNYrdyVMI0XwEkDO7CDXRtcTFdynWECiLKxYneZRz9Ugg9E76fp_10NJcGt5lq2saf34-qo7DHVHld48QHTq0aGClRQwIM1R5Mw4fSvPyqGycOSpFegDlqHeh4LgP2lCpP1ISlPg5ZOsbTCzOe7O5h9FtvU0V453SEA34G4JeJV8Ak"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 5. VERIFIED SELLERS SPOTLIGHT -->
<section class="py-16 md:py-24">
<div class="max-w-7xl mx-auto px-4 md:px-8">
<div class="flex items-center justify-between mb-12">
<div>
<span class="text-label-md font-label-md text-secondary">The Guild</span>
<h2 class="text-headline-md md:text-headline-lg font-headline-lg font-bold text-primary mt-1">Verified Atelier Spotlights</h2>
</div>
<a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Become a Seller →</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Seller 1 -->
<div class="glass-tier-1 rounded-xl p-6 flex flex-col justify-between group hover:border-outline/40 transition-all">
<div>
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-bold text-lg">
                  AL
                </div>
<span class="px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-secondary-container/40 text-secondary border border-secondary/30 flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span> Atelier Tier
                </span>
</div>
<h3 class="text-headline-sm font-headline-sm font-semibold text-primary">Aura Design Labs</h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1.5">
                Copenhagen-based collective forging computational industrial devices and wearable micro-architecture.
              </p>
<div class="flex items-center gap-4 mt-4 text-label-sm font-label-sm text-outline">
<span>★ 4.96 (1.4k Reviews)</span>
<span>•</span>
<span>42 Curated Items</span>
</div>
</div>
<div class="mt-6 pt-5 border-t border-outline-variant/20 flex items-center justify-between">
<span class="text-label-md font-label-md text-primary">Stockholm, SE</span>
<button class="px-4 py-2 rounded-lg bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary text-label-md font-label-md font-medium transition-all">Visit Atelier</button>
</div>
</div>
<!-- Seller 2 -->
<div class="glass-tier-1 rounded-xl p-6 flex flex-col justify-between group hover:border-outline/40 transition-all">
<div>
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-bold text-lg">
                  NT
                </div>
<span class="px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-secondary-container/40 text-secondary border border-secondary/30 flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span> Atelier Tier
                </span>
</div>
<h3 class="text-headline-sm font-headline-sm font-semibold text-primary">Nomad Tech Instruments</h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1.5">
                Precision CNC machined everyday mechanical tools and wireless power charging artifacts.
              </p>
<div class="flex items-center gap-4 mt-4 text-label-sm font-label-sm text-outline">
<span>★ 4.91 (2.8k Reviews)</span>
<span>•</span>
<span>88 Curated Items</span>
</div>
</div>
<div class="mt-6 pt-5 border-t border-outline-variant/20 flex items-center justify-between">
<span class="text-label-md font-label-md text-primary">Tokyo, JP</span>
<button class="px-4 py-2 rounded-lg bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary text-label-md font-label-md font-medium transition-all">Visit Atelier</button>
</div>
</div>
<!-- Seller 3 -->
<div class="glass-tier-1 rounded-xl p-6 flex flex-col justify-between group hover:border-outline/40 transition-all">
<div>
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-bold text-lg">
                  KS
                </div>
<span class="px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-secondary-container/40 text-secondary border border-secondary/30 flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="verified" style="font-variation-settings: 'FILL' 1;">verified</span> Atelier Tier
                </span>
</div>
<h3 class="text-headline-sm font-headline-sm font-semibold text-primary">Kvadrat Studio Lighting</h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1.5">
                Architectural illumination fixtures exploring diffusion, blown glass optics, and raw natural textures.
              </p>
<div class="flex items-center gap-4 mt-4 text-label-sm font-label-sm text-outline">
<span>★ 4.98 (860 Reviews)</span>
<span>•</span>
<span>19 Curated Items</span>
</div>
</div>
<div class="mt-6 pt-5 border-t border-outline-variant/20 flex items-center justify-between">
<span class="text-label-md font-label-md text-primary">Oslo, NO</span>
<button class="px-4 py-2 rounded-lg bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary text-label-md font-label-md font-medium transition-all">Visit Atelier</button>
</div>
</div>
</div>
</div>
</section>
<!-- 6. CURATED EDITORIAL REVIEWS & TESTIMONIALS -->
<section class="py-16 md:py-24 border-t border-outline-variant/10">
<div class="max-w-7xl mx-auto px-4 md:px-8">
<div class="text-center max-w-2xl mx-auto mb-14">
<span class="text-label-md font-label-md text-secondary">Verified Voices</span>
<h2 class="text-headline-md md:text-headline-lg font-headline-lg font-bold text-primary mt-1">The Marketplace Experience</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Review 1 -->
<div class="glass-tier-1 rounded-xl p-6 flex flex-col justify-between">
<div class="flex items-center gap-1 text-amber-400 mb-4">
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-body-md font-body-md text-on-surface-variant italic mb-6">
              "UNCART feels like stepping into a modern design museum where every piece can actually be delivered to your door in 48 hours. Absolute benchmark quality."
            </p>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center font-bold text-xs text-primary">
                EL
              </div>
<div>
<h4 class="text-body-sm font-body-sm font-semibold text-primary">Elena Rostova</h4>
<p class="text-label-sm font-label-sm text-outline">Lead Architect, Bern</p>
</div>
</div>
</div>
<!-- Review 2 -->
<div class="glass-tier-1 rounded-xl p-6 flex flex-col justify-between">
<div class="flex items-center gap-1 text-amber-400 mb-4">
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-body-md font-body-md text-on-surface-variant italic mb-6">
              "As a boutique electronics vendor, the platform gives our hardware the editorial spotlight standard marketplaces completely fail to provide."
            </p>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center font-bold text-xs text-primary">
                MK
              </div>
<div>
<h4 class="text-body-sm font-body-sm font-semibold text-primary">Marcus Vance</h4>
<p class="text-label-sm font-label-sm text-outline">Founder, Apex Keyboards</p>
</div>
</div>
</div>
<!-- Review 3 -->
<div class="glass-tier-1 rounded-xl p-6 flex flex-col justify-between">
<div class="flex items-center gap-1 text-amber-400 mb-4">
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="text-body-md font-body-md text-on-surface-variant italic mb-6">
              "The single-touch Apple Pay checkout with multi-vendor bundle shipping is seamless. No noise, just elevated aesthetics."
            </p>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center font-bold text-xs text-primary">
                SO
              </div>
<div>
<h4 class="text-body-sm font-body-sm font-semibold text-primary">Sora Takahashi</h4>
<p class="text-label-sm font-label-sm text-outline">Industrial Designer, Kyoto</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- 7. NEWSLETTER SECTION -->
<section class="py-16 md:py-24 border-t border-outline-variant/10">
<div class="max-w-7xl mx-auto px-4 md:px-8">
<div class="glass-tier-1 rounded-2xl p-8 md:p-14 text-center max-w-4xl mx-auto relative overflow-hidden">
<div class="absolute -top-12 left-1/2 -translate-x-1/2 w-64 h-32 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>
<h2 class="text-headline-md md:text-headline-lg font-headline-lg font-bold text-primary">Stay in the Curated Loop</h2>
<p class="text-body-lg font-body-lg text-on-surface-variant max-w-lg mx-auto mt-3 mb-8">
            Receive exclusive notifications for limited releases, designer monographs, and rare atelier drops. No spam, ever.
          </p>
<form class="flex flex-col sm:flex-row items-center gap-3 max-w-md mx-auto" onsubmit="handleSubscribe(event)">
<input class="w-full px-4 py-3 rounded-lg bg-surface-container-lowest border border-outline-variant/40 text-primary placeholder-outline focus:border-secondary focus:ring-1 focus:ring-secondary text-body-md font-body-md outline-none transition-all" placeholder="Enter your email" required="" type="email"/>
<button class="w-full sm:w-auto px-6 py-3 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:opacity-95 transition-all whitespace-nowrap glow-indigo" type="submit">
              Subscribe
            </button>
</form>
<p class="hidden text-label-md font-label-md text-secondary mt-3" id="subscribe-message">Welcome to the private registry.</p>
</div>
</div>
</section>
</main>
<!-- 8. GRAND FOOTER (Using Footer Shared Component Blueprint) -->
<footer class="w-full bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/20 dark:border-outline-variant/20">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16">
<div class="grid grid-cols-2 md:grid-cols-5 gap-8 mb-12">
<!-- Brand Column -->
<div class="col-span-2">
<div class="flex items-center gap-3 mb-4">
<img alt="UNCART Brand Logo" class="w-7 h-7 rounded-md object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold text-primary dark:text-primary">UNCART</span>
</div>
<p class="text-body-sm font-body-sm text-on-surface-variant dark:text-on-surface-variant max-w-sm mb-6">
            The premier multi-vendor curated marketplace designed for the modern aesthetic. Global shipping directly from certified master workshops.
          </p>
<div class="flex items-center gap-3">
<span class="text-label-sm font-label-sm text-outline">Language / Currency</span>
<button class="px-2.5 py-1 rounded bg-surface-container text-primary text-label-sm font-label-sm border border-outline-variant/30 flex items-center gap-1">
<span>EN</span> • <span>USD ($)</span>
<span class="material-symbols-outlined text-xs" data-icon="expand_more">expand_more</span>
</button>
</div>
</div>
<!-- Links Column 1: Shop -->
<div>
<h4 class="text-title-md font-title-md font-semibold text-primary dark:text-primary mb-4">Shop</h4>
<ul class="space-y-2.5">
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">All Objects</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Limited Drops</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Studio Audio</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Gift Collections</a></li>
</ul>
</div>
<!-- Links Column 2: Customer Care -->
<div>
<h4 class="text-title-md font-title-md font-semibold text-primary dark:text-primary mb-4">Customer Care</h4>
<ul class="space-y-2.5">
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Order Concierge</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Authenticity Guarantee</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Worldwide Shipping</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Returns &amp; Exchanges</a></li>
</ul>
</div>
<!-- Links Column 3: Seller Hub -->
<div>
<h4 class="text-title-md font-title-md font-semibold text-primary dark:text-primary mb-4">Seller Hub</h4>
<ul class="space-y-2.5">
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Atelier Onboarding</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Vendor Guidelines</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Commission Rates</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Merchant API</a></li>
</ul>
</div>
</div>
<!-- Legal & Copyright Bar -->
<div class="pt-8 border-t border-outline-variant/10 flex flex-col sm:flex-row items-center justify-between gap-4">
<p class="text-body-sm font-body-sm text-on-surface-variant dark:text-on-surface-variant">
          © 2024 UNCART Inc. All rights reserved.
        </p>
<div class="flex items-center gap-6">
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Terms of Service</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">System Status</a>
</div>
</div>
</div>
</footer>
<!-- INTERACTIVE DRAWER: SLIDE-OUT CART MODAL -->
<div class="fixed inset-0 z-50 pointer-events-none transition-all duration-300" id="cart-drawer">
<!-- Backdrop overlay -->
<div class="absolute inset-0 bg-background/80 backdrop-blur-md opacity-0 transition-opacity duration-300" id="cart-backdrop" onclick="toggleDrawer('cart-drawer')"></div>
<!-- Drawer Panel -->
<div class="absolute top-0 right-0 w-full max-w-md h-full bg-surface-container-low border-l border-outline-variant/30 flex flex-col justify-between translate-x-full transition-transform duration-300 pointer-events-auto shadow-2xl" id="cart-panel">
<!-- Drawer Header -->
<div class="p-6 border-b border-outline-variant/20 flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="shopping_bag">shopping_bag</span>
<h3 class="text-title-lg font-title-lg font-semibold text-primary">Your Bag (<span id="cart-count">3</span>)</h3>
</div>
<button class="p-1 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all" onclick="toggleDrawer('cart-drawer')">
<span class="material-symbols-outlined text-xl" data-icon="close">close</span>
</button>
</div>
<!-- Cart Items List -->
<div class="p-6 flex-1 overflow-y-auto space-y-4 custom-scroll" id="cart-items-container">
<!-- Cart Item 1 -->
<div class="flex items-center gap-4 glass-tier-1 p-3 rounded-lg">
<div class="w-16 h-16 rounded bg-surface-container-lowest flex-shrink-0 flex items-center justify-center p-1">
<span class="material-symbols-outlined text-2xl text-outline" data-icon="headphones">headphones</span>
</div>
<div class="flex-1 min-w-0">
<h4 class="text-body-md font-body-md font-medium text-primary truncate">Studio Pro Spatial Audio</h4>
<p class="text-label-sm font-label-sm text-outline">Aura Design Labs</p>
<span class="text-body-sm font-body-sm font-semibold text-primary">$349</span>
</div>
<button class="text-outline hover:text-error transition-colors p-1" onclick="removeItem(this, 349)" title="Remove item">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
<!-- Cart Item 2 -->
<div class="flex items-center gap-4 glass-tier-1 p-3 rounded-lg">
<div class="w-16 h-16 rounded bg-surface-container-lowest flex-shrink-0 flex items-center justify-center p-1">
<span class="material-symbols-outlined text-2xl text-outline" data-icon="watch">watch</span>
</div>
<div class="flex-1 min-w-0">
<h4 class="text-body-md font-body-md font-medium text-primary truncate">Titanium Ceramic Chrono</h4>
<p class="text-label-sm font-label-sm text-outline">Nomad Tech</p>
<span class="text-body-sm font-body-sm font-semibold text-primary">$799</span>
</div>
<button class="text-outline hover:text-error transition-colors p-1" onclick="removeItem(this, 799)" title="Remove item">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
<!-- Cart Item 3 -->
<div class="flex items-center gap-4 glass-tier-1 p-3 rounded-lg">
<div class="w-16 h-16 rounded bg-surface-container-lowest flex-shrink-0 flex items-center justify-center p-1">
<span class="material-symbols-outlined text-2xl text-outline" data-icon="backpack">backpack</span>
</div>
<div class="flex-1 min-w-0">
<h4 class="text-body-md font-body-md font-medium text-primary truncate">Vektor Modular Carry Pod</h4>
<p class="text-label-sm font-label-sm text-outline">Aura Design Labs</p>
<span class="text-body-sm font-body-sm font-semibold text-primary">$195</span>
</div>
<button class="text-outline hover:text-error transition-colors p-1" onclick="removeItem(this, 195)" title="Remove item">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</div>
<!-- Drawer Footer with Subtotal & Checkout Trigger -->
<div class="p-6 border-t border-outline-variant/20 bg-surface-container-lowest">
<div class="space-y-2 mb-4">
<div class="flex justify-between text-body-sm font-body-sm text-on-surface-variant">
<span>Subtotal</span>
<span class="text-primary font-semibold" id="cart-subtotal">$1,343.00</span>
</div>
<div class="flex justify-between text-body-sm font-body-sm text-on-surface-variant">
<span>Standard Global Courier</span>
<span class="text-secondary font-medium">Free</span>
</div>
</div>
<button class="w-full py-3.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:opacity-95 transition-all glow-indigo flex items-center justify-center gap-2" onclick="simulateCheckout()">
<span>Complete with Apple Pay</span>
<span class="material-symbols-outlined text-lg" data-icon="lock">lock</span>
</button>
<p class="text-center text-label-sm font-label-sm text-outline mt-2.5">256-bit Encrypted Multi-Vendor Processing</p>
</div>
</div>
</div>
<!-- INTERACTIVE MODAL: QUICK SEARCH OVERLAY -->
<div class="fixed inset-0 z-50 hidden flex items-start justify-center pt-24 px-4 bg-background/80 backdrop-blur-xl" id="search-overlay">
<div class="w-full max-w-2xl glass-tier-2 rounded-2xl overflow-hidden border border-outline-variant/40 shadow-2xl">
<div class="p-4 flex items-center gap-3 border-b border-outline-variant/30">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="search">search</span>
<input class="w-full bg-transparent border-none text-primary text-title-md font-title-md placeholder-outline focus:ring-0 outline-none" id="search-input" placeholder="Search products, verified sellers, categories..." type="text"/>
<button class="p-1 rounded text-outline hover:text-primary" onclick="toggleModal('search-overlay')">
<span class="material-symbols-outlined text-xl" data-icon="close">close</span>
</button>
</div>
<div class="p-6">
<p class="text-label-sm font-label-sm text-outline uppercase tracking-wider mb-3">Instant Recommendations</p>
<div class="flex flex-wrap gap-2 mb-6">
<button class="px-3 py-1.5 rounded-full bg-surface-container-high text-body-sm font-body-sm text-primary hover:bg-surface-bright transition-all">Mechanical Keyboards</button>
<button class="px-3 py-1.5 rounded-full bg-surface-container-high text-body-sm font-body-sm text-primary hover:bg-surface-bright transition-all">Spatial Sound</button>
<button class="px-3 py-1.5 rounded-full bg-surface-container-high text-body-sm font-body-sm text-primary hover:bg-surface-bright transition-all">Nomad Tech</button>
<button class="px-3 py-1.5 rounded-full bg-surface-container-high text-body-sm font-body-sm text-primary hover:bg-surface-bright transition-all">Ceramic Watches</button>
</div>
<p class="text-label-sm font-label-sm text-outline">Press <kbd class="px-1 py-0.5 rounded bg-surface-container text-primary">ESC</kbd> to exit</p>
</div>
</div>
</div>
<!-- TOAST NOTIFICATION CONTAINER -->
<div class="fixed bottom-6 right-6 z-50 glass-tier-2 border border-secondary/40 text-primary px-5 py-3 rounded-xl shadow-2xl flex items-center gap-3 translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toast">
<span class="material-symbols-outlined text-secondary" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-body-sm font-body-sm font-medium" id="toast-text">Object added to bag</span>
</div>
<!-- INLINE JAVASCRIPT LOGIC FOR INTERACTIONS -->
<script>
    let cartTotal = 1343;
    let cartCountNum = 3;

    // Open/Close Cart Drawer
    function toggleDrawer(id) {
      const drawer = document.getElementById(id);
      const backdrop = document.getElementById('cart-backdrop');
      const panel = document.getElementById('cart-panel');

      if (panel.classList.contains('translate-x-full')) {
        drawer.classList.remove('pointer-events-none');
        backdrop.classList.remove('opacity-0');
        panel.classList.remove('translate-x-full');
      } else {
        backdrop.classList.add('opacity-0');
        panel.classList.add('translate-x-full');
        setTimeout(() => drawer.classList.add('pointer-events-none'), 300);
      }
    }

    // Open/Close Modals
    function toggleModal(id) {
      const modal = document.getElementById(id);
      if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        const input = modal.querySelector('input');
        if (input) input.focus();
      } else {
        modal.classList.add('hidden');
      }
    }

    // Keyboard Shortcuts (⌘K & ESC)
    window.addEventListener('keydown', (e) => {
      if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
        e.preventDefault();
        toggleModal('search-overlay');
      }
      if (e.key === 'Escape') {
        const search = document.getElementById('search-overlay');
        if (!search.classList.contains('hidden')) search.classList.add('hidden');
        const panel = document.getElementById('cart-panel');
        if (!panel.classList.contains('translate-x-full')) toggleDrawer('cart-drawer');
      }
    });

    // Add To Bag Action
    function addToBag(title, price) {
      cartCountNum++;
      cartTotal += price;
      
      document.getElementById('header-cart-badge').textContent = cartCountNum;
      document.getElementById('cart-count').textContent = cartCountNum;
      document.getElementById('cart-subtotal').textContent = `$${cartTotal.toLocaleString()}.00`;

      // Append item to cart container
      const container = document.getElementById('cart-items-container');
      const itemEl = document.createElement('div');
      itemEl.className = 'flex items-center gap-4 glass-tier-1 p-3 rounded-lg transition-all';
      itemEl.innerHTML = `
        <div class="w-16 h-16 rounded bg-surface-container-lowest flex-shrink-0 flex items-center justify-center p-1">
          <span class="material-symbols-outlined text-2xl text-secondary" data-icon="inventory_2">inventory_2</span>
        </div>
        <div class="flex-1 min-w-0">
          <h4 class="text-body-md font-body-md font-medium text-primary truncate">${title}</h4>
          <p class="text-label-sm font-label-sm text-outline">Direct Artisan Batch</p>
          <span class="text-body-sm font-body-sm font-semibold text-primary">$${price}</span>
        </div>
        <button onclick="removeItem(this, ${price})" class="text-outline hover:text-error transition-colors p-1" title="Remove item">
          <span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
        </button>
      `;
      container.prepend(itemEl);

      showToast(`Added "${title}" to your curated bag.`);
    }

    // Remove item from cart
    function removeItem(button, price) {
      const item = button.closest('div.flex');
      if (item) {
        item.remove();
        cartCountNum = Math.max(0, cartCountNum - 1);
        cartTotal = Math.max(0, cartTotal - price);
        document.getElementById('header-cart-badge').textContent = cartCountNum;
        document.getElementById('cart-count').textContent = cartCountNum;
        document.getElementById('cart-subtotal').textContent = `$${cartTotal.toLocaleString()}.00`;
      }
    }

    // Toggle Heart Wishlist
    function toggleWishlist(btn) {
      const icon = btn.querySelector('.material-symbols-outlined');
      const isFilled = icon.style.fontVariationSettings?.includes("'FILL' 1");
      if (isFilled) {
        icon.style.fontVariationSettings = "'FILL' 0";
        icon.classList.remove('text-error');
        showToast('Removed from your private wishlist');
      } else {
        icon.style.fontVariationSettings = "'FILL' 1";
        icon.classList.add('text-error');
        showToast('Saved to your private wishlist');
      }
    }

    // Toast Notification helper
    function showToast(message) {
      const toast = document.getElementById('toast');
      const text = document.getElementById('toast-text');
      text.textContent = message;
      toast.classList.remove('translate-y-24', 'opacity-0');
      setTimeout(() => {
        toast.classList.add('translate-y-24', 'opacity-0');
      }, 2500);
    }

    // Newsletter Handler
    function handleSubscribe(e) {
      e.preventDefault();
      document.getElementById('subscribe-message').classList.remove('hidden');
      e.target.reset();
    }

    // Apple Pay Simulation
    function simulateCheckout() {
      showToast('Connecting to Apple Pay secure enclave...');
      setTimeout(() => {
        toggleDrawer('cart-drawer');
        showToast('Order confirmed! Curators notified.');
      }, 1200);
    }

    // Countdown Clock Micro-ticker
    setInterval(() => {
      const secsEl = document.getElementById('drop-secs');
      if (secsEl) {
        let s = parseInt(secsEl.textContent);
        s = s <= 0 ? 59 : s - 1;
        secsEl.textContent = s < 10 ? '0' + s : s;
      }
    }, 1000);
  </script>
</body></html>