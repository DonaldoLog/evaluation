<template>
    <div>
        <b-card
            header-text-variant="white"
            header-tag="header"
            header-bg-variant="dark"
            no-body
            >
            <template slot="header">
                <div class="float-left">
                    <h4> Profesores </h4>
                </div>
                <div class="card-tools float-right">
                    <button v-show="!colapsable" @click="add()" type="button" class="btn btn-secondary" >
                        <a > <i class="fa fa-plus"></i></a>
                    </button>
                    <button v-show="colapsable" @click="cancel()" type="button" class="btn btn-secondary" >
                        <a> <i class="fa fa-minus"></i></a>
                    </button>
                </div>
            </template>
            <div v-show="colapsable === true">
                <b-card-body>
                    <div class="data-table">
                        <div class="row mb-2">
                            <div class="input-group col-md-6">
                                <input type="text" v-model="search" class="form-control" v-on:keyup.enter="searchBy">
                                <div class="input-group-append" v-on:click="searchBy" style="cursor: pointer;">
                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="col-5">
                                <select name="perPage" v-model="perPage" id="perPage" class="col-md-5 form-control" v-on:change="changePerPage">
                                    <option v-for="option in optionsPerPage" v-bind:value="option.value" :key="option.value">
                                        {{ option.text }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-1">
                                <button @click="modalShow()" type="button" class="btn btn-secondary" >
                                    <a > <i class="fa fa-plus"></i></a>
                                </button>
                            </div>
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
                                                                <td> {{ teacher.name }} {{ teacher.last_name }} </td>
                                                                <td> {{ teacher.email }} </td>
                                                                <td> {{ teacher.groups[0].pivot.subject }} </td>
                                                                <td>
                                                                    <button class="btn btn-secondary" @click="destroyTeacher(teacher)" title="Eliminar"><i class="fa fa-trash"></i></button>
                                                                <!--  <a class="btn btn-secondary" :href="mainUrl+'/contrato-oficio/'+teacher.id" target="_blank" title="Mas"><i class="far fa-file"></i></a> -->
                                                                </td>
                                                            </tr>
                                                    </template>
                                                </template>
                                                <template v-else>
                                                    <tr style="text-align:center"><td colspan="4" >No hay teachers.</td></tr>
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

                </b-card-body>
            </div>
        </b-card>
         <b-modal v-model="modal">
             <div class="row">
                  <div class="form-group col-12">
                    <label for="teacher">Profesor:</label>
                    <v-select label="name" id="teacher" name="teacher" v-model="teacher" :options="teachers" data-vv-as="teacher" v-validate="'required'"></v-select>
                    <div class="invalid-feedback" style="display: block;" v-if="errors.has('teacher')">{{ errors.first('teacher') }}</div>
                </div>
                <div class="form-group col-12">
                    <label for="subject">Materia:</label>
                    <input type="text" class="form-control form-control-sm" id="subject" name="subject" v-model="subject" v-validate="{ required: true }">
                    <div class="invalid-feedback" v-if="errors.has('subject')">{{ errors.first('subject') }}</div>
                </div>
                <div class="form-group col-12">
                    <label for="subject">Materia:</label>
                    <b-form-checkbox
                        id="tutoria"
                        v-model="tutoria"
                        name="tutoria"
                        value=1
                        unchecked-value=0
                    >
                    Tutoria
                    </b-form-checkbox>
                </div>
             </div>
             <template slot="modal-footer">
                 <button @click="modalShow()" type="button" class="btn btn-secondary" >
                    <a > Cancelar </a>
                </button>
                <button @click="storeTeacher()" type="button" class="btn btn-secondary" >
                    <a > Guardar </a>
                </button>
             </template>
         </b-modal>
    </div>
</template>


<script>
import mainUrl from '../../mainUrl'

  export default {
    components: {

    },
    props: {
        teachersInitial: {},
        groupInitial: {}
    },
    data() {
      return {
          tutoria: 0,
          subject: '',
          group: this.groupInitial,
          teacher: {},
          teachers: this.teachersInitial,
          modal: false,
          edit: false,
          loading: true,
          mainUrl: mainUrl,
          teacher: {
              name: ''
          },
          title: 'Carreras',
          cargando: false,
          colapsable: false,
          columns: [
              {field: 'name', label: 'Nombre'},
              {field: 'email', label: 'Correo'},
              {field: 'subject', label: 'Materia'},
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
            this.teacher.name = ''
        },
        cancel() {
            this.edit = false
            this.teacher.name = ''
            this.colapsable = false
        },
        fetchData() {
            let dataFetchUrl = `${this.mainUrl}/groups/teachers/data/${this.group.id}`;
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
        storeTeacher () {
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.loading = true
                    axios.post(`${this.mainUrl}/groups/store/teacher`, {
                        teacher: this.teacher,
                        group: this.group,
                        subject: this.subject,
                        tutoria: this.tutoria,
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
        editTeacher (carrerId) {
            this.loading = true
            this.edit = true
            axios.get(`${this.mainUrl}/teachers/${carrerId}`)
            .then(res => {
                this.loading = false
                if (res.data.success) {
                    this.teacher = {
                        name: res.data.teacher.name,
                        id: res.data.teacher.id
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
        updateTeacher () {
            this.loading = true
            axios.post(`${this.mainUrl}/teachers/update`, { teacher: this.teacher })
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
        destroyTeacher (teacher) {
             Vue.swal({
                title: `¿Estas seguro de eliminar al profesor de ${teacher.name} ${teacher.last_name}?`,
                text: "Perdera todo lo relacionado al profesor y no se podra deshacer.",
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
                            title: `Eliminara al profesor ${teacher.name} ${teacher.last_name}.`,
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
                                    axios.post(`${this.mainUrl}/groups/destroy/teacher `,{
                                        teacher: teacher,
                                        group: this.group
                                    })
                                    .then(res => {
                                        this.loading = false
                                        if (res.data.success) {
                                            Vue.swal({
                                                title: 'Éxito',
                                                text: "Profesor eliminada correctamente.",
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
