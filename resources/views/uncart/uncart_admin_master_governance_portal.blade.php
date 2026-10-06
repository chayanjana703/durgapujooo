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
<a class="flex items-center gap-2.5 transition-all duration-200 ease-out active:scale-95 group" href="#">
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
<a class="text-primary dark:text-primary font-title-md text-title-md transition-colors duration-200" href="#">Home</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Shop</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Categories</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Deals</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-title-md text-title-md hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">New Arrivals</a>
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
<!-- ================= SUB-HEADER BREADCRUMB & REAL-TIME AUDIT BAR ================= -->
<div class="border-b border-white/5 bg-surface-container-lowest/60 backdrop-blur-md">
<div class="max-w-7xl mx-auto px-4 md:px-8 py-2.5 flex flex-wrap items-center justify-between gap-3 text-label-sm font-label-sm text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="text-primary font-medium">Command Center</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span>Marketplace Governance</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-secondary font-medium">Consolidated Escrow &amp; Seller Audits</span>
</div>
<div class="flex items-center gap-4 text-[11px]">
<span class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-[14px] text-primary">security</span>
          Hardware Key Enclave: <span class="text-emerald-400 font-mono">ENCRYPTED (FIPS 140-3)</span>
</span>
<span class="hidden sm:inline-block text-outline-variant">•</span>
<span class="hidden sm:flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">sync</span>
          Telemetry Synced: 2s ago
        </span>
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
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-surface-container-high text-primary font-title-md text-title-md border border-white/10 shadow-sm transition-all duration-200">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-secondary">dashboard</span>
<span>Executive Overview</span>
</div>
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
</button>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">group</span>
<span>User Registry</span>
</div>
<span class="text-label-sm font-mono text-outline">68.4k</span>
</button>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">storefront</span>
<span>Atelier Verification</span>
</div>
<span class="px-1.5 py-0.5 rounded text-[10px] bg-secondary-container/40 text-secondary-fixed border border-secondary/40 font-mono font-bold">18</span>
</button>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">verified</span>
<span>Product Moderation</span>
</div>
<span class="text-label-sm font-mono text-outline">4.2k</span>
</button>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">receipt_long</span>
<span>Global Orders</span>
</div>
</button>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">account_balance</span>
<span>Financial Escrow</span>
</div>
<span class="material-symbols-outlined text-[16px] text-emerald-400">lock</span>
</button>
<div class="pt-2 pb-1 px-3 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">Governance Guard</div>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">shield</span>
<span>Platform Security</span>
</div>
</button>
<button class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">terminal</span>
<span>System Logs</span>
</div>
<span class="w-2 h-2 rounded-full bg-emerald-400"></span>
</button>
</div>
<!-- Quick Platform Health Widget -->
<div class="glass-tier-1 p-4 rounded-xl border border-white/5 space-y-3">
<div class="flex items-center justify-between">
<span class="text-label-sm font-label-sm text-on-surface-variant">Consensus Engine</span>
<span class="text-label-sm font-mono text-emerald-400">Stable</span>
</div>
<div class="space-y-1.5">
<div class="flex justify-between text-[11px] text-on-surface-variant">
<span>Escrow Latency</span>
<span class="text-primary font-mono">14ms</span>
</div>
<div class="w-full h-1 bg-surface-container-high rounded-full overflow-hidden">
<div class="h-full bg-secondary w-1/4 rounded-full"></div>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between text-[11px] text-on-surface-variant">
<span>Stripe Connect Payouts</span>
<span class="text-primary font-mono">100% OK</span>
</div>
<div class="w-full h-1 bg-surface-container-high rounded-full overflow-hidden">
<div class="h-full bg-emerald-400 w-full rounded-full"></div>
</div>
</div>
</div>
<!-- Emergency Freeze Quick-Key Card -->
<div class="p-4 rounded-xl bg-error-container/20 border border-error/30 text-left space-y-2">
<div class="flex items-center gap-2 text-error">
<span class="material-symbols-outlined text-[18px]">lock_reset</span>
<span class="text-label-sm font-label-sm font-bold">EMERGENCY PROTOCOL</span>
</div>
<p class="text-[11px] text-on-surface-variant leading-tight">Instant liquidity suspension across all 384 vendor payout sub-ledgers.</p>
<button class="w-full py-1.5 px-3 rounded-lg bg-surface-container-lowest border border-error/40 hover:bg-error-container/40 text-error text-label-sm font-label-sm font-semibold transition-colors flex items-center justify-center gap-1.5">
<span>Arm Global Halt Switch</span>
</button>
</div>
</aside>
<!-- MAIN DASHBOARD CONTENT AREA -->
<main class="flex-1 space-y-6 min-w-0">
<!-- SECTION 1: 5 EXECUTIVE METRIC TILES -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-3.5">
<!-- Card 1: Global GMV -->
<div class="glass-tier-1 interactive-card p-4 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Global GMV</span>
<span class="material-symbols-outlined text-[18px] text-secondary">payments</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">$4.82M</div>
<div class="text-[11px] text-emerald-400 flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">trending_up</span>
<span>+24.1%</span>
<span class="text-on-surface-variant/70 text-[10px] ml-0.5">past 30d</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
            30d Vol: 4,821,940 USD
          </div>
