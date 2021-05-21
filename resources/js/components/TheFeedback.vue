<template>
    <div>
        TheFeedback --- {{feedback}}
    </div>
</template>

<script>
    import {mapState, mapGetters, mapActions} from 'vuex';

    export default {
        name: "TheFeedback",
        data: function () {
            return {

            }
        },
        created(){
            this.testFeedback()
        },
        computed:{
            ...mapState('feedback' , {
                feedback: 'feedback'
            })
        },
        methods: {
            ...mapActions('feedback', {
                testFeedback: 'testFeedback'
            }),
        }
    }
</script>

<style scoped>

</style>
