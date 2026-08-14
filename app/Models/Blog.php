<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'image_alt',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