</div>
<!-- Card 2: Active Sellers / Ateliers -->
<div class="glass-tier-1 interactive-card p-4 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Verified Ateliers</span>
<span class="material-symbols-outlined text-[18px] text-secondary">verified_user</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">384</div>
<div class="text-[11px] text-secondary flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">pending</span>
<span>18 Pending Queue</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
            Tier-1 Vendors: 94.2%
          </div>
</div>
<!-- Card 3: Active Customers -->
<div class="glass-tier-1 interactive-card p-4 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Active Members</span>
<span class="material-symbols-outlined text-[18px] text-secondary">person</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">68,490</div>
<div class="text-[11px] text-emerald-400 flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">arrow_upward</span>
<span>+1,820 this week</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
            VIP Curated Tier: 14%
          </div>
</div>
<!-- Card 4: Marketplace Commission -->
<div class="glass-tier-1 interactive-card p-4 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Commission (Net)</span>
<span class="material-symbols-outlined text-[18px] text-secondary">pie_chart</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">$578,400</div>
<div class="text-[11px] text-on-surface-variant flex items-center gap-1 mt-0.5">
<span class="px-1.5 py-0.2 rounded bg-white/10 font-mono text-[10px] text-primary">12.0%</span>
<span class="text-[10px]">Avg Take Rate</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
            Escrow Unlocked: 89%
          </div>
</div>
<!-- Card 5: Dispute & Refund Rate -->
<div class="glass-tier-1 interactive-card p-4 rounded-xl flex flex-col justify-between">
<div class="flex items-center justify-between text-on-surface-variant">
<span class="text-label-sm font-label-sm">Dispute / Chargeback</span>
<span class="material-symbols-outlined text-[18px] text-secondary">gavel</span>
</div>
<div class="my-3">
<div class="text-headline-sm font-headline-sm text-primary tracking-tight">0.14%</div>
<div class="text-[11px] text-emerald-400 flex items-center gap-1 mt-0.5">
<span class="material-symbols-outlined text-[13px]">check_circle</span>
<span>Ultra-Low Escrow Risk</span>
</div>
</div>
<div class="text-[10px] text-outline pt-2 border-t border-white/5 font-mono">
            Benchmark: &lt; 0.50%
          </div>
