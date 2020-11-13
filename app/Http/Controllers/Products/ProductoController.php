<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product_type;
use App\Models\Products;

class ProductoController extends Controller
{
        public function index(){
            $products=Products::all();
            return view('product.index',compact('products'));
        }



    public function create(){
        $companies=Company::all();
        $product_types=Product_type::all();
        return view('product.create',compact('companies','product_types'));
    }
    public function store(Request $request){
        $product=Products::create($request->all());
        return self::show();
      //  return redirect()->route('product.index');
      //  return $product;
    }

    public function show(){
        $products = Products::get();
        $companies = Company::get();
        $product_type = product_type::get();
        return view('product.show', compact('products','companies', 'product_type'));
    }

    public  function destroy($id){
        Products::find($id)->delete();
        return self::show();
    }


    public function edit($id){
        $products = Products::findOrFail($id);
        $companies = Company::all();
        $product_type = product_type::all();
        return view('product.edit', compact('products', 'companies', 'product_type'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Products::where('id', '=', $id)->update($datosexception);

        return redirect('product')->with('edit', 'Empresa Actualizada');

    }


}
