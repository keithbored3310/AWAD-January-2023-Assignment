<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drink;

class DrinkCategory extends Model
{
    use HasFactory;
    public function getDrinkCategory(){
        return $this->hasOne(DrinkCategory::class);
    }
}
