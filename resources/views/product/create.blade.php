
@extends('layouts.app')
@section('content')

<div class="container ">
    <div class="row">
        <div class="card card-body col-md-4 mx-auto">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="form-group mt-5">
                    <label for="company_id">Compañia</label>
                    <select name="company_id" id="company_id" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_type_id">Tipo de producto</label>
                    <select name="product_type_id" id="product_type_id" class="form-control">
                        <option value="">Seleccionar...</option>
                        @foreach($product_types as $product_type)
                            <option value="{{ $product_type->id }}">{{ $product_type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input name="name" id="name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Descripción del producto</label>
                    <input name="description" id="description" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">precio</label>
                    <input name="price" id="price" type="text" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR NUEVA PRODUCTO</button>
                <a href="{{ route('company.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@endsection

