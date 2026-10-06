<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART Studio Atelier Hub | Vendor Workspace</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Inter & Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration verbatim -->
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
            "title-lg": ["18px", {"lineHeight": "26px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "title-md": ["16px", {"lineHeight": "24px", "letterSpacing": "-0.005em", "fontWeight": "500"}],
            "headline-sm": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
            "body-sm": ["13px", {"lineHeight": "18px", "letterSpacing": "0.005em", "fontWeight": "400"}],
            "body-lg": ["17px", {"lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "400"}],
            "body-md": ["15px", {"lineHeight": "22px", "letterSpacing": "0em", "fontWeight": "400"}],
            "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600"}],
            "display": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.03em", "fontWeight": "700"}],
            "display-mobile": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.025em", "fontWeight": "700"}],
            "headline-lg-mobile": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
            "headline-md": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "600"}],
            "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500"}],
            "headline-lg": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.025em", "fontWeight": "600"}]
          }
        },
      },
    }
  </script>
<style>
    /* Custom Apple-grade glassmorphism tokens */
    .glass-tier-1 {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(24px) saturate(180%);
      -webkit-backdrop-filter: blur(24px) saturate(180%);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.4), inset 0 1px 0 0 rgba(255, 255, 255, 0.12);
    }
    .glass-tier-2 {
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(40px) saturate(200%);
      -webkit-backdrop-filter: blur(40px) saturate(200%);
      border: 1px solid rgba(255, 255, 255, 0.14);
      box-shadow: 0 12px 32px -4px rgba(0, 0, 0, 0.5), inset 0 1px 0 0 rgba(255, 255, 255, 0.18);
    }
    .glass-tier-subtle {
      background: rgba(255, 255, 255, 0.02);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.06);
    }
    .ambient-glow-indigo {
      box-shadow: 0 0 28px -4px rgba(99, 102, 241, 0.22), inset 0 1px 0 0 rgba(255, 255, 255, 0.2);
    }
    .tab-active {
      background: rgba(255, 255, 255, 0.1);
      box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.2), 0 2px 8px rgba(0, 0, 0, 0.25);
    }
    /* Hide scrollbars for ultra-clean tables while maintaining interaction */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
</head>
<body class="bg-background text-on-surface antialiased min-h-screen selection:bg-secondary-container selection:text-primary overflow-x-hidden">
<!-- Top Global Bar (Apple Workstation Header) -->
<header class="sticky top-0 z-50 w-full bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm">
<div class="max-w-[1440px] mx-auto px-4 md:px-8 h-16 flex items-center justify-between gap-4">
<!-- Brand & Atelier Badge -->
<div class="flex items-center gap-4">
<div class="flex items-center gap-2.5">
<img alt="UNCART Brand Logo" class="w-8 h-8 rounded-md object-contain bg-surface-container-highest p-1 border border-outline-variant/30" src="https://lh3.googleusercontent.com/aida/AEtjO1VTjv2BBLoJPpQokvh5C_7jBUOhwja3SXpXIz-g-cRD4ywQJKpffdS5sEmXwP8iLyr1lHr_RnmiaiXqToXoRelj6LHoDpuDEcz4uae5ONdOofwNXjDmHJyh0ItHrxOAZXO7sHFeTmLo06Wis7l6xgKThAJ56FIuWByzpnYB8xyrhlh_liAmyu6CkFS3bbR1yUUkMFSe0nG-VPiZNc1Te5sLqY_jbZT8gcgV2jtoL03s90ivojaghDkxFLM"/>
<span class="font-title-lg text-title-lg font-bold tracking-tight text-primary">UNCART</span>
</div>
<div class="hidden sm:flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-secondary-container/40 border border-secondary/30 text-secondary text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
<span>Studio Atelier Hub</span>
</div>
<div class="hidden lg:flex items-center gap-2 pl-3 border-l border-outline-variant/30 text-on-surface-variant font-body-sm text-body-sm">
<span class="text-primary font-title-md text-title-md">Aura Design Labs</span>
<span class="text-outline">•</span>
<span>Copenhagen, DK</span>
</div>
</div>
<!-- Center Status: Health Indicator -->
<div class="hidden xl:flex items-center gap-2.5 px-3 py-1 rounded-full glass-tier-subtle">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tertiary-fixed-dim opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-tertiary-fixed"></span>
</span>
<span class="text-label-sm font-label-sm text-on-surface">Store Health</span>
<span class="text-label-sm font-label-sm text-primary font-bold">99.8% Active</span>
</div>
<!-- Trailing Quick Actions & Meta controls -->
<div class="flex items-center gap-3">
<!-- Currency Switcher Pill -->
<button class="hidden md:flex items-center gap-1 px-2.5 py-1 rounded-lg glass-tier-subtle hover:bg-surface-container-high transition-colors font-label-md text-label-md text-on-surface" title="Currency selector">
<span>USD ($)</span>
<span class="material-symbols-outlined text-outline" style="font-size: 16px;">keyboard_arrow_down</span>
</button>
<!-- Quick Action: Export Statement -->
<button class="hidden sm:flex items-center gap-1.5 px-3 py-1.5 rounded-lg glass-tier-subtle hover:bg-surface-container-high border border-outline-variant/30 text-on-surface transition-all font-label-md text-label-md">
<span class="material-symbols-outlined text-on-surface-variant" style="font-size: 18px;">receipt_long</span>
<span>Export Payouts</span>
</button>
<!-- Primary Action: + New Product Drop -->
<button class="flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-semibold hover:scale-[1.02] active:scale-95 transition-all shadow-sm">
<span class="material-symbols-outlined" style="font-size: 18px;">add</span>
<span>New Product Drop</span>
</button>
<!-- Notifications Bell -->
<div class="relative">
<button aria-label="Notifications" class="w-9 h-9 rounded-lg glass-tier-subtle flex items-center justify-center hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-on-surface" style="font-size: 20px;">notifications</span>
</button>
<span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error ring-2 ring-surface"></span>
</div>
<!-- Atelier Profile Avatar -->
<div class="flex items-center gap-2 pl-1">
<div class="w-8 h-8 rounded-full bg-gradient-to-tr from-secondary-container to-surface-variant p-[1px] ring-1 ring-outline-variant/30">
<div class="w-full h-full rounded-full bg-surface-container-highest flex items-center justify-center text-label-sm font-label-sm font-bold text-primary">
              AD
            </div>
