<?php 

include "conexion.php";

session_start();
        
if(!isset($_SESSION['Nombre_Usuario'])){
    header("Location: login.php");
}


$ID= $_REQUEST['ID_Curso'];
$nivel_nombre =$_POST['nivel_nombre'];
$nivelpadre_id =$_POST['nivelpadre_id'];


$query ="INSERT INTO niveles(nivel_nombre, nivelpadre_id,Curso)VALUES('$nivel_nombre','$nivelpadre_id','$ID')";
$resultado = $conn->query($query);

if($resultado){
echo "Si se inserto nivel";

}else{
echo "No se Inserto";
}



?>