<?php 
	$nombre= $_POST["mail"];
    $contraseña = $_POST["contraseña"];


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
        $query_check = "select contraseña from users where mail = '$mail';";
        $resultado_check = mysqli_query($conexion, $query_check);
        $fila=mysqli_fetch_assoc($resultado_check);
        if (mysqli_num_rows($resultado_check) < 1) {
            echo "No hay una cuenta asociada a ese usuario";
        } 
        else {
            if ($fila["contraseña"==$contraseña]) {
                echo "inicio exitoso.";
            } else {
                echo "Error al registrar: " . mysqli_error($conexion);
            }
        }
    }