</div>
</div>
</div>
</div>
</header>
<!-- Main Workstation Layout (Sidebar + Content Canvas) -->
<div class="max-w-[1440px] mx-auto px-4 md:px-8 py-6 md:py-8 flex flex-col md:flex-row gap-8">
<!-- Sidebar Navigation Shell -->
<aside class="w-full md:w-64 shrink-0 space-y-6">
<!-- Atelier Mini Card -->
<div class="glass-tier-1 p-4 rounded-xl relative overflow-hidden">
<div class="absolute -right-4 -top-4 w-20 h-20 bg-secondary/10 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface-container-high border border-outline-variant/40 flex items-center justify-center">
<span class="material-symbols-outlined text-secondary" style="font-size: 22px;">palette</span>
</div>
<div>
<h3 class="font-title-md text-title-md text-primary font-semibold">Aura Studio</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant">Nordic Industrial Arts</p>
</div>
</div>
<div class="mt-3.5 pt-3 border-t border-outline-variant/20 flex items-center justify-between text-label-sm font-label-sm">
<span class="text-on-surface-variant">Escrow Balance</span>
<span class="text-primary font-semibold font-title-sm">$32,840.50</span>
</div>
</div>
<!-- Navigation Links -->
<nav aria-label="Portal Navigation" class="space-y-1 font-title-md text-title-md">
<!-- Active Link: Dashboard -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg bg-surface-container-high/90 text-primary border border-outline-variant/30 font-semibold shadow-sm transition-all" href="#dashboard">
<span class="material-symbols-outlined text-secondary" style="font-size: 20px;">dashboard</span>
<span>Dashboard</span>
<span class="ml-auto w-1.5 h-1.5 rounded-full bg-secondary"></span>
</a>
<!-- Inactive Links -->
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#catalog">
<span class="material-symbols-outlined" style="font-size: 20px;">inventory_2</span>
<span>Catalog &amp; Inventory</span>
<span class="ml-auto text-label-sm font-label-sm px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface-variant">14</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#orders">
<span class="material-symbols-outlined" style="font-size: 20px;">local_shipping</span>
<span>Orders &amp; Fulfillment</span>
<span class="ml-auto text-label-sm font-label-sm px-1.5 py-0.5 rounded bg-error-container text-error font-bold">12</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#analytics">
<span class="material-symbols-outlined" style="font-size: 20px;">query_stats</span>
<span>Sales Analytics</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#reviews">
<span class="material-symbols-outlined" style="font-size: 20px;">grade</span>
<span>Atelier Reviews</span>
<span class="ml-auto text-label-sm font-label-sm text-secondary">4.96 ★</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#payouts">
<span class="material-symbols-outlined" style="font-size: 20px;">account_balance_wallet</span>
<span>Payouts &amp; Escrow</span>
</a>
<a class="flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#settings">
<span class="material-symbols-outlined" style="font-size: 20px;">settings</span>
<span>Store Settings</span>
</a>
</nav>
<!-- Editorial Spotlight Promo Pill -->
<div class="p-4 rounded-xl glass-tier-subtle border border-outline-variant/30 space-y-2">
<div class="flex items-center gap-2 text-secondary font-label-sm text-label-sm">
<span class="material-symbols-outlined" style="font-size: 16px;">auto_awesome</span>
<span class="font-bold">CURATOR'S CHOICE</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
          Your "Pure Optical Glass Dock" is scheduled for the UNCART Design Weekly Spotlight on Oct 24.
        </p>
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary hover:underline pt-1" href="#preview">
<span>View Editorial Proof</span>
<span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward</span>
</a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 min-w-0 space-y-8">
<!-- Welcome Headline & Mode Bar -->
<section class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-2 text-label-md font-label-md text-on-surface-variant">
<span>Atelier Operations Console</span>
<span>•</span>
<span class="text-secondary font-medium">Live Market Feed</span>
</div>
<h1 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight mt-1">
            Studio Atelier Hub
          </h1>
