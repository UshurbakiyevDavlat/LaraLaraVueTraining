import Vue from "vue";
import VueRouter from "vue-router";
import ListComponent from "./components/ListComponent";
import StoreComponent from "./components/StoreComponent";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/persons',
            component: ListComponent
        },
        {
            path: '/persons/create',
            component: StoreComponent
        },
    ]
})
