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
<a class="flex items-center space-x-3 transition-all duration-200 ease-out active:scale-95 group" href="#">
<img alt="UNCART Brand Logo" class="w-8 h-8 rounded-md object-contain border border-outline-variant/30" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="text-title-lg font-title-lg font-bold tracking-tight text-primary dark:text-primary">UNCART</span>
</a>
<!-- Desktop Navigation Links (Intent: 'Shop' is active) -->
<nav class="hidden md:flex items-center space-x-6">
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Home</a>
<a class="text-primary dark:text-primary font-title-md text-title-md relative py-1 after:absolute after:bottom-0 after:left-0 after:right-0 after:h-[2px] after:bg-primary after:rounded-full" href="#">Shop</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Categories</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Deals</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">New Arrivals</a>
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
<button aria-label="Shopping Cart" class="relative p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-xl">shopping_bag</span>
<span class="absolute top-1 right-1 px-1.5 py-0.2 bg-primary text-on-primary font-label-sm text-[10px] rounded-full font-bold">3</span>
</button>
<button aria-label="User Account" class="p-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-xl">account_circle</span>
</button>
</div>
</div>
</div>
</header>
<!-- ================= MAIN CANVAS ================= -->
<main class="max-w-7xl mx-auto px-4 md:px-8 py-8 md:py-12">
<!-- Top Headline & Editorial Subtitle Section -->
<div class="mb-8 md:mb-10 space-y-2">
<div class="flex items-center space-x-2 text-label-sm font-label-sm text-outline uppercase tracking-wider">
<a class="hover:text-primary transition-colors" href="#">Catalog</a>
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
<!-- Interactive Search Bar & Active Filter Tokens Bar -->
<div class="glass-tier-1 rounded-xl p-4 md:p-5 mb-8 space-y-4">
<div class="flex flex-col md:flex-row gap-3 items-center">
<!-- Big Glass Search Input -->
<div class="relative flex-1 w-full">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-xl">search</span>
<input class="w-full bg-surface-container-lowest/80 border border-outline-variant/30 rounded-lg pl-11 pr-10 py-2.5 text-body-md font-body-md text-primary placeholder:text-outline focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary/40 transition-all" placeholder="Search products, brands and categories..." type="text" value="Studio"/>
<button aria-label="Clear Search" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg">close</span>
</button>
</div>
<!-- View Controls & Sorting -->
<div class="flex items-center justify-between w-full md:w-auto gap-3">
<!-- Sort Dropdown -->
<div class="relative flex-1 md:w-52">
<select class="w-full appearance-none bg-surface-container-lowest/80 border border-outline-variant/30 rounded-lg px-3.5 py-2.5 text-body-sm font-body-sm text-on-surface focus:outline-none focus:border-outline cursor-pointer pr-9">
<option selected="" value="rec">Recommended</option>
<option value="new">Newest Releases</option>
<option value="asc">Price: Low to High</option>
<option value="desc">Price: High to Low</option>
<option value="rating">Highest Rated</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-lg">unfold_more</span>
</div>
<!-- Grid / List Switcher -->
<div class="flex items-center bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-1">
<button aria-label="Grid View" class="p-1.5 rounded bg-surface-container-high text-primary">
<span class="material-symbols-outlined text-lg leading-none">grid_view</span>
</button>
<button aria-label="List View" class="p-1.5 rounded text-outline hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg leading-none">view_list</span>
</button>
</div>
</div>
</div>
<!-- Active Pills Horizon -->
<div class="flex items-center space-x-2 overflow-x-auto no-scrollbar pt-1">
<span class="text-label-sm font-label-sm text-outline flex-shrink-0">Active Filters:</span>
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Free Express Shipping</span>
<button aria-label="Remove filter" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></button>
</span>
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Under $500</span>
<button aria-label="Remove filter" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></button>
</span>
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Spatial Audio</span>
<button aria-label="Remove filter" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></button>
</span>
<span class="inline-flex items-center space-x-1.5 px-3 py-1 rounded-full bg-surface-variant/40 border border-outline-variant/40 text-label-md font-label-md text-on-surface flex-shrink-0">
<span>Nomad Tech</span>
<button aria-label="Remove filter" class="hover:text-primary"><span class="material-symbols-outlined text-sm">close</span></button>
</span>
<button class="text-label-sm font-label-sm text-secondary hover:underline pl-2 flex-shrink-0">Reset All</button>
</div>
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
<button class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg text-primary bg-surface-variant/30 font-medium">
<span class="flex items-center space-x-2">
<span class="material-symbols-outlined text-base text-secondary">memory</span>
<span>Electronics &amp; Tech</span>
</span>
<span class="text-label-sm text-on-surface-variant">842</span>
</button>
<button class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-variant/20 transition-colors">
<span class="flex items-center space-x-2">
<span class="material-symbols-outlined text-base">chair</span>
<span>Living &amp; Decor</span>
</span>
<span class="text-label-sm text-outline">514</span>
</button>
<button class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-variant/20 transition-colors">
<span class="flex items-center space-x-2">
<span class="material-symbols-outlined text-base">headphones</span>
<span>Spatial Audio</span>
</span>
<span class="text-label-sm text-outline">320</span>
</button>
<button class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-variant/20 transition-colors">
<span class="flex items-center space-x-2">
<span class="material-symbols-outlined text-base">apparel</span>
<span>Minimal Fashion</span>
</span>
<span class="text-label-sm text-outline">410</span>
</button>
<button class="w-full flex items-center justify-between text-body-sm font-body-sm py-1.5 px-2 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-variant/20 transition-colors">
<span class="flex items-center space-x-2">
<span class="material-symbols-outlined text-base">draw</span>
<span>Studio Tools</span>
</span>
<span class="text-label-sm text-outline">324</span>
</button>
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
<!-- Product Card 1: Studio Mechanical Keyboard -->
<article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
<div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
<img class="w-full h-full object-cover rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="A minimalist low-profile mechanical keyboard crafted from dark bead-blasted anodized aluminum and matte smoke keycaps. The object rests centered against an obsidian dark stage with precise rim lighting along its chamfered edges. Premium soft shadows diffuse subtly underneath, embodying an ultra-clean high-end tech aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEYaXluGI6So5-vp3pGEkG8vnCzypUjD7toi3XgiH99q1hnydCzugCo-qBR-OTOZP6x6dccCrXZmkUCOjKR7zbbikWLhtQAIwxaK06NaX5hlxUfngeBakUx-HXGIZyB1JOKgg4trVfw94HHtPjp2AJfU6jeXWenBd56Dri3Lw6lZU2k9LuFbmOSsUtF8V_ds6RpMqnuqo35kKMcBNWmsnGIBe8TCKkcMBEyshukqx_mKDiNK1gh-lP"/>
<span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/80 backdrop-blur-md border border-outline-variant/30 text-[10px] font-label-sm text-secondary uppercase tracking-wider font-semibold">
                Guild Exclusive
              </span>
