
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        </thead>
        <tbody id="tab_datos">
            <tr>
        
            </tr>
        </tbody>
    </table>
    <form class="" action="formulario.php" method="post">
        <form class="container">

         <!-- Message input -->
         <div class="form-outline mb-4">
         <label class="form-label" for="form4Example3">Nombres</label>
                <input type="text" name="nombre" id="nombre" value="" placeholder="Ingrese su nombre" class="form-control" />
                
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form4Example2">Apellidos</label>
                <input type="text" name="apellido" id="apellido" value="" placeholder="Ingrese su apellido" class="form-control" />
                
            </div>
           
            <!-- Checkbox -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Fecha de Nacimiento</label>
                <input type="date" name="fecha" id="fecha"  class="form-control" date_format="DD/MMM/YYY"/>
            </div>

            <!-- Submit button -->
            <button type="submit" id="btProcesar" class="btn btn-primary btn-block mb-4">Enviar</button>
            <button onclick="terminar()" type="submit" id="btTeminar" class="btn btn-primary btn-block mb-4" o>Terminar</button>
        </form>


        <pre>
<?php
session_start();
$_SESSION['personas']=$_POST;
if ($_POST['nombre']!=="") {
    array_push($_SESSION['personas'], $_POST['nombre']);
}

if ($_POST['apellido']!=="") {
    array_push($_SESSION['personas'], $_POST['apellido']);
}


   function terminar(){
       session_destroy();
   }


print_r($_SESSION);
?>
</pre>
</body>
</html>