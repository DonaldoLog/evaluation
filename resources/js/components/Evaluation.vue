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
                    <h4> {{ title }} </h4>
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
            <b-card-body class="row">
                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" v-model="evaluation.name" v-validate="{ required: true }">
                    <div class="invalid-feedback" v-if="errors.has('name')">{{ errors.first('name') }}</div>
                </div>
                 <div class="form-group col-6" v-show="!edit">
                    <label for="forms">Formulario escolarizado:</label>
                    <v-select label="name" id="forms" name="forms" v-model="form.escolarizado" :options="forms" data-vv-as="forms" v-validate="'required'"></v-select>
                    <div class="invalid-feedback" style="display: block;" v-if="errors.has('forms')">{{ errors.first('forms') }}</div>
                </div>
                 <div class="form-group col-6" v-show="!edit">
                    <label for="formssabatino">Formulario tutoria:</label>
                    <v-select label="name" id="formssabatino" name="formssabatino" v-model="form.sabatino" :options="forms" data-vv-as="formssabatino" v-validate="'required'"></v-select>
                    <div class="invalid-feedback" style="display: block;" v-if="errors.has('formssabatino')">{{ errors.first('formssabatino') }}</div>
                </div>
                 <div class="form-group col-6" v-show="!edit">
                    <label for="formsenlinea">Formulario en linea:</label>
                    <v-select label="name" id="formsenlinea" name="formsenlinea" v-model="form.enlinea" :options="forms" data-vv-as="formsenlinea" v-validate="'required'"></v-select>
                    <div class="invalid-feedback" style="display: block;" v-if="errors.has('formsenlinea')">{{ errors.first('formsenlinea') }}</div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <button v-show="!edit" class="btn btn-secondary col-2 offset-5" @click="storeEvaluation">Guardar</button>
                <button v-show="edit" class="btn btn-secondary col-2 offset-5" @click="updateEvaluation">Actualizar</button>
            </b-card-body>
            </div>

        </b-card>
        <b-card>
             <div>
                <div class="data-table">
                    <div class="row mb-2">
                        <div class="input-form col-md-5">
                            <input type="text" v-model="search" class="form-control" v-on:keyup.enter="searchBy">
                            <div class="input-form-append" v-on:click="searchBy" style="cursor: pointer;">
                                <span class="input-form-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
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
                                                <template v-for="(evaluation, index) in tableData">
                                                        <tr :key="index">
                                                            <td> {{ index + 1 }} </td>
                                                            <td> {{ evaluation.name }} </td>
                                                            <td> {{ evaluation.active? 'Activa': 'x' }} </td>
                                                            <td>
                                                                <button class="btn btn-secondary" @click="editEvaluation(evaluation.id)" title="Editar"> <i class="fa fa-edit"></i></button>
                                                                <button class="btn btn-secondary" @click="destroyEvaluation(evaluation)" title="Eliminar"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                </template>
                                            </template>
                                            <template v-else>
                                                <tr style="text-align:center"><td colspan="4" >No hay evaluaciones.</td></tr>
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
        </b-card>
    </div>
</template>


<script>
import mainUrl from '../mainUrl'
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)

  export default {
    components: {

    },
    props: {
        formsInitial: {}
    },
    data() {
      return {
          forms: this.formsInitial? JSON.parse(this.formsInitial): null,
          form: {},
          edit: false,
          loading: true,
          mainUrl: mainUrl,
          evaluation: {
              name: ''
          },
          career: '',
          title: 'Evaluaciones',
          cargando: false,
          colapsable: false,
          columns: [
              {field: '', label: ''},
              {field: 'name', label: 'Nombre'},
              {field: '', label: 'Activa'},
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
        add() {
            this.colapsable = true
            this.evaluation.name = ''
        },
        cancel() {
            this.edit = false
            this.evaluation.name = ''
            this.career = {
                name: '',
                id: ''
            }
            this.colapsable = false
        },
        fetchData() {
            let dataFetchUrl = `${this.mainUrl}/evaluations/data`;
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
        storeEvaluation () {
            this.$validator.validate().then(valid => {
                if (valid) {
                    Vue.swal({
                        title: '¿Estas seguro de crear una nueva evaluación?',
                        text: "Perdera todo lo relacionado a la evaluacion en curso y no se podra deshacer.",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continuar',
                        cancelButtonText: 'Cancelar',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                        }).then((result) => {
                            if (result.value) {
                                   this.loading = true
                                    axios.post(`${this.mainUrl}/evaluations/store`, {
                                        evaluation: this.evaluation,
                                        form: this.form
                                    })
                                    .then((response) => {
                                        this.loading = false
                                        if (response.data.success) {
                                            Vue.swal({
                                                title: 'Éxito',
                                                text: "Evaluacion creado correctamente.",
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

                            }
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
        editEvaluation (evaluationId) {
            this.loading = true
            this.edit = true
            axios.get(`${this.mainUrl}/evaluations/${evaluationId}`)
            .then(res => {
                this.loading = false
                if (res.data.success) {
                    this.evaluation = {
                        name: res.data.evaluation.name,
                        id: res.data.evaluation.id
                    }
                    this.form = {
                        name: res.data.evaluation.form.name,
                        id: res.data.evaluation.id,
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
        updateEvaluation () {
            this.loading = true
            axios.post(`${this.mainUrl}/evaluations/update`, { evaluation: this.evaluation, career: this.career })
            .then(res => {
                this.loading = false
                if (res.data.success) {
                    Vue.swal({
                        title: 'Éxito',
                        text: "Evaluacion actualizada correctamente.",
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
        destroyEvaluation (evaluation) {
             Vue.swal({
                title: '¿Estas seguro de eliminar la evaluacion '+evaluation.name+'?',
                text: "Perdera todo lo relacionado a la evaluacion y no se podra deshacer.",
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
                            title: 'Eliminara la evaluacion ' + evaluation.name + '.',
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
                                    axios.post(`${this.mainUrl}/evaluations/destroy`, { evaluation: evaluation })
                                    .then(res => {
                                        this.loading = false
                                        if (res.data.success) {
                                            Vue.swal({
                                                title: 'Éxito',
                                                text: "Evaluacion eliminado correctamente.",
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
