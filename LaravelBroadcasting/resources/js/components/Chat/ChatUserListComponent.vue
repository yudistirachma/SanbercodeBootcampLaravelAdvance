<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User online : {{users.length}}</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="user in users">{{user.name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import BusEvent from '../../bus'
    
    export default {
        data(){
            return {
                users : []
            }
        },
        mounted() {
            BusEvent.$on('chat.here', users=>{
                this.users = users
            }).$on('chat.joining', user=>{
                this.users.push(user)
            }).$on('chat.leaving', user=>{
                this.users = this.users.filter(u=>{
                    return u.id !== user.id 
                })
            })
        }

    }
</script>

<style>

</style>