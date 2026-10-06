<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART Admin - Product Catalog</title>
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
<span class="text-xs px-2 py-0.5 rounded-full bg-secondary/10 text-secondary border border-secondary/20">PRODUCT CATALOG</span>
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
<a href="{{ route('admin.products') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-surface-container-high text-primary border border-white/10 shadow-sm font-semibold">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-secondary">verified</span>
<span>Products</span>
</div>
<span class="text-xs font-mono text-emerald-400 font-bold">{{ number_format($products->count()) }}</span>
</a>
<a href="{{ route('admin.carts') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-high/40 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px]">shopping_cart</span>
<span>Active Carts</span>
</div>
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

<!-- HEADER & ACTIONS -->
<div class="flex flex-wrap items-center justify-between gap-4">
<div>
<h1 class="text-2xl font-bold text-primary tracking-tight">Product Catalog Management</h1>
<p class="text-sm text-on-surface-variant">View, create and remove products in the marketplace catalog.</p>
</div>

<div class="flex items-center gap-3">
<form action="{{ route('admin.products') }}" method="GET" class="relative">
  <input type="text" name="search" value="{{ request('search') }}" placeholder="Search product..." class="pl-9 pr-4 py-2 text-sm bg-surface-container-high/60 border border-white/10 rounded-lg text-primary placeholder-on-surface-variant focus:outline-none focus:border-white/30"/>
  <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-[18px] text-on-surface-variant">search</span>
</form>

<button onclick="document.getElementById('addProductModal').classList.remove('hidden')" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold hover:bg-primary-fixed transition-all text-sm flex items-center gap-1.5">
  <span class="material-symbols-outlined text-[18px]">add</span> Add Product
</button>
</div>
</div>

<!-- PRODUCTS GRID TABLE (SCROLLABLE CONTAINER) -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="flex items-center justify-between border-b border-white/10 pb-3">
  <div class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Catalog Inventory ({{ $products->count() }} Total)</div>
  <div class="text-xs text-outline font-mono">Scroll to view all items ↓</div>
</div>

<div class="max-h-[380px] overflow-y-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead class="sticky top-0 z-10 bg-surface-container-high/90 backdrop-blur-md">
<tr class="border-b border-white/10 text-xs font-semibold text-on-surface-variant">
<th class="py-3 px-3">Product Name</th>
<th class="py-3 px-3">Category</th>
<th class="py-3 px-3">SKU</th>
<th class="py-3 px-3">Price</th>
<th class="py-3 px-3">Stock</th>
<th class="py-3 px-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5 text-sm">
@forelse($products as $p)
<tr class="hover:bg-white/[0.02] transition-colors">
<td class="py-3.5 px-3 font-medium text-primary">
  <a href="{{ route('product.index', $p->id) }}" target="_blank" class="hover:underline">{{ $p->name }}</a>
</td>
<td class="py-3.5 px-3 text-on-surface-variant text-xs">{{ $p->category->name ?? 'Uncategorized' }}</td>
<td class="py-3.5 px-3 font-mono text-xs text-primary">{{ $p->sku }}</td>
<td class="py-3.5 px-3 font-mono text-emerald-400 font-semibold">₹{{ number_format($p->price, 2) }}</td>
<td class="py-3.5 px-3 font-mono text-secondary">{{ $p->stock }}</td>
<td class="py-3.5 px-3 text-right flex items-center justify-end gap-2">
  <a href="{{ route('product.index', $p->id) }}" target="_blank" class="p-1.5 rounded bg-surface-container-lowest border border-white/10 text-on-surface-variant hover:text-primary transition-colors" title="View Product">
    <span class="material-symbols-outlined text-[18px]">visibility</span>
  </a>
  <form action="{{ route('admin.products.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-1.5 rounded bg-error-container/20 text-error hover:bg-error-container/40 transition-colors" title="Delete Product">
      <span class="material-symbols-outlined text-[18px]">delete</span>
    </button>
  </form>
</td>
</tr>
@empty
<tr>
<td colspan="6" class="text-center py-6 text-on-surface-variant">No products found in database.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>

</main>
</div>

<!-- ADD PRODUCT MODAL -->
<div id="addProductModal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center hidden">
  <div class="bg-surface-container-high border border-white/10 p-6 rounded-xl w-full max-w-lg space-y-4">
    <div class="flex justify-between items-center">
      <h3 class="text-lg font-bold text-primary">Add New Product</h3>
      <button onclick="document.getElementById('addProductModal').classList.add('hidden')" class="text-on-surface-variant hover:text-primary">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <form action="{{ route('admin.products.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Product Title</label>
        <input type="text" name="name" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div class="grid grid-cols-2 gap-3">
        <div>
          <label class="block text-xs font-semibold text-on-surface-variant mb-1">Category</label>
          <select name="category_id" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary">
            @foreach($categories as $cat)
              <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label class="block text-xs font-semibold text-on-surface-variant mb-1">Price (₹)</label>
          <input type="number" step="0.01" name="price" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
        </div>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Stock Quantity</label>
        <input type="number" name="stock" value="10" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Description</label>
        <textarea name="description" rows="3" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"></textarea>
      </div>
      <div class="flex justify-end gap-2 pt-2">
        <button type="button" onclick="document.getElementById('addProductModal').classList.add('hidden')" class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-sm">Cancel</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold text-sm">Create Product</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
