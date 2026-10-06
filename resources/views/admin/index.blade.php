<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART Administrator Command Center &amp; Marketplace Governance</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Inter & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS with Forms and Container Queries -->
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
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(36px) saturate(200%);
      -webkit-backdrop-filter: blur(36px) saturate(200%);
      border: 1px solid rgba(255, 255, 255, 0.12);
      box-shadow: 0 12px 32px -4px rgba(0, 0, 0, 0.5), inset 0 1px 0 0 rgba(255, 255, 255, 0.18);
    }

    .interactive-card {
      transition: transform 300ms cubic-bezier(0.16, 1, 0.3, 1), border-color 300ms ease, box-shadow 300ms ease;
    }
    .interactive-card:hover {
      transform: translateY(-2px);
      border-color: rgba(255, 255, 255, 0.18);
      box-shadow: 0 0 28px -4px rgba(99, 102, 241, 0.18), inset 0 1px 0 0 rgba(255, 255, 255, 0.2);
    }
    
    .custom-scrollbar::-webkit-scrollbar {
      width: 4px;
      height: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
      background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, 0.12);
      border-radius: 9999px;
    }
  </style>
</head>
<body class="bg-background text-on-surface antialiased min-h-screen flex flex-col selection:bg-secondary-container selection:text-white overflow-x-hidden font-body-md text-body-md">
<!-- ================= TOP APP BAR (Shared Components JSON Anchor) ================= -->
<header class="sticky top-0 z-50 w-full bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 dark:border-outline-variant/20 shadow-sm dark:shadow-none transition-all duration-200">
<div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between gap-4">
<!-- Brand & Governance Title -->
<div class="flex items-center gap-3">
<a class="flex items-center gap-2.5 transition-all duration-200 ease-out active:scale-95 group" href="{{ route('marketplace.index') }}">
<img alt="UNCART Brand Logo" class="w-8 h-8 rounded-md object-contain p-0.5 bg-surface-container-highest/40 border border-white/10 group-hover:border-white/30 transition-colors" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold tracking-tight text-primary dark:text-primary">UNCART</span>
</a>
<div class="h-4 w-[1px] bg-outline-variant/30 hidden sm:block"></div>
<div class="hidden sm:flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 border border-secondary/30">
<span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
<span class="text-label-sm font-label-sm text-secondary tracking-wider font-semibold">GOVERNANCE OS</span>
</div>
</div>
<!-- Navigation Links from Shared Component JSON (Web View) -->
<nav class="hidden lg:flex items-center gap-6">
<a class="text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Home</a>
<a class="text-on-surface-variant font-title-md text-title-md hover:text-primary transition-colors duration-200" href="{{ route('shop.index') }}">Shop</a>
</nav>
<!-- Right Command Actions & Status -->
<div class="flex items-center gap-3">
<!-- Live System Metric Pill -->
<div class="hidden md:flex items-center gap-2 px-3 py-1 rounded-full glass-tier-1 text-on-surface-variant">
<span class="w-2 h-2 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(52,211,153,0.6)]"></span>
<span class="text-label-sm font-label-sm">Operational 99.99%</span>
</div>
<!-- Global Search Trigger (on_right) -->
<div class="relative hidden sm:block">
<button class="flex items-center gap-3 px-3 py-1.5 rounded-lg bg-surface-container-high/60 border border-white/10 hover:border-white/20 text-on-surface-variant text-label-md font-label-md transition-colors">
<span class="material-symbols-outlined text-[18px]">search</span>
<span>Search Command...</span>
<kbd class="px-1.5 py-0.5 rounded bg-surface-container-lowest text-[10px] border border-white/10 font-mono">⌘K</kbd>
</button>
</div>
<!-- Action Icons (JSON defined: favorite, shopping_bag, account_circle) -->
<div class="flex items-center gap-1">
<button class="p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/50 transition-all duration-200 active:scale-95" title="Saved Telemetry">
<span class="material-symbols-outlined text-[20px]">favorite</span>
</button>
<button class="p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/50 transition-all duration-200 active:scale-95 relative" title="Escrow Vault">
<span class="material-symbols-outlined text-[20px]">shopping_bag</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 bg-secondary rounded-full"></span>
</button>
<div class="h-5 w-[1px] bg-outline-variant/30 mx-1"></div>
<!-- Master Controller Avatar Profile -->
<button class="flex items-center gap-2 pl-1 pr-2 py-1 rounded-lg hover:bg-surface-container-high/50 transition-all duration-200 active:scale-95">
<span class="material-symbols-outlined text-[26px] text-primary">account_circle</span>
<div class="hidden xl:flex flex-col text-left">
<span class="text-label-sm font-label-sm text-primary font-semibold leading-tight">M. Controller</span>
<span class="text-[10px] text-on-surface-variant leading-none">Superadmin</span>
</div>
</button>
</div>
</div>
</div>
</header>
<!-- ================= SUB-HEADER BREADCRUMB ================= -->
<div class="border-b border-white/5 bg-surface-container-lowest/60 backdrop-blur-md">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-2.5 flex flex-wrap items-center justify-between gap-3 text-label-sm font-label-sm text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="text-primary font-medium">Admin Dashboard</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-secondary font-medium">Database Management</span>
</div>
</div>
</div>
<!-- ================= CORE WORKSPACE (Sidebar + Bento Grid Engine) ================= -->
<div class="max-w-7xl mx-auto w-full px-4 md:px-8 py-6 flex-1 flex flex-col lg:flex-row gap-6">
<!-- SIDEBAR NAVIGATION -->
<aside class="w-full lg:w-64 shrink-0 space-y-6">
<!-- Nav Stack -->
<div class="glass-tier-1 p-3 rounded-xl space-y-1">
<div class="px-3 py-2 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">Marketplace Modules</div>
<a href="{{ route('admin.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.index') ? 'bg-surface-container-high text-primary border border-white/10 shadow-sm' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40' }} font-title-md text-title-md transition-all duration-200">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-secondary">dashboard</span>
<span>Overview</span>
</div>
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
</a>
<a href="{{ route('admin.users') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.users') ? 'bg-surface-container-high text-primary border border-white/10 shadow-sm' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40' }} transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">group</span>
<span>User Registry</span>
</div>
<span class="text-label-sm font-mono text-outline">{{ number_format($totalUserCount) }}</span>
</a>
<a href="{{ route('admin.categories') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.categories') ? 'bg-surface-container-high text-primary border border-white/10 shadow-sm' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40' }} transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">storefront</span>
<span>Categories & Verticals</span>
</div>
<span class="px-1.5 py-0.5 rounded text-[10px] bg-secondary-container/40 text-secondary-fixed border border-secondary/40 font-mono font-bold">{{ $totalCategoryCount }}</span>
</a>
<a href="{{ route('admin.products') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.products') ? 'bg-surface-container-high text-primary border border-white/10 shadow-sm' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40' }} transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">verified</span>
<span>Product Catalog</span>
</div>
<span class="text-label-sm font-mono text-outline">{{ number_format($totalProductCount) }}</span>
</a>
<a href="{{ route('admin.carts') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg {{ request()->routeIs('admin.carts') ? 'bg-surface-container-high text-primary border border-white/10 shadow-sm' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40' }} transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">shopping_cart</span>
<span>Active Carts</span>
</div>
<span class="text-label-sm font-mono text-emerald-400 font-bold">{{ $totalCartCount }}</span>
</a>
</div>
</aside>
<!-- MAIN DASHBOARD CONTENT AREA -->
<main class="flex-1 space-y-6 min-w-0">
<!-- SECTION 1: EXECUTIVE METRIC TILES -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
<!-- Card 1: Global GMV -->
<div class="glass-tier-1 interactive-card p-5 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Global Cart Value</span>
<span class="material-symbols-outlined text-[20px] text-secondary">payments</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">₹{{ number_format($cartGmv, 2) }}</div>
<div class="text-[11px] text-emerald-400 flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">trending_up</span>
<span>+{{ $totalCartCount }} Active Carts</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
  Catalog Inventory Val: ₹{{ number_format($totalCatalogValue, 0) }}
