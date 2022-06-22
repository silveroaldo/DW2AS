<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Personas</h3>
<form class="" action="index.php" method="post">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>

  <label for="cin">cin</label><br>
  <input type="text" class="form-control"  name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>

  <label for="apellido">Apellido</label><br>
  <input type="text" class="form-control"  name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>

  <label for="nombre">nombre</label><br>
  <input type="text" class="form-control"  name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>

  <label for="fenac">F. Nacimiento</label><br>
  <input type="text" class="form-control"  name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>

  <label for="email">Email</label><br>
  <input type="text" class="form-control"  name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>

  <label for="ciudad_id">Ciudad</label><br>

  <select class="form-select"  name="ciudad_id" class="form-control" >
    <?php
    while ($d=mysqli_fetch_array($ciudades))
    {
      $sel='';
      if (($d['id']==$data['ciudad_id']) )
        { $sel="selected='true'";}
      echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
    }
     ?>
  </select>
  <button type="submit"  class="btn btn-primary" >Enviar <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <line x1="10" y1="14" x2="21" y2="3"></line>
   <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5"></path>
</svg></button>
<a  class="btn btn-secondary"  href="index.php">volver <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1"></path>
</svg></a>
</form>
