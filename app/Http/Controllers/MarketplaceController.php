<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\HeroCard;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->orderBy('sort_order')->get();
        $heroCards = HeroCard::where('status', 1)->orderBy('sort_order')->get();
        $featuredProducts = Product::with(['category', 'images', 'reviews'])
            ->where('status', 1)
            ->where('featured', 1)
            ->get();

        if ($featuredProducts->isEmpty()) {
            $featuredProducts = Product::with(['category', 'images', 'reviews'])
                ->where('status', 1)
                ->take(8)
                ->get();
        }

        $allProducts = Product::with(['category', 'images', 'reviews'])
            ->where('status', 1)
            ->latest()
            ->get();

        return view('marketplace.index', compact('categories', 'heroCards', 'featuredProducts', 'allProducts'));
    }

    public function shop(Request $request)
    {
        $query = Product::with(['category', 'images', 'reviews'])->where('status', 1);

        // 1. Category Filter
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // 2. Search Keyword Filter
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // 3. Price Filter
        if ($request->filled('min_price')) {
            $query->where('price', '>=', (float)$request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', (float)$request->max_price);
        }

        // 4. Rating Filter
        if ($request->filled('rating')) {
            $rating = (float)$request->rating;
            $query->whereHas('reviews', function ($q) use ($rating) {
                $q->select('product_id')
                  ->groupBy('product_id')
                  ->havingRaw('AVG(rating) >= ?', [$rating]);
            });
        }

        // 5. Sorting (Price low-high, high-low, newest, etc.)
        $sort = $request->input('sort', 'rec');
        switch ($sort) {
            case 'asc':
                $query->orderBy('price', 'asc');
                break;
            case 'desc':
                $query->orderBy('price', 'desc');
                break;
            case 'new':
                $query->orderBy('created_at', 'desc');
                break;
            case 'rating':
                $query->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating', 'desc');
                break;
            case 'rec':
            default:
                $query->orderBy('featured', 'desc')->latest();
                break;
        }

        $products = $query->get();
        $categories = Category::where('status', 1)->get();

        $minPriceBound = Product::where('status', 1)->min('price') ?? 0;
        $maxPriceBound = Product::where('status', 1)->max('price') ?? 500000;

        return view('shop.index', compact('products', 'categories', 'minPriceBound', 'maxPriceBound'));
    }

    public function product($id = null)
    {
        if ($id) {
            $product = Product::with(['category', 'images', 'reviews', 'specifications', 'faqs'])->find($id);
        } else {
            $product = Product::with(['category', 'images', 'reviews', 'specifications', 'faqs'])->first();
        }

        if (!$product) {
            abort(404);
        }

        $relatedProducts = Product::with(['category', 'images', 'reviews'])
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('product.index', compact('product', 'relatedProducts'));
    }

    public function checkout()
    {
        $products = Product::with(['images'])->where('status', 1)->take(3)->get();
        return view('checkout.index', compact('products'));
    }
}