</div>
</div>
<!-- Card 2: Total Products -->
<div class="glass-tier-1 interactive-card p-5 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Total Products</span>
<span class="material-symbols-outlined text-[20px] text-secondary">inventory_2</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">{{ number_format($totalProductCount) }}</div>
<div class="text-[11px] text-secondary flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">category</span>
<span>{{ $totalCategoryCount }} Categories</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
  Active Catalog Items
</div>
</div>
<!-- Card 3: Registered Users -->
<div class="glass-tier-1 interactive-card p-5 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Registered Users</span>
<span class="material-symbols-outlined text-[20px] text-secondary">person</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">{{ number_format($totalUserCount) }}</div>
<div class="text-[11px] text-emerald-400 flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">arrow_upward</span>
<span>Database Accounts</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
  Registered Member Accounts
</div>
</div>
<!-- Card 4: Categories Count -->
<div class="glass-tier-1 interactive-card p-5 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Active Categories</span>
<span class="material-symbols-outlined text-[20px] text-secondary">grid_view</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">{{ $totalCategoryCount }}</div>
<div class="text-[11px] text-on-surface-variant flex items-center gap-1 mt-0.5">
<span class="px-1.5 py-0.2 rounded bg-white/10 font-mono text-[10px] text-primary">Live</span>
<span class="text-[10px]">Active Verticals</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
  Categories in Database
