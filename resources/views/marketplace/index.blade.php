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
<a class="flex items-center gap-3 transition-all duration-200 ease-out active:scale-95 group" href="{{ route('marketplace.index') }}">
<img alt="UNCART Brand Logo" class="w-8 h-8 rounded-lg object-contain border border-outline-variant/30 group-hover:border-primary transition-colors" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold tracking-tight text-primary dark:text-primary">UNCART</span>
</a>
<!-- Portal Role Selector Pill -->
<div class="hidden lg:flex items-center p-0.5 rounded-full bg-surface-container-high border border-outline-variant/20 text-label-sm font-label-sm">
<a href="{{ route('marketplace.index') }}" class="px-3 py-1 rounded-full bg-primary text-on-primary font-medium transition-all shadow-sm">Customer</a>
</div>
</div>
<!-- Navigation Links -->
<nav class="hidden md:flex items-center gap-7">
<a class="text-primary font-title-md text-title-md hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Home</a>
<a class="text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="{{ route('shop.index') }}">Shop</a>
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
<a class="px-7 py-3 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:scale-[1.02] transition-all glow-indigo flex items-center gap-2" href="{{ route('shop.index') }}">
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
@if(isset($heroCards) && $heroCards->count() > 0)
    @php $mainHero = $heroCards->first(); @endphp
    <!-- Flagship Main Hero Card -->
    <div class="md:col-span-7 glass-tier-1 rounded-xl p-6 md:p-8 flex flex-col justify-between relative overflow-hidden group hover:border-outline/40 transition-all duration-300">
    <div class="flex items-center justify-between z-10">
    <span class="px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-container-high/80 text-secondary border border-outline-variant/30">{{ $mainHero->badge ?? 'Featured' }}</span>
    <span class="text-title-lg font-title-lg font-bold text-primary">₹{{ number_format($mainHero->price, 2) }}</span>
    </div>
    <div class="my-8 relative flex items-center justify-center py-6">
    <div class="absolute inset-0 bg-surface-container-lowest/60 rounded-xl -z-10"></div>
    <img class="w-full max-w-sm h-64 object-contain group-hover:scale-105 transition-transform duration-500" src="{{ asset($mainHero->image ?? 'uploads/products/product_7_14.jpg') }}" alt="{{ $mainHero->title }}"/>
    </div>
    <div class="z-10 flex flex-col sm:flex-row sm:items-end justify-between gap-4">
    <div>
    <p class="text-label-md font-label-md text-on-surface-variant">{{ $mainHero->subtitle ?? 'Featured Item' }}</p>
    <h3 class="text-headline-sm font-headline-sm text-primary font-semibold">{{ $mainHero->title }}</h3>
    </div>
    <a class="px-5 py-2.5 rounded-lg bg-surface-container-highest text-primary hover:bg-primary hover:text-on-primary text-body-sm font-body-sm font-medium transition-all flex items-center gap-2" href="{{ route('product.index', $mainHero->product_id ?? 1) }}">
    <span class="material-symbols-outlined text-base" data-icon="add">visibility</span>
    <span>View Detail</span>
    </a>
    </div>
    </div>

    <!-- Secondary Right Column Stack -->
    <div class="md:col-span-5 flex flex-col gap-6">
    @foreach($heroCards->skip(1)->take(2) as $sideHero)
    <div class="glass-tier-1 rounded-xl p-6 flex items-center justify-between relative overflow-hidden group hover:border-outline/40 transition-all duration-300 flex-1">
    <div class="flex flex-col justify-between h-full z-10 pr-4">
    <div>
    <span class="text-label-sm font-label-sm text-secondary">{{ $sideHero->badge ?? 'Special' }}</span>
    <h4 class="text-title-md font-title-md font-semibold text-primary mt-1">{{ $sideHero->title }}</h4>
    <p class="text-body-sm font-body-sm text-on-surface-variant mt-1">{{ $sideHero->subtitle }}</p>
    </div>
    <div class="mt-4 flex items-center gap-3">
    <span class="text-title-lg font-title-lg font-bold text-primary">₹{{ number_format($sideHero->price, 2) }}</span>
    <a class="p-2 rounded-lg bg-surface-container-high text-primary hover:bg-primary hover:text-on-primary transition-all" href="{{ route('product.index', $sideHero->product_id ?? 1) }}">
    <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
    </a>
    </div>
    </div>
    <div class="w-36 h-36 flex-shrink-0 relative flex items-center justify-center bg-surface-container-lowest/80 rounded-lg">
    <img class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="{{ asset($sideHero->image ?? 'uploads/products/product_2_4.jpg') }}" alt="{{ $sideHero->title }}"/>
    </div>
    </div>
    @endforeach
    </div>
