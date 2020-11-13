

@extends('layouts.app')
@section('content')


    <container>
        <div class="my-4 card card-body text-center col-lg-3 mx-auto">
            <h3>Detalle</h3>
        </div>
        <div class="row my-4">
            <div class="col-md-8 mx-auto  p-2 ">

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

                        @endforeach
                        </tbody>


                </table>
            </div><!-- fin de div col table -->
            </div>
            </div>
        </div>
    </container>


@endsection