</div>
</div>
</div>
<!-- SECTION 2: CATEGORY DISTRIBUTION -->
<div class="grid grid-cols-1 gap-6">
<!-- Category Distribution Breakdown (1 Column) -->
<div class="glass-tier-1 p-6 rounded-xl flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between">
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Curated Verticals</h2>
<span class="text-label-sm font-label-sm text-secondary font-mono">{{ $categories->count() }} Verticals</span>
</div>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-0.5">Platform volume & catalog distribution.</p>
</div>
<!-- Stacked Bar Visualizer -->
<div class="space-y-4 py-2">
@foreach($categories as $index => $cat)
<div>
<div class="flex justify-between text-body-sm font-body-sm mb-1">
<span class="text-primary font-medium">{{ $cat->title ?? $cat->name }}</span>
<span class="font-mono text-primary">{{ $cat->products_count }} Products • ₹{{ number_format($cat->total_value, 0) }}</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full {{ $index == 0 ? 'bg-primary' : ($index == 1 ? 'bg-secondary' : ($index == 2 ? 'bg-primary-fixed-dim' : 'bg-outline')) }} rounded-full" style="width: {{ max($cat->percentage, 10) }}%;"></div>
</div>
</div>
@endforeach
</div>
<div class="pt-3 border-t border-white/5 flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Catalog Total Value:</span>
<span class="text-primary font-semibold font-mono">₹{{ number_format($totalCatalogValue, 2) }}</span>
</div>
</div>
</div>
<!-- SECTION 3: PRODUCT CATALOG MODERATION QUEUE -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="flex flex-wrap items-center justify-between gap-3">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-secondary-container/40 border border-secondary/40 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[20px]">badge</span>
</div>
<div>
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Recent Products Catalog</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">Active catalog items, inventory monitoring & product moderation.</p>
</div>
</div>
<span class="px-3 py-1 rounded-full text-label-sm font-label-sm bg-secondary/10 border border-secondary/30 text-secondary">
            {{ $recentProducts->count() }} Latest Products
          </span>
</div>
<!-- Modern Seller Onboarding Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-1">
@forelse($recentProducts as $prod)
<div class="p-4 rounded-xl bg-surface-container-high/40 border border-white/10 hover:border-white/20 transition-all space-y-3.5">
<div class="flex items-start justify-between">
<div>
<div class="text-title-md font-title-md text-primary font-semibold line-clamp-1">{{ $prod->name }}</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">{{ $prod->category->name ?? 'Uncategorized' }} • Stock: {{ $prod->stock }}</div>
</div>
<span class="material-symbols-outlined text-secondary text-[20px]">verified</span>
</div>
<!-- KYC / Compliance Chips -->
<div class="space-y-1.5 text-label-sm font-label-sm">
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">Price:</span>
<span class="text-emerald-400 font-mono flex items-center gap-1">
₹{{ number_format($prod->price, 2) }}
</span>
</div>
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">SKU Code:</span>
<span class="text-primary font-mono">{{ $prod->sku }}</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Status:</span>
<span class="text-secondary font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">check</span> {{ $prod->status ? 'Active' : 'Disabled' }}
</span>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-2 pt-2">
<a href="{{ route('product.index', $prod->id) }}" target="_blank" class="flex-1 text-center py-1.5 rounded-lg bg-primary text-background font-label-md font-label-md font-semibold hover:bg-primary-fixed transition-all">
  View Product
