<?php 
session_start();
	$talle= $_POST["size"];
	$color = $_POST["color"];
    $cantidad = $_POST["cdt"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $phone = $_POST["telefono"];
    $email = $_POST["email"];
    $idfecha = $_POST["fecha"];
    $idsucursal = $_POST["lugar"];
    $usuarioid=$_SESSION["usuario_id"];



    $servername = "127.0.0.1";
    $database = "pagina_web_street_tango";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
else {

        // Insertar el resultado del formulario si no hay duplicados
        $query_insert = "insert into reservas values (NULL, '$nombre', $dni, $phone, '$email', $usuarioid, '$color', '$talle',$idsucursal,$idfecha,$cantidad);";
        $resultado_insert = mysqli_query($conexion, $query_insert);

        if ($resultado_insert) {
            header("Location: ../pagina/pagina_web_header.php");

        } else {
            echo "Error al registrar: " . mysqli_error($conexion);
        }
    }

    
?>
