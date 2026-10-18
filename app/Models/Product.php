<?php

namespace App\Models;

use CategoryEnum;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable('name','price','category')]
class Product extends Model
{
  
}
