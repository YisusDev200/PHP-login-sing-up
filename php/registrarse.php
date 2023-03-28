<?php

include 'db.php';
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['password'];
//$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO datostabla(usuario, correo, contrasena) VALUES ('$usuario', '$correo', '$contrasena')";


//verifica si existen usuario y correos igaules :)

$UsuarioVR = mysqli_query($conexion, "SELECT * FROM datostabla WHERE usuario='$usuario'");
if (mysqli_num_rows($UsuarioVR) > 0){
    echo '
        <script>
            alert("este usuario ya esta registrado");
            window.location= "../index.php";

        </script>
    ';
    exit();
    mysqli_close($conexion);
}

$CorreoVR = mysqli_query($conexion, "SELECT * FROM datostabla WHERE correo='$correo'");

if (mysqli_num_rows($CorreoVR) > 0){
    echo '
        <script>
            alert("este correo ya esta registrado");
            window.location = "../index.php";

        </script>
    ';
    exit();
    mysqli_close($conexion);
}



$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Se guardo de forma correcta");
        window.location = "../index.php";
    
    </script>
    ';
}else{
    echo '
    <script>
        alert("error intente de nuevo xd");
        window.location = "../index.php";
    
    </script>
    ';
}

mysqli_close($conexion)
?>