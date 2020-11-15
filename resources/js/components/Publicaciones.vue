<template>
        <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="col-sm-10">Nueva Publicación</div>
            </div>
         </div>
         <div class="card-body">
            <input type="text" class="form-control kinput" name="POSTTEXTO" id="POSTTEXTO" placeholder="¿Qué tareas tienes para hoy?">
         </div>
         <div class="card-footer">
            <div class="row">
               <div class="col-sm-6 row">
                  <label for="" class="col-sm-5">Fecha de Entrega</label> 
                 
               </div>
               <div class="col-sm-6">
                  <input type="file" name="POSTCONTENIDOMULTIMEDIA" id="POSTCONTENIDOMULTIMEDIA" class="form-control"> 
               </div>
            </div>
            <div class="card-footer text-muted">
               <div class="row">
                  <label for="" class="col-sm-2">Avance</label> 
                  <input type="range" class="col-sm-10 form-control-range" name="PXUSAVANCE" id="PXUSAVANCE" min="0" max="10">
               </div>
            </div>
         </div>
         <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary btn-block">Publicar</button>
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