<button aria-label="Add to wishlist" class="absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg leading-none">favorite</span>
</button>
</div>
<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
<span>Teenage Eng.</span>
<div class="flex items-center text-amber-400 space-x-1">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-on-surface-variant font-medium">4.9</span>
</div>
</div>
<h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors">
                  Studio Mechanical Keyboard MK-1
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-1">
                  Hot-swappable tactile switches, brass plate dampener.
                </p>
</div>
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
<div>
<div class="text-title-lg font-title-lg font-bold text-primary">$340</div>
<div class="text-label-sm font-label-sm text-outline line-through">$380</div>
</div>
<button class="px-3.5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all duration-200 shadow-sm flex items-center space-x-1.5 active:scale-95">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>Add to Bag</span>
</button>
</div>
</div>
</article>
<!-- Product Card 2: MagSafe Pure Glass Charging Dock -->
<article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
<div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
<img class="w-full h-full object-cover rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="A sculptural wireless MagSafe charging pedestal forged from optical-grade solid frosted glass and aerospace aluminum. It stands on a seamless matte charcoal desk surface, softly illuminated by high-contrast directional studio lighting that accentuates transparent refractive internal prisms. A pure futuristic gallery product aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAu5XfW4lKSN_0huDsGrSPxTuMLJLoYEd35lprkXZY3FyaGLxzLUGOTS9wyTk2eiOf0KcUShYOIveeb-1PwGGYbCcKEsHziQA4ntvxNKKfbjXFmUuGyPbRKB1aYWW8ByivfquxRNVUnZbZvIKrpNLkNhvghN_u6hmE-LHfmpTY5dxsTW-LAQ__qMmBER42IJV0ps1P1JS2oLQGUvxZ0sLvd--XEupmNlzEwllyzmSjUke0-W_GV8Is7"/>
<span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/80 backdrop-blur-md border border-outline-variant/30 text-[10px] font-label-sm text-primary uppercase tracking-wider font-semibold">
                Archival Drop
              </span>
