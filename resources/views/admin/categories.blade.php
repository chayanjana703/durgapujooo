<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>UNCART Admin - Category Verticals</title>
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
<span class="text-xs px-2 py-0.5 rounded-full bg-secondary/10 text-secondary border border-secondary/20">CATEGORIES</span>
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
<a href="{{ route('admin.categories') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-lg bg-surface-container-high text-primary border border-white/10 shadow-sm font-semibold">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-[20px] text-secondary">storefront</span>
<span>Categories</span>
</div>
<span class="text-xs font-mono text-emerald-400 font-bold">{{ $categories->count() }}</span>
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

<!-- HEADER & ACTIONS -->
<div class="flex flex-wrap items-center justify-between gap-4">
<div>
<h1 class="text-2xl font-bold text-primary tracking-tight">Category Verticals</h1>
<p class="text-sm text-on-surface-variant">Manage product categories, edit details, and swap assigned products.</p>
</div>

<button onclick="document.getElementById('addCategoryModal').classList.remove('hidden')" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold hover:bg-primary-fixed transition-all text-sm flex items-center gap-1.5">
  <span class="material-symbols-outlined text-[18px]">add</span> Add Category
</button>
</div>

<!-- CATEGORIES GRID TABLE -->
<div class="glass-tier-1 p-6 rounded-xl space-y-4">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-white/10 text-xs font-semibold text-on-surface-variant">
<th class="py-3 px-3">Category Title</th>
<th class="py-3 px-3">Slug</th>
<th class="py-3 px-3">Assigned Products</th>
<th class="py-3 px-3">Sort Order</th>
<th class="py-3 px-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-white/5 text-sm">
@forelse($categories as $c)
@php
  // Strip duplicate emoji prefix if title already contains icon_emoji
  $cleanTitle = $c->title ?? $c->name;
  if (!empty($c->icon_emoji) && \Str::startsWith($cleanTitle, $c->icon_emoji)) {
      $cleanTitle = trim(mb_substr($cleanTitle, mb_strlen($c->icon_emoji)));
  }
@endphp
<tr class="hover:bg-white/[0.02] transition-colors">
<td class="py-3.5 px-3 font-medium text-primary flex items-center gap-2">
  <span class="text-lg">{{ $c->icon_emoji ?? '📁' }}</span>
  <span>{{ $cleanTitle }}</span>
</td>
<td class="py-3.5 px-3 font-mono text-xs text-on-surface-variant">{{ $c->slug }}</td>
<td class="py-3.5 px-3 font-mono text-emerald-400 font-semibold">
  <button onclick="openManageProductsModal({{ $c->id }}, '{{ addslashes($c->name) }}')" class="hover:underline flex items-center gap-1">
    <span>{{ $c->products_count }} Items</span>
    <span class="material-symbols-outlined text-[14px]">swap_horiz</span>
  </button>
</td>
<td class="py-3.5 px-3 font-mono text-secondary">{{ $c->sort_order }}</td>
<td class="py-3.5 px-3 text-right flex items-center justify-end gap-2">
  <button onclick="openEditCategoryModal({{ json_encode($c) }})" class="p-1.5 rounded bg-surface-container-lowest border border-white/10 text-on-surface-variant hover:text-primary transition-colors" title="Edit Category">
    <span class="material-symbols-outlined text-[18px]">edit</span>
  </button>
  <button onclick="openManageProductsModal({{ $c->id }}, '{{ addslashes($c->name) }}')" class="p-1.5 rounded bg-secondary/10 border border-secondary/30 text-secondary hover:bg-secondary/20 transition-colors" title="Swap / Move Products">
    <span class="material-symbols-outlined text-[18px]">swap_horiz</span>
  </button>
  <form action="{{ route('admin.categories.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-1.5 rounded bg-error-container/20 text-error hover:bg-error-container/40 transition-colors" title="Delete Category">
      <span class="material-symbols-outlined text-[18px]">delete</span>
    </button>
  </form>
</td>
</tr>
@empty
<tr>
<td colspan="5" class="text-center py-6 text-on-surface-variant">No categories found in database.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>

</main>
</div>

<!-- ADD CATEGORY MODAL -->
<div id="addCategoryModal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center hidden">
  <div class="bg-surface-container-high border border-white/10 p-6 rounded-xl w-full max-w-md space-y-4">
    <div class="flex justify-between items-center">
      <h3 class="text-lg font-bold text-primary">Add New Category</h3>
      <button onclick="document.getElementById('addCategoryModal').classList.add('hidden')" class="text-on-surface-variant hover:text-primary">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Category Name</label>
        <input type="text" name="name" required placeholder="e.g. Audio" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Emoji Icon</label>
        <input type="text" name="icon_emoji" placeholder="🎧" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Display Title</label>
        <input type="text" name="title" placeholder="e.g. Audio Gear & Sound" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div class="flex justify-end gap-2 pt-2">
        <button type="button" onclick="document.getElementById('addCategoryModal').classList.add('hidden')" class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-sm">Cancel</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold text-sm">Create Category</button>
      </div>
    </form>
  </div>
</div>