</div>
<div class="flex items-center gap-2 self-start sm:self-auto">
<!-- Live Status Indicator -->
<div class="flex items-center gap-2 px-3 py-1.5 rounded-lg glass-tier-subtle border border-outline-variant/30 text-label-md font-label-md text-on-surface">
<span class="w-2 h-2 rounded-full bg-secondary-fixed-dim animate-ping"></span>
<span>Real-Time Sync Active</span>
</div>
<!-- Quick Filter / Action -->
<button class="p-2 rounded-lg glass-tier-subtle hover:bg-surface-container-high text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined" style="font-size: 20px;">tune</span>
</button>
</div>
</section>
<!-- Section 3: Metric Overview KPIs (Top 4 Glass Cards) -->
<section aria-label="Key Performance Indicators" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">
<!-- KPI 1: Gross Revenue -->
<div class="glass-tier-1 p-5 rounded-xl space-y-3 relative overflow-hidden group hover:border-outline-variant/60 transition-all">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant font-medium">Gross Revenue</span>
<span class="material-symbols-outlined text-secondary" style="font-size: 20px;">payments</span>
</div>
<div class="space-y-1">
<div class="font-headline-md text-headline-md font-bold text-primary tracking-tight">
              $184,920.00
            </div>
<div class="flex items-center gap-1.5 text-label-sm font-label-sm">
<span class="inline-flex items-center text-primary bg-surface-container-high px-1.5 py-0.5 rounded text-secondary font-semibold">
                +18.4%
              </span>
<span class="text-on-surface-variant">vs last month</span>
</div>
</div>
<!-- Micro sparkline SVG -->
<div class="pt-2">
<svg class="w-full h-8 stroke-secondary fill-none" viewbox="0 0 100 24">
<path d="M0,20 Q15,18 30,12 T60,10 T85,4 L100,2" stroke-linecap="round" stroke-width="2"></path>
<lineargradient id="glow1" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#c0c1ff" stop-opacity="0.3"></stop>
<stop offset="100%" stop-color="#c0c1ff" stop-opacity="0"></stop>
</lineargradient>
<path d="M0,20 Q15,18 30,12 T60,10 T85,4 L100,2 L100,24 L0,24 Z" fill="url(#glow1)" stroke="none"></path>
</svg>
</div>
</div>
<!-- KPI 2: Active Orders -->
<div class="glass-tier-1 p-5 rounded-xl space-y-3 relative group hover:border-outline-variant/60 transition-all">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant font-medium">Active Orders</span>
<span class="material-symbols-outlined text-secondary" style="font-size: 20px;">package_2</span>
</div>
<div class="space-y-1">
<div class="font-headline-md text-headline-md font-bold text-primary tracking-tight">
              34 <span class="font-title-md text-title-md text-on-surface-variant font-normal">Pending</span>
