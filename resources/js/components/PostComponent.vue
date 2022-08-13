<template>
    <div>
        <ExampleComponent></ExampleComponent>
        {{name}}
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
    components: {
        ExampleComponent
    }
}
</script>

<style scoped>

</style>
