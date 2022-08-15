import Vue from "vue";
import ExampleComponent from "./components/ExampleComponent";
import ListComponent from "./components/ListComponent";
import StoreComponent from "./components/StoreComponent";

require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        ExampleComponent,
        ListComponent,
        StoreComponent
    }
});
