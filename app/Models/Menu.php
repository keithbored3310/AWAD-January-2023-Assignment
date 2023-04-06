<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Cart;

class Menu extends Model
{
    use HasFactory;
    public function getCategory(){
        return $this->hasOne(Menu::class);
    }
    public function getCartMany(){
        return $this->belongsToMany(Menu::class);
    }
}
