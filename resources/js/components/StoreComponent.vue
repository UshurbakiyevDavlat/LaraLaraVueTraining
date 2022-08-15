<template>
    <div class="w-25">
        <div><h3>Add person form</h3></div>
        <div class="mb-23"><input type="text" placeholder="Name" v-model="name"></div>
        <div class="mb-23"><input type="number" placeholder="Age" v-model="age"></div>
        <div class="mb-23 pb-4"><input type="text" placeholder="Job" v-model="job"></div>

        <div class="mb-23">
            <button @click="addPerson" class="btn btn-primary"> Add person</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "StoreComponent",

    data() {
        return {
            name: null,
            job: null,
            age: null
        }
    },

    methods: {
        addPerson() {
            axios.post('/api/person', {
                name: this.name,
                age: this.age,
                job: this.job
            })
                .then(result => {
                    console.log(result)

                    this.name = null
                    this.age = null
                    this.job = null
                });
        }
    },
}
</script>

<style scoped>

</style>
