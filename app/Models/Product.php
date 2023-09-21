<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
        'name',
        'tag_id',
        'category_id',
        'description',
        'short_description',
        'price',
        'sale_price',
        'is_active',
        'is_featured',
        'is_bestseller',
        'is_new',
        'is_top',
        'is_sale',
        'is_hot',
        'is_available',
        'is_in_stock',
        'is_out_of_stock',
        'is_upcoming',
        'is_exclusive',
        'is_trending',
        'is_discount',
        'is_taxable',
        'is_promoted',
        'is_verified',
        'is_approved',
        'is_draft',
        'is_published',
        'is_private',
        'is_recommended',
        'is_popular',
        'sku',
        'barcode',
        'mpn',
        'gtin',
        'model',
        'image',
        'images',
        'thumbnail',
        'gallery',
        'video',
        'pdf',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];


    protected $casts = [
        'tag_id' => 'array',
    ];



    public function category()
    {
        return $this->belongsTo(Product::class, 'category_id');
    }


    public function tag()
    {
        return $this->belongsTo(Product::class, 'tag_id');
    }
}
