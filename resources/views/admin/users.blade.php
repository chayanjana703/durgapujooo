<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART Admin - User Registry</title>
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
<span class="text-xs px-2 py-0.5 rounded-full bg-secondary/10 text-secondary border border-secondary/20">USER GOVERNANCE</span>
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
<a href="{{ route('admin.users') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-surface-container-high text-primary border border-white/10 shadow-sm font-semibold">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-secondary">group</span>
<span>User Registry</span>
</div>
<span class="text-xs font-mono text-emerald-400 font-bold">{{ number_format($users->total()) }}</span>
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

<!-- HEADER & SEARCH -->
<div class="flex flex-wrap items-center justify-between gap-4">
<div>
<h1 class="text-2xl font-bold text-primary tracking-tight">Registered User Registry</h1>
<p class="text-sm text-on-surface-variant">Manage Buyer & Seller member accounts in the database.</p>
</div>

<div class="flex items-center gap-3">
<!-- Role Filter Chips -->
<div class="flex items-center gap-1 bg-surface-container-high/60 border border-white/10 p-1 rounded-lg text-xs">
  <a href="{{ route('admin.users') }}" class="px-2.5 py-1 rounded {{ !request('role') ? 'bg-primary text-background font-semibold' : 'text-on-surface-variant hover:text-primary' }}">All ({{ $users->total() }})</a>
  <a href="{{ route('admin.users', ['role' => 'buyer']) }}" class="px-2.5 py-1 rounded {{ request('role') == 'buyer' ? 'bg-secondary text-background font-semibold' : 'text-on-surface-variant hover:text-primary' }}">Buyers ({{ $buyerCount }})</a>
  <a href="{{ route('admin.users', ['role' => 'seller']) }}" class="px-2.5 py-1 rounded {{ request('role') == 'seller' ? 'bg-emerald-400 text-background font-semibold' : 'text-on-surface-variant hover:text-primary' }}">Sellers ({{ $sellerCount }})</a>
</div>

<form action="{{ route('admin.users') }}" method="GET" class="relative">
  @if(request('role'))
    <input type="hidden" name="role" value="{{ request('role') }}"/>
  @endif
  <input type="text" name="search" value="{{ request('search') }}" placeholder="Search user..." class="pl-9 pr-4 py-2 text-sm bg-surface-container-high/60 border border-white/10 rounded-lg text-primary placeholder-on-surface-variant focus:outline-none focus:border-white/30"/>
  <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-[18px] text-on-surface-variant">search</span>
</form>

<button onclick="document.getElementById('addUserModal').classList.remove('hidden')" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold hover:bg-primary-fixed transition-all text-sm flex items-center gap-1.5">
  <span class="material-symbols-outlined text-[18px]">add</span> Add User
</button>
</div>
</div>

<!-- USERS TABLE -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-white/10 text-xs font-semibold text-on-surface-variant">
<th class="py-3 px-3">ID</th>
<th class="py-3 px-3">User Name</th>
<th class="py-3 px-3">Email Address</th>
<th class="py-3 px-3">Role</th>
<th class="py-3 px-3">Registered Date</th>
<th class="py-3 px-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5 text-sm">
@forelse($users as $u)
<tr class="hover:bg-white/[0.02] transition-colors">
<td class="py-3.5 px-3 font-mono text-primary text-xs">#USR-{{ str_pad($u->id, 5, '0', STR_PAD_LEFT) }}</td>
<td class="py-3.5 px-3 font-medium text-primary">{{ $u->name }}</td>
<td class="py-3.5 px-3 font-mono text-on-surface-variant">{{ $u->email }}</td>
<td class="py-3.5 px-3">
  @if($u->role == 'seller')
    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/10 border border-emerald-500/30 text-emerald-400">
      <span class="material-symbols-outlined text-[13px]">storefront</span> Seller
    </span>
  @else
    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-secondary/10 border border-secondary/30 text-secondary">
      <span class="material-symbols-outlined text-[13px]">person</span> Buyer
    </span>
  @endif
</td>
<td class="py-3.5 px-3 text-on-surface-variant text-xs">{{ $u->created_at ? $u->created_at->format('M d, Y') : 'N/A' }}</td>
<td class="py-3.5 px-3 text-right">
  <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-1.5 rounded bg-error-container/20 text-error hover:bg-error-container/40 transition-colors" title="Delete User">
      <span class="material-symbols-outlined text-[18px]">delete</span>
    </button>
  </form>
</td>
</tr>
@empty
<tr>
<td colspan="6" class="text-center py-6 text-on-surface-variant">No user accounts found.</td>
</tr>
@endforelse
</tbody>
</table>
</div>

<div class="pt-4 border-t border-white/5">
  {{ $users->links() }}
</div>
</div>

</main>
</div>

<!-- ADD USER MODAL -->
<div id="addUserModal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center hidden">
  <div class="bg-surface-container-high border border-white/10 p-6 rounded-xl w-full max-w-md space-y-4">
    <div class="flex justify-between items-center">
      <h3 class="text-lg font-bold text-primary">Add New User Account</h3>
      <button onclick="document.getElementById('addUserModal').classList.add('hidden')" class="text-on-surface-variant hover:text-primary">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Full Name</label>
        <input type="text" name="name" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Email Address</label>
        <input type="email" name="email" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Account Category / Role</label>
        <select name="role" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary">
          <option value="buyer">Buyer Account</option>
          <option value="seller">Seller Account</option>
        </select>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Password</label>
        <input type="password" name="password" required minlength="6" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div class="flex justify-end gap-2 pt-2">
        <button type="button" onclick="document.getElementById('addUserModal').classList.add('hidden')" class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-sm">Cancel</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold text-sm">Create Account</button>
      </div>
    </form>
  </div>
</div>
        <button type="button" onclick="document.getElementById('addUserModal').classList.add('hidden')" class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-sm">Cancel</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold text-sm">Create User</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
