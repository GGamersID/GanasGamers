require('./bootstrap');

window.Vue = require('vue');
import CheckboxRadio from 'vue-checkbox-radio';
import Buefy from 'buefy';
Vue.use(Buefy);
//
// Vue.component('slug-widget', require('./components/slugWidget.vue'));

var app = new Vue({
 el: '#app',
 data: {}
});

require('./manage')
