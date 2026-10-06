<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // Executive Metrics
        $totalUserCount = User::count();
        $totalProductCount = Product::count();
        $totalCategoryCount = Category::count();
        $totalCartCount = Cart::count();

        // Calculate Gross GMV from products & carts
        $cartGmv = Cart::sum(DB::raw('price * quantity'));
        $totalCatalogValue = Product::sum(DB::raw('price * stock'));
        
        // Dynamic Categories with product count and total catalog value
        $categories = Category::withCount('products')
            ->with(['products'])
            ->get()
            ->map(function ($cat) {
                $catValue = $cat->products->sum('price');
                $cat->total_value = $catValue;
                return $cat;
            });

        $totalCategoryValueSum = $categories->sum('total_value') ?: 1;
        foreach ($categories as $cat) {
            $cat->percentage = round(($cat->total_value / $totalCategoryValueSum) * 100);
        }

        // Recent Carts / Transaction Ledger
        $recentTransactions = Cart::with(['user', 'product.category'])
            ->latest()
            ->take(10)
            ->get();

        // Moderate / New Products
        $recentProducts = Product::with('category')
            ->latest()
            ->take(6)
            ->get();

        // Recent Users
        $recentUsers = User::latest()
            ->take(5)
            ->get();

        return view('admin.index', compact(
            'totalUserCount',
            'totalProductCount',
            'totalCategoryCount',
            'totalCartCount',
            'cartGmv',
            'totalCatalogValue',
            'categories',
            'recentTransactions',
            'recentProducts',
            'recentUsers'
        ));
    }

    // 1. User Management View & Actions
    public function users(Request $request)
    {
        $query = User::latest();
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }
        $users = $query->paginate(15);
        $buyerCount = User::where('role', 'buyer')->count();
        $sellerCount = User::where('role', 'seller')->count();

        return view('admin.users', compact('users', 'buyerCount', 'sellerCount'));
    }

    public function userStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:buyer,seller',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return back()->with('success', 'User created successfully!');
    }

    public function userDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success', 'User removed successfully!');
    }

    // 2. Product Management View & Actions
    public function products(Request $request)
    {
        $query = Product::with('category')->latest();
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('sku', 'like', "%{$search}%");
        }
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
        $products = $query->get();
        $categories = Category::where('status', 1)->get();

        return view('admin.products', compact('products', 'categories'));
    }

    public function productStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = \Str::slug($validated['name']) . '-' . rand(100, 999);
        $validated['sku'] = 'SKU-' . strtoupper(\Str::random(8));
        $validated['status'] = 1;

        Product::create($validated);

        return back()->with('success', 'Product added to catalog successfully!');
    }

    public function productDestroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return back()->with('success', 'Product deleted from catalog!');
    }

    // 3. Category Management View & Actions
    public function categories()
    {
        $categories = Category::withCount('products')->orderBy('sort_order')->get();
        return view('admin.categories', compact('categories'));
    }

    public function categoryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'icon_emoji' => 'nullable|string|max:10',
        ]);

        $validated['slug'] = \Str::slug($validated['name']);
        $validated['sort_order'] = Category::max('sort_order') + 1;
        $validated['status'] = 1;

        Category::create($validated);

        return back()->with('success', 'Category created successfully!');
    }

    public function categoryUpdate(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'icon_emoji' => 'nullable|string|max:10',
            'sort_order' => 'nullable|integer',
        ]);

        if (empty($validated['title'])) {
            $validated['title'] = ($validated['icon_emoji'] ?? '') . ' ' . $validated['name'];
        }

        $category->update($validated);

        return back()->with('success', 'Category updated successfully!');
    }

    public function categoryDestroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success', 'Category deleted successfully!');
    }

    public function categoryProducts($id)
    {
        $category = Category::with('products')->findOrFail($id);
        $allCategories = Category::where('id', '!=', $id)->get();
        $unassignedProducts = Product::whereNull('category_id')->get();

        return response()->json([
            'category' => $category,
            'products' => $category->products,
            'other_categories' => $allCategories,
            'unassigned_products' => $unassignedProducts,
        ]);
    }

    public function categoryProductMove(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'target_category_id' => 'nullable|exists:categories,id',
        ]);

        $product = Product::findOrFail($validated['product_id']);
        $product->category_id = $validated['target_category_id'];
        $product->save();

        return back()->with('success', 'Product category re-assigned successfully!');
    }

    // 4. Cart / Order Ledger View & Actions
    public function carts()
    {
        $carts = Cart::with(['user', 'product.category'])->latest()->paginate(15);
        return view('admin.carts', compact('carts'));
    }

    public function cartDestroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return back()->with('success', 'Cart item removed successfully!');
    }
}
