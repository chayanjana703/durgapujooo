<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART | Discover Curated Design &amp; Objects</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Inter & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
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
    /* Custom Apple Glass & Subtle Lighting Utilities */
    .glass-tier-1 {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(24px) saturate(180%);
      -webkit-backdrop-filter: blur(24px) saturate(180%);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.3), inset 0 1px 0 0 rgba(255, 255, 255, 0.15);
    }
    .glass-tier-2 {
      background: rgba(255, 255, 255, 0.07);
      backdrop-filter: blur(40px) saturate(200%);
      -webkit-backdrop-filter: blur(40px) saturate(200%);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 12px 32px -4px rgba(0, 0, 0, 0.5), inset 0 1px 0 0 rgba(255, 255, 255, 0.2);
    }
    .product-card-hover {
      transition: transform 300ms cubic-bezier(0.16, 1, 0.3, 1), border-color 300ms ease, box-shadow 300ms ease;
    }
    .product-card-hover:hover {
      transform: translateY(-3px);
      border-color: rgba(255, 255, 255, 0.18);
      box-shadow: 0 12px 30px -4px rgba(0, 0, 0, 0.6), 0 0 24px -2px rgba(99, 102, 241, 0.2), inset 0 1px 0 0 rgba(255, 255, 255, 0.25);
    }
    /* Subtle Range Slider Track */
    input[type=range] {
      accent-color: #ffffff;
    }
    /* Hide scrollbar for smooth chip overflow */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>
<body class="bg-background text-on-surface antialiased selection:bg-secondary-container selection:text-primary">
<!-- ================= TOP APP BAR (Shared Component) ================= -->
<header class="sticky top-0 z-50 w-full bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 dark:border-outline-variant/20 shadow-sm dark:shadow-none">
<div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
<!-- Brand Logo & Platform Title -->
<div class="flex items-center space-x-8">
<a class="flex items-center space-x-3 transition-all duration-200 ease-out active:scale-95 group" href="{{ route('marketplace.index') }}">
<img alt="UNCART Brand Logo" class="w-8 h-8 rounded-md object-contain border border-outline-variant/30" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold tracking-tight text-primary dark:text-primary">UNCART</span>
</a>
<!-- Desktop Navigation Links (Intent: 'Shop' is active) -->
<nav class="hidden md:flex items-center space-x-6">
<a class="text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Home</a>
<a class="text-primary font-title-md text-title-md hover:text-primary transition-colors duration-200" href="{{ route('shop.index') }}">Shop</a>
</nav>
</div>
<!-- Search on Right & Actions Cluster -->
<div class="flex items-center space-x-4">
<!-- Quick Header Search (Desktop) -->
<div class="relative hidden lg:block w-72">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
<input class="w-full bg-surface-container-low border border-outline-variant/30 rounded-lg pl-9 pr-3 py-1.5 text-body-sm font-body-sm text-primary placeholder:text-outline focus:outline-none focus:border-outline focus:ring-1 focus:ring-outline transition-colors" placeholder="Search catalog..." type="text"/>
<kbd class="absolute right-2.5 top-1/2 -translate-y-1/2 px-1.5 py-0.5 text-[10px] text-on-surface-variant bg-surface-variant/40 rounded border border-outline-variant/30 font-label-sm">⌘K</kbd>
</div>
<!-- Trailing Actions (JSON: favorite, shopping_bag, account_circle) -->
<div class="flex items-center space-x-2">
<button aria-label="Wishlist" class="relative p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-xl">favorite</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-secondary"></span>
</button>
<button type="button" onclick="toggleDrawer('cart-drawer')" aria-label="Shopping Cart" class="relative p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-xl">shopping_bag</span>
<span class="absolute top-1 right-1 px-1.5 py-0.2 bg-primary text-on-primary font-label-sm text-[10px] rounded-full font-bold" id="header-cart-badge">0</span>
</button>
<!-- Profile Account Dropdown -->
<div class="relative" id="userProfileDropdown">
    <button type="button" onclick="toggleProfileDropdown(event)" class="p-1.5 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all flex items-center gap-1 focus:outline-none">
        <span class="material-symbols-outlined text-2xl">account_circle</span>
        @auth
            <span class="hidden sm:inline text-label-md font-label-md text-primary font-semibold max-w-[100px] truncate">{{ Auth::user()->name }}</span>
        @endauth
        <span class="material-symbols-outlined text-sm text-outline">expand_more</span>
    </button>
    <!-- Dropdown Menu -->
    <div id="profileDropdownMenu" class="absolute right-0 mt-2 w-56 rounded-xl py-2.5 shadow-2xl border border-white/20 backdrop-blur-3xl bg-surface-container-lowest/90 dark:bg-[#131317]/95 hidden z-50 backdrop-saturate-200">
        @auth
            <div class="px-4 py-2 border-b border-outline-variant/20">
                <p class="text-[10px] uppercase font-label-sm text-outline tracking-wider">Signed in as</p>
                <p class="text-body-sm font-body-sm font-bold text-primary truncate">{{ Auth::user()->name }}</p>
                <p class="text-[11px] text-on-surface-variant truncate">{{ Auth::user()->email }}</p>
            </div>
            <a href="{{ route('shop.index') }}" class="flex items-center gap-2 px-4 py-2 text-body-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-base">store</span>
                Shop Catalog
            </a>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 text-body-sm text-error hover:bg-error/10 transition-colors text-left">
                    <span class="material-symbols-outlined text-base">logout</span>
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('user.login') }}" class="flex items-center gap-2 px-4 py-2 text-body-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-base">login</span>
                Sign In
            </a>
            <a href="{{ route('user.register') }}" class="flex items-center gap-2 px-4 py-2 text-body-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-base">person_add</span>
                Register
            </a>
        @endauth
    </div>
