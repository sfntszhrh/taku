<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description', 'image', 'lat', 'long'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
