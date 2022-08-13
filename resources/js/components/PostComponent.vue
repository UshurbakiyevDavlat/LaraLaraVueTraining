<template>
    <div>
<!--        <ExampleComponent></ExampleComponent>-->
       <table class="table">
           <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                </tr>
           </thead>
           <tbody>
<<<<<<< HEAD
                <tr v-for="person in persons" v-bind:key="person.id">
=======
                <tr v-for="person in persons">
>>>>>>> f2f70b3bee0a2ac4a9c4f65ddadda74bef2eb81d
                    <td>{{person.id}}</td>
                    <td>{{person.name}}</td>
                    <td>{{person.age}}</td>
                </tr>
           </tbody>
       </table>
    </div>
</template>

<script>
import ExampleComponent from "./ExampleComponent";

export default {
    name: "PostExampleComponent",
    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Davlat',
                    age: 22
                },
                {
                    id: 2,
                    name: 'Davlat2',
                    age: 22
                },
                {
                    id: 3,
                    name: 'Davlat3',
                    age: 22
                },
            ],
        }
    },

    methods: {
        sayHi() {
            alert('Hello ' + this.name + ', how are you?')
        }
    },

    computed: {
      sayJob() {
        return this.name + ' is a Programmer.'
      },
    },

    components: {
        ExampleComponent
    }
}
</script>

<style scoped>

</style>
