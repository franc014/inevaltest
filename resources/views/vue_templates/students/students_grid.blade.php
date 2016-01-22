<template id="students-grid">
    <student-view></student-view>

    <div class="row">
        <div class="col-sm-12">
            <student-form :student="{}"></student-form>
            @can('store-student')
            <button class="btn btn-primary pull-right" v-show="isAddButtonEnabled"
                    v-on:click="showStudentsForm">Nuevo Estudiante
            </button>
            @endcan
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-condensed" v-if="students.length != 0">
                <thead>
                <tr>
                    <th>CID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>

                </tr>
                </thead>
                <tbody>

                <hr>
                <tr v-for="student in students" transition="expand" track-by="$index">
                    <th scope="row">@{{student.idn}}</th>
                    <td>@{{student.firstname}}</td>
                    <td>@{{student.lastname}}</td>
                    <td><a href="#" class="glyphicon glyphicon-eye-open" v-on:click="showStudent(student)"> Ver</a></td>
                    @can('edit-student')
                    <td><a href="#" class="glyphicon glyphicon-pencil" v-on:click="editStudent(student)"> Editar</a>
                    </td>
                    @endcan
                    @can('delete-student')
                    <td><a href="#" class="glyphicon glyphicon-trash" v-on:click="deleteStudent(student)"> Eliminar</a>
                    </td>
                    @endcan
                </tr>

                </tbody>
            </table>
            <span v-else='students.length = 0' class="alert alert-warning">Ningún estudiante ha sido registrado. Pulse el botón Nuevo Estudiante para crear uno</span>
        </div>
    </div>
</template>