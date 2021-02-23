<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="tag in tags">
                    <div class="card-header bg-primary">{{tag.name}}</div>

                    <div class="card-body bg-secondary">
                        {{tag.body}}
                    </div>
                    <div class="card-footer bg-info">
                        <p>Created at: {{ new Date(tag.created_at).toLocaleString('it')}}</p>
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
              tags: "" 
           }
        },
        mounted() {
            console.log('Component mounted.');
            axios.get('api/tags').then(response => {
                this.tags = response.data.data;
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card {
        margin: 15px 0;
    }
</style>