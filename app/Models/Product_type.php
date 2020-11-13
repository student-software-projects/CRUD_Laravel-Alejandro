<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Product_type extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
        ];

    public function products(){
        return $this->hasMany(Products::class);
    }

    /// compañia y tipo de producto belonch to


}