<button aria-label="Add to wishlist" class="absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg leading-none">favorite</span>
</button>
</div>
<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
<span>Nomad Tech</span>
<div class="flex items-center text-amber-400 space-x-1">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-on-surface-variant font-medium">4.8</span>
</div>
</div>
<h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors">
                  Pure Optical Glass 3-in-1 Dock
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-1">
                  Precision weighted prism base with Qi2 fast charging.
                </p>
</div>
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
<div>
<div class="text-title-lg font-title-lg font-bold text-primary">$195</div>
</div>
<button class="px-3.5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all duration-200 shadow-sm flex items-center space-x-1.5 active:scale-95">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>Add to Bag</span>
</button>
</div>
</div>
</article>
<!-- Product Card 3: Modular Carry Pod -->
<article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
<div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
<img class="w-full h-full object-cover rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="A compact waterproof EDC modular tech sling bag made with ballistic nylon and magnetic Fidlock buckles in deep stealth graphite black. The carry pod is displayed floating slightly at an angle, bathed in subtle side rim highlights that capture dense weave textures and laser-cut attachment points in an editorial luxury studio setup." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7YQN954RUtEfu89pWOTTTCfvhgOSmg3_0VsRoqTdOht3kOLrVVto366PsvfMVcCnUUHXAZgJ5KeEkmUS0eXPiyUVCNu-lPnD6x21TaesbFqfqRfmZ1YyVliD6foRk7Jy8jEyPU0ivnDx6vs06T7zkpf_wsYvTcsgZSjb1EPH4wl8N8SpD5uw_r_u6dL3p50hYcY8SF8NvXZjBwUZWog5hZu9kSltYNIT3_VYPWzwZLPKR1qO51_NX"/>
<button aria-label="Add to wishlist" class="absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg leading-none">favorite</span>
</button>
</div>
<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
<span>Aura Design Labs</span>
<div class="flex items-center text-amber-400 space-x-1">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-on-surface-variant font-medium">5.0</span>
</div>
</div>
<h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors">
                  Modular Crossbody Atelier Pod
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-1">
                  Waterproof Dyneema weave, YKK Aquaguard closures.
                </p>
</div>
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
<div>
<div class="text-title-lg font-title-lg font-bold text-primary">$210</div>
</div>
<button class="px-3.5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all duration-200 shadow-sm flex items-center space-x-1.5 active:scale-95">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>Add to Bag</span>
</button>
</div>
</div>
</article>
<!-- Product Card 4: Brutalist Ceramic Lamp -->
<article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
<div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
<img class="w-full h-full object-cover rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="An architectural table lamp featuring a rough textured unglazed charcoal ceramic brutalist cylinder base paired with an incandescent frosted disc reflector. The lighting creates a warm ambient gradient contrasting against the deep darkroom backdrop, highlighting natural tactile clay imperfections with museum-quality precision." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1bICe7A5nAbtXz-kbBVDhIeAYT32mGR8I2ZcvEInDgQnL9R90fwwc8QMGOCSjtaY7cfRy9SI1VhfKo4EE8CjCcL5blFh6EnlyYhGraHsleS-qHqPCYcC8dPeSY6VFROX45QEC-o0s3w6708bJ18iGvT0D7Izrg6ZU8TZmV64F9nJkZjMKdRfJX3Oj3nH5ZK1h7_3etY8VzWUXUCA1AOpIzY6_e56-r7ijfrIGu8CYCVRWDb09eMfc"/>
<span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/80 backdrop-blur-md border border-outline-variant/30 text-[10px] font-label-sm text-secondary uppercase tracking-wider font-semibold">
                Limited Edition
              </span>
<button aria-label="Add to wishlist" class="absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg leading-none">favorite</span>
</button>
</div>
<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
<span>Kvadrat Studio</span>
<div class="flex items-center text-amber-400 space-x-1">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-on-surface-variant font-medium">4.7</span>
</div>
</div>
<h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors">
                  Cast Monolith Table Beacon
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-1">
                  Hand-thrown volcanic stoneware with brass touch dimmer.
                </p>
