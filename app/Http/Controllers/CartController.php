<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    private function getCartQuery()
    {
        $sessionId = session()->getId();
        $userId = Auth::id();

        return Cart::where(function ($query) use ($sessionId, $userId) {
            if ($userId) {
                $query->where('user_id', $userId)->orWhere('session_id', $sessionId);
            } else {
                $query->where('session_id', $sessionId);
            }
        });
    }

    public function index()
    {
        $cartItems = $this->getCartQuery()->get();
        foreach ($cartItems as $item) {
            $product = null;
            if ($item->product_id) {
                $product = Product::find($item->product_id);
            }
            if (!$product && $item->title) {
                $shortTitle = trim(explode('(', $item->title)[0]);
                $product = Product::where('name', $item->title)->first()
                    ?? Product::where('name', 'like', '%' . $shortTitle . '%')->first();
            }

            if ($product) {
                if (!$item->product_id) {
                    $item->product_id = $product->id;
                }
                $item->image_path = $product->display_image;
                $item->save();
            }
        }
        $total = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });
        $count = $cartItems->sum('quantity');

        return response()->json([
            'success' => true,
            'items' => $cartItems,
            'total' => $total,
            'count' => $count,
            'formatted_total' => '₹' . number_format($total, 2)
        ]);
    }

    public function add(Request $request)
    {
        $sessionId = session()->getId();
        $userId = Auth::id();

        $productId = $request->input('product_id');
        $title = $request->input('title');
        $price = $request->input('price');
        $imagePath = $request->input('image_path');
        $qty = (int)$request->input('quantity', 1);

        if ($productId) {
            $product = Product::find($productId);
            if ($product) {
                $title = $product->name;
                $price = $product->price;
                $imagePath = $product->display_image;
            }
        } elseif ($title) {
            $shortTitle = trim(explode('(', $title)[0]);
            $product = Product::where('name', $title)->first()
                ?? Product::where('name', 'like', '%' . $shortTitle . '%')->first();
            if ($product) {
                $productId = $product->id;
                $title = $product->name;
                $price = $product->price;
                $imagePath = $product->display_image;
            }
        }

        $existing = $this->getCartQuery()
            ->where(function ($q) use ($productId, $title) {
                if ($productId) {
                    $q->where('product_id', $productId);
                } else {
                    $q->where('title', $title);
                }
            })->first();

        if ($existing) {
            $existing->quantity += $qty;
            if ($imagePath) {
                $existing->image_path = $imagePath;
            }
            if ($userId && !$existing->user_id) {
                $existing->user_id = $userId;
            }
            $existing->save();
        } else {
            Cart::create([
                'session_id' => $sessionId,
                'user_id' => $userId,
                'product_id' => $productId,
                'title' => $title ?? 'Marketplace Product',
                'price' => $price ?? 0,
                'image_path' => $imagePath ?? '',
                'quantity' => $qty,
            ]);
        }

        return $this->index();
    }

    public function update(Request $request, $id)
    {
        $cartItem = $this->getCartQuery()->where('id', $id)->first();
        if ($cartItem) {
            $qty = (int)$request->input('quantity', 1);
            if ($qty > 0) {
                $cartItem->quantity = $qty;
                $cartItem->save();
            } else {
                $cartItem->delete();
            }
        }

        return $this->index();
    }

    public function remove($id)
    {
        $this->getCartQuery()->where('id', $id)->delete();
        return $this->index();
    }

    public function clear()
    {
        $this->getCartQuery()->delete();
        return $this->index();
    }
}
