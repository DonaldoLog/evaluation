<template>
    <div>
              <div>
                <div class="data-table">
                    <div class="row mb-2">
                        <div class="input-teacher col-md-5">
                            <input type="text" v-model="search" class="form-control" v-on:keyup.enter="searchBy">
                            <div class="input-teacher-append" v-on:click="searchBy" style="cursor: pointer;">
                                <span class="input-teacher-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <select name="perPage" v-model="perPage" id="perPage" class="col-md-5 form-control" v-on:change="changePerPage">
                            <option v-for="option in optionsPerPage" v-bind:value="option.value" :key="option.value">
                                {{ option.text }}
                            </option>
                        </select>
                    </div>
                    <div class="col-md-12">
                            <div class="card card-secondary">
                                <div class="card-body">
                                    <table class="table table-striped responsive">
                                        <thead>
                                            <tr>
                                                <th v-for="column in columns" :key="column['field']" @click="sortByColumn(column)"
                                                    class="table-head">
                                                    {{ column['label'] }}
                                                    <span v-if="column['field'] === sortedColumn">
                                                        <i v-if="order === 'asc' " class="fas fa-arrow-up"></i>
                                                        <i v-else class="fas fa-arrow-down"></i>
                                                    </span>
                                                </th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <template v-if="tableData.length > 0">
                                                <template v-for="(teacher, index) in tableData">
                                                        <tr :key="index">
                                                            <td> {{ teacher.name }} {{ teacher.last_name }}</td>
                                                            <td> {{ teacher.email }} </td>
                                                            <td> <a class="btn btn-primary" target="_blank" :href="`${mainUrl}/stats/teacher/${teacher.id}/${evaluation.id}/1`"> Descargar </a> </td>
                                                        </tr>
                                                </template>
                                            </template>
                                            <template v-else>
                                                <tr style="text-align:center"><td colspan="4" >No hay profesores.</td></tr>
                                            </template>
                                        </tbody>
                                    </table>
                                    <nav v-if="pagination && tableData.length > 0">
                                        <ul class="pagination">
                                            <li class="page-item" :class="{'disabled' : currentPage === 1}">
                                                <a class="page-link" href="#" @click.prevent="changePage(1)">Primera</a>
                                            </li>
                                            <li class="page-item" :class="{'disabled' : currentPage === 1}">
                                                <a class="page-link" href="#" @click.prevent="changePage(currentPage - 1)">Anterior</a>
                                            </li>
                                            <li v-for="page in pagesNumber" class="page-item" :class="{'active': page == pagination.meta.current_page}" :key="page">
                                                <a href="javascript:void(0)" @click.prevent="changePage(page)" class="page-link">{{ page }}</a>
                                            </li>
                                            <li class="page-item" :class="{'disabled': currentPage === pagination.meta.last_page }">
                                                <a class="page-link" href="#" @click.prevent="changePage(currentPage + 1)">Siguiente</a>
                                            </li>
                                            <li class="page-item" :class="{'disabled' : currentPage === pagination.meta.last_page}">
                                                <a class="page-link" href="#" @click.prevent="changePage(pagination.meta.last_page)">Última</a>
                                            </li>
                                            <span style="margin-top: 8px;"> &nbsp; <i>Mostrando {{ pagination.meta.from }} a {{ pagination.meta.to > pagination.meta.total? pagination.meta.total: pagination.meta.to }} de  {{ pagination.meta.total }} registros.</i></span>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</template>


