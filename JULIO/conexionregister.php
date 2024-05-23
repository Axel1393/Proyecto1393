<?php
                    // Conexión a la base de datos
                    include "login.php";
                    $servername = "localhost";
                    $username = "root";
                    $password = "12345678";
                    $dbname = "cuentas_guardadas";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verificar conexión
                    if ($conn->connect_error) {
                   die("Conexión fallida: " . $conn->connect_error);
                    }

                    // Obtener datos del formulario
                    $nombre = $_GET['nombre'];
                    $usuario = $_GET['usuario'];
                    $email = $_GET['cuenta'];
                    $contraseña = $_GET['contrasenya'];

                    // Verificar si el usuario ya existe
                    $sql = "SELECT * FROM cuentas WHERE cuenta='$email'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo 
                        "El usuario ya existe";
                    } else {
                    // Insertar datos en la base de datos
                    $sql_insert = "INSERT INTO cuentas (id, nombre, usuario, cuenta, contrasenya) VALUES (0, '$nombre', '$usuario', '$email', '$contraseña')";
                   if ($conn->query($sql_insert) === TRUE) {
                       echo "Usuario registrado correctamente";
                       header('Location: '.'login.php');
                   } else {
                       echo'
                       <script>
                       alert("Error al ingresar los datos")
                       </script>' . $conn->error;
                   }
                    }
                    $conn->close();
?>