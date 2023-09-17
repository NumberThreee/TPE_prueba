<?php 
include_once "index.php";
function registrar(){
 echo   '<form action="router.php" method="POST">';
 echo   '<input type="text" placeholder="Ingrese su nombre" name="registroName">';
 echo   '<input type="text" placeholder="Ingrese su apellido" name="registroLastName">';
 echo   '<input type="text" placeholder="Ingrese su ciudad" name="registroCity">';
 echo   '<input type="text" placeholder="Ingrese un color" name="registroColor">';
 echo   '<button type="submit" > Registrarse </button>';
 echo   '</form>';

}

?>