</div>
</div>
<!-- SECTION 2: BENTO - VELOCITY CHARTS & CATEGORY DISTRIBUTION -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
<!-- Platform Velocity Chart (2 Columns) -->
<div class="xl:col-span-2 glass-tier-1 p-6 rounded-xl space-y-4">
<div class="flex flex-wrap items-center justify-between gap-3">
<div>
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Platform Volume vs Vendor Payout Velocity</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">Dual-axis reconciliation of gross processed capital against atelier distributions.</p>
</div>
<!-- Range Selector Chips -->
<div class="flex items-center gap-1 p-1 rounded-lg bg-surface-container-high border border-white/5 text-label-sm font-label-sm">
<button class="px-2.5 py-1 rounded bg-white/10 text-primary font-medium">30D</button>
<button class="px-2.5 py-1 rounded text-on-surface-variant hover:text-primary transition-colors">90D</button>
<button class="px-2.5 py-1 rounded text-on-surface-variant hover:text-primary transition-colors">YTD</button>
</div>
</div>
<!-- SVG Analytical Dual-Line Graph -->
<div class="relative w-full h-64 pt-2">
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 700 220">
<defs>
<lineargradient id="gmvGlow" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#ffffff" stop-opacity="0.25"></stop>
<stop offset="100%" stop-color="#ffffff" stop-opacity="0.0"></stop>
</lineargradient>
<lineargradient id="payoutGlow" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#6366f1" stop-opacity="0.3"></stop>
<stop offset="100%" stop-color="#6366f1" stop-opacity="0.0"></stop>
</lineargradient>
</defs>
<!-- Subtle Grid lines -->
<line stroke="rgba(255,255,255,0.05)" stroke-dasharray="4" x1="0" x2="700" y1="30" y2="30"></line>
<line stroke="rgba(255,255,255,0.05)" stroke-dasharray="4" x1="0" x2="700" y1="90" y2="90"></line>
<line stroke="rgba(255,255,255,0.05)" stroke-dasharray="4" x1="0" x2="700" y1="150" y2="150"></line>
<line stroke="rgba(255,255,255,0.08)" x1="0" x2="700" y1="210" y2="210"></line>
<!-- Area Fill: Platform GMV -->
<polygon fill="url(#gmvGlow)" points="0,210 0,140 100,120 200,135 300,95 400,80 500,50 600,60 700,25 700,210"></polygon>
<!-- Area Fill: Vendor Payouts -->
<polygon fill="url(#payoutGlow)" points="0,210 0,165 100,145 200,158 300,125 400,110 500,85 600,92 700,60 700,210"></polygon>
<!-- Line 1: Gross GMV (Platinum White) -->
<polyline fill="none" points="0,140 100,120 200,135 300,95 400,80 500,50 600,60 700,25" stroke="#f5f5f7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></polyline>
<!-- Line 2: Atelier Distributions (Indigo Violet) -->
<polyline fill="none" points="0,165 100,145 200,158 300,125 400,110 500,85 600,92 700,60" stroke="#6366f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></polyline>
<!-- Focal Active Metric Nodes -->
<circle cx="500" cy="50" fill="#f5f5f7" r="4.5" stroke="#131317" stroke-width="2"></circle>
<circle cx="500" cy="85" fill="#6366f1" r="4.5" stroke="#131317" stroke-width="2"></circle>
</svg>
<!-- Dynamic Hover Float Specimen -->
<div class="absolute top-4 right-16 px-3 py-1.5 rounded-lg glass-tier-2 border border-white/20 shadow-xl hidden md:flex items-center gap-3 text-label-sm font-mono">
<div class="flex items-center gap-1.5 text-primary">
<span class="w-2 h-2 rounded-full bg-white"></span>
<span>GMV: $162.4k/d</span>
</div>
<div class="h-3 w-[1px] bg-white/20"></div>
<div class="flex items-center gap-1.5 text-secondary">
<span class="w-2 h-2 rounded-full bg-secondary"></span>
<span>Payout: $142.9k/d</span>
</div>
</div>
</div>
<!-- Bottom Chart Legend -->
<div class="flex items-center justify-between pt-2 border-t border-white/5 text-label-sm font-label-sm text-on-surface-variant">
<div class="flex items-center gap-5">
<div class="flex items-center gap-2">
<span class="w-3 h-0.5 bg-primary"></span>
<span>Gross Market Volume (All Channels)</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-0.5 bg-secondary"></span>
<span>Settled Atelier Escrow (Net 88%)</span>
</div>
</div>
<div class="text-[11px] font-mono text-outline">Median settlement: 48h</div>
</div>
</div>
<!-- Category Distribution Breakdown (1 Column) -->
<div class="glass-tier-1 p-6 rounded-xl flex flex-col justify-between space-y-4">
<div>
<div class="flex items-center justify-between">
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Curated Verticals</h2>
<span class="text-label-sm font-label-sm text-secondary font-mono">4 Verticals</span>
</div>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-0.5">Platform volume distribution.</p>
</div>
<!-- Stacked Bar Visualizer -->
<div class="space-y-4 py-2">
<div>
<div class="flex justify-between text-body-sm font-body-sm mb-1">
<span class="text-primary font-medium">Bespoke Electronics</span>
<span class="font-mono text-primary">42% • $2.02M</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 42%;"></div>
</div>
</div>
<div>
<div class="flex justify-between text-body-sm font-body-sm mb-1">
<span class="text-on-surface font-medium">Living &amp; Architectural Art</span>
<span class="font-mono text-on-surface">28% • $1.35M</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 28%;"></div>
</div>
</div>
<div>
<div class="flex justify-between text-body-sm font-body-sm mb-1">
<span class="text-on-surface font-medium">Horology &amp; Wearables</span>
<span class="font-mono text-on-surface">18% • $867k</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-primary-fixed-dim rounded-full" style="width: 18%;"></div>
</div>
</div>
<div>
<div class="flex justify-between text-body-sm font-body-sm mb-1">
<span class="text-on-surface font-medium">Acoustics &amp; Sound Sculptures</span>
<span class="font-mono text-on-surface">12% • $578k</span>
</div>
<div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
<div class="h-full bg-outline rounded-full" style="width: 12%;"></div>
</div>
</div>
</div>
<div class="pt-3 border-t border-white/5 flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
<span>Average Order Value:</span>
<span class="text-primary font-semibold font-mono">$1,840.00 USD</span>
</div>
</div>
</div>
<!-- SECTION 3: ATELIER VERIFICATION & MODERATION QUEUE -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="flex flex-wrap items-center justify-between gap-3">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-secondary-container/40 border border-secondary/40 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[20px]">badge</span>
</div>
<div>
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Atelier Verification &amp; Seller Moderation Queue</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">High-caliber vendor onboarding compliance, identity validation &amp; hardware audits.</p>
</div>
</div>
<span class="px-3 py-1 rounded-full text-label-sm font-label-sm bg-secondary/10 border border-secondary/30 text-secondary">
            18 Applications Waiting
          </span>
