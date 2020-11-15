<template>
     <div class="row">
        <div class="col-md-8-md-offset-2">
            <publicaciones-component  ></publicaciones-component>
          
        </div>
      </div>
</template>

<script>
    export default {
         data(){
            return{
               comentarios:[]
            }
         },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
