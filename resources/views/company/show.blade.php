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
                        <th class="bg-primary text-white" >Nombre</th>
                        <td>{{  $company->name  }}</td>
                    </tr>
                    <tr>
                        <th class="bg-primary text-white">NIT</th>
                        <td>{{ $company->NIT }}</td>
                    </tr>
                    <tr>
                        <th class="bg-primary text-white">Direccion</th>
                        <td>{{ $company->address }}</td>
                    </tr>
                    <tr>
                        <th class="bg-primary text-white">Creaccion</th>
                        <td>{{ $company->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="bg-primary text-white">Actualizacion</th>
                        <td>{{ $company->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</container>


@endsection
