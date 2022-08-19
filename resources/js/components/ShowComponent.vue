<template>
    <tr :class="this.$parent.isEditablePerson === person.id ? 'd-none' : ''">
        <td>{{ person.id }}</td>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td><a href="#" @click.prevent="$parent.switchEditPerson(person.id)" class="btn btn-success">Edit</a></td>
        <td><a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a></td>
    </tr>
</template>
<script>
export default {
    name: "ShowComponent",
    props: [
        'person'
    ],
    data() {
        return {}
    },
    mounted() {
    },

    methods: {
        deletePerson(id) {
            axios.delete(`/api/person/delete/${id}`)
                .then(
                    this.$parent.getPersons
                )
            this.$parent.switchEditPerson(null)
        }
    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
