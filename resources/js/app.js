import Vue from "vue";
import router from "./router"
import Index from "./components/Index";
import ExampleComponent from "./components/ExampleComponent";
import ListComponent from "./components/Person/ListComponent";
import StoreComponent from "./components/Person/StoreComponent";

require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        Index,
        ExampleComponent,
        ListComponent,
        StoreComponent
    },

    router
});
