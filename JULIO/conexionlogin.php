<?php
session_start();
include "conexion.php";
$correo = $_POST['correo2'];
$contra = $_POST['contrasenya2'];

$validar_login = mysqli_query($conexion, "SELECT * FROM cuentas WHERE cuenta='$correo' and contrasenya='$contra'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: pagina1_2.php");
    exit();
}else{
    echo'
    <script>
       alert("Usuario inexistente, por favor verifique los datos introducidos");
       window.location = "login.php";
    </script>
    ';
    exit();
}
?>