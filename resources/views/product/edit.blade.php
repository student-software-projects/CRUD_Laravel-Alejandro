@extends('layouts.app')
@section('content')

    <div class="card col-lg-3 mx-auto my-4">
        <div class="card-header">Registro tipo de producto</div>
        <div class="card-body">
            <form action="{{ route('product.update',$products->id) }}" method="post">
                @csrf
                @method('PUT')

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
                        @foreach($product_type as $product_types)
                            <option value="{{ $product_types->id }}">{{ $product_types->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input name="name" id="name" type="text" class="form-control" value=" {{ $products->name   }}">
                </div>

                <div class="form-group">
                    <label for="description">Descripción del producto</label>
                    <input name="description" id="description" type="text" class="form-control" value=" {{ $products->description   }}" >
                </div>
                <div class="form-group">
                    <label for="price">precio</label>
                    <input name="price" id="price" type="text" class="form-control" value=" {{ $products->price   }}">
                </div>
                <hr>
                <button type="submit" class="col-lg-8 btn  btn-primary">GUARDAR</button>
                <a href="{{  route('product.index')  }}" class="btn btn-primary">Cancelar</a>
            </form>
        </div><!-- fin card body -->
    </div><!-- fin de card --> <br><br><br><br>
@endsection

