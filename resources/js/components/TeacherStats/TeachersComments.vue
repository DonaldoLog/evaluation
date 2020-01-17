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
                <teachers2-table :evaluation-initial=evaluationInitial></teachers2-table>
            </div>
        </b-card>
    </div>
</template>


<script>
import mainUrl from '../../mainUrl'
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)
import Teachers2Table from '../TeacherStats/Teachers2Table'

  export default {
    components: {
        Teachers2Table,
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
          title: 'Comentarios profesores',
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
