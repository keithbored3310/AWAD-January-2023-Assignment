<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DrinkCategory;

class Drink extends Model
{
    use HasFactory;
    public function getDrinkCategory(){
        return $this->hasOne(Drink::class);
    }
}
