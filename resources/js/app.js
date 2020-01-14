require('./bootstrap');
require('./bootstrap');

window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'
import VueSweetalert2 from 'vue-sweetalert2';
import es from 'vee-validate/dist/locale/es';
import VeeValidate, { Validator } from 'vee-validate';

Vue.use(VeeValidate, {
    classes: true,
    classNames: {
        valid: 'is-valid',
        invalid: 'is-invalid'
    }
});
Validator.localize('es', es);
Vue.use(VueSweetalert2);
Vue.use(BootstrapVue)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('careers-component', require('./components/Careers.vue').default);
Vue.component('groups-component', require('./components/Groups.vue').default);
Vue.component('forms-component', require('./components/Forms.vue').default);
Vue.component('admin-form-component', require('./components/FormAdmin/AdminForm.vue').default);
Vue.component('students-component', require('./components/Students.vue').default);
Vue.component('teachers-component', require('./components/Teachers.vue').default);
Vue.component('admin-group-component', require('./components/AdminGroup/AdminGroup.vue').default);
Vue.component('evaluation-component', require('./components/Evaluation.vue').default);
Vue.component('evaluation-student-component', require('./components/Evaluation/Index.vue').default);
Vue.component('questions-component', require('./components/Evaluation/Questions.vue').default);
Vue.component('stats-component', require('./components/Stats/Index.vue').default);
Vue.component('teachers-stats-component', require('./components/TeacherStats/TeachersStats.vue').default);
Vue.component('impresion-component', require('./components/Impresion.vue').default);

const app = new Vue({
    el: '#app'
});
