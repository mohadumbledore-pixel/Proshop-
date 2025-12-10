<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Champs autorisés pour la création en masse
    protected $fillable = [
        'name',
        'price',
        'details',
        'image',];
}
