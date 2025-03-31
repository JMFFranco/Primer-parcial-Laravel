<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $fillable = [
    "computer_brand",
    "computer_model",
    "computer_price",
    "computer_ram_size",
    "computer_is_laptop",
    ];
}
