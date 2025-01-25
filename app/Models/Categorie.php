<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name (optional)
    // protected $table = 'categories';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Define the relationship with the Product model.
     * A category can have many products.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}