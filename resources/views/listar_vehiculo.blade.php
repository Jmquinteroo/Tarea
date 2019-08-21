@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center">
            <div class="text-center">
                <h1>Registro de lugares</h1>
            </div>

        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> La información no se ingresó correctamente.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-10">
        <form action="{{ route('registrostore') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <strong>Dueño:</strong>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <input type="text" name="nombre" class="form-control" placeholder="Dueño" required autofocus>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <strong>Cedula del dueño:</strong>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <input type="text" name="capacidad" class="form-control" placeholder="CC" required
                               autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <strong>Marca:</strong>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <input type="text" name="direccion" class="form-control" placeholder="marca" required
                               autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <strong>placa:</strong>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group text-center">
                        <input type="text" name="barrio" class="form-control" placeholder="placa" required autofocus>
                    </div>
                </div>







                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                    <button type="submit" class="btn btn-primary">Registrar lugar</button>
                </div>
            </div>

        </form>

    </div>






@endsection