</div>
</div>
</div>
</div>
</header>
<!-- ================= MAIN CANVAS ================= -->
<main class="max-w-7xl mx-auto px-4 md:px-8 py-8 md:py-12">
<!-- Top Headline & Editorial Subtitle Section -->
<div class="mb-8 md:mb-10 space-y-2">
<div class="flex items-center space-x-2 text-label-sm font-label-sm text-outline uppercase tracking-wider">
<a class="hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Catalog</a>
<span>/</span>
<span class="text-on-surface">Curated Showcase</span>
</div>
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
<div>
<h1 class="text-headline-lg-mobile md:text-headline-lg font-headline-lg text-primary tracking-tight">
            Discover something great.
          </h1>
<p class="text-body-md md:text-body-lg font-body-md text-on-surface-variant max-w-2xl mt-1">
            Explore over 2,400 curated architectural objects, studio electronics, and limited artisan releases.
          </p>
</div>
<!-- Result Counter & Quick Indicators -->
<div class="flex items-center space-x-3 text-label-md font-label-md text-on-surface-variant self-start lg:self-end">
<span class="inline-flex items-center px-2.5 py-1 rounded-full bg-surface-container border border-outline-variant/30">
<span class="w-1.5 h-1.5 rounded-full bg-secondary mr-2 animate-pulse"></span>
            Showing 48 of 2,410 Objects
          </span>
</div>
</div>
</div>
<form method="GET" action="{{ route('shop.index') }}" id="filterForm">
@if(request('category'))
<input type="hidden" name="category" value="{{ request('category') }}">
@endif
<!-- Result Counter & Search Header -->
<div class="glass-tier-1 rounded-xl p-4 md:p-5 mb-8 space-y-4">
<div class="flex flex-col md:flex-row gap-3 items-center">
<!-- Search Input -->
<div class="relative flex-1 w-full">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
<input name="search" class="w-full bg-surface-container-lowest/80 border border-outline-variant/30 rounded-lg pl-11 pr-10 py-2.5 text-body-md font-body-md text-primary placeholder:text-outline focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary/40 transition-all" placeholder="Search products, descriptions..." type="text" value="{{ request('search') }}"/>
@if(request('search'))
<a href="{{ route('shop.index', request()->except('search')) }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg">close</span>
</a>
@endif
</div>
<!-- Sorting Dropdown -->
<div class="flex items-center justify-between w-full md:w-auto gap-3">
<div class="relative flex-1 md:w-52">
<select name="sort" onchange="document.getElementById('filterForm').submit()" class="w-full appearance-none bg-surface-container-lowest/80 border border-outline-variant/30 rounded-lg px-3.5 py-2.5 text-body-sm font-body-sm text-on-surface focus:outline-none focus:border-outline cursor-pointer pr-9">
<option value="rec" {{ request('sort') == 'rec' ? 'selected' : '' }}>Recommended</option>
<option value="new" {{ request('sort') == 'new' ? 'selected' : '' }}>Newest Releases</option>
<option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Price: Low to High</option>
<option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Price: High to Low</option>
<option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Highest Rated</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-lg">unfold_more</span>
</div>
<button type="submit" class="px-4 py-2.5 bg-primary text-on-primary rounded-lg font-semibold text-body-sm hover:opacity-90">Filter</button>
</div>
</div>

