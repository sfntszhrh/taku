<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceFile extends Model
{
    use HasFactory;

    protected $fillable = ['place_id', 'image'];

    public function place()
    {
        return $this->belongsTo(PlaceFile::class, 'place_id');
    }
}
