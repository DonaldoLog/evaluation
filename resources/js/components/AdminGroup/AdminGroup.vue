<template>
    <div>
        <teachers-table :teachers-initial=teachers :group-initial=group>
        </teachers-table>
         <students-table>
        </students-table>
    </div>
</template>


<script>
import mainUrl from '../../mainUrl'
import TeachersTable from '../../components/AdminGroup/TeachersTable'
import StudentsTable from '../../components/AdminGroup/StudentsTable'

  export default {
    components: {
        TeachersTable,
        StudentsTable
    },
    props: {
        teachersInitial: {},
        groupInitial: {}
    },
    data() {
      return {
          group: this.groupInitial? JSON.parse(this.groupInitial): null,
          teachers: this.teachersInitial? JSON.parse(this.teachersInitial): null,
          edit: false,
          loading: true,
          mainUrl: mainUrl,
          career: {
              name: ''
          },
          cargando: false,
          colapsable: false,
      }
    },
    watch: {

    },
    computed: {

     },
    methods: {

     },
     mounted() {

    },
  }
</script>
