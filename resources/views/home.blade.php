@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/A765/registrar') }}">registrar vehiculo</a>

                                <a href="{{ route('login') }}">listar vehiculos</a>
                                <a href="{{ route('login') }}">estadisticas</a>


                            @endauth
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
