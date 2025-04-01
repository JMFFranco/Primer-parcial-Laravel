<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_name",
        "category_number",
        "category_price",
        "category_state",
    ];

    function computers(){
        return $this->hasMany(Computer::class, "fk_category_computer");
    }
}
