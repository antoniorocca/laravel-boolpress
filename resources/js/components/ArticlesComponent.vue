<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="article in articles">
                    <div class="card-header bg-primary">{{article.title}}</div>

                    <div class="card-body bg-secondary">
                        {{article.body}}
                    </div>
                    <div class="card-footer bg-info">
                        <p>Created at: {{ new Date(article.created_at).toLocaleString('it')}}</p>
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
              articles: "" 
           }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/articles').then(response => {
                this.articles = response.data.data;
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card {
        margin: 15px 0;
    }
</style>