</div>
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
<div>
<div class="text-title-lg font-title-lg font-bold text-primary">$490</div>
</div>
<button class="px-3.5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all duration-200 shadow-sm flex items-center space-x-1.5 active:scale-95">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>Add to Bag</span>
</button>
</div>
</div>
</article>
<!-- Product Card 5: Carbon Wireless Turntable -->
<article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
<div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
<img class="w-full h-full object-cover rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="An ultra-minimal audiophile turntable with a high-gloss exposed carbon fiber tonearm and clear acrylic heavy platter. The sleek audio machine rests horizontally on spiked vibration-dampening feet inside a shadowy gallery environment, accented by crisp white rim light tracing its geometric lines." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0IrnTF0qSMYhKHqYjZvq9R_3AJLVqCgdYCGEhy4qTSk1Xk0541WuqPEpDvFTXIC3ZtHQk7rbYv2PcqcZmnkNUbkc4-ZDTNNbL8ddZbm4y-nrmAVgIIPJmBR8VPz1PhxNu5aJrms_PEUSlUSL_RNUT5qrsfCrdTVLdf_3kVwlDH2YqLGz8VyIOHeazDERdbPadSpwJi292kMPlOsLSfSaok3jzVpElWTbEYK7TZJ0oQV13ecatM3gY"/>
<button aria-label="Add to wishlist" class="absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg leading-none">favorite</span>
</button>
</div>
<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
<span>Master &amp; Dynamic</span>
<div class="flex items-center text-amber-400 space-x-1">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-on-surface-variant font-medium">4.9</span>
</div>
</div>
<h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors">
                  Carbon Direct-Drive Turntable
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-1">
                  Lossless aptX HD Bluetooth transmitter, Ortofon 2M Blue.
                </p>
</div>
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
<div>
<div class="text-title-lg font-title-lg font-bold text-primary">$1,250</div>
<div class="text-label-sm font-label-sm text-outline line-through">$1,400</div>
</div>
<button class="px-3.5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all duration-200 shadow-sm flex items-center space-x-1.5 active:scale-95">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>Add to Bag</span>
</button>
</div>
</div>
</article>
<!-- Product Card 6: Beryllium In-Ear Monitors -->
<article class="glass-tier-1 product-card-hover rounded-xl overflow-hidden flex flex-col group relative">
<div class="relative bg-surface-container-lowest h-64 overflow-hidden flex items-center justify-center p-4">
<img class="w-full h-full object-cover rounded-lg group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="A pair of high-end in-ear monitors sculpted from solid machined titanium and smoke sapphire crystal. Braided silver cables snake naturally around the reflective shells, placed on a dark slate podium bathed in razor-thin blue and white studio spotlights, projecting luxury acoustic fidelity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMsSjoNZdrXZz9R6oPLnIIONVyJcUxA4tJ6N05EVUMIFID7s-Rk8qhUZNx_B55eepueYrVUagBs3JXAdSc7OiSe-GIXoWknDqRKi1tfJHrSkdc0lmv9OeChGKRmr0ZrGv8BxFRx2JAd43zrZkP05ROlKRSxmM7fsmtplkuAHIehkvdIpw08HYGga17X0VYxngwy7jx2zy-Y1RN-8cU9pWiJTltEBRXcyOdhYMNqOakya9icWeH0ev9"/>
<span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-surface-container-lowest/80 backdrop-blur-md border border-outline-variant/30 text-[10px] font-label-sm text-secondary uppercase tracking-wider font-semibold">
                New Arrival
              </span>
<button aria-label="Add to wishlist" class="absolute top-3 right-3 p-2 rounded-full bg-surface-container-lowest/70 backdrop-blur-md text-on-surface-variant hover:text-white transition-colors">
<span class="material-symbols-outlined text-lg leading-none">favorite</span>
</button>
</div>
<div class="p-5 flex-1 flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between text-label-sm font-label-sm text-outline mb-1">
<span>Nomad Tech</span>
<div class="flex items-center text-amber-400 space-x-1">
<span class="material-symbols-outlined text-xs" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-on-surface-variant font-medium">4.9</span>
</div>
</div>
<h3 class="text-title-md font-title-md text-primary font-semibold group-hover:text-secondary-fixed transition-colors">
                  Titanium Beryllium IEMs
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1 line-clamp-1">
                  Custom 10mm dynamic driver, pure OCC silver cable.
                </p>
