<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //ENCRIPTAR LA CONTRASENA
    $contrasena = hash('sha512', $contrasena);


    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";

    //VERIFICAR QUE EL CORREO NO SE REPITA EN LA BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){//verificar todos los registros de la BD
        echo '
            <script> 
                alert("Este correo ya esta registrado, intenta con otro diferente");
                windows.location = "../index.php";
            </script>;
        ';
        exit();
    }

    //VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BD
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){//verificar todos los registros de la BD
        echo '
            <script> 
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                windows.location = "../index.php";
            </script>;
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado exitosamente");
            window.location = "../index.php";
        </script>';
    }

    mysqli_close($conexion);

?>