<!-- Active Filters Bar -->
@if(request('search') || request('category') || request('min_price') || request('max_price') || request('sort'))
<div class="flex items-center space-x-2 overflow-x-auto no-scrollbar pt-1">
<span class="text-label-sm font-label-sm text-outline flex-shrink-0">Active Filters:</span>
@if(request('search'))
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Search: "{{ request('search') }}"</span>
<a href="{{ route('shop.index', request()->except('search')) }}" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></a>
</span>
@endif
@if(request('category'))
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Category: {{ request('category') }}</span>
<a href="{{ route('shop.index', request()->except('category')) }}" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></a>
</span>
@endif
@if(request('sort'))
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Sort: {{ request('sort') == 'asc' ? 'Price Low-High' : (request('sort') == 'desc' ? 'Price High-Low' : request('sort')) }}</span>
<a href="{{ route('shop.index', request()->except('sort')) }}" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></a>
</span>
@endif
<a href="{{ route('shop.index') }}" class="text-label-sm font-label-sm text-secondary hover:underline pl-2 flex-shrink-0">Reset All</a>
</div>
@endif
</div>
<!-- ================= 2-COLUMN DISCOVERY WORKSPACE ================= -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- ================= SIDEBAR ADVANCED FILTERS (280px / 3 cols) ================= -->
<aside class="lg:col-span-3 space-y-6">
<div class="glass-tier-1 rounded-xl p-5 space-y-6 sticky top-24">
<!-- Filter Header -->
<div class="flex items-center justify-between pb-3 border-b border-outline-variant/20">
<div class="flex items-center space-x-2">
<span class="material-symbols-outlined text-primary text-xl">tune</span>
<h2 class="text-title-md font-title-md text-primary">Filters</h2>
</div>
<span class="text-label-sm font-label-sm text-outline">4 Active</span>
</div>
<!-- Section 1: Categories Accordion -->
<div class="space-y-3">
<span class="text-label-md font-label-md text-outline uppercase tracking-wider">Hierarchy</span>
<div class="space-y-1.5">
@if(isset($categories))
    <a href="{{ route('shop.index') }}" class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg {{ !request('category') ? 'text-primary bg-surface-variant/30 font-medium' : 'text-on-surface-variant hover:text-primary hover:bg-surface-variant/20' }}">
        <span>All Categories</span>
    </a>
    @foreach($categories as $cat)
    <a href="{{ route('shop.index', ['category' => $cat->slug]) }}" class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg {{ request('category') == $cat->slug ? 'text-primary bg-surface-variant/30 font-medium' : 'text-on-surface-variant hover:text-primary hover:bg-surface-variant/20' }}">
        <span class="flex items-center space-x-2">
            <span>{{ $cat->icon_emoji ?? '📦' }}</span>
            <span>{{ $cat->name }}</span>
        </span>
        <span class="text-label-sm text-outline">{{ $cat->products()->count() }}</span>
    </a>
    @endforeach
