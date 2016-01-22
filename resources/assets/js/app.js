var vue = require('vue');
vue.use(require('vue-resource'));
vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#_token').getAttribute('value');
vue.http.interceptors.push({
    request: function (request) {
        return request;
    },

    response: function (response) {
        return response

    }

});
var studentForm = vue.extend({

    template: '#student-form-template',
    props: ['student'],
    data: function () {
        return {
            enableForm: false,
            errors: {}
        }
    },
    created: function () {
        //console.log(this.$resource);
    },
    methods: {
        hideStudentsForm: function (event) {
            this.student = {};
            this.errors = {};
            this.enableForm = false;
            this.$dispatch('hide-add-button');
        },
        saveStudent: function (event) {

            event.preventDefault();

            var id = this.student.id;
            var resource = this.$resource('/api/students{/id}');

            if (typeof id === "undefined") {
                resource.save(this.student).then(function (response) {
                    this.errors = {};
                    alert('La información ha sido guardada exitosamente.');
                    this.$dispatch('student-added', this.student);
                    this.student = {};
                }, function (response) {
                    if (response.status == 403) {
                        alert('No está autorizado/a. Por favor consulte a Soporte Técnico para más información.');
                    } else {
                        this.errors = response.data;
                        alert('La información no pudo ser guardada. Por favor corrija los errores.');
                    }
                });
            } else {
                resource.update({id: this.student.id}, this.student).then(function (response) {

                    this.errors = {};
                    alert('La información ha sido actualizada exitosamente.');

                }, function (response) {
                    //console.log(response);
                    if (response.status == 403) {
                        alert('No está autorizado/a. Por favor consulte a Soporte Técnico para más información.');
                    } else {
                        this.errors = response.data;
                        alert('La información no pudo ser guardada. Por favor corrija los errores.');
                    }
                });
            }


        }
    },
    events: {
        'enable-form': function () {
            this.enableForm = true;
        },
        'edit-student': function (student) {
            this.enableForm = true;
            this.student = student;
        }
    }
})

var studentsGrid = vue.extend({

    template: '#students-grid',
    created: function () {
        this.fetchStudentsList();
    },
    //props: ['enableForm'],
    data: function () {
        return {
            isAddButtonEnabled: true,
            students: []
        }
    },
    methods: {
        showStudentsForm: function () {
            this.$broadcast('enable-form');
            this.isAddButtonEnabled = false;
        },
        fetchStudentsList: function () {
            var resource = this.$resource('/api/students');
            // get item
            resource.get().then(function (students) {
                //this.$set('item', response.item)
                //console.log(response);
                this.students = students.data;
            }.bind(this));
        },
        editStudent: function (student) {
            this.isAddButtonEnabled = false;
            this.$broadcast('edit-student', student);
        },
        deleteStudent: function (student) {
            var resource = this.$resource('/api/students{/id}');
            if (confirm("Está seguro/a de eliminar este registro?")) {
                resource.delete({id: student.id}).then(function (response) {
                    this.students.$remove(student);
                    alert('La información ha sido eliminada exitosamente');
                }, function (response) {
                    if (response.status == 403) {
                        alert('No está autorizado/a. Por favor consulte a Soporte Técnico para más información.');
                    } else {
                        alert('La información no ha sido eliminada. Por favor inténtelo nuevamente o contacte al Administrador');
                    }
                });
            }
        },
        showStudent: function (student) {
            location.href = '/api/students/' + student.id;
        }
    },
    events: {
        'hide-add-button': function () {
            this.isAddButtonEnabled = true;
        },
        'student-added': function (student) {
            this.students.push(student);
            this.fetchStudentsList();
        }
    }
})

var studentView = vue.extend({
    events: {
        'show-modal': function () {
            console.log('open sesam');
            $('#view-modal').modal({show: true});
        }

    }
});

vue.component('student-form', studentForm);
vue.component('students-grid', studentsGrid);
vue.component('student-view', studentView);
new vue({
    el: '#app'

})