<template>
    <div>
<!--        <ExampleComponent></ExampleComponent>-->
        <button @click="sayHi">Say hi!</button>
        <div>{{sayJob}}</div>
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
