<template>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Hi {{obj.name}} !</div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name: 'ExampleComponent',
    props: [
        'obj'
    ],
    mounted() {
        console.log('Component mounted.')
        console.log(this.$parent.sayHiParent())
    },
    methods: {
        printHello() {
            console.log('exampleHere');
        }
    },
}
</script>
