<pre>
<?php
$errores=[];
$error=0;
if ($_POST) {
    
    if ($_POST["nombre"]=="") {
       $error++;
       array_push($errores, "El nombre no debe estar vacio");
    }

    if ($_POST["apellido"]=="") {
        $error++;
        array_push($errores, "El apellido no debe estar vacio");
     }


     $nfeha=DateTime::createFromFormat("Y-m-d", $_POST["femac"]);
     //echo $nfeha->format();

     if ($POST["fenac"]=="" && count($nfeha->getLastErrors())) {
          $error++;
        array_push($errores, "El apellido no debe estar vacio");
     }

     if(!filter_var($POST["ecorreo"], FILTER_VALIDATE_EMAIL)){
         $error++;
         array_push($errores, "El correo no deberia estar vacio");
     }

     if ($error>0) {
         print_r($errores);
     }
}
else{
    echo "no puede acceder a las solicirud";
}


 ?>
 </pre>