</div>
<div class="flex items-center gap-1.5 text-label-sm font-label-sm">
<span class="inline-flex items-center text-error bg-error-container/40 px-1.5 py-0.5 rounded font-semibold">
                12 Urgent
              </span>
<span class="text-on-surface-variant">need fulfillment</span>
</div>
</div>
<div class="pt-2 flex items-center gap-1">
<div class="h-1.5 flex-1 bg-surface-container-highest rounded-full overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 65%;"></div>
</div>
<span class="text-label-sm font-label-sm text-on-surface-variant">22 in flight</span>
</div>
</div>
<!-- KPI 3: Atelier Rating -->
<div class="glass-tier-1 p-5 rounded-xl space-y-3 relative group hover:border-outline-variant/60 transition-all">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant font-medium">Atelier Rating</span>
<span class="material-symbols-outlined text-secondary" style="font-size: 20px;">verified</span>
</div>
<div class="space-y-1">
<div class="flex items-baseline gap-1.5">
<span class="font-headline-md text-headline-md font-bold text-primary tracking-tight">4.96</span>
<span class="font-title-md text-title-md text-on-surface-variant font-normal">/ 5.0</span>
</div>
<div class="flex items-center gap-1 text-label-sm font-label-sm text-on-surface-variant">
<span class="text-secondary">★★★★★</span>
<span>1,420 Verified Reviews</span>
</div>
</div>
<div class="pt-2 text-label-sm font-label-sm text-on-surface-variant flex items-center justify-between">
<span>Tier 1 Artisan Status</span>
<span class="text-secondary font-semibold">Top 1%</span>
</div>
</div>
<!-- KPI 4: Conversion Rate -->
<div class="glass-tier-1 p-5 rounded-xl space-y-3 relative group hover:border-outline-variant/60 transition-all">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface-variant font-medium">Conversion Rate</span>
<span class="material-symbols-outlined text-secondary" style="font-size: 20px;">insights</span>
</div>
<div class="space-y-1">
<div class="font-headline-md text-headline-md font-bold text-primary tracking-tight">
              3.82%
            </div>
<div class="flex items-center gap-1.5 text-label-sm font-label-sm">
<span class="inline-flex items-center text-secondary bg-surface-container-high px-1.5 py-0.5 rounded font-semibold">
                +0.4%
              </span>
<span class="text-on-surface-variant">via editorial spotlight</span>
</div>
</div>
<div class="pt-2">
<svg class="w-full h-8 stroke-secondary-fixed-dim fill-none" viewbox="0 0 100 24">
<path d="M0,18 Q20,22 40,14 T70,8 T100,3" stroke-linecap="round" stroke-width="2"></path>
</svg>
</div>
</div>
</section>
<!-- Section 4: Real-Time Interactive Analytics & Sales Chart -->
<section class="glass-tier-1 rounded-xl p-6 space-y-6">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-outline-variant/20">
<div>
<h2 class="font-title-lg text-title-lg font-bold text-primary flex items-center gap-2">
<span>Sales Volume &amp; Drop Velocity</span>
<span class="text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-secondary-container/30 text-secondary border border-secondary/20">Aura Precision Analytics</span>
</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
              Net revenue progression juxtaposed against daily checkout momentum.
            </p>
</div>
<!-- Date Range Selector Chips -->
<div class="inline-flex items-center p-1 rounded-lg glass-tier-subtle border border-outline-variant/30 text-label-md font-label-md">
<button class="px-3 py-1 rounded text-on-surface-variant hover:text-primary transition-colors">7D</button>
<button class="px-3 py-1 rounded bg-surface-container-high text-primary font-semibold shadow-sm">30D</button>
<button class="px-3 py-1 rounded text-on-surface-variant hover:text-primary transition-colors">90D</button>
<button class="px-3 py-1 rounded text-on-surface-variant hover:text-primary transition-colors">1Y</button>
</div>
</div>
<!-- Apple-style Area & Bar Chart Canvas Container -->
<div class="space-y-4">
<div class="h-64 w-full relative flex items-end justify-between pt-6 px-2 gap-2 sm:gap-3">
<!-- Ambient grid lines -->
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-20">
<div class="border-b border-outline"></div>
<div class="border-b border-outline"></div>
<div class="border-b border-outline"></div>
<div class="border-b border-outline"></div>
</div>
<!-- Sleek SVG Backdrop Curve -->
<svg class="absolute inset-x-0 bottom-6 h-48 w-full overflow-visible pointer-events-none" preserveaspectratio="none" viewbox="0 0 600 200">
<defs>
<lineargradient id="areaGradient" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#c0c1ff" stop-opacity="0.25"></stop>
<stop offset="100%" stop-color="#c0c1ff" stop-opacity="0.0"></stop>
</lineargradient>
</defs>
<path d="M 0,160 Q 60,140 120,110 T 240,80 T 360,50 T 480,30 T 600,10 L 600,200 L 0,200 Z" fill="url(#areaGradient)"></path>
<path d="M 0,160 Q 60,140 120,110 T 240,80 T 360,50 T 480,30 T 600,10" fill="none" stroke="#c0c1ff" stroke-width="2.5"></path>
</svg>
<!-- Dynamic Bars with Glass Pills -->
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $12.4k
              </div>
