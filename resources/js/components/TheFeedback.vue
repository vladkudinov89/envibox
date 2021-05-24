<template>
    <div class="container">

                <div v-if="status" :class="{ 'alert-danger': status === 'error' , 'alert-success': status === 'success'}"
                     class="alert alert-dismissible fade show" role="alert">

                    <span v-if="status === 'error'">
                          Error send feedback
                    </span>
                    <span v-if="status === 'success'">
                        Success send feedback
                    </span>

                    <button type="button" class="close" @click="closeAlert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


        <FormulateForm
            class="login-form"
            v-model="formValues"
            @submit="sendFeedbackForm"
        >
            <h2 class="form-title">Feedback</h2>
            <FormulateInput
                name="name"
                type="text"
                label="Your name"
                placeholder="Your name"
                validation="required|min:2,length"
                error-behavior="blur"
            />
            <FormulateInput
                type="tel"
                name="phone_number"
                label="Phone number"
                placeholder="Phone number"
                help="Enter your phone number"
                validation="required|number|starts_with:+"
                error-behavior="blur"
            />
            <FormulateInput
                type="textarea"
                name="message"
                label="Enter a message in the box"
                validation="required|min:10,length"
                error-behavior="blur"
            />
            <FormulateInput
                type="submit"
                label="Send"
            />
        </FormulateForm>
    </div>
</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        name: "TheFeedback",
        data: function () {
            return {
                formValues: {},
                status: ''
            }
        },
        methods: {
            ...mapActions('feedback', {
                sendFeedbackFN: 'sendFeedback'
            }),
            closeAlert(){
                this.status = '';
                this.formValues = {}
            },
            sendFeedbackForm(data){
                this.sendFeedbackFN(data)
                .then( res => {
                    if(res.data.status === 'success'){
                        this.status = 'success'
                    } else{
                        this.status = 'error'
                    }
                })
                .catch(err => console.log(err))
            }
        }
    }
</script>

<style scoped>

</style>
