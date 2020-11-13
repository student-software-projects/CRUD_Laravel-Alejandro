
@extends('layouts.app')
@section('content')

<div class="container-fluid col-md col-xl-6 my-4">
    <div class="row">

        <!-- inicia segunda divicion -->
        <div class="col-md-12 mx-auto  p-2 ">
            <a class="btn btn-success my-2 btn-sm" href=" {{ route('product_type.create') }}"> Registrar Tipo de producto</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>NOMBRE</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody class="table-light">
                    @foreach($product_types as $product_type)
                        <tr>
                            <td>{{ $product_type->name }}</td>
                            <td>{{ $product_type->created_at }}</td>
                            <td>
                                <form action="{{ route('product_type.destroy',$product_type->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('product_type.edit',$product_type->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    <a href="{{ route('product_type.show',$product_type->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div><!-- fin de div col table -->
    </div><!-- fin de row -->
</div><!-- Fin container -->


@endsection