</a>
</div>
</div>
@empty
<div class="col-span-3 text-center py-6 text-on-surface-variant">No products found.</div>
@endforelse
</div>
</div>
<!-- SECTION 4: GLOBAL ESCROW & TRANSACTION STREAM -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="flex flex-wrap items-center justify-between gap-3">
<div>
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Global Cart Ledger &amp; Active Transactions</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">Real-time dynamic cart activity from database.</p>
</div>
<div class="flex items-center gap-2">
<span class="text-label-sm font-label-sm text-on-surface-variant">{{ $recentTransactions->count() }} Dynamic Records</span>
</div>
</div>
<!-- High-End Glass Ledger Table -->
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-white/10 text-label-sm font-label-sm text-on-surface-variant">
<th class="py-3 px-3 font-semibold">Cart ID</th>
<th class="py-3 px-3 font-semibold">User / Session</th>
<th class="py-3 px-3 font-semibold">Product Title</th>
<th class="py-3 px-3 font-semibold">Unit Price</th>
<th class="py-3 px-3 font-semibold">Qty</th>
<th class="py-3 px-3 font-semibold">Item Total</th>
<th class="py-3 px-3 font-semibold">Escrow State</th>
<th class="py-3 px-3 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5 text-body-sm font-body-sm">
@forelse($recentTransactions as $cart)
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="py-3.5 px-3 font-mono text-primary text-label-md">
  #CRT-{{ str_pad($cart->id, 6, '0', STR_PAD_LEFT) }}
</td>
<td class="py-3.5 px-3">
  <div class="font-medium text-primary">{{ $cart->user->name ?? 'Guest User' }}</div>
  <div class="text-[11px] text-on-surface-variant font-mono">{{ $cart->user->email ?? substr($cart->session_id, 0, 16).'...' }}</div>
</td>
<td class="py-3.5 px-3">
  <div class="text-primary font-medium line-clamp-1">{{ $cart->product->name ?? $cart->title }}</div>
  <div class="text-[11px] text-on-surface-variant">{{ $cart->product->category->name ?? 'Marketplace' }}</div>
</td>
<td class="py-3.5 px-3 font-mono font-medium text-primary">
  ₹{{ number_format($cart->price, 2) }}
</td>
<td class="py-3.5 px-3 font-mono text-secondary">
  {{ $cart->quantity }}
</td>
<td class="py-3.5 px-3 font-mono font-bold text-emerald-400">
  ₹{{ number_format($cart->price * $cart->quantity, 2) }}
</td>
<td class="py-3.5 px-3">
  <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-label-sm font-label-sm">
    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
    Active Cart
  </span>
</td>
<td class="py-3.5 px-3 text-right">
  <a href="{{ route('product.index', $cart->product_id) }}" target="_blank" class="p-1 rounded text-on-surface-variant hover:text-primary transition-colors">
    <span class="material-symbols-outlined text-[18px]">visibility</span>
  </a>
</td>
</tr>
@empty
<tr>
  <td colspan="8" class="text-center py-6 text-on-surface-variant">No cart transactions recorded in database.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
<!-- ================= FOOTER (Shared Components JSON Anchor) ================= -->
<footer class="w-full bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/20 dark:border-outline-variant/20 mt-12 transition-colors">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16">
<div class="flex flex-col md:flex-row items-center justify-between gap-6">
<!-- Brand & Copyright -->
<div class="flex flex-col md:flex-row items-center gap-4 text-center md:text-left">
<div class="text-title-lg font-title-lg font-bold text-primary dark:text-primary">UNCART</div>
<div class="h-4 w-[1px] bg-outline-variant/30 hidden md:block"></div>
<div class="text-body-sm font-body-sm text-on-surface-variant dark:text-on-surface-variant">
            © 2024 UNCART Inc. All rights reserved.
          </div>
</div>
<!-- Links from Shared Components JSON -->
<nav class="flex flex-wrap justify-center items-center gap-6">
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Shop</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Customer Care</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Company</a>
<a class="text-primary dark:text-primary font-body-sm text-body-sm transition-colors duration-200 font-semibold" href="{{ route('marketplace.index') }}">Seller Hub</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="{{ route('marketplace.index') }}">Terms of Service</a>
</nav>
</div>
</div>
</footer>

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