<div class="w-full max-w-[28px] h-20 rounded-t-md bg-surface-container-high group-hover:bg-secondary/60 transition-all"></div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Oct 01</span>
</div>
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $18.1k
              </div>
<div class="w-full max-w-[28px] h-28 rounded-t-md bg-surface-container-high group-hover:bg-secondary/60 transition-all"></div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Oct 06</span>
</div>
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $24.9k
              </div>
<div class="w-full max-w-[28px] h-36 rounded-t-md bg-surface-container-high group-hover:bg-secondary/60 transition-all"></div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Oct 11</span>
</div>
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $21.3k
              </div>
<div class="w-full max-w-[28px] h-32 rounded-t-md bg-surface-container-high group-hover:bg-secondary/60 transition-all"></div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Oct 16</span>
</div>
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $34.5k
              </div>
<div class="w-full max-w-[28px] h-48 rounded-t-md bg-secondary/80 group-hover:bg-secondary transition-all ambient-glow-indigo"></div>
<span class="text-label-sm font-label-sm text-primary font-semibold">Oct 21</span>
</div>
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $31.8k
              </div>
<div class="w-full max-w-[28px] h-44 rounded-t-md bg-surface-container-high group-hover:bg-secondary/60 transition-all"></div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Oct 26</span>
</div>
<div class="relative z-10 flex-1 flex flex-col items-center gap-2 group cursor-pointer">
<div class="opacity-0 group-hover:opacity-100 transition-opacity absolute -top-8 px-2 py-0.5 rounded bg-surface-container-highest text-label-sm font-label-sm text-primary shadow">
                $41.9k
              </div>
<div class="w-full max-w-[28px] h-52 rounded-t-md bg-surface-container-high group-hover:bg-secondary/60 transition-all"></div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Today</span>
</div>
</div>
<!-- Bottom Metric Ledger Bar -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-4 border-t border-outline-variant/20">
<div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Average Order Value</span>
<p class="font-title-lg text-title-lg font-bold text-primary mt-0.5">$386.40</p>
</div>
<div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Repeat Atelier Collectors</span>
<p class="font-title-lg text-title-lg font-bold text-primary mt-0.5">42.8%</p>
</div>
<div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Drop Velocity (Units/Hr)</span>
<p class="font-title-lg text-title-lg font-bold text-primary mt-0.5">8.4 units</p>
</div>
<div>
<span class="text-label-sm font-label-sm text-on-surface-variant">Dispute / Return Index</span>
<p class="font-title-lg text-title-lg font-bold text-secondary mt-0.5">&lt; 0.12%</p>
</div>
</div>
</div>
</section>
<!-- Section 5: Live Orders Fulfillment Table -->
<section class="glass-tier-1 rounded-xl p-6 space-y-4">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h2 class="font-title-lg text-title-lg font-bold text-primary">Live Orders &amp; Dispatch Queue</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Instant courier handoff and global manifest tracking.</p>
</div>
<div class="flex items-center gap-2">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant" style="font-size: 18px;">search</span>
<input class="pl-9 pr-3 py-1.5 rounded-lg bg-surface-container-low border border-outline-variant/30 text-on-surface placeholder:text-outline text-body-sm font-body-sm focus:border-secondary focus:outline-none focus:ring-1 focus:ring-secondary" placeholder="Search order ID or buyer..." type="text"/>
</div>
<button class="px-3 py-1.5 rounded-lg glass-tier-subtle border border-outline-variant/30 text-on-surface text-label-md font-label-md hover:bg-surface-container-high transition-colors">
              Filter
            </button>