@endif
</div>
</div>
<!-- Section 2: Price Range Slider -->
<div class="space-y-3 pt-3 border-t border-outline-variant/20">
<div class="flex items-center justify-between">
<span class="text-label-md font-label-md text-outline uppercase tracking-wider">Price Bounds</span>
<span class="text-label-sm font-label-sm text-on-surface-variant">$50 — $2,500</span>
</div>
<input class="w-full h-1 bg-surface-container-highest rounded-lg cursor-pointer" max="2500" min="50" type="range" value="480"/>
<div class="grid grid-cols-2 gap-2 pt-1">
<div class="bg-surface-container-lowest/80 border border-outline-variant/30 rounded-lg px-2.5 py-1.5">
<span class="text-[10px] text-outline block font-label-sm">Min</span>
<span class="text-body-sm font-body-sm text-primary font-medium">$50</span>
</div>
<div class="bg-surface-container-lowest/80 border border-outline-variant/30 rounded-lg px-2.5 py-1.5">
<span class="text-[10px] text-outline block font-label-sm">Max</span>
<span class="text-body-sm font-body-sm text-primary font-medium">$2,500</span>
</div>
</div>
</div>
<!-- Section 3: Brand & Atelier Checklist -->
<div class="space-y-3 pt-3 border-t border-outline-variant/20">
<span class="text-label-md font-label-md text-outline uppercase tracking-wider">Atelier &amp; Brand</span>
<div class="space-y-2">
<label class="flex items-center justify-between text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer select-none">
<div class="flex items-center space-x-2.5">
<input checked="" class="w-4 h-4 rounded bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" type="checkbox"/>
<span>Nomad Tech</span>
</div>
<span class="text-label-sm text-outline">32</span>
</label>
<label class="flex items-center justify-between text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer select-none">
<div class="flex items-center space-x-2.5">
<input class="w-4 h-4 rounded bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" type="checkbox"/>
<span>Aura Design Labs</span>
</div>
<span class="text-label-sm text-outline">14</span>
</label>
<label class="flex items-center justify-between text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer select-none">
<div class="flex items-center space-x-2.5">
<input class="w-4 h-4 rounded bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" type="checkbox"/>
<span>Kvadrat Studio</span>
</div>
<span class="text-label-sm text-outline">19</span>
</label>
<label class="flex items-center justify-between text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer select-none">
<div class="flex items-center space-x-2.5">
<input class="w-4 h-4 rounded bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" type="checkbox"/>
<span>Teenage Eng.</span>
</div>
<span class="text-label-sm text-outline">8</span>
</label>
<label class="flex items-center justify-between text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer select-none">
<div class="flex items-center space-x-2.5">
<input class="w-4 h-4 rounded bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" type="checkbox"/>
<span>Master &amp; Dynamic</span>
</div>
<span class="text-label-sm text-outline">12</span>
</label>
</div>
</div>
<!-- Section 4: Rating Filter -->
<div class="space-y-3 pt-3 border-t border-outline-variant/20">
<span class="text-label-md font-label-md text-outline uppercase tracking-wider">Curator Rating</span>
<div class="space-y-1.5">
<label class="flex items-center space-x-2 text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer">
<input checked="" class="w-4 h-4 bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" name="rating" type="radio"/>
<div class="flex items-center text-amber-400 text-xs space-x-0.5">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star_half</span>
</div>
<span class="text-label-sm text-on-surface-variant ml-1">4.5 &amp; up</span>
</label>
<label class="flex items-center space-x-2 text-body-sm font-body-sm text-on-surface hover:text-primary cursor-pointer">
<input class="w-4 h-4 bg-surface-container border-outline-variant/40 text-secondary focus:ring-0" name="rating" type="radio"/>
<div class="flex items-center text-amber-400 text-xs space-x-0.5">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-sm">star</span>
</div>
<span class="text-label-sm text-on-surface-variant ml-1">4.0 &amp; up</span>
</label>
</div>
</div>
<!-- Section 5: Verification & Availability Toggles -->
<div class="space-y-3 pt-3 border-t border-outline-variant/20">
<span class="text-label-md font-label-md text-outline uppercase tracking-wider">Provenance &amp; Status</span>
<div class="flex items-center justify-between">
<span class="text-body-sm font-body-sm text-on-surface">Verified Guild Only</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-secondary"></div>
</label>
</div>
<div class="flex items-center justify-between">
<span class="text-body-sm font-body-sm text-on-surface">Ready to Ship</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-secondary"></div>
</label>
</div>
</div>
</div>
</aside>
<!-- ================= RESPONSIVE PRODUCT GRID (9 cols) ================= -->
<section class="lg:col-span-9">
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
@if(isset($products) && $products->count() > 0)
    @foreach($products as $product)
    <article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
    <a href="{{ route('product.index', $product->id) }}" class="block">
        <div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
        <img class="w-full h-full object-contain rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" src="{{ $product->display_image }}" alt="{{ $product->name }}"/>
        @if($product->featured)
        <span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/80 backdrop-blur-md border border-outline-variant/30 text-[10px] font-label-sm text-secondary uppercase tracking-wider font-semibold">
            Featured
        </span>
        @endif
        </div>
    </a>
    <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
    <div>
    <div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
    <span>{{ $product->category->name ?? 'UNCART' }}</span>
    <div class="flex items-center text-amber-400 space-x-1">
    <span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
    <span class="text-on-surface-variant font-medium">{{ $product->average_rating }}</span>
    </div>
    </div>
    <a href="{{ route('product.index', $product->id) }}" class="block">
        <h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors truncate" title="{{ $product->name }}">
            {{ $product->name }}
        </h3>
    </a>
    <p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-2">
        {{ $product->description }}
    </p>
    </div>
    <div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
    <div>
    <div class="text-title-lg font-title-lg font-bold text-primary">₹{{ number_format($product->price, 2) }}</div>
    @if($product->old_price)
    <div class="text-label-sm font-label-sm text-outline line-through">₹{{ number_format($product->old_price, 2) }}</div>
    @endif
    </div>
    <div class="flex items-center gap-2">
    <a href="{{ route('product.index', $product->id) }}" class="p-2 rounded-lg glass-tier-1 text-on-surface hover:text-primary hover:bg-surface-container transition-all" title="View Details">
        <span class="material-symbols-outlined text-lg">visibility</span>
    </a>
    <button type="button" onclick="addToBag('{{ addslashes($product->name) }}', {{ $product->price }})" class="px-3 py-1.5 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all shadow-sm flex items-center space-x-1 active:scale-95">
        <span class="material-symbols-outlined text-base">shopping_bag</span>
        <span>Add</span>
    </button>