@endif
</div>
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
<!-- Dynamic Category Grid -->
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
@if(isset($categories))
    @foreach($categories as $category)
    <a href="{{ route('shop.index', ['category' => $category->slug]) }}" class="glass-tier-1 rounded-xl p-5 text-center flex flex-col items-center group cursor-pointer hover:border-secondary/50 transition-all duration-300">
    <div class="w-14 h-14 rounded-2xl bg-surface-container-high flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
    <span class="text-2xl">{{ $category->icon_emoji ?? '📦' }}</span>
    </div>
    <h4 class="text-title-md font-title-md font-medium text-primary">{{ $category->name }}</h4>
    <span class="text-label-sm font-label-sm text-outline mt-1">{{ $category->products_count ?? $category->products()->count() }} Objects</span>
    </a>
    @endforeach
@endif
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
<a class="hidden sm:flex items-center gap-1 text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">
<span>Browse 1,400+ Pieces</span>
<span class="material-symbols-outlined text-sm" data-icon="north_east">north_east</span>
</a>
</div>
<!-- Dynamic Product Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
@if(isset($featuredProducts))
    @foreach($featuredProducts as $product)
    <div class="glass-tier-1 rounded-xl p-4 flex flex-col justify-between group hover:-translate-y-1 transition-all duration-300 relative">
    <a href="{{ route('product.index', $product->id) }}" class="block">
        <div class="w-full h-56 rounded-lg bg-surface-container-lowest flex items-center justify-center overflow-hidden mb-4 relative">
        <img class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="{{ $product->display_image }}" alt="{{ $product->name }}"/>
        </div>
        <div>
        <div class="flex items-center justify-between mb-1.5">
        <span class="text-label-sm font-label-sm text-outline flex items-center gap-1">
            {{ $product->category->name ?? 'Category' }}
        </span>
        <span class="flex items-center text-label-sm font-label-sm text-primary">
        <span class="material-symbols-outlined text-amber-400 text-xs mr-0.5" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span> {{ $product->average_rating }}
        </span>
        </div>
        <h3 class="text-title-md font-title-md font-semibold text-primary truncate" title="{{ $product->name }}">{{ $product->name }}</h3>
        </div>
    </a>
    <div class="flex items-center justify-between mt-3">
    <div class="flex items-center gap-2">
    <span class="text-title-md font-title-md font-bold text-primary">₹{{ number_format($product->price, 2) }}</span>
    @if($product->old_price)
    <span class="text-label-sm font-label-sm text-outline line-through">₹{{ number_format($product->old_price, 2) }}</span>
    @endif
    </div>
    <a href="{{ route('product.index', $product->id) }}" class="px-3.5 py-1.5 rounded-lg bg-primary text-on-primary hover:opacity-90 text-label-md font-label-md font-semibold transition-all">
    View
    </a>
    </div>
    </div>
    @endforeach
@endif
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
<a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Become a Seller →</a>
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
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">All Objects</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Limited Drops</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Studio Audio</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Gift Collections</a></li>
</ul>
</div>
<!-- Links Column 2: Customer Care -->
<div>
<h4 class="text-title-md font-title-md font-semibold text-primary dark:text-primary mb-4">Customer Care</h4>
<ul class="space-y-2.5">
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Order Concierge</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Authenticity Guarantee</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Worldwide Shipping</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Returns &amp; Exchanges</a></li>
</ul>
</div>
<!-- Links Column 3: Seller Hub -->
<div>
<h4 class="text-title-md font-title-md font-semibold text-primary dark:text-primary mb-4">Seller Hub</h4>
<ul class="space-y-2.5">
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Atelier Onboarding</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Vendor Guidelines</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Commission Rates</a></li>
<li><a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Merchant API</a></li>
</ul>
</div>
</div>
<!-- Legal & Copyright Bar -->
<div class="pt-8 border-t border-outline-variant/10 flex flex-col sm:flex-row items-center justify-between gap-4">
<p class="text-body-sm font-body-sm text-on-surface-variant dark:text-on-surface-variant">
          © 2024 UNCART Inc. All rights reserved.
        </p>
<div class="flex items-center gap-6">
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Terms of Service</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">System Status</a>
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
<h3 class="text-title-lg font-title-lg font-semibold text-primary">Your Shopping Bag (<span id="cart-count">0</span>)</h3>
</div>
<button class="p-1 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-all" onclick="toggleDrawer('cart-drawer')">
<span class="material-symbols-outlined text-xl" data-icon="close">close</span>
</button>
</div>
<!-- Cart Items List -->
<div class="p-6 flex-1 overflow-y-auto space-y-4 custom-scroll" id="cart-items-container">
<!-- Cart items loaded dynamically from DB -->
</div>
<!-- Drawer Footer with Subtotal & Checkout Trigger -->
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
<a href="{{ route('checkout.index') }}" class="w-full py-3.5 rounded-lg bg-primary text-on-primary font-title-md text-title-md font-semibold hover:opacity-95 transition-all glow-indigo flex items-center justify-center gap-2 text-center">
<span>Proceed to Checkout</span>
<span class="material-symbols-outlined text-lg" data-icon="arrow_forward">arrow_forward</span>
</a>
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
</body></html>