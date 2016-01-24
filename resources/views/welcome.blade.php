@extends('layouts.app')

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Aplicación de prueba</div>

                    <div class="panel-body">
                        <p>
                            Esta aplicaci&oacute;n, como ek requerimiento lo indica, es un demo de administraci&oacute;n de
                            usuarios con operaciones CRUD. Se desarroll&oacute; utilizando Laravel en el backend y
                            Vue.js, bootstrap y Sass en el front end. A continuaci&oacute;n se dan detalles de la
                            misma:</p>
                        <ol>
                            <li>
                                Al requerimiento se le dio el alcance de gesti&oacute;n de estudiantes para una
                                universidad X.
                            </li>
                            <li>
                                Hay 3 roles de usuarios: superadmin, admin y estudiante.
                            </li>
                            <li>
                                El superadmin tiene acceso a todas las opciones CRUD. El admin solo puede editar y ver
                                info del estudiante y &eacute;ste &uacute;ltimo solo puede ver sus datos personales
                                incluyendo sus 3 notas parciales,
                            </li>
                            <li>
                                El CRUD se lo manej&oacute; mediante un &quot;resourcefull controller&quot; (API
                                RESTFULL).
                            </li>
                            <li>
                                Se hicieron validaciones b&aacute;sicas a nivel de &quot;form request&quot;.&nbsp;</li>
                            <li>
                                Para acceder al super admin se pueden utilizar las siguientes credenciales:
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
                                Para acceder al admin se pueden utilizar las siguientes credenciales:
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
                                Para ingresar como estudiante debe entrar como superadmin y crear un nuevo usuario
                                (estudiante). La contrase&ntilde;a de este usuario nuevo est&aacute; &quot;quemada&quot;
                                y es la c&eacute;dula de ciudadan&iacute;a. El email servir&aacute; como primera
                                credencial al igual que los otros roles.
                            </li>
                            <li>
                                Si se desea ver el c&oacute;digo fuente puede ingresar al siguiente link en github:
                                <ul>
                                    <li>
                                        https://github.com/franc014/inevaltest
                                    </li>
                                </ul>
                            </li>
                            <li>
                                El c&oacute;digo fuente y nombres de base de datos y sus campos est&aacute;n escritos en
                                ingl&eacute;s por considerarse un &eacute;standar tanto de programaci&oacute;n y dentro
                                del framework de Laravel. Sin embargo validaciones han sido traducidas.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