<script>
import mainUrl from '../../mainUrl'

  export default {
    components: {

    },
    props: {
        studentsInitial: {},
        groupInitial: {},
        evaluationInitial: {},
    },
    data() {
      return {
            evaluation: this.evaluationInitial? JSON.parse(this.evaluationInitial): null,
            group: this.groupInitial,
            student: {},
            students: this.studentsInitial,
            modal: false,
            edit: false,
            loading: true,
            mainUrl: mainUrl,
            career: {
                name: ''
            },
            title: 'Carreras',
            cargando: false,
            colapsable: false,
            columns: [
                {field: 'name', label: 'Nombre'},
                {field: 'email', label: 'Email'},
            ],
            perPage: 10,
            currentPage: 1,
            tableData: [],
            pagination: {
                meta: { to: 1, from: 1 }
            },
            order: 'asc',
            sortedColumn: 'name',
            search: '',
            optionsPerPage: [{value: 10, text: "Mostrar 10"}, {value: 20, text: "Mostrar 20"}, {value: 50,text: "Mostrar 50"}],
      }
    },
    watch: {

    },
    computed: {
        pagesNumber() {
            if (!this.pagination.meta.to) {
                return []
            }
            let from = this.pagination.meta.current_page - this.offset
            if (from < 1) {
                from = 1
            }
            let to = from + (this.offset * 2)
            if (to >= this.pagination.meta.last_page) {
                to = this.pagination.meta.last_page
            }
            let pagesArray = []
            for (let page = from; page <= to; page++) {
                pagesArray.push(page)
            }
            return pagesArray
        },
        totalData() {
            return (this.pagination.meta.to - this.pagination.meta.from) + 1
        },
     },
    methods: {
        modalShow () {
            this.modal = !this.modal
        },
        add() {
            this.colapsable = true
            this.career.name = ''
        },
        cancel() {
            this.edit = false
            this.career.name = ''
            this.colapsable = false
        },
        fetchData() {
            let dataFetchUrl = `${this.mainUrl}/stats/teachers-on/data`;
            axios.post(dataFetchUrl, {
                        page: this.currentPage,
                        column: this.sortedColumn,
                        order: this.order,
                        per_page: this.perPage,
                        search: this.search
            }).then(({ data }) => {
                this.pagination = data
                this.tableData = data.data
                if ((this.pagination.meta.last_page < this.pagination.meta.current_page) && (this.pagination.data.length === 0) && (this.pagination.meta.total != 0)) {
                    this.changePage(this.currentPage === 1?this.currentPage: this.currentPage - 1)
                }
            }).catch(error => this.tableData = [])
        },
        serialNumber(key) {
            return (this.currentPage - 1) * this.perPage + 1 + key
        },
        changePage(pageNumber) {
            this.currentPage = pageNumber
            this.fetchData()
        },
        sortByColumn(column) {
            if (column['field'] === this.sortedColumn) {
                this.order = (this.order === 'asc') ? 'desc' : 'asc'
            } else {
                this.sortedColumn = column['field']
                this.order = 'asc'
            }
            this.fetchData()
        },
        changePerPage() {
            this.currentPage = 1
            this.fetchData()
        },
        searchBy() {
            this.fetchData()
        },
        storeStudent () {
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.loading = true
                    axios.post(`${this.mainUrl}/groups/store/student`, {
                        student: this.student,
                        group: this.group
                    })
                    .then((response) => {
                        this.loading = false
                        if (response.data.success) {
                            Vue.swal({
                                title: 'Éxito',
                                text: "Carrera creado correctamente.",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Aceptar',
                                allowEscapeKey: false,
                                allowOutsideClick: false
                            }).then((result) => {
                                if (result.value) {
                                    location.reload();
                                }
                            })

                        } else {
                            Vue.swal(
                                '¡Error!',
                                response.data.message,
                                'error'
                            )
                        }
                    })
                    .catch((error) => {
                        this.loading = false
                         Vue.swal(
                            '¡Error!',
                            'Ha ocurrido un error, intente de nuevo.',
                            'error'
                        )
                    })

                } else {
                    this.loading = false
                    Vue.swal(
                        '¡Atención!',
                        'Complete todos los campos.',
                        'warning'
                    )
                }
            });

        },
        editCareer (carrerId) {
            this.loading = true
            this.edit = true
            axios.get(`${this.mainUrl}/careers/${carrerId}`)
            .then(res => {
                this.loading = false
                if (res.data.success) {
                    this.career = {
                        name: res.data.career.name,
                        id: res.data.career.id
                    }
                    this.colapsable = true
                } else {
                    Vue.swal(
                        '¡Error!',
                        res.data.message,
                        'error'
                    )
                }
            })
            .catch(err => {
                this.loading = false
                Vue.swal(
                    '¡Error!',
                    'Ha ocurrido un error, intente de nuevo.',
                    'error'
                )
            })
        },
        updateCareer () {
            this.loading = true
            axios.post(`${this.mainUrl}/careers/update`, { career: this.career })
            .then(res => {
                this.loading = false
                if (res.data.success) {
                    Vue.swal({
                        title: 'Éxito',
                        text: "Carrera actualizada correctamente.",
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Aceptar',
                        allowEscapeKey: false,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.value) {
                            location.reload();
                        }
                    })
                } else {
                    Vue.swal(
                        '¡Error!',
                        res.data.message,
                        'error'
                    )
                }
            })
            .catch(err => {
                this.loading = false
                Vue.swal(
                    '¡Error!',
                    'Ha ocurrido un error, intente de nuevo.',
                    'error'
                )
            })
        },
        destroyStudent (student) {
             Vue.swal({
                title: '¿Estas seguro de eliminar a '+student.studentId+'?',
                text: "Perdera todo lo relacionado al estudiante y no se podra deshacer.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
                allowEscapeKey: false
                }).then((result) => {
                    if (result.value) {
                        Vue.swal({
                            title: 'Eliminara a ' + student.studentId + '.',
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Eliminar',
                            cancelButtonText: 'Cancelar',
                            allowOutsideClick: false,
                            allowEscapeKey: false
                            }).then((result) => {
                                if (result.value) {
                                    this.loading = true
                                    axios.post(`${this.mainUrl}/groups/destroy/student`, {
                                        group: this.group,
                                        student: student
                                        })
                                    .then(res => {
                                        this.loading = false
                                        if (res.data.success) {
                                            Vue.swal({
                                                title: 'Éxito',
                                                text: "Estudiante eliminada correctamente.",
                                                type: 'success',
                                                showCancelButton: false,
                                                confirmButtonColor: '#3085d6',
                                                confirmButtonText: 'Aceptar',
                                                allowEscapeKey: false,
                                                allowOutsideClick: false
                                            }).then((result) => {
                                                if (result.value) {
                                                    location.reload();
                                                }
                                            })
                                        } else {
                                            Vue.swal(
                                                '¡Error!',
                                                res.data.message,
                                                'error'
                                            )
                                        }
                                    })
                                    .catch(err => {
                                        this.loading = false
                                        Vue.swal(
                                            '¡Error!',
                                            'Ha ocurrido un error, intente de nuevo.',
                                            'error'
                                        )
                                    })
                                }
                        })
                    }
            })
        }
     },
     mounted() {
         this.fetchData()
    },
  }
</script>
