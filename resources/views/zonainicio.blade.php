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

                                <a href="{{ route('registro') }}">registrar vehiculo</a>
                                <a href="{{ route('lista') }}">listar vehiculos</a>
                                <a href="{{ route('estadisticas') }}">estadisticas</a>


                        </div>


                </div>
            </div>



            <div class="col-12">

                @if(isset($vehiculo))
                    <table class="table table-bordered">

                        <tr>

                            <td><b>marca</b></td>

                            <td><b>placa</b></td>


                        </tr>


                        @foreach($vehiculo as $vehi)

                            <tr>
@if($vehi->marca=='mazda')
                                <td> {{$vehi->marca}}</td>

                                <td>{{$vehi->placa}}<td bgcolor="green"> Los mazdas son los mejores </td></td>
    @else
                                    @if($vehi->marca=='toyota')
                                        <td> {{$vehi->marca}}</td>

                                        <td bgcolor="red"><b>{{$vehi->placa}}</b></td>
                                    @else
                                        <td> {{$vehi->marca}}</td>

                                        <td>{{$vehi->placa}}</td>
                                    @endif
@endif







                            </tr>

                            @endforeach





                @endif









            @if(isset($cantidadmazda))
                    <table class="table table-bordered">

                        <tr>

                            <td>mazda</td>

                            <td>toyota</td>

                            <td>chevrolet</td>

                        </tr>


                            <tr>

                                <td> {{$cantidadmazda}}</td>

                                <td>{{$cantidadtoyota}}</td>

                                <td>{{$cantidad3}}</td>

                            </tr>


                    </table>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
