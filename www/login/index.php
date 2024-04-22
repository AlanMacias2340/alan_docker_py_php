<?php
  session_start();

  if(isset($_SESSION['usuario'])){
    header("location: ../registro_productos/templates/registro_productos.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login and register</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <main>
      <div class="contenedor">
        <div class="contenedor_caja">
          <div class="caja_login">
            <h3>¿Ya tienes cuenta?</h3>
            <p>Inicia sesion para entrar en la pagina</p>
            <button id="btn_sesion">Iniciar sesion</button>
          </div>
          <div class="caja_register">
            <h3>¿No tienes cuenta?</h3>
            <p>Registrate para entrar en la pagina</p>
            <button id="btn_register">registrarse</button>
          </div>
        </div>
        <!--Formulario de inicio de sesion y registro-->
        <div class="contenedor_login_register">
          <!--Formulario para el login-->
          <form action="php/login_usuario_be.php" method = "POST" class="formulario_login">
            <h2>Iniciar sesion</h2>
            <input type="text" placeholder="Correo Electronico" name = "correo" />
            <input type="password" placeholder="Contraseña" name = "contrasena"/>
            <button>Entrar</button>
          </form>

          <!--Formulario para el registro-->
          <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name = "nombre_completo" />
            <input type="text" placeholder="Correo Electronico" name = "correo" />
            <input type="text" placeholder="Usuario" name = "usuario"/>
            <input type="password" placeholder="Contraseña" name = "contrasena"/>
            <button>Registrarse</button>
          </form>
        </div>
      </div>
    </main>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
