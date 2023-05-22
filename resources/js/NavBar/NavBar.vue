<template>
<div class="container-fluid navBar">
    <div class="row">
        <SignLayout/>
    </div>
</div>
</template>

<script>
import SignLayout from "../Sign/SignLayout.vue";
export default {
    components: {
        SignLayout
    },
    name: "NavBar"
}
</script>

<style scoped>
.navBar {
    height: 60px;
    background: #eaf8ff;
}
</style>