</div>
</div>
<!-- Table Responsive Container -->
<div class="overflow-x-auto no-scrollbar pt-2">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-outline-variant/20 text-label-sm font-label-sm text-on-surface-variant">
<th class="py-3 px-3">Order ID</th>
<th class="py-3 px-3">Date</th>
<th class="py-3 px-3">Collector</th>
<th class="py-3 px-3">Curated Item</th>
<th class="py-3 px-2 text-center">Qty</th>
<th class="py-3 px-3">Total</th>
<th class="py-3 px-3">Payment</th>
<th class="py-3 px-3">Fulfillment</th>
<th class="py-3 px-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/10 text-body-sm font-body-sm">
<!-- Row 1: Ready for Dispatch -->
<tr class="hover:bg-surface-container-high/40 transition-colors">
<td class="py-3.5 px-3 font-semibold text-primary">#UNC-90142</td>
<td class="py-3.5 px-3 text-on-surface-variant">Today, 14:28</td>
<td class="py-3.5 px-3">
<div class="font-medium text-primary">Elena Rostova</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Geneva, Switzerland</div>
</td>
<td class="py-3.5 px-3 text-on-surface">Pure Optical Glass Dock</td>
<td class="py-3.5 px-2 text-center font-medium">1</td>
<td class="py-3.5 px-3 font-semibold text-primary">$490.00</td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1 text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-secondary-container/40 text-secondary border border-secondary/30">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Settled
                  </span>
</td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1 text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-surface-container-highest text-primary font-medium">
                    Ready for Dispatch
                  </span>
</td>
<td class="py-3.5 px-3 text-right">
<button class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-primary text-on-primary text-label-sm font-label-sm font-semibold hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined" style="font-size: 14px;">print</span>
<span>Print Label</span>
</button>
</td>
</tr>
<!-- Row 2: In Transit -->
<tr class="hover:bg-surface-container-high/40 transition-colors">
<td class="py-3.5 px-3 font-semibold text-primary">#UNC-90141</td>
<td class="py-3.5 px-3 text-on-surface-variant">Today, 11:15</td>
<td class="py-3.5 px-3">
<div class="font-medium text-primary">Marcus Vance</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Tokyo, Japan</div>
</td>
<td class="py-3.5 px-3 text-on-surface">Studio Pro Spatial Headphones</td>
<td class="py-3.5 px-2 text-center font-medium">2</td>
<td class="py-3.5 px-3 font-semibold text-primary">$1,798.00</td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1 text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-secondary-container/40 text-secondary border border-secondary/30">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Settled
                  </span>
</td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1 text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-secondary/10 text-secondary border border-secondary/30">
                    In Transit
                  </span>
</td>
<td class="py-3.5 px-3 text-right">
<button class="inline-flex items-center gap-1 px-2.5 py-1 rounded glass-tier-subtle border border-outline-variant/30 text-on-surface text-label-sm font-label-sm hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined" style="font-size: 14px;">share_location</span>
<span>Track DHL</span>
</button>
</td>
</tr>
<!-- Row 3: Processing (Urgent) -->
<tr class="hover:bg-surface-container-high/40 transition-colors">
<td class="py-3.5 px-3 font-semibold text-primary">#UNC-90140</td>
<td class="py-3.5 px-3 text-on-surface-variant">Yesterday, 22:40</td>
<td class="py-3.5 px-3">
<div class="font-medium text-primary">Klara Lindqvist</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Stockholm, Sweden</div>
</td>
<td class="py-3.5 px-3 text-on-surface">Carbon Precision Turntable</td>
<td class="py-3.5 px-2 text-center font-medium">1</td>
<td class="py-3.5 px-3 font-semibold text-primary">$2,450.00</td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1 text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-secondary-container/40 text-secondary border border-secondary/30">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Settled
                  </span>
</td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1 text-label-sm font-label-sm px-2 py-0.5 rounded-full bg-error-container/40 text-error border border-error/30 font-medium">
                    Processing (Urgent)
                  </span>
