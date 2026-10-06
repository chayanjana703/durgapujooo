<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id')->where('is_primary', 1);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }

    public function specifications()
    {
        return $this->hasMany(ProductSpecification::class, 'product_id');
    }

    public function faqs()
    {
        return $this->hasMany(ProductFaq::class, 'product_id');
    }

    public function getAverageRatingAttribute()
    {
        return round($this->reviews()->avg('rating') ?? 4.8, 1);
    }

    public function getDisplayImageAttribute()
    {
        $primary = $this->images->where('is_primary', 1)->first() ?? $this->images->first();
        if ($primary && !empty($primary->image)) {
            $img = $primary->image;
            if (str_contains($img, 'http://') || str_contains($img, 'https://')) {
                return $img;
            }
            return '/' . ltrim($img, '/');
        }
        return 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&q=80';
    }
}
