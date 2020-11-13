

@extends('layouts.app')
@section('content')


    <container>
        <div class="my-4 card card-body text-center col-lg-3 mx-auto">
            <h3>Detalle</h3>
        </div>
        <div class="row my-4">
            <div class="col-md-4 mx-auto">
                <div class="table-responsive ">
                    <table class="table table-bordered  table-striped bg-white table-sm mx-auto   text-center  mx-auto">
                        <tr>
                            <th class="bg-dark text-white" >Id</th>
                            <td>{{  $product_type->id  }}</td>
                        </tr>
                        <tr>
                            <th class="bg-dark text-white">Name</th>
                            <td>{{ $product_type->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </container>


@endsection
