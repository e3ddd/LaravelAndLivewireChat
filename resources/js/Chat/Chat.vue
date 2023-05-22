<template>
<div class="container">
    <div class="row chat">
        <div class="col chatField">
            <div class="row p-0 m-0" v-for="(message, key) in this.messages">
                <div class="col">
                    <div class="row item recipient" v-if="key.includes('r')">
                        <div class="col-1">
                            <img alt="icon">
                        </div>
                        <div class="col-2">
                            Recipient:
                        </div>
                        <div class="col-8 messageField">
                            {{message}}
                        </div>
                    </div>
                    <div class="row item sender" v-if="key.includes('s')">
                        <div class="row item">
                            <div class="col-8 messageField">
                                {{message}}
                            </div>
                            <div class="col-2">
                                :Sender
                            </div>
                            <div class="col-1">
                                <img alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row send">
        <div class="col-9 sendInput">
            <textarea type="text" :rows="this.rowCounter" v-model="this.message"></textarea>
        </div>
        <div class="col sendBtn">
            <button>Send</button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Chat",
    data: () => ({
        messages: {

                'r0' : 'Hi ! Howe are u ? ',
                's1': 'Hello ! Fine. Wassup ?',
                'r2': 'Good, thnx !',
                's3': 'What are u doing ?',
                'r4': 'Cooking. And u ?',

        },

        message: '',
        rowCounter: 2,
    }),

    watch: {
        message(newValue, oldValue) {
            if(oldValue.length >= 48 * this.rowCounter){
                console.log(oldValue.length)
                this.rowCounter++
            }
            if(newValue.length <= 47 * this.rowCounter){
                if(this.rowCounter > 2){
                    --this.rowCounter
                }
            }
        }
    },

}
</script>

<style scoped>
.container {
    font-size: 14px;
}

::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

textarea:focus, input:focus{
    outline: none;
}

input:-webkit-autofill {
    color: #ffffff !important;
}

.chat {
    min-width: 500px;
    height: 600px;
    margin-top: 50px;
}

.chatField {
    border: 1px solid lightgrey;
    box-shadow: 2px 2px 2px grey;
    border-radius: 10px;
}


.send {
    margin-top: 10px;
}

.sendInput textarea{
    width: 380px;
}

.sendBtn button {
    margin-top: 8px;
    margin-left: 10px;
    background: #ffff;
    padding: 5px 20px 5px 20px;
    border: 2px solid #0f6674;
    color: #0f6674;
    border-radius: 5px;
}

.sendBtn button:hover {
    cursor: pointer;
    background: lightgrey;
    transition: 0.5s;
}

.chatField .item {
    margin-bottom: -10px;
    max-width: 400px;
    margin-top: 20px;
}

.sender {
}

</style>
