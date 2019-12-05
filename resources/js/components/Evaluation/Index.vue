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
            </template>
            <b-card-body class="row">
                <div class="col-12" v-if="done">
                    <b-alert variant="success" show>Evaluación terminada, gracias:)</b-alert>
                </div>
                <table class="table table-striped responsive">
                    <thead>
                        <tr>
                            <th>  </th>
                            <th> Profesor </th>
                            <th> Materia </th>
                            <th> Semestre/modulo </th>
                            <th> Carrera </th>
                            <th>  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(teacher, index) in teachers">
                            <td> {{ index + 1 }} </td>
                            <td> {{ teacher.name }} {{ teacher.last_name }} </td>
                            <td> {{ teacher.subject }} </td>
                            <td> {{ teacher.group }} </td>
                            <td> {{ teacher.career }} </td>
                            <td v-if="!teacher.completed"> <a class="btn btn-primary" :href="`${mainUrl}/evaluation/questions/${teacher.id}`"> Continuar </a> </td>
                            <td v-else> <button class="btn btn-primary" disabled> Terminado </button> </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <br>
            </b-card-body>
        </b-card>
    </div>
</template>


<script>
import mainUrl from '../../mainUrl'
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)

  export default {
    components: {

    },
    props: {
        teachersInitial: {},
        doneInitial: false,
    },
    data() {
      return {
          done: this.doneInitial? this.doneInitial: false,
          teachers: this.teachersInitial? JSON.parse(this.teachersInitial): null,
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
              {field: 'name', label: 'Nombre'},
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
                title: '¿Estas seguro de eliminar el cuestionario '+evaluation.name+'?',
                text: "Perdera todo lo relacionado al cuestionario y no se podra deshacer.",
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
                            title: 'Eliminara el cuestionario ' + evaluation.name + '.',
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