</div>
<!-- Modern Seller Onboarding Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-1">
<!-- Vendor 1: Nomad Precision Labs -->
<div class="p-4 rounded-xl bg-surface-container-high/40 border border-white/10 hover:border-white/20 transition-all space-y-3.5">
<div class="flex items-start justify-between">
<div>
<div class="text-title-md font-title-md text-primary font-semibold">Nomad Precision Labs</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Zurich, Switzerland • Bespoke Titanium Gear</div>
</div>
<span class="material-symbols-outlined text-secondary text-[20px]">verified</span>
</div>
<!-- KYC / Compliance Chips -->
<div class="space-y-1.5 text-label-sm font-label-sm">
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">KYC / Entity Check:</span>
<span class="text-emerald-400 font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">check</span> Verified
                </span>
</div>
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">Commercial Reg:</span>
<span class="text-primary font-mono">CHE-291.802.1</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Sample Audit:</span>
<span class="text-secondary font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">award_star</span> 98/100 Pts
                </span>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-2 pt-2">
<button class="flex-1 py-1.5 rounded-lg bg-primary text-background font-label-md font-label-md font-semibold hover:bg-primary-fixed hover:shadow-[0_0_15px_rgba(255,255,255,0.25)] transition-all">
                Approve Atelier
              </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-white/10 hover:border-white/20 text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors">
                Request Audit
              </button>
</div>
</div>
<!-- Vendor 2: Kvadrat Acoustics -->
<div class="p-4 rounded-xl bg-surface-container-high/40 border border-white/10 hover:border-white/20 transition-all space-y-3.5">
<div class="flex items-start justify-between">
<div>
<div class="text-title-md font-title-md text-primary font-semibold">Kvadrat Acoustics</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Copenhagen, Denmark • Hi-Fi Sculptural Sound</div>
</div>
<span class="material-symbols-outlined text-outline text-[20px]">hourglass_empty</span>
</div>
<!-- KYC / Compliance Chips -->
<div class="space-y-1.5 text-label-sm font-label-sm">
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">KYC / Entity Check:</span>
<span class="text-emerald-400 font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">check</span> Verified
                </span>
</div>
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">Commercial Reg:</span>
<span class="text-primary font-mono">DK-8831920</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Sample Audit:</span>
<span class="text-on-surface-variant font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">schedule</span> In Lab Inspection
                </span>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-2 pt-2">
<button class="flex-1 py-1.5 rounded-lg bg-primary/20 text-primary border border-white/20 font-label-md font-label-md font-semibold hover:bg-primary hover:text-background transition-all">
                Fast-Track Audit
              </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-white/10 hover:border-white/20 text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors">
                Inspect Docs
              </button>
</div>
</div>
<!-- Vendor 3: Nordic Monolith -->
<div class="p-4 rounded-xl bg-surface-container-high/40 border border-white/10 hover:border-white/20 transition-all space-y-3.5">
<div class="flex items-start justify-between">
<div>
<div class="text-title-md font-title-md text-primary font-semibold">Nordic Monolith</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Stockholm, Sweden • Minimalist Stone Furniture</div>
</div>
<span class="material-symbols-outlined text-outline-variant text-[20px]">pending_actions</span>
</div>
<!-- KYC / Compliance Chips -->
<div class="space-y-1.5 text-label-sm font-label-sm">
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">KYC / Entity Check:</span>
<span class="text-secondary font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">pending</span> PEP Screener Pending
                </span>
