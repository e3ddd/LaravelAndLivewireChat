<template>
    <div class="row">
        <div class="col">
            <span @click="this.signOut">Sign Out</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "SingOut",

    methods: {
        async signOut() {
            axios.get('/signOut')
                .then(() => {
                    location.reload()
                })
        }
    }
}
</script>

<style scoped>
span {
    font-size: 20px;
}
</style>
