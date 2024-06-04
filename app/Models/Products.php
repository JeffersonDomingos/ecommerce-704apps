<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'price', 
        'vlwidth', 
        'vlheigth', 
        'vllength', 
        'vlweigth',
        'image',
        'category_id'
    ];

    public function category() {

        return $this->belongsTo(Category::class);

    }
}
