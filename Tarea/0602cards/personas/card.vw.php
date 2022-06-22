<div class="card">
  <div class="card-header">
    <?php echo $data['apellido'].", ".$data['nombre']; ?>
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col">
          <p class="card-text"><label>CI Nro.:</label><?php echo $data['cin']; ?> </p>
          <p class=""><label>Fecha de Nacimiento:</label> <?php echo $data['fenac'].", "; ?> <span> <?php echo edadPersona($data['fenac'])." años"; ?></p>
          <p class="card-text"><label>Localidad:</label><?php echo " ". nombreCiudad($link,$data['ciudad_id']); ?> </p>
        </div>

        <div class="col">
          <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-warning">Editar <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
         <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
         <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
         <path d="M16 5l3 3"></path></svg></a>
       
          <a href="<?php echo "index.php?mod=delete&id=".$data["id"]; ?>" class="btn btn-danger">Borrar <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
         <line x1="4" y1="7" x2="20" y2="7"></line>
         <line x1="10" y1="11" x2="10" y2="17"></line>
         <line x1="14" y1="11" x2="14" y2="17"></line>
         <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
         <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path></svg></a>

          <a href="<?php echo "json.php?id=".$data["id"]; ?>" target="new" class="btn btn-primary">JSON <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-minus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
         <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
         <line x1="9" y1="13" x2="15" y2="13"></line></svg></a>
        </div>
      </div>
  </div>
</div>
