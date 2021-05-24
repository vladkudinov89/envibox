import Vue from 'vue';
import App from './App';
import router from './router';
import store from './store/index';
import {sync} from 'vuex-router-sync';
import VueFormulate from '@braid/vue-formulate'

sync(store, router);

Vue.config.productionTip = false;
Vue.use(VueFormulate)

new Vue({
    el: '#app',
    router,
    components: {App},
    template: '<App/>',
    store,
});
