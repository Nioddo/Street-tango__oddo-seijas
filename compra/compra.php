<?php 
    session_start();
    $logeado = false;
    if(isset($_SESSION["iniciada"]) && $_SESSION["iniciada"]){
        $logeado=true;
    }
    $servername = "127.0.0.1";
    $database = "pagina_web_street_tango";
    $username = "alumno";
    $password = "alumnoipm";
    $color=$_GET["color"];
    $size=$_GET["size"];
    $cdt=$_GET["cdt"];
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    ?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Producto</title>
    <link rel="stylesheet" href="compra.css"> <!-- Enlace al CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Inconsolata:wght@200..900&family=Rubik:wght@300..900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bitter:wght@100..900;1,100..900&display=swap">
</head>
<body>
    <header>
        <div id="container">
            <button id="toggleButton" class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAExJREFUSEtjZKAxYKSx+QyjFhAM4QEJov8EnYVfAYqjsfmA5hZQ6AFU7QMSBzT3Ac3jgOYW0DyIhr4FNI8Dmlsw9ONg1AcoIUDz0hQAbegGGXzv/l0AAAAASUVORK5CYII="/> 
            </button>

            <div id="sidebar" class="sidebar">
                <div id="sessionArea">
                    <button id="loginButton">Iniciar Sesión</button>
                    <button id="registerButton">Registrarse</button>
                </div>
            </div>

            <script>
                const toggleButton = document.getElementById('toggleButton');
                const sidebar = document.getElementById('sidebar');

                // Función para mostrar/ocultar la barra
                toggleButton.addEventListener('click', () => {
                    sidebar.classList.toggle('show');
                });

                // Función para ocultar la barra si se hace clic fuera de ella
                document.addEventListener('click', (event) => {
                    const isClickInside = sidebar.contains(event.target) || toggleButton.contains(event.target);
                    if (!isClickInside) {
                        sidebar.classList.remove('show');
                    }
                });
            </script>

            <div id="logo">
                <a href="/pagina/pagina_web_header.php" class="btn">
                    <img src="../imgs/logo-st-tango2.png" alt="Producto 1">
                </a>
            </div>

            <button class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAORJREFUSEvtld0RATEUhb+twKiATtCBDujAqAAdKEEHlEAlRgc6YI5JdshKbnZNxsvmZTP5Od/Nyd3cisKtKqxPLmAOrICpC+gM7AB9ky0HcAAWERVBtimCBVDkRyewBk6uvwQ2rj9LncQCyIIJIPF9EKkiF+TyZl3jMBbg4XYMgXuwewxc3VhUJxcQW+cDyAZ4S6zkSM1LQ/fyaiHZR/QL4EM3BvDjlgXhfGP93wFtrWp9gh4QTVPrB4xZ19+BmVSmRXoxB6ZMesEN0Ev79S1SSVQFG3WESFzFqC6lXbMlm18c8ATvMDIZGBnHqwAAAABJRU5ErkJggg=="/>
            </button>
        </div>
    </header>

    <div class="container">
        <h1>Reserva tu Producto</h1>
        <div class="flex-container">
            <div class="catalogo">
                <div class="producto">
                    <div class="imagen-container">
                        <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/8-f64e9408a2acbd5dad17258334074051-1024-1024.webp" alt="Producto 1" class="imagen-normal">
                        <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/7-9f4c293f1401bc5aca17258334069651-1024-1024.webp" alt="Producto 1 hover" class="imagen-hover">
                    </div>
                    <h2>Producto 2</h2>
                    <p class="descripcion">Otra descripción del producto.</p>
                    <p class="precio">$35.00</p>
                </div>
            </div>
            
            <form method="GET" class="reservation-form" action="reserva.php?cdt=<?php echo $cdt?>&color=<?php echo $color ?>&talle=<?php echo $size ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
    
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
    
                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni" required>
    
                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="fecha">Selecciona una fecha:</label>
                <select id="fecha" name="fecha" required>
                    <option value="">Seleccione una fecha</option>
                    <option value="2024-10-25">25 de Octubre 2024</option>
                    <option value="2024-10-26">26 de Octubre 2024</option>
                    <option value="2024-10-27">27 de Octubre 2024</option>
                </select>
    
                <label for="lugar">Selecciona un lugar de retiro:</label>
                <select id="lugar" name="lugar" required>
                    <option value="">Seleccione un lugar</option>
                    <option value="lugar1">Sucursal Centro</option>
                    <option value="lugar2">Sucursal Norte</option>
                    <option value="lugar3">Sucursal Sur</option>
                    <option value="lugar4">Sucursal Este</option>
                </select>
    
                <button type="submit">Reservar</button>
            </form>
        </div>
    </div>
    
</body>
</html>
