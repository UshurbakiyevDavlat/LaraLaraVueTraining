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
                <tr v-for="person in TwentyOlderAgedPeople" v-bind:key="person.id">
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
                    age: 18
                },
                {
                    id: 2,
                    name: 'Davlat2',
                    age: 25
                },
                {
                    id: 3,
                    name: 'Davlat3',
                    age: 31
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
      TwentyOlderAgedPeople() {
          return this.persons.filter(function (person) {
              return person.age > 20
          })
      },
      TwentyLessAgedPeople() {
        return this.persons.filter(function (person) {
            return person.age > 20
        })
     },
    },

    components: {
        ExampleComponent
    }
}
</script>

<style scoped>

</style>
