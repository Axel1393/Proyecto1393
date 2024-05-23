<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Register</title>
    <link rel="stylesheet" href="apariencia.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn_iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja_trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para entrar a la pagina</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor_login-register">
                <form action="conexionlogin.php" method="POST" class="formulario_login">
                    <h2>Iniciar sesion</h2>
                    <input type="email" placeholder="Correo Electronico" name="correo2">
                    <input type="password" placeholder="Contraseña" name="contrasenya2">
                    <button class="btn btn-success" type="submit">Entrar</button>
                    <h4>¿Olvidaste tu contraseña?<a href="https://www.youtube.com/watch?v=Q5_uPnxOkN0&ab_channel=AQUISI">Click aqui</a></h4>
                </form>
                <form action="conexionregister.php" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre" id="nombre">
                    <input type="email" placeholder="Correo Electronico" name="cuenta" id="cuenta">
                    <input type="text" placeholder="Usuario" name="usuario" id="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasenya" id="contrasenya">
                    <button class="btn btn-success" type="submit" name="register">Registrarse</button>
                </form>
            </div>
        </div>

    </main>
    <script src="scrip.js"></script>
</body>
</html>