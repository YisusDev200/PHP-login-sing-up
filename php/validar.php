<?php

include 'db.php';
include 'index.php';
$correo = $_POST['loginCorreo'];
$contrasena = $_POST['loginPassword'];
session_start(); 
$_SESSION['corre']=$correo;

$consulta = "SELECT * FROM datostabla WHERE correo='$correo' and contrasena='$contrasena'";
$consulta2 = "SELECT * FROM datostabla WHERE usuario='$correo' and contrasena='$contrasena'";

$resultado=mysqli_query($conexion, $consulta);
$resultado2=mysqli_query($conexion, $consulta2);
$n1 = mysqli_num_rows($resultado);
$n2 = mysqli_num_rows($resultado2);

if($n1 or $n2){
    header("location:../home.php");
}else{
    echo '
    <script>
        alert("Contraseña o Correo Incorecto");
        window.location= "../index.php";

    </script>
';
exit();
mysqli_close($conexion);
}


mysqli_free_result($resultado);
mysqli_close($conexion);
?>