</div>
    </div>
    </div>
    </article>
    @endforeach
@else
    <div class="col-span-3 text-center py-12 text-on-surface-variant">
        No products found in this selection.
    </div>
@endif
</div>
</section>
</div>
</form>
</main>
<!-- ================= STICKY FLOATING GLASS CHECKOUT DOCK ================= -->
<aside class="fixed bottom-6 right-6 z-40">
<div class="glass-tier-2 rounded-full p-2 pl-4 pr-3 flex items-center space-x-4 shadow-2xl border border-white/20">
<div class="flex items-center space-x-2">
<span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
<span class="text-body-sm font-body-sm text-primary font-medium" id="dock-cart-count">0 Objects in Cart</span>
<span class="text-on-surface-variant text-label-sm font-label-sm" id="dock-cart-total">· ₹0.00</span>
</div>
<button type="button" onclick="toggleDrawer('cart-drawer')" class="px-4 py-2 rounded-full bg-primary text-on-primary font-title-md text-label-md font-semibold hover:bg-primary-fixed transition-all active:scale-95 shadow-lg flex items-center space-x-1.5">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>View Bag</span>
</button>
</div>
</aside>
<!-- ================= GLOBAL FOOTER (Shared Component) ================= -->
<footer class="w-full bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/20 dark:border-outline-variant/20">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16">
<div class="grid grid-cols-2 md:grid-cols-6 gap-8 mb-12">
<!-- Brand Col -->
<div class="col-span-2 space-y-4">
<div class="flex items-center space-x-3">
<img alt="UNCART Brand Logo" class="w-7 h-7 rounded-md object-contain border border-outline-variant/30" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold text-primary dark:text-primary">UNCART</span>
</div>
<p class="text-body-sm font-body-sm text-on-surface-variant max-w-sm">
            Architectural consumer technology, acoustic instruments, and curated living pieces for modern studios.
          </p>
<div class="flex items-center space-x-2 pt-2">
<span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-label-sm bg-surface-container-high text-secondary border border-outline-variant/30">
              Region: Global Edition (USD $)
            </span>
</div>
</div>
<!-- Links Col 1 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Discover</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Shop</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">New Arrivals</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Curators' Guild</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Atelier Archive</a></li>
</ul>
</div>
<!-- Links Col 2 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Support</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Customer Care</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Shipping &amp; Delivery</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Warranty Protocol</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Contact Atelier</a></li>
</ul>
</div>
<!-- Links Col 3 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Ecosystem</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Company</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Seller Hub</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Studio Press</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">API Documentation</a></li>
</ul>
</div>
<!-- Links Col 4 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Governance</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Privacy Policy</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Terms of Service</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Cookie Standards</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Guild Charter</a></li>
</ul>
</div>
</div>
<!-- Bottom Bar -->
<div class="pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row items-center justify-between gap-4">
<span class="text-label-sm font-label-sm text-outline">
          © 2024 UNCART Inc. All rights reserved.
        </span>
