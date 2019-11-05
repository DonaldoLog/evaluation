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

const app = new Vue({
    el: '#app'
});
