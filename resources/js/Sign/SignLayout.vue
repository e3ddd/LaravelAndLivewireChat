<template>
    <div class="container">
        <div class="row" v-if="!this.user">
            <div class="col-4"></div>
            <div class="col-2 ml-5 mt-2">
                <SignUp/>
            </div>
            <div class="col-2 mt-2">
                <SignIn/>
            </div>
        </div>

        <div class="row mt-2" v-else>
            <div class="col d-flex justify-content-center">
                <SignOut/>
            </div>
        </div>
    </div>
</template>

<script>
import SignIn from "./SignIn.vue";
import SignUp from "./SignUp.vue";
import SignOut from "./SignOut.vue";
export default {
    components: {
        SignIn,
        SignUp,
        SignOut,
    },

    data: () => ({
        user: false,
    }),

    mounted() {
        this.checkUser()
    },

    methods: {
        async checkUser() {
            axios.get('/check_user',)
                .then((response) => {
                    this.user = response.data
                })
                .catch((err) => {
                    console.log(err)
                })
        }
    },

    name: "SignLayout"
}
</script>

<style scoped>
.container {
    color: black;
}
</style>
