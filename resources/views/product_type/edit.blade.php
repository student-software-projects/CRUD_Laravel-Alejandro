
@extends('layouts.app')
@section('content')

    <div class="card col-lg-3 mx-auto my-4">
        <div class="card-header">Registro tipo de producto</div>
        <div class="card-body">
            <form action="{{ route( 'product_type.update' ,$product_type->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group"><input class="form-control" value="{{ $product_type->name  }}" type="text" name="name" id="name" placeholder="Tipo de producto" required autofocus maxlength="25"></div>
                <div class="form-group"><input class="form-control" value="{{ $product_type->name  }}" type="text" name="name" id="name" placeholder="Tipo de producto" required autofocus maxlength="25"></div>
                <button class=" btn btn-primary" type="submit" name="submit">Enviar</button>
                <a href="{{   route('product_type.index')  }}" class="btn btn-primary">Cancelar</a>
            </form>
        </div><!-- fin card body -->
    </div><!-- fin de card --> <br><br><br><br>
@endsection

