<?php 
require_once "Templates/mostrar_info.php";
require_once "Templates/form.php";
require_once "Templates/registro.php";
require_once "Templates/consultas_db.php";
if(isset($_GET["id"])){
    $id= $_GET["id"];
     switch($id){
        case "inicio":
        case "datos":
            mostrarAlgo($id);
            break;
        case "ini_sesion":
            mostrar_formulario();
            break; 
        case "registrarse":
            registrar();
            break;
        case "mostrarUsuarios":
            $datos = consultar();
            mostrarUsuarios($datos); 
            break;   
        default:
            echo '<h1> Hubo un error </h1>';
        
    }
}

else{
    if($_SERVER['REQUEST_METHOD'] === 'GET' ){
        if(isset($_GET["nombre"])){
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $ciudad = $_GET["ciudad"];
            echo "Hola " . $nombre . " " . $apellido . ", tu ciudad es " . $ciudad ;
        }
    }    
    elseif($_SERVER['REQUEST_METHOD'] === 'POST') {  
        if(isset($_POST["registroName"])){
            $nombre = $_POST["registroName"];
            $apellido = $_POST["registroLastName"];
            $ciudad = $_POST["registroCity"];
            $color = $_POST["registroColor"];
            insertar($nombre, $apellido, $ciudad, $color);
        }
    }

    else{
        echo '<h1> ALTO DESPELOTE </h1>';
        
    }
    
}
?>