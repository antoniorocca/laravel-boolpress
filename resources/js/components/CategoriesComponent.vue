<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="category in categories">
                    <div class="card-header bg-primary">{{category.name}}</div>

                    <div class="card-body bg-secondary">
                        {{category.description}}
                    </div>
                    <div class="card-footer bg-info">
                        <p>Created at: {{ new Date(category.created_at).toLocaleString('it')}}</p>
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
              categories: "" 
           }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/categories').then(response => {
                this.categories = response.data.data;
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card {
        margin: 15px 0;
    }
</style>