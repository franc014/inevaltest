@extends('layouts.app')

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lab app for learning vuejs integrated with laravel</div>

                    <div class="panel-body">
                        <p>
                            It uses Laravel 5.2 and vue.js :</p>
                        <ol>
                            <li>
                                The domain is students management for an X university.
                            </li>
                            <li>
                                There are 3 user roles: super admin, admin and student.
                            </li>
                            <li>
                                super admin has access to all actions over students (CRUD), admin can just edit and add
                                students and these can only view their info.
                            </li>
                            <li>
                                It uses authentication and authorization from laravel 5.2.
                            </li>
                            <li>
                                It uses a resourceful API.
                            </li>
                            <li>
                                Validation is made through form requests.
                            </li>
                            <li>
                                To access super admin:
                                <ul>
                                    <li>
                                        email: jfandradea@gmail.com
                                    </li>
                                    <li>
                                        password: secret
                                    </li>
                                </ul>
                            </li>
                            <li>
                                To access admin:
                                <ul>
                                    <li>
                                        email: jfrand011@hotmail.com
                                    </li>
                                    <li>
                                        password: secret
                                    </li>
                                </ul>
                            </li>
                            <li>
                                students authenticate via their email and personal id (cid) as password.
                            </li>
                            <li>
                                GitHub
                                <ul>
                                    <li>
                                        <a href="https://github.com/franc014/laravelvuecrudlab">https://github.com/franc014/laravelvuecrudlab</a>
                                    </li>
                                </ul>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