<!-- EDIT CATEGORY MODAL -->
<div id="editCategoryModal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center hidden">
  <div class="bg-surface-container-high border border-white/10 p-6 rounded-xl w-full max-w-md space-y-4">
    <div class="flex justify-between items-center">
      <h3 class="text-lg font-bold text-primary">Edit Category Details</h3>
      <button onclick="document.getElementById('editCategoryModal').classList.add('hidden')" class="text-on-surface-variant hover:text-primary">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <form id="editCategoryForm" method="POST" class="space-y-4">
      @csrf
      @method('PUT')
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Category Name</label>
        <input type="text" id="edit_name" name="name" required class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Emoji Icon</label>
        <input type="text" id="edit_icon_emoji" name="icon_emoji" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Display Title</label>
        <input type="text" id="edit_title" name="title" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-on-surface-variant mb-1">Sort Order</label>
        <input type="number" id="edit_sort_order" name="sort_order" class="w-full bg-surface-container-lowest border border-white/10 rounded-lg p-2 text-sm text-primary"/>
      </div>
      <div class="flex justify-end gap-2 pt-2">
        <button type="button" onclick="document.getElementById('editCategoryModal').classList.add('hidden')" class="px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant text-sm">Cancel</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-primary text-background font-semibold text-sm">Save Changes</button>
      </div>
    </form>
  </div>
</div>

<!-- MANAGE CATEGORY PRODUCTS & SWAP MODAL -->
<div id="manageProductsModal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center hidden">
  <div class="bg-surface-container-high border border-white/10 p-6 rounded-xl w-full max-w-2xl space-y-4 max-h-[85vh] overflow-y-auto">
    <div class="flex justify-between items-center border-b border-white/10 pb-3">
      <div>
        <h3 class="text-lg font-bold text-primary">Manage & Swap Products</h3>
        <p class="text-xs text-on-surface-variant" id="modalCategorySubTitle">Category Items</p>
      </div>
      <button onclick="document.getElementById('manageProductsModal').classList.add('hidden')" class="text-on-surface-variant hover:text-primary">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>

    <!-- CURRENT CATEGORY PRODUCTS LIST -->
    <div class="space-y-2">
      <h4 class="text-xs font-semibold uppercase text-secondary tracking-wider">Currently Assigned Products</h4>
      <div id="categoryProductsList" class="space-y-2">
        <div class="text-center py-4 text-xs text-on-surface-variant">Loading products...</div>
      </div>
    </div>

  </div>
</div>

<script>
function openEditCategoryModal(cat) {
    document.getElementById('editCategoryForm').action = '/admin/categories/' + cat.id;
    document.getElementById('edit_name').value = cat.name || '';
    document.getElementById('edit_icon_emoji').value = cat.icon_emoji || '';
    
    // Clean title for editing
    let title = cat.title || cat.name;
    if (cat.icon_emoji && title.startsWith(cat.icon_emoji)) {
        title = title.substring(cat.icon_emoji.length).trim();
    }
    document.getElementById('edit_title').value = title;
    document.getElementById('edit_sort_order').value = cat.sort_order || 1;
    
    document.getElementById('editCategoryModal').classList.remove('hidden');
}

function openManageProductsModal(catId, catName) {
    document.getElementById('modalCategorySubTitle').innerText = 'Re-assign or swap products for "' + catName + '"';
    const container = document.getElementById('categoryProductsList');
    container.innerHTML = '<div class="text-center py-4 text-xs text-on-surface-variant">Loading category products...</div>';
    document.getElementById('manageProductsModal').classList.remove('hidden');

    fetch('/admin/categories/' + catId + '/products')
        .then(res => res.json())
        .then(data => {
            let html = '';
            if (data.products.length === 0) {
                html = '<div class="p-4 rounded-lg bg-surface-container-lowest text-center text-xs text-on-surface-variant">No products currently assigned to this category.</div>';
            } else {
                data.products.forEach(prod => {
                    let selectOptions = '<option value="">Remove from Category (Unassign)</option>';
                    data.other_categories.forEach(oc => {
                        selectOptions += `<option value="${oc.id}">Move to ${oc.name}</option>`;
                    });

                    html += `
                    <div class="p-3 rounded-lg bg-surface-container-lowest border border-white/5 flex items-center justify-between gap-3">
                        <div>
                            <div class="text-sm font-medium text-primary">${prod.name}</div>
                            <div class="text-xs text-on-surface-variant font-mono">₹${parseFloat(prod.price).toLocaleString()} • Stock: ${prod.stock}</div>
                        </div>
                        <form action="/admin/categories/move-product" method="POST" class="flex items-center gap-2">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="product_id" value="${prod.id}"/>
                            <select name="target_category_id" class="bg-surface-container-high border border-white/10 text-xs rounded px-2 py-1 text-primary">
                                ${selectOptions}
                            </select>
                            <button type="submit" class="px-2 py-1 rounded bg-secondary text-background font-bold text-xs hover:bg-white transition-colors">Swap</button>
                        </form>
                    </div>`;
                });
            }

            container.innerHTML = html;
        })
        .catch(err => {
            container.innerHTML = '<div class="text-center py-4 text-xs text-error">Failed to load category products.</div>';
        });
}
</script>

</body>
</html>