</div>
<div class="flex items-center justify-between py-1 border-b border-white/5">
<span class="text-on-surface-variant">Commercial Reg:</span>
<span class="text-primary font-mono">SE-556102-441</span>
</div>
<div class="flex items-center justify-between py-1">
<span class="text-on-surface-variant">Sample Audit:</span>
<span class="text-emerald-400 font-mono flex items-center gap-1">
<span class="material-symbols-outlined text-[13px]">check</span> Passed (Grade A)
                </span>
</div>
</div>
<!-- Actions -->
<div class="flex items-center gap-2 pt-2">
<button class="flex-1 py-1.5 rounded-lg bg-primary text-background font-label-md font-label-md font-semibold hover:bg-primary-fixed hover:shadow-[0_0_15px_rgba(255,255,255,0.25)] transition-all">
                Approve Atelier
              </button>
<button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest border border-white/10 hover:border-white/20 text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors">
                Request Audit
              </button>
</div>
</div>
</div>
</div>
<!-- SECTION 4: GLOBAL ESCROW & TRANSACTION STREAM -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="flex flex-wrap items-center justify-between gap-3">
<div>
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Global Transaction &amp; Multi-Vendor Escrow Ledger</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">Real-time settlement status, buyer escrow holds, dispute mitigation flags.</p>
</div>
<div class="flex items-center gap-2">
<span class="text-label-sm font-label-sm text-on-surface-variant">Auto-release timeline: 72 hours post-delivery</span>
</div>
</div>
<!-- High-End Glass Ledger Table -->
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-white/10 text-label-sm font-label-sm text-on-surface-variant">
<th class="py-3 px-3 font-semibold">Transaction ID</th>
<th class="py-3 px-3 font-semibold">Customer</th>
<th class="py-3 px-3 font-semibold">Vendor / Atelier</th>
<th class="py-3 px-3 font-semibold">Gross Total</th>
<th class="py-3 px-3 font-semibold">UNCART Take</th>
<th class="py-3 px-3 font-semibold">Escrow State</th>
<th class="py-3 px-3 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5 text-body-sm font-body-sm">
<!-- Row 1 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="py-3.5 px-3 font-mono text-primary text-label-md">
                  #UNC-892401
                </td>
<td class="py-3.5 px-3">
<div class="font-medium text-primary">Julian Vance</div>
<div class="text-[11px] text-on-surface-variant">Tier: Black Diamond Member</div>
</td>
<td class="py-3.5 px-3">
<div class="text-primary font-medium">Nomad Precision Labs</div>
<div class="text-[11px] text-on-surface-variant">SKU: Mag-Enclosure v3</div>
</td>
<td class="py-3.5 px-3 font-mono font-medium text-primary">
                  $3,450.00
                </td>
<td class="py-3.5 px-3 font-mono text-secondary">
                  $414.00 (12%)
                </td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    Escrow Locked
                  </span>
</td>
<td class="py-3.5 px-3 text-right">
<button class="p-1 rounded text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="py-3.5 px-3 font-mono text-primary text-label-md">
                  #UNC-892398
                </td>
<td class="py-3.5 px-3">
<div class="font-medium text-primary">Elena Rostova</div>
<div class="text-[11px] text-on-surface-variant">Tier: Verified Collector</div>
</td>
<td class="py-3.5 px-3">
<div class="text-primary font-medium">Kvadrat Acoustics</div>
<div class="text-[11px] text-on-surface-variant">SKU: Sound Monolith 01</div>
</td>
<td class="py-3.5 px-3 font-mono font-medium text-primary">
                  $5,800.00
                </td>
<td class="py-3.5 px-3 font-mono text-secondary">
                  $696.00 (12%)
                </td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-secondary-container/30 border border-secondary/40 text-secondary text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                    Dispatched / In Transit
                  </span>
</td>
<td class="py-3.5 px-3 text-right">
<button class="p-1 rounded text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-white/[0.02] transition-colors group">
<td class="py-3.5 px-3 font-mono text-primary text-label-md">
                  #UNC-892384
                </td>
