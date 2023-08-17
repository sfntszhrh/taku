<?php

namespace App\Helpers;

use App\Models\Category;

class Helpers {
    
    public function CategoryMenu()
    {
        $data = Category::all();
        return $data;
    }
}
