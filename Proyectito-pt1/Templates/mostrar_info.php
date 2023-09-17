<?php 
include_once("index.php");

function mostrarAlgo($id){
    if($id == "inicio"){
        echo "<h4> AQUI ESTA EL INICIO </h4>"; 
    }
    else{
        echo '<div class="cajon">';
        echo '<div class="centro">';
        for($i=1;$i <=4;$i++){
            echo '<div class="imagenes">';
            echo '<img src="https://scontent.foyo1-1.fna.fbcdn.net/v/t39.30808-6/300162819_213885090964547_6645064805379822717_n.png?_nc_cat=110&ccb=1-7&_nc_sid=52f669&_nc_ohc=i2RBInHR1DcAX9Z6cOs&_nc_ht=scontent.foyo1-1.fna&oh=00_AfCYsH_fP0Us4Ci_rISf8NUAghhrSZPkkOrjcfCoWrg3HQ&oe=6509B9EB" alt="">';
            echo '<h4>' . $i . '</h4>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}

function mostrarUsuarios($stdClass){
    echo '<div class="listaUsuarios">';
    
    foreach ($stdClass as $datos){
        echo '<ul>'; 
        echo '<li>' . $datos->nombre . '</li>';
        echo '<li>' . $datos->apellido . '</li>';
        echo '<li>' . $datos->ciudad . '</li>';
        echo '<li>' . $datos->color . '</li>';
        echo '</ul>';
    }
    echo '</div>';
}



?>