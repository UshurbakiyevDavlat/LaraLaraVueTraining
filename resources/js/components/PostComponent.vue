<template>
    <div>
        <ExampleComponent></ExampleComponent>
        <button @click="sayHi">Say hi!</button>
    </div>
</template>

<script>
import ExampleComponent from "./ExampleComponent";

export default {
    name: "PostExampleComponent",
    data() {
        return {
            name: 'Davlat',
            action: 'Lesson',
            title: 'data function explaining',
            lessonInfo: {
                title: 'Vue js + Laravel',
                source: 'Laravel creative',
                time: '3 min'
            }
        }
    },

    methods: {
        sayHi() {
            alert('Hello mate, how are you?')
        }
    },

    components: {
        ExampleComponent
    }
}
</script>

<style scoped>

</style>