</td>
<td class="py-3.5 px-3 text-right">
<button class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-secondary-container text-primary text-label-sm font-label-sm font-semibold hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined" style="font-size: 14px;">local_shipping</span>
<span>Dispatch Courier</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Section 6: Catalog Management & Section 7: Customer Reviews Bento Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Catalog Management / Inventory Status (7 cols) -->
<section class="lg:col-span-7 glass-tier-1 rounded-xl p-6 space-y-5">
<div class="flex items-center justify-between">
<div>
<h2 class="font-title-lg text-title-lg font-bold text-primary">Catalog &amp; Inventory Allocation</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Real-time marketplace sync &amp; buffer telemetry.</p>
</div>
<button class="text-label-md font-label-md text-secondary hover:underline flex items-center gap-1">
<span>Manage All (14)</span>
<span class="material-symbols-outlined" style="font-size: 16px;">north_east</span>
</button>
</div>
<!-- Product 1 -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 rounded-xl glass-tier-subtle border border-outline-variant/30 gap-4">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" style="font-size: 26px;">headphones</span>
</div>
<div>
<h4 class="font-title-md text-title-md text-primary font-semibold">Studio Pro Spatial Headphones</h4>
<div class="flex items-center gap-2 mt-0.5">
<span class="font-body-sm text-body-sm text-on-surface-variant">$899.00</span>
<span class="text-outline">•</span>
<span class="text-label-sm font-label-sm text-primary font-medium">142 units in stock</span>
</div>
</div>
</div>
<!-- Inline Marketplace Switch -->
<div class="flex items-center justify-between sm:justify-end gap-3 pt-2 sm:pt-0 border-t sm:border-t-0 border-outline-variant/20">
<span class="text-label-sm font-label-sm text-on-surface-variant">Live in Market</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary-container"></div>
</label>
</div>
</div>
<!-- Product 2 (Low Stock Alert) -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 rounded-xl glass-tier-subtle border border-outline-variant/30 gap-4">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" style="font-size: 26px;">dock</span>
</div>
<div>
<div class="flex items-center gap-2">
<h4 class="font-title-md text-title-md text-primary font-semibold">Pure Optical Glass Dock</h4>
<span class="px-2 py-0.2 rounded-full text-label-sm font-label-sm bg-error-container/40 text-error border border-error/20">
                    Low Stock
                  </span>
</div>
<div class="flex items-center gap-2 mt-0.5">
<span class="font-body-sm text-body-sm text-on-surface-variant">$490.00</span>
<span class="text-outline">•</span>
<span class="text-label-sm font-label-sm text-error font-medium">38 units left</span>
</div>
</div>
</div>
<div class="flex items-center justify-between sm:justify-end gap-3 pt-2 sm:pt-0 border-t sm:border-t-0 border-outline-variant/20">
<span class="text-label-sm font-label-sm text-on-surface-variant">Live in Market</span>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary-container"></div>
</label>
</div>
</div>
<!-- Product 3 (Sold Out) -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 rounded-xl glass-tier-subtle border border-outline-variant/30 gap-4 opacity-75">
<div class="flex items-center gap-3.5">
<div class="w-12 h-12 rounded-lg bg-surface-container-high border border-outline-variant/30 flex items-center justify-center text-outline">
<span class="material-symbols-outlined" style="font-size: 26px;">album</span>
</div>
<div>
<div class="flex items-center gap-2">
<h4 class="font-title-md text-title-md text-primary font-semibold">Carbon Precision Turntable</h4>
<span class="px-2 py-0.2 rounded-full text-label-sm font-label-sm bg-surface-container-highest text-on-surface-variant">
                    Sold Out
                  </span>
</div>
<div class="flex items-center gap-2 mt-0.5">
<span class="font-body-sm text-body-sm text-on-surface-variant">$2,450.00</span>
<span class="text-outline">•</span>
<span class="text-label-sm font-label-sm text-on-surface-variant">Restock Scheduled (Nov 04)</span>
</div>
</div>
</div>
<div class="flex items-center justify-between sm:justify-end gap-3 pt-2 sm:pt-0 border-t sm:border-t-0 border-outline-variant/20">
<span class="text-label-sm font-label-sm text-on-surface-variant">Waitlist Mode</span>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-secondary-container"></div>
</label>
</div>
</div>
</section>
<!-- Section 7: Atelier Reviews & Inquiries (5 cols) -->
<section class="lg:col-span-5 glass-tier-1 rounded-xl p-6 space-y-5 flex flex-col justify-between">
<div class="space-y-4">
<div class="flex items-center justify-between">
<div>
<h2 class="font-title-lg text-title-lg font-bold text-primary">Collector Feedback</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Direct verified buyer correspondence.</p>
</div>
<span class="material-symbols-outlined text-secondary" style="font-size: 22px;">rate_review</span>
</div>
<!-- Review Item 1 -->
<div class="p-3.5 rounded-lg glass-tier-subtle border border-outline-variant/30 space-y-2.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-secondary-container flex items-center justify-center text-label-sm font-label-sm font-bold text-primary">
                    S
                  </div>
