@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row col-md-12">

            <div class="card-body ">

            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card card-body ">


                            <form action="{{ route('company.update', $company->id )  }}" method="post">
                                @csrf
                                @method( 'PUT' )

                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input name="name" class="form-control"  value="{{  $company->name }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Nit</label>
                                    <input name="NIT" class="form-control" value="{{ $company->NIT }}" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="">Direccion</label>
                                    <input name="address" class="form-control" value="{{ $company->address  }}" type="text">
                                </div>
                                <input class="btn btn-success" value="Guardar empresa" type="submit">

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
