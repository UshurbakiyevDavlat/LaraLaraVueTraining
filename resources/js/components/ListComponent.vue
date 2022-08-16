<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in persons">
                <tr :class="isEditedPerson(person.id) ? 'd-none' : ''">
                    <td>{{ person.id }}</td>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td><a href="#" @click.prevent="switchEditPerson(person.id)" class="btn btn-success">Edit</a></td>
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

export default {
    name: "PostExampleComponent",
    data() {
        return {
            persons: null,
            isEditablePerson: null
        }
    },
    mounted() {
        this.getPersons()
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
    },

    computed: {
        //  TwentyOlderAgedPeople() {
        //      return this.persons.filter(function (person) {
        //          return person.age > 20
        //      })
        //  },
    },

    components: {}
}
</script>

<style scoped>

</style>
