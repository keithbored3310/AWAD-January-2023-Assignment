<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class order extends Model
{
    use HasFactory;
    protected $table = 'bobaorder';
    protected $fillable = ['name', 'date', 'status', 'paid'];
    public function getCart(){
        return $this->hasOne(order::class);
    }
}
