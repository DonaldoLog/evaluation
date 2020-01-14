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
        </b-card>
        <b-card>
            <div>
                <b-tabs content-class="mt-3">
                    <b-tab title="Esc" active>
                        <teachers1-table :evaluation-initial=evaluationInitial></teachers1-table>
                    </b-tab>
                    <b-tab title="En línea">
                        <teachers0-table :evaluation-initial=evaluationInitial></teachers0-table>
                    </b-tab>
                </b-tabs>
            </div>
        </b-card>
    </div>
</template>


<script>
import mainUrl from '../../mainUrl'
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)
import Teachers1Table from '../TeacherStats/Teachers1Table'
import Teachers0Table from '../TeacherStats/Teachers0Table'

  export default {
    components: {
        Teachers1Table,
        Teachers0Table
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
      }
    },
    watch: {

    },
    computed: {

     },
    methods: {

    }
  }
</script>
