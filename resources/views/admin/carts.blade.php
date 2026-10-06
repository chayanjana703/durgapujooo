<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART Admin - Active Carts Ledger</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "primary-fixed-dim": "#c6c6c8",
            "surface-container-low": "#1b1b1f",
            "surface-container-highest": "#353439",
            "background": "#131317",
            "surface-container-high": "#2a292e",
            "primary": "#ffffff",
            "secondary": "#c0c1ff",
            "surface-container": "#1f1f23",
            "surface-container-lowest": "#0e0e12",
            "on-surface": "#e4e1e7",
            "on-surface-variant": "#c5c7c9",
            "outline": "#8f9194",
            "outline-variant": "#44474a"
          }
        }
      }
    }
</script>
<style>
    .glass-tier-1 {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(24px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.3);
    }
</style>
</head>
<body class="bg-background text-on-surface antialiased min-h-screen flex flex-col font-sans">

<!-- HEADER -->
<header class="sticky top-0 z-50 w-full bg-surface-container-lowest/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm">
<div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between gap-4">
<div class="flex items-center gap-3">
<a class="flex items-center gap-2.5 group" href="{{ route('marketplace.index') }}">
<span class="text-xl font-bold tracking-tight text-primary">UNCART</span>
</a>
<span class="text-xs px-2 py-0.5 rounded-full bg-secondary/10 text-secondary border border-secondary/20">CARTS & TRANSACTIONS</span>
</div>
<nav class="hidden lg:flex items-center gap-6 text-sm">
<a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('marketplace.index') }}">Home</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shop.index') }}">Shop</a>
<a class="text-primary font-semibold" href="{{ route('admin.index') }}">Admin Overview</a>
</nav>
</div>
</header>

<div class="max-w-7xl mx-auto w-full px-4 md:px-8 py-6 flex-1 flex flex-col lg:flex-row gap-6">

<!-- SIDEBAR -->
<aside class="w-full lg:w-64 shrink-0 space-y-6">
<div class="glass-tier-1 p-3 rounded-xl space-y-1">
<div class="px-3 py-2 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">Marketplace Modules</div>
<a href="{{ route('admin.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span>Overview</span>
</div>
</a>
<a href="{{ route('admin.users') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">group</span>
<span>User Registry</span>
</div>
</a>
<a href="{{ route('admin.categories') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">storefront</span>
<span>Categories</span>
</div>
</a>
<a href="{{ route('admin.products') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">verified</span>
<span>Products</span>
</div>
</a>
<a href="{{ route('admin.carts') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-surface-container-high text-primary border border-white/10 shadow-sm font-semibold">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-secondary">shopping_cart</span>
<span>Active Carts</span>
</div>
<span class="text-xs font-mono text-emerald-400 font-bold">{{ number_format($carts->total()) }}</span>
</a>
</div>
</aside>

<!-- MAIN CONTENT -->
<main class="flex-1 space-y-6 min-w-0">

@if(session('success'))
<div class="p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm flex items-center justify-between">
  <span>{{ session('success') }}</span>
</div>
@endif

<!-- HEADER -->
<div class="flex items-center justify-between">
<div>
<h1 class="text-2xl font-bold text-primary tracking-tight">Active Carts & Transaction Ledger</h1>
<p class="text-sm text-on-surface-variant">Monitor active cart sessions and shopping activity directly from database.</p>
</div>
</div>

<!-- CARTS TABLE -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-white/10 text-xs font-semibold text-on-surface-variant">
<th class="py-3 px-3">Cart ID</th>
<th class="py-3 px-3">User / Session</th>
<th class="py-3 px-3">Product</th>
<th class="py-3 px-3">Unit Price</th>
<th class="py-3 px-3">Qty</th>
<th class="py-3 px-3">Subtotal</th>
<th class="py-3 px-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5 text-sm">
@forelse($carts as $c)
<tr class="hover:bg-white/[0.02] transition-colors">
<td class="py-3.5 px-3 font-mono text-xs text-primary">#CRT-{{ str_pad($c->id, 5, '0', STR_PAD_LEFT) }}</td>
<td class="py-3.5 px-3 font-medium text-primary">
  <div>{{ $c->user->name ?? 'Guest Session' }}</div>
  <div class="text-[11px] font-mono text-on-surface-variant">{{ $c->user->email ?? substr($c->session_id, 0, 16).'...' }}</div>
</td>
<td class="py-3.5 px-3 text-on-surface-variant">
  <div class="text-primary font-medium">{{ $c->product->name ?? $c->title }}</div>
  <div class="text-[11px] text-on-surface-variant">{{ $c->product->category->name ?? 'Marketplace' }}</div>
</td>
<td class="py-3.5 px-3 font-mono text-emerald-400">₹{{ number_format($c->price, 2) }}</td>
<td class="py-3.5 px-3 font-mono text-secondary">{{ $c->quantity }}</td>
<td class="py-3.5 px-3 font-mono text-emerald-400 font-bold">₹{{ number_format($c->price * $c->quantity, 2) }}</td>
<td class="py-3.5 px-3 text-right flex items-center justify-end gap-2">
  <a href="{{ route('product.index', $c->product_id) }}" target="_blank" class="p-1.5 rounded bg-surface-container-lowest border border-white/10 text-on-surface-variant hover:text-primary transition-colors" title="View Item">
    <span class="material-symbols-outlined text-[18px]">visibility</span>
  </a>
  <form action="{{ route('admin.carts.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this cart item?');" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-1.5 rounded bg-error-container/20 text-error hover:bg-error-container/40 transition-colors" title="Delete Cart Record">
      <span class="material-symbols-outlined text-[18px]">delete</span>
    </button>
  </form>
</td>
</tr>
@empty
<tr>
<td colspan="7" class="text-center py-6 text-on-surface-variant">No active cart records found in database.</td>
</tr>
@endforelse
</tbody>
</table>
</div>

<div class="pt-4 border-t border-white/5">
  {{ $carts->links() }}
</div>
</div>

</main>
</div>

</body>
</html>
