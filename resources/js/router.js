import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            name: 'person.index',
            path: '/persons',
            component: () => import('./components/Person/ListComponent')
        },
        {
            name: 'person.create',
            path: '/persons/create',
            component: () => import('./components/Person/StoreComponent')
        },
    ]
})
