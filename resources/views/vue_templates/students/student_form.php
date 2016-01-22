<template id="student-form-template">

    <div v-show='enableForm' >

        <div class="row">
            <div class="col-sm-8">
                <form class="form-horizontal" v-on:submit="saveStudent">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Datos de estudiante</legend>
                        <input type="hidden" id="id" name="id" v-model="student.id">
                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="idn">Cédula</label>
                            <div class="col-md-7">
                                <input id="idn" name="idn" type="text"
                                       class="form-control input-md" v-model="student.idn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="firstname">Nombres</label>
                            <div class="col-md-7">
                                <input id="firstname" name="firstname" type="text"

                                       class="form-control input-md" v-model="student.firstname">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="lastname">Apellidos</label>
                            <div class="col-md-7">
                                <input id="lastname" name="lastname" type="text"

                                       class="form-control input-md" v-model="student.lastname">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="firstname">Email</label>
                            <div class="col-md-7">
                                <input id="email" name="email" type="text"

                                       class="form-control input-md" v-model="student.email">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="idn">Fecha de Nacimiento (formato: yyyy-mm-dd)</label>
                            <div class="col-md-7">
                                <input id="bdate" name="bdate" type="text"
                                       class="form-control input-md" v-model="student.birthdate">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="idn">Dirección</label>
                            <div class="col-md-7">
                        <textarea id="address" name="address"
                                  class="form-control input-md" v-model="student.address"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="idn">Celular</label>
                            <div class="col-md-7">
                                <input id="mobile" name="mobile" type="text"
                                       class="form-control input-md" v-model="student.mobile">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="idn">Teléfono</label>
                            <div class="col-md-7">
                                <input id="phone" name="phone" type="text"
                                       class="form-control input-md" v-model="student.phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="partial1">Parcial 1</label>
                            <div class="col-md-7">
                                <input id="partial1" name="partial1" type="text"
                                       class="form-control input-md" v-model="student.partial1">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="partial2">Parcial 2</label>
                            <div class="col-md-7">
                                <input id="partial2" name="partial2" type="text"
                                       class="form-control input-md" v-model="student.partial2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="partial3">Parcial 2</label>
                            <div class="col-md-7">
                                <input id="partial3" name="partial3" type="text"
                                       class="form-control input-md" v-model="student.partial3">
                            </div>
                        </div>


                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="save_student"></label>
                            <div class="col-md-6" style="margin-top: 10px">
                                <button type="submit" id="save_student" name="save_student"
                                        class="btn btn-primary">Save
                                </button>
                                <a href="#" id="cancel_link" name="cancel_link"
                                   class="pull-right" v-on:click="hideStudentsForm">Cancelar</a>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-sm-4">
                <ul id="repeat-object" class="list-group">
                    <li v-for="value in errors" track-by="$index" class="list-group-item list-group-item-danger">
                        {{ value }}
                    </li>
                </ul>
            </div>
        </div>

    </div>
</template>