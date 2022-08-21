<template>
    <tr :class="this.$parent.isEditablePerson === person.id ? '' : 'd-none'">
        <td>{{ person.id }}</td>
        <td><input type="text" v-model="person.name"></td>
        <td><input type="number" v-model="person.age"></td>
        <td><a href="#" @click.prevent="updatePerson(person)" class="btn btn-success">Update</a></td>
    </tr>

</template>

<script>

export default {
    name: "EditComponent",
    props: [
        'person'
    ],
    data() {
        return {}
    },
    mounted() {
    },

    methods: {
        updatePerson(person) {
            axios.patch(`/api/person/update/${this.$parent.isEditablePerson}`, {
                name: person.name,
                age: person.age,
                job: person.job
            })
                .then(
                    this.getPersons
                )
            this.$parent.switchEditPerson(null)
        },
    },

    computed: {},

    components: {}
}
</script>

<style scoped>

</style>
