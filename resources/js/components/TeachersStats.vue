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
        </b-card>
        <b-card>
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
                                                            <td> <a class="btn btn-primary" target="_blank" :href="`${mainUrl}/stats/teacher/${teacher.id}/${evaluation.id}`"> Descargar </a> </td>
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
        evaluationInitial: {},
    },
    data() {
      return {
          edit: false,
          loading: true,
          mainUrl: mainUrl,
          teacher: {
              name: ''
          },
          evaluation: this.evaluationInitial? JSON.parse(this.evaluationInitial): null,
          title: 'Estadisticas profesores',
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
        add() {
            this.colapsable = true
            this.teacher.name = ''
        },
        cancel() {
            this.edit = false
            this.teacher.name = ''
            this.teacher.last_name = ''
            this.teacher.email = ''
            this.colapsable = false
        },
        fetchData() {
            let dataFetchUrl = `${this.mainUrl}/stats/teachers/data`;
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
        }
     },
     mounted() {
        this.fetchData()
    },
  }
</script>
