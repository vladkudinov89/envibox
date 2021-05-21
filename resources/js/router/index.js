import Vue from 'vue';
import Router from 'vue-router';
import TheFeedback from "../components/TheFeedback";

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/',
    scrollBehavior: () => ({y: 0}),
    routes: [
        {
            path: '/',
            name: 'feedback',
            component: TheFeedback
        },
    ]
});
