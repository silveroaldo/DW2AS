<?php
$res=mostrarCiudades($link);
 ?>
 <h3>Ciudades</h3><a href="index.php?mod=new" class="btn btn-success">Nuevo <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="12" cy="12" r="9"></circle>
   <line x1="9" y1="12" x2="15" y2="12"></line>
   <line x1="12" y1="9" x2="12" y2="15"></line>
</svg></a>
<a href=""  class="btn btn-secondary">Actualizar <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
   <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
</svg></a>
 <a href="json.php" target="new" class="btn btn-primary">JSON <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-minus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
   <line x1="9" y1="13" x2="15" y2="13"></line>
</svg></a>
     <?php
     while ($data=mysqli_fetch_array($res))
     {
       include 'card.vw.php';
     }
      ?>
