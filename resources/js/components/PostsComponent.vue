<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="post in posts">
                    <div class="card-header bg-primary">{{post.title}}</div>

                    <div class="card-body bg-secondary">
                        {{post.body}}
                    </div>
                    <div class="card-footer bg-info">
                        <p>Created at: {{ new Date(post.created_at).toLocaleString('it')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
           return {
              posts: "" 
           }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/posts').then(response => {
                this.posts = response.data.data;
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card {
        margin: 15px 0;
    }
</style>