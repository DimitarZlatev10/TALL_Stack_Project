<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'excerpt', 'body', 'category_id', 'price'];

    protected $with = ['category'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
