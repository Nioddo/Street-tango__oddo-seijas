<?php 
	$nombre= $_POST["nombre"];
	$apellido = $_POST["apellido"];
    $mail = $_POST["email"];
    $contraseña = $_POST["contraseña"];
    $telefono = $_POST["telefono"];

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
    $query_check = "select * from users where mail = '$mail';";
    $resultado_check = mysqli_query($conexion, $query_check);

    if (mysqli_num_rows($resultado_check) > 0) {
        echo "El correo electrónico ya está registrado. Intenta con otro.";
    } else {

        // Insertar el resultado del formulario si no hay duplicados
        $query_insert = "insert into users values (NULL, '$nombre', '$apellido', '$mail', '$contraseña', '$telefono');";
        $resultado_insert = mysqli_query($conexion, $query_insert);

        if ($resultado_insert) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar: " . mysqli_error($conexion);
        }
    }
}
    
?>
