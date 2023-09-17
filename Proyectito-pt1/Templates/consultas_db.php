<?php 

function consultar(){

    try{  
    $db = new PDO('mysql:host=localhost;dbname=proyectito_pt1;charset=utf8', 'root', '');
    $consulta = "SELECT * FROM usuarios";
    $stmt = $db->prepare($consulta);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;    
    }  
    catch(error){
        echo '<h1> ERROR INSPERADO </h1>';
    }


}

function insertar($name, $lastName, $city, $color){
    try{
        $db = new PDO('mysql:host=localhost;dbname=proyectito_pt1;charset=utf8', 'root', '');    
        $insercion = "INSERT INTO usuarios(nombre, apellido, ciudad, color) VALUES (:nombre, :apellido, :ciudad, :color)";
        $stmt = $db->prepare($insercion);
        $stmt->execute(array(
            ':nombre' => $name,
            ':apellido' => $lastName,
            ':ciudad' => $city,
            ':color' => $color
        ));
        echo '<h1> Datos Cargados! </h1>';
    }
    catch(error){
        echo '<h1> Problemas al insertar los datos </h1>';
    }


}




?>