<?php

$conexion=mysqli_connect("localhost","root","","portpollo");

if($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'No se ha podido conectar a la base de datos';
}

?>