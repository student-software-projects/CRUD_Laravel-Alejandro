<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // GET
    public function index(){
        //SELECT * FROM entidad
        $companies =  Company::all();
        return view('company.index', compact( 'companies'));
       /// return 'hola mundo desde compañia';
    }

    //GET
    public function create (){
        return view('company.create');
    }

    public function store (Request $request)
    {
       // return $request->all();
        // Crea empresa
        Company::create($request->all());
        return redirect()->route('company.index');
    }

    public function destroy($id){
        //return $id;
        // SELECT * FROM entidad WHERE ID = ?
        // true = DELETE FROM ENTIDAD WHERE ID = ?
        Company::find($id)->delete();
        return redirect()->route('company.index');
    }

    public function show($id){
        $company=Company::find($id);
        return  view('company.show', compact( 'company' ));
    }

    public function edit($id){
        $company=Company::find($id);
        return view('company.edit',compact('company'));
    }

    public function update(Request $request, $id){
        $company=Company::find($id)->update($request->all());
        return redirect()->route('company.index');
    }



}
