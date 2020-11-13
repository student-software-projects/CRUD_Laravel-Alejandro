@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="row col-md-12">

        <div class="card-body">
            <a  href="{{ route( 'company.create' ) }}" class="btn btn-info" Crear nueva empresa>Crear nueva empresa</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered  table-striped bg-white table-sm mx-auto   text-center  mx-auto">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nit</th>
                    <th>Direccion</th>
                    <th>Fecha de creacion</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{  $company->name }}</td>
                        <td>{{  $company->NIT }}</td>
                        <td>{{  $company->address }}</td>
                        <td>{{  $company->created_at }}</td>
                        <td>
                            <form action="{{ route('company.destroy', $company->id )  }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('company.edit',$company->id) }}" class="btn  btn-warning">
                                    <i class="fas fa-marker"></i>
                                </a>

                                <button type="submit"  class = 'btn btn-danger' >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <a href="{{   route('company.show', $company->id) }}" class ='btn btn-primary' >
                                    <i class="fas fa-search fa-sm"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection
