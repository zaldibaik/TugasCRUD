<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name'];

    public function filem()
    {
        return $this->hasMany(filem::class);
    }
}
