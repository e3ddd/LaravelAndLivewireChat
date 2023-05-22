<template>
    <div class="signUp_modal" v-if="show" @click="this.showDialog">
        <div @click.stop class="signUp_modal_item">
            <div class="row">
                <div class="col form">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                           <h3> Sigh Up</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <label for="">Enter your name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                                <input type="text" v-model="this.name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <label for="">Enter your email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <input type="email" v-model="this.email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <label for="">Enter your password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <input type="password" v-model="this.password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <label for="">Confirm your password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <input type="password" v-model="this.confirmPassword">
                        </div>
                    </div>
                    <div class="row" v-if="err !== ''">
                        <div class="col err">
                            <small>
                                {{this.err}}
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-3 d-flex justify-content-center">
                            <button @click="this.signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span @click="this.showDialog">Sign Up</span>
</template>

<script>
export default {
    name: "SignUp",

    data: () => ({
        show: false,
        name: '',
        email: '',
        password: '',
        confirmPassword: '',
        err: ''
    }),

    methods: {
        async signUp() {
            axios.get('/signUp', {
                params: {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    confirmPassword: this.confirmPassword,
                }
            })
                .then(() => {
                    this.name = ''
                    this.email = ''
                    this.password = ''
                    this.confirmPassword = ''
                    setTimeout(() => {
                        this.show = false
                    }, 2000)
                })
                .catch((err) => {
                    this.err = err.response.data.message
                })

        },

        showDialog() {
            this.show = !this.show
        },
    },

}
</script>

<style scoped>
.signUp_modal {
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 2;
    background: rgba(0,0,0,0.5);
    position: fixed;
    display: flex;
}

.signUp_modal_item {
    padding: 30px;
    margin: auto;
    background: white;
    border-radius: 12px;
    min-height: 50px;
    min-width: 300px;
}

span {
    font-size: 20px;
}

span:hover {
    cursor: pointer;
}

button {
    background: #ffff;
    padding: 5px 20px 5px 20px;
    border: 2px solid #0f6674;
    color: #0f6674;
    border-radius: 5px;
}

button:hover {
    cursor: pointer;
    background: #0f6674;
    color: #fff;
    transition: 0.5s;
}

.err small {
    color: red;
}

</style>

