<template>
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-8">-->
<!--                <div class="card">-->
<!--                    <div class="card-header">Hi Component</div>-->
<!--                        Example trying-->
<!--                    <div class="card-body">-->
<!--                        I'm an example component.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</template>

<script>
    export default {
        name: 'ExampleComponent',
        mounted() {
            console.log('Component mounted.')
            console.log(this.$parent.sayHiParent())
        },
        methods: {
            printHello () {
                console.log('exampleHere');
            }
        },
    }
</script>
