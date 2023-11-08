

require('./bootstrap');

window.Vue = require('vue').default;
//vue toastr notification
import CxltToastr from 'cxlt-vue2-toastr'
var toastrConfigs = {
    position: 'bottom right',
    progressBar: true,
    closeButton: true,
    showMethod: 'bounceInUp',
    hideMethod: 'bounceOutDown',
    showDuration: 1200,
    hideDuration: 1000,
    timeOut: 1500,
    delay: 0

}
Vue.use(CxltToastr, toastrConfigs)
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('add-to-cart-btn', require('./components/AddToCardBtn.vue').default);
Vue.component('cart-menu', require('./components/CartComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
