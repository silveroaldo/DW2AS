<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
$link=conectar();
//print_r($_POST);
//print_r($_GET);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ciudades</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link rel="stylesheet" href="/DW2AS/node_modules/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
     <?php
     	include('../libs/menu.php')
      ?>
      <div class="container">



     <?php
      if (!($_POST) && !($_GET))
      {
        include('list.php');
      }
        elseif ($_GET['mod']=="new")
        {
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $res=mostrarCiudad($link,$_GET['id']);
          include('form.php');
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarCiudad($link,$_GET);
              include('list.php');
              // code...
            }

        }elseif ($_POST) {
          // code...
          if ($_POST['id']==-1)
          {
            $salida= agregarCiudad($link,$_POST);
            include('list.php');
            //echo $salida;
          } elseif ($_POST['id']!='') {
            $salida= editarCiudad($link,$_POST);
            include('list.php');
          }
        }

      ?>
      </div>

   </body>
 </html>
