<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroCard extends Model
{
    protected $table = 'hero_cards';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
