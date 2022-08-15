<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons" v-bind:key="person.id">
                <td>{{ person.id }}</td>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: "PostExampleComponent",
    data() {
        return {
            persons: null
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
