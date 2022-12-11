<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable = [
    'category_id',
    'subcategory_id',
    'name',
    'seoname',
    'collection_image_alt',
    'feature_image_alt',
    'cta_image_alt',
    'page_indexing',
    'schema_script',
    'title',
    'slug',
    'short_description',
    'long_description',
    'sort_order', 
    'status', 
    'whyus_title', 
    'whyus_desc', 
    'background_title',
    'background_desc',
    'best_seller_product', 
    'is_deleted', 
    'created_at',
    'created_by', 
    'collection_image', 
    'collection_image_path',
    'whyus_title',
    'whyus_desc',
    'background_title',
    'background_desc',
  ];
    use HasFactory;
}
