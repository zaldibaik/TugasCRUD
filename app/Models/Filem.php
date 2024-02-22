<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filem extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    protected $table = 'filem';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
