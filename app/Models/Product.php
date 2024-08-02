<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];


    
    // Correct the method name to "categories"
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    
}