<template>

    <div class="card">     
      <div class="card-header">
         Comentarios
         </div>
      <div class="card-body">
          <form action="/publicaciones_x_usuario/store" method="get">
                        <div class="form-group">
                           <div class="row">
                               <input type="text" class="form-control kinput col-sm-10" name="comentario" placeholder="Comentario...">
                              

                              
                              <button type="submit" class="btn btn-primary col-sm-2">Comentar</button>
                           </div>
                        </div>
                     </form>
                  </div>
         </div>
   </div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
