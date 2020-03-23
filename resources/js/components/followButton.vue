<template>
    <div>
        <button class="btn btn-primary ml-3" @click="followUser">{{followsButton}}</button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
            return {
                status: this.follows
            }
        },
        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                .then(response=>{
                    this.status = !this.status;
                })
                .catch(errors=>{
                    if(errors.response.status==401){
                        window.location = '/login';
                    }
                });
            },
        },
        computed: {
            followsButton() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
        
    }
</script>
