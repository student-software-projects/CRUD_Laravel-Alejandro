<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;


class Company extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='companies';
    protected $fillable=
        [
            'name',
            'NIT',
            'address',
        ];


    public function products(){
        return $this->hasMany(Products::class);
    }
}