<span class="font-title-md text-title-md font-semibold text-primary">Soren K.</span>
<span class="text-label-sm font-label-sm px-1.5 py-0.2 rounded bg-surface-container-high text-on-surface-variant">Verified Buyer</span>
</div>
<span class="text-secondary text-label-sm font-label-sm">5.0 ★</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface">
                "The acoustic isolation on the Studio Pro headphones surpasses my mastering studio gear. Truly gallery-grade craftsmanship."
              </p>
<!-- Vendor Quick Reply Input -->
<div class="pt-1 flex items-center gap-2">
<input class="flex-1 px-3 py-1 text-body-sm font-body-sm rounded bg-surface-container-low border border-outline-variant/30 text-on-surface placeholder:text-outline focus:outline-none focus:border-secondary" placeholder="Write atelier response..." type="text"/>
<button class="px-2.5 py-1 rounded bg-surface-container-high text-primary hover:bg-secondary-container text-label-sm font-label-sm transition-colors">
                  Reply
                </button>
</div>
</div>
<!-- Review Item 2 -->
<div class="p-3.5 rounded-lg glass-tier-subtle border border-outline-variant/30 space-y-2">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-surface-variant flex items-center justify-center text-label-sm font-label-sm font-bold text-primary">
                    M
                  </div>
<span class="font-title-md text-title-md font-semibold text-primary">Marta V.</span>
<span class="text-label-sm font-label-sm px-1.5 py-0.2 rounded bg-surface-container-high text-on-surface-variant">Verified Buyer</span>
</div>
<span class="text-secondary text-label-sm font-label-sm">5.0 ★</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface">
                "Optical glass arrived flawlessly packed with signed certificate. UNCART packaging is unmatched."
              </p>
<div class="text-label-sm font-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-secondary" style="font-size: 14px;">check_circle</span>
<span>You replied: "Thank you Marta, handmade with love in Copenhagen."</span>
</div>
</div>
</div>
<!-- Bottom Atelier Concierge Contact Link -->
<div class="pt-3 border-t border-outline-variant/20 flex items-center justify-between text-label-sm font-label-sm">
<span class="text-on-surface-variant">Need dedicated vendor assistance?</span>
<a class="text-secondary hover:underline font-semibold flex items-center gap-1" href="#support">
<span>Contact Partner Concierge</span>
<span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward</span>
</a>
</div>
</section>
</div>
</main>
</div>
<!-- Shared Footer Component -->
<footer class="w-full bg-surface-container-lowest border-t border-outline-variant/20 transition-colors duration-200 mt-12">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16 flex flex-col md:flex-row items-center justify-between gap-6">
<div class="flex items-center gap-3">
<span class="text-title-lg font-title-lg font-bold text-primary">UNCART</span>
<span class="text-on-surface-variant font-body-sm text-body-sm">
          © 2024 UNCART Inc. All rights reserved.
        </span>
</div>
<nav aria-label="Footer Navigation" class="flex flex-wrap items-center justify-center gap-6">
<a class="text-on-surface-variant font-body-sm text-body-sm hover:text-primary transition-colors duration-200" href="#shop">Shop</a>
<a class="text-on-surface-variant font-body-sm text-body-sm hover:text-primary transition-colors duration-200" href="#care">Customer Care</a>
<a class="text-on-surface-variant font-body-sm text-body-sm hover:text-primary transition-colors duration-200" href="#company">Company</a>
<a class="text-primary font-body-sm text-body-sm hover:text-primary transition-colors duration-200 font-semibold" href="#seller-hub">Seller Hub</a>
<a class="text-on-surface-variant font-body-sm text-body-sm hover:text-primary transition-colors duration-200" href="#privacy">Privacy Policy</a>
<a class="text-on-surface-variant font-body-sm text-body-sm hover:text-primary transition-colors duration-200" href="#terms">Terms of Service</a>
</nav>
</div>
</footer>
</body></html>