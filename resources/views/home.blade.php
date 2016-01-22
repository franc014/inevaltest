@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        @include('vue_templates.students.student_form')
        @include('vue_templates.students.students_grid')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <students-grid></students-grid>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
