@extends('layouts.app')

@section('content')
    <div class="container" id="app">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Datos del estudiante {{$student->firstname.' '.$student->lastname}}
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <dl class="dl-horizontal">
                                    <dt>Nombres</dt>
                                    <dd>{{$student->firstname}}</dd>
                                    <dt>Apellidos</dt>
                                    <dd>{{$student->lastname}}</dd>
                                    <dt>Cédula</dt>
                                    <dd>{{$student->idn}}</dd>
                                    <dt>Email</dt>
                                    <dd>{{$student->email}}</dd>
                                    <dt>Teléfono</dt>
                                    <dd>{{$student->phone}}</dd>
                                    <dt>Celular</dt>
                                    <dd>{{$student->mobile}}</dd>
                                    <dt>Dirección</dt>
                                    <dd>{{$student->address}}</dd>
                                    <dt>Fecha de nacimiento</dt>
                                    <dd>{{$student->birthdate}}</dd>
                                    <dt>Parcial 1</dt>
                                    <dd>{{$student->partial1}}</dd>
                                    <dt>Parcial 2</dt>
                                    <dd>{{$student->partial2}}</dd>
                                    <dt>Parcial 3</dt>
                                    <dd>{{$student->partial3}}</dd>


                                </dl>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