</div>
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between">
<div>
<div class="text-title-lg font-title-lg font-bold text-primary">$680</div>
</div>
<button class="px-3.5 py-2 rounded-lg bg-primary text-on-primary font-title-md text-body-sm font-semibold hover:bg-primary-fixed transition-all duration-200 shadow-sm flex items-center space-x-1.5 active:scale-95">
<span class="material-symbols-outlined text-base">shopping_bag</span>
<span>Add to Bag</span>
</button>
</div>
</div>
</article>
</div>
<!-- ================= PAGINATION & RESULT STATUS ================= -->
<div class="mt-12 pt-6 border-t border-outline-variant/20 flex flex-col sm:flex-row items-center justify-between gap-4">
<span class="text-body-sm font-body-sm text-on-surface-variant">
            Showing <strong class="text-primary font-semibold">1 – 6</strong> of 48 items in this view
          </span>
<!-- Apple Minimalist Numeric Pagination -->
<div class="flex items-center space-x-2">
<button aria-label="Previous Page" class="w-9 h-9 rounded-lg glass-tier-1 flex items-center justify-center text-outline hover:text-primary transition-colors disabled:opacity-30" disabled="">
<span class="material-symbols-outlined text-lg leading-none">chevron_left</span>
</button>
<button class="w-9 h-9 rounded-lg bg-primary text-on-primary font-label-md font-bold flex items-center justify-center shadow-sm">
              1
            </button>
<button class="w-9 h-9 rounded-lg glass-tier-1 text-on-surface-variant hover:text-primary font-label-md transition-colors flex items-center justify-center">
              2
            </button>
<button class="w-9 h-9 rounded-lg glass-tier-1 text-on-surface-variant hover:text-primary font-label-md transition-colors flex items-center justify-center">
              3
            </button>
<span class="text-outline px-1">...</span>
<button class="w-9 h-9 rounded-lg glass-tier-1 text-on-surface-variant hover:text-primary font-label-md transition-colors flex items-center justify-center">
              8
            </button>
<button aria-label="Next Page" class="w-9 h-9 rounded-lg glass-tier-1 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg leading-none">chevron_right</span>
</button>
</div>
</div>
</section>
</div>
</main>
<!-- ================= STICKY FLOATING GLASS CHECKOUT DOCK ================= -->
<aside class="fixed bottom-6 right-6 z-40">
<div class="glass-tier-2 rounded-full p-2 pl-4 pr-3 flex items-center space-x-4 shadow-2xl border border-white/20">
<div class="flex items-center space-x-2">
<span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
<span class="text-body-sm font-body-sm text-primary font-medium">3 Objects in Cart</span>
<span class="text-on-surface-variant text-label-sm font-label-sm">· $745.00</span>
</div>
<button class="px-4 py-2 rounded-full bg-primary text-on-primary font-title-md text-label-md font-semibold hover:bg-primary-fixed transition-all active:scale-95 shadow-lg flex items-center space-x-1.5">
<span class="material-symbols-outlined text-base">bolt</span>
<span>Express Dock</span>
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
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Shop</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">New Arrivals</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Curators' Guild</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Atelier Archive</a></li>
</ul>
</div>
<!-- Links Col 2 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Support</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Customer Care</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Shipping &amp; Delivery</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Warranty Protocol</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Contact Atelier</a></li>
</ul>
</div>
<!-- Links Col 3 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Ecosystem</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Company</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Seller Hub</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Studio Press</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">API Documentation</a></li>
</ul>
</div>
<!-- Links Col 4 -->
<div class="space-y-3">
<h4 class="text-title-md font-title-md text-primary">Governance</h4>
<ul class="space-y-2 text-body-sm font-body-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Privacy Policy</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Terms of Service</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Cookie Standards</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Guild Charter</a></li>
</ul>
</div>
</div>
<!-- Bottom Bar -->
<div class="pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row items-center justify-between gap-4">
<span class="text-label-sm font-label-sm text-outline">
          © 2024 UNCART Inc. All rights reserved.
        </span>
<div class="flex items-center space-x-6 text-body-sm font-body-sm text-on-surface-variant">
<a class="hover:text-primary transition-colors duration-200" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors duration-200" href="#">Terms of Service</a>
<a class="hover:text-primary transition-colors duration-200" href="#">Seller Hub</a>
</div>
</div>
</div>
</footer>
</body></html>