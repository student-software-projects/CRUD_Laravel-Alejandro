
@extends('layouts.app')
@section('content')

    <div class="container-fluid col-md col-xl-6 my-4">
        <div class="row">

            <!-- inicia segunda divicion -->
            <div class="col-md-12 mx-auto  p-2 ">
                <a class="btn btn-success my-2 btn-sm" href=" {{ route('product.create') }}"> Registrar Tipo de producto</a>
                <table class="table table-bordered  table-striped bg-white table-sm mx-auto   text-center">
                    <thead>

                    <tr>
                        <th>ID Producto</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Tipo producto</th>
                        <th>Compañia</th>
                        <th>Fecha creacion</th>
                        <th>Fecha actualizacion</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    @foreach($products as $product)

                        <tbody>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->company->name }}</td>
                        <td>{{ $product->product_type->name }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <form action="{{  route( 'product.destroy', $product->id ) }}"  method="post"  >
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <button type="submit" class="btn btn-sm  btn-danger" >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        @endforeach
                        </tbody>


                </table>
            </div><!-- fin de div col table -->
        </div><!-- fin de row -->
    </div><!-- Fin container -->


@endsection
