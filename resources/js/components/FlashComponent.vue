<template>
    <div class="alert alert-success" role="alert" v-if="show">
      {{body}}
    </div>
</template>

<script>
    export default {
        props: ['message'],
        data(){
            return {
                body: '',
                show: false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
            if(this.message){
                this.body = this.message;
                this.show = true;

                setTimeout(()=>{
                    this.show = false;
                }, 3000);
            }
        }
    }
</script>
<style>
    .alert{
        position: fixed;
        right: 25px;
        bottom: 25px;
    }
</style>