<div class="flex items-center space-x-6 text-body-sm font-body-sm text-on-surface-variant">
<a class="hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Privacy Policy</a>
<a class="hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Terms of Service</a>
<a class="hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Seller Hub</a>
</div>
</div>
</div>
</footer>
<!-- SLIDE-OVER CART DRAWER -->
<div class="fixed inset-0 z-50 pointer-events-none" id="cart-drawer">
<div class="absolute inset-0 bg-background/60 backdrop-blur-md opacity-0 transition-opacity duration-300" id="cart-backdrop" onclick="toggleDrawer('cart-drawer')"></div>
<div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
<div class="w-screen max-w-md glass-tier-2 border-l border-outline-variant/30 text-on-surface flex flex-col translate-x-full transition-transform duration-300 ease-out pointer-events-auto" id="cart-panel">
<!-- Header -->
<div class="p-6 border-b border-outline-variant/20 flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-2xl" data-icon="shopping_bag">shopping_bag</span>
<h2 class="text-title-lg font-title-lg font-bold text-primary">Your Shopping Bag</h2>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-label-sm font-label-sm text-secondary" id="cart-count">0</span>
</div>
<button class="p-2 rounded-lg text-outline hover:text-primary hover:bg-surface-container transition-colors" onclick="toggleDrawer('cart-drawer')">
<span class="material-symbols-outlined text-xl" data-icon="close">close</span>
</button>
</div>
<!-- Items List -->
<div class="flex-1 overflow-y-auto p-6 space-y-4 custom-scroll" id="cart-items-container">
<!-- Cart items added dynamically -->
</div>
<!-- Footer -->
<div class="p-6 border-t border-outline-variant/20 bg-surface-container-lowest">
<div class="space-y-2 mb-4">
<div class="flex justify-between text-body-sm font-body-sm text-on-surface-variant">
<span>Subtotal</span>
<span class="text-primary font-semibold" id="cart-subtotal">₹0.00</span>
</div>
<div class="flex justify-between text-body-sm font-body-sm text-on-surface-variant">
<span>Shipping</span>
<span class="text-secondary font-medium">Calculated at Checkout</span>
</div>
</div>
<a href="{{ route('checkout.index') }}" class="w-full py-3.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:opacity-95 transition-all glow-indigo flex items-center justify-center gap-2">
<span>Proceed to Checkout</span>
<span class="material-symbols-outlined text-lg" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>

<!-- TOAST NOTIFICATION CONTAINER -->
<div class="fixed bottom-6 left-6 z-50 glass-tier-2 border border-secondary/40 text-primary px-5 py-3 rounded-xl shadow-2xl flex items-center gap-3 translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toast">
<span class="material-symbols-outlined text-secondary" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-body-sm font-body-sm font-medium" id="toast-text">Object added to bag</span>
</div>


<script>
    const csrfToken = '{{ csrf_token() }}';

    function toggleDrawer(id = 'cart-drawer') {
        const drawer = document.getElementById(id);
        if (!drawer) return;
        const backdrop = document.getElementById('cart-backdrop');
        const panel = document.getElementById('cart-panel');
        if (!panel) return;

        if (panel.classList.contains('translate-x-full')) {
            drawer.classList.remove('pointer-events-none');
            if (backdrop) backdrop.classList.remove('opacity-0');
            panel.classList.remove('translate-x-full');
        } else {
            if (backdrop) backdrop.classList.add('opacity-0');
            panel.classList.add('translate-x-full');
            setTimeout(() => drawer.classList.add('pointer-events-none'), 300);
        }
    }

    function showToast(message) {
        const toast = document.getElementById('toast');
        if (!toast) return;
        const text = document.getElementById('toast-text');
        if (text) text.textContent = message;
        toast.classList.remove('translate-y-24', 'opacity-0');
        setTimeout(() => {
            toast.classList.add('translate-y-24', 'opacity-0');
        }, 2500);
    }

    function toggleModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
            const input = modal.querySelector('input');
            if (input) input.focus();
        } else {
            modal.classList.add('hidden');
        }
    }

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
                const panel = document.getElementById('cart-panel');
                if (panel && panel.classList.contains('translate-x-full')) {
                    toggleDrawer('cart-drawer');
                }
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
                    const fallbackImg = 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&q=80';
                    let imgSrc = item.image_path || fallbackImg;
                    if (imgSrc.startsWith('http://localhost/') || imgSrc.startsWith('http://127.0.0.1/')) {
                        try {
                            const u = new URL(imgSrc);
                            imgSrc = u.pathname;
                        } catch(e) {}
                    }
                    const div = document.createElement('div');
                    div.className = 'flex items-center gap-4 glass-tier-1 p-3 rounded-lg transition-all';
                    div.innerHTML = `
                        <div class="w-14 h-14 rounded bg-surface-container-lowest flex-shrink-0 flex items-center justify-center p-1 overflow-hidden">
                            <img src="${imgSrc}" class="w-full h-full object-contain" alt="${item.title}" onerror="this.onerror=null;this.src='${fallbackImg}';">
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
</body>
</html>