<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name (optional)
    // protected $table = 'products';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'price',
        'description',
        'categorie_id', // Foreign key to the categories table
    ];

    /**
     * Define the relationship with the Categorie model.
     * Each product belongs to one category.
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
