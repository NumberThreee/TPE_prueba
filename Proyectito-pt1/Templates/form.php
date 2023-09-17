<?php 
include_once "index.php";

function mostrar_formulario(){
echo '<div class="formulario">';
echo '<form action="router.php" method="get">';    
echo '<input type="text" name="nombre">';
echo '<input type="text" name="apellido">';
echo '<input type="text" name="ciudad">';
echo '<button type="submit"> enviar </button>';
echo '</form>';
echo '</div>';
}

?>
