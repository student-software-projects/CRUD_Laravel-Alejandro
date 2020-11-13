<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product_type;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller{
    //
    public function index(){
        $product_types=Product_type::all();
        return view('product_type.index',compact('product_types'));
    }
    //GET
    public function create(){
        return view('product_type.create');
    }

    public function store(Request $request){

        Product_Type::create($request->all());
        return redirect()->route('product_type.index');
    }

    public function destroy($id){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Product_Type::find($id)->delete();
        return redirect()->route('product_type.index');
    }

    public function edit($id){
        $product_type = Product_Type::findOrFail($id);
        return view('product_type.edit', compact('product_type'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Product_Type::where('id', '=', $id)->update($datosexception);

        return redirect('product_type')->with('edit', 'Empresa Actualizada');

    }

    public function show($id){
        $product_type = Product_Type::find($id);
        return view('product_type.show', compact('product_type'));
    }


}
