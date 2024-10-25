<?php 
	$nombre= $_POST["mail"];
    $contraseña = $_POST["password"];


    $servername = "127.0.0.1";
    $database = "pagina_web_street_tango";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        // Verificar si el correo ya existe
        $query_check = "select contraseña, usuario_id from users where mail = '$nombre';";
        $resultado_check = mysqli_query($conexion, $query_check);
        $fila=mysqli_fetch_assoc($resultado_check);
        if (mysqli_num_rows($resultado_check) < 1) {
            echo "No hay una cuenta asociada a ese usuario";
        } 
        else {
            if ($fila["contraseña"]==$contraseña) {
                session_start();
                $_SESSION["iniciada"] = true;
                $_SESSION["mail"] = $nombre;
                $_SESSION["usuario_id"]=$fila["usuario_id"];
                header("Location: ../pagina/pagina_web_header.php");
            } else {
                echo "Error al registrar: " . mysqli_error($conexion);
            }
        }
    }