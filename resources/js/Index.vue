<template>
    <div class="container">
        <div class="row">
            <div class="col chat">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <Chat/>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import Chat from "./Chat/Chat.vue";
export default {
    components: {
        Chat,
    },
    name: "Index.vue"
}
</script>

<style scoped>
.chat {
}
</style>
