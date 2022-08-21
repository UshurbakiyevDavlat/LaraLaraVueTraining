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
                <ShowComponent :person="person" :ref="`show_${person.id}`"></ShowComponent>
                <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import ExampleComponent from "../ExampleComponent";
import EditComponent from "./EditComponent";
import ShowComponent from "./ShowComponent";

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
            // console.log(this.$refs[`edit_${id}`][0])  this way we can access ref of edit data
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
        ShowComponent,
        EditComponent,
        ExampleComponent
    }
}
</script>

<style scoped>

</style>
