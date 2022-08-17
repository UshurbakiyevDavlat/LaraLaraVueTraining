<template>
    <div>
        <example-component ref="index" :obj="obj"></example-component>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in persons">
                <tr :class="isEditedPerson(person.id) ? 'd-none' : ''">
                    <td>{{ person.id }}</td>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td><a href="#" @click.prevent="switchEditPerson(person.id)" class="btn btn-success">Edit</a></td>
                    <td><a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a></td>
                </tr>

                <tr :class="isEditedPerson(person.id) ? '' : 'd-none'">
                    <td>{{ person.id }}</td>
                    <td><input type="text" v-model="person.name"></td>
                    <td><input type="number" v-model="person.age"></td>
                    <td><a href="#" @click.prevent="updatePerson(person)" class="btn btn-success">Update</a></td>
                </tr>

            </template>
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
            persons: null,
            isEditablePerson: null,
            obj: {
                name: 'Davlat'
            }
        }
    },
    mounted() {
        this.getPersons()
        this.$refs.index.printHello()
    },

    methods: {
        getPersons() {
            axios.get('/api/person/list')
                .then(result => {
                    this.persons = result.data
                })
                .catch(error => {
                    console.log('catch an error: ' + error)
                })
        },

        switchEditPerson(id) {
            this.isEditablePerson = id
        },

        isEditedPerson(id) {
            return this.isEditablePerson === id
        },

        updatePerson(person) {
            axios.patch(`/api/person/update/${this.isEditablePerson}`, {
                name: person.name,
                age: person.age,
                job: person.job
            })
                .then(
                    this.getPersons
                )
            this.switchEditPerson(null)
        },

        deletePerson(id) {
            axios.delete(`/api/person/delete/${id}`)
                .then(
                    this.getPersons
                )
            this.switchEditPerson(null)
        },
        sayHiParent() {
            console.log('Hi child method!')
        }
    },

    computed: {
        //  TwentyOlderAgedPeople() {
        //      return this.persons.filter(function (person) {
        //          return person.age > 20
        //      })
        //  },
    },

    components: {
        ExampleComponent
    }
}
</script>

<style scoped>

</style>