<td class="py-3.5 px-3">
<div class="font-medium text-primary">Marcus Thorne</div>
<div class="text-[11px] text-on-surface-variant">Tier: Atelier Founder</div>
</td>
<td class="py-3.5 px-3">
<div class="text-primary font-medium">Nordic Monolith</div>
<div class="text-[11px] text-on-surface-variant">SKU: Basalt Occasional Table</div>
</td>
<td class="py-3.5 px-3 font-mono font-medium text-primary">
                  $8,200.00
                </td>
<td class="py-3.5 px-3 font-mono text-secondary">
                  $984.00 (12%)
                </td>
<td class="py-3.5 px-3">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-surface-container-highest border border-white/20 text-on-surface-variant text-label-sm font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary-fixed-dim"></span>
                    Released to Vendor
                  </span>
</td>
<td class="py-3.5 px-3 text-right">
<button class="p-1 rounded text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- SECTION 5: PLATFORM GOVERNANCE & COMMISSION CONTROLS -->
<div class="glass-tier-1 p-6 rounded-xl space-y-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[24px] text-secondary">tune</span>
<div>
<h2 class="text-title-lg font-title-lg text-primary tracking-tight">Marketplace Governance &amp; Commission Tuning</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">Fine-tune global take rates, escrow release buffers, and autonomous dispute routing.</p>
</div>
</div>
<button class="px-4 py-2 rounded-lg bg-surface-container-high border border-white/15 hover:border-white/30 text-primary font-label-md font-label-md transition-all">
            Export Audit Key
          </button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-2">
<!-- Slider 1: Global Marketplace Take Rate -->
<div class="space-y-3 p-4 rounded-xl bg-surface-container-high/30 border border-white/5">
<div class="flex justify-between items-center text-label-sm font-label-sm">
<span class="text-on-surface-variant font-medium">Standard Take Rate</span>
<span class="text-primary font-mono font-bold text-[14px]">12.0%</span>
</div>
<input class="w-full accent-secondary bg-surface-container-lowest cursor-pointer h-1.5 rounded-lg" max="25" min="5" type="range" value="12"/>
<div class="flex justify-between text-[10px] text-outline font-mono">
<span>Min: 5%</span>
<span>Target: 12%</span>
<span>Ceiling: 25%</span>
</div>
</div>
<!-- Slider 2: Escrow Release Window -->
<div class="space-y-3 p-4 rounded-xl bg-surface-container-high/30 border border-white/5">
<div class="flex justify-between items-center text-label-sm font-label-sm">
<span class="text-on-surface-variant font-medium">Escrow Hold Buffer</span>
<span class="text-primary font-mono font-bold text-[14px]">72 Hours</span>
</div>
<input class="w-full accent-secondary bg-surface-container-lowest cursor-pointer h-1.5 rounded-lg" max="168" min="24" type="range" value="72"/>
<div class="flex justify-between text-[10px] text-outline font-mono">
<span>Instant (24h)</span>
<span>Standard (72h)</span>
<span>High Risk (7d)</span>
</div>
</div>
<!-- Toggle: Autonomous Fraud Interceptor -->
<div class="p-4 rounded-xl bg-surface-container-high/30 border border-white/5 flex flex-col justify-between">
<div class="flex items-center justify-between">
<span class="text-label-sm font-label-sm text-on-surface-variant font-medium">Auto-Dispute Arbiter</span>
<span class="px-2 py-0.5 rounded text-[10px] bg-emerald-500/20 text-emerald-400 font-mono font-bold border border-emerald-500/30">AI ACTIVE</span>
</div>
<p class="text-[11px] text-on-surface-variant my-2">Resolves low-variance delivery claims under $250 without controller intervention.</p>
<div class="flex items-center justify-between pt-1">
<span class="text-label-sm font-label-sm text-primary font-mono">Status: Enabled</span>
<button class="w-10 h-5 bg-secondary rounded-full relative p-0.5 flex items-center transition-colors">
<div class="w-4 h-4 bg-white rounded-full ml-auto shadow-sm"></div>
</button>
</div>
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
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Shop</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Customer Care</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Company</a>
<a class="text-primary dark:text-primary font-body-sm text-body-sm transition-colors duration-200 font-semibold" href="#">Seller Hub</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-on-surface-variant font-body-sm text-body-sm hover:text-primary dark:hover:text-primary transition-colors duration-200" href="#">Terms of Service</a>
</nav>
</div>
</div>
</footer>
</body></html>