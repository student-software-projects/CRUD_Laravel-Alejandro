<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Product_type;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'product_type_id',
        'company_id'
    ];


    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function product_type(){
        return $this->belongsTo(Product_Type::class);
    }




}
