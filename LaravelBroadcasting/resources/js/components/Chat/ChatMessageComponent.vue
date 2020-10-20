<template>
    <div class="chat-list">
        <div class="messages" v-for="chat in chats">
            <div class="users">
                {{chat.user.name}} <span class="time">{{chat.created_at}}</span>
            </div>
            <div class="message">
                {{chat.subject}}
            </div>
        </div>
    </div>
</template>

<script>
    import BusEvent from '../../bus'

    export default {
        data(){
            return {
                chats : []
            }
        },
        mounted(){
            this.getAllChats();
            BusEvent.$on('chat.sent', newChat => {
                this.chats.push(newChat);
                this.scrollToBottom();
            })
            
        },
        methods : {
            getAllChats(){
                axios.get('/chat/all-chat')
                .then(response => {
                    this.chats = response.data.reverse();
                    this.scrollToBottom();
                });
            },
            scrollToBottom(){
                setTimeout(function(){
                    let chatList = document.getElementsByClassName('chat-list')[0];
                    chatList.scrollTop = chatList.scrollHeight;
                }, 1);
            }
        }
    }
</script>

<style>
.messages{
    margin-bottom: 10px;
}
.chat-list{
    max-height: 350px;
    overflow-y: scroll;
}
</style>