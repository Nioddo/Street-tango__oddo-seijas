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
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        $query_check = "select * from productos order by fecha_de_entrada desc limit 3;";
        $resultados= mysqli_query($conexion, $query_check);
    
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street Tango</title>
    <link rel="stylesheet" href="pagina_principal.css">
    <link rel="shortcut icon" href="../imgs/logo-st-tango.png" type="image/x-icon">
   
</head>

<body>
    
<div id="loader" class="loader">
        <img src="../imgs/logo-st-tango2.png" alt="Logo de la página" class="loader-logo">
    </div>

    <script>
        window.addEventListener('load', function() {
            // Espera 3 segundos antes de ocultar la pantalla de carga
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
                document.body.style.overflow = 'auto'; // Permite el desplazamiento una vez que se carga el contenido
            }, 1500); // Cambia el tiempo de espera según lo necesites (3000 ms = 3 segundos)
        });
    </script>
    <header>
        <div id="container">

            <button id="toggleButton" class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAExJREFUSEtjZKAxYKSx+QyjFhAM4QEJov8EnYVfAYqjsfmA5hZQ6AFU7QMSBzT3Ac3jgOYW0DyIhr4FNI8Dmlsw9ONg1AcoIUDz0hQAbegGGXzv/l0AAAAASUVORK5CYII="/>
            </button>

            <div id="sidebar" class="sidebar">
                <?php 
                if($logeado==true)
                {
                    ?>
                    <div id=acount>
                    <div id="sessionlogeada">
                    <h5>BIENVENIDO</h5>
                    <a class="botton1" href="../cerrar_sesion.php" class="cierresesion">Cerrar sesion</a>
                    </div>
                    </div>
                <?php 

                }
                else{
                    ?>
                    <div id="sessionArea">
                    <a class="botton1" href="../inicio sesion/inicio_sesion_index.html" class="botoncuentas">Iniciar Sesión</a>
                    <a class="botton1" href="../registro/registro-index.html" class="botoncuentas">Registrarse</a>
                </div>
                
                <?php 


                }
                ?>

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
                <img src="../imgs/logo-st-tango2.png" alt="Producto 1">
            </div>

        
            <button class="icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAORJREFUSEvtld0RATEUhb+twKiATtCBDujAqAAdKEEHlEAlRgc6YI5JdshKbnZNxsvmZTP5Od/Nyd3cisKtKqxPLmAOrICpC+gM7AB9ky0HcAAWERVBtimCBVDkRyewBk6uvwQ2rj9LncQCyIIJIPF9EKkiF+TyZl3jMBbg4XYMgXuwewxc3VhUJxcQW+cDyAZ4S6zkSM1LQ/fyaiHZR/QL4EM3BvDjlgXhfGP93wFtrWp9gh4QTVPrB4xZ19+BmVSmRXoxB6ZMesEN0Ev79S1SSVQFG3WESFzFqC6lXbMlm18c8ATvMDIZGBnHqwAAAABJRU5ErkJggg=="/>
            </button>
    </header>


    <main>
        
        <div id="slider-frame">
            <ul>
                <li><img src="../imgs/slider_12.jpg.jpg" alt="Slide 1"></li>
                <li><img src="../imgs/slider_22.jpg.jpg" alt="Slide 2"></li>
                <li><img src="../imgs/slider_32.jpg.jpg" alt="Slide 3"></li>
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </ul>


            <script>
            // JavaScript embebido para controlar el carrusel
            let slideIndex = 0;
            const slides = document.querySelectorAll('#slider-frame ul li');
            let autoChange;
    
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.style.display = (i === index) ? 'block' : 'none';
                });
            }
    
            function moveSlide(n) {
                slideIndex = (slideIndex + n + slides.length) % slides.length;
                showSlide(slideIndex);
                resetAutoChange();
            }
    
            function autoChangeSlide() {
                moveSlide(1);
            }
    
            function resetAutoChange() {
                clearInterval(autoChange);
                autoChange = setInterval(autoChangeSlide, 15000); // Cambia cada 15 segundos
            }
    
            showSlide(slideIndex);
    
            // Iniciar el cambio automático
            autoChange = setInterval(autoChangeSlide, 15000);
        </script>
    </div>
    <div id="imgs-info">

        <div class="info-icons">
        <img src="../imgs/clipboard.png" alt="Remeras">

            <h2>Reserva tus pedidos</h2>
            <h3>Programa las entregas para tus compras</h3>
        </div>

        <div class="info-icons">
        <img src="../imgs/pay.png" alt="Remeras">

            <h2>Paganos en persona</h2>
            <h3>El abono total de tus compras sera de forma prensencial</h3>    
        </div>

        <div class="info-icons">
        <img src="../imgs/delivery-truck.png" alt="Remeras">

            <h2>Verifica tus envios</h2>
            <h3>Envio a zonas de caba y partes de provincia</h3>    
        </div>
        
    </div>

    <div class="container">
        <div class="box">
            <img src="../imgs/hombre.jpg" alt="Remeras">
            <div class="overlay">
                <h2>FOR HIM</h2>
                <a href="../catalogos/All/catalogo_all_index.php?genero=Hombre" class="btn">VER MÁS</a>
            </div>
        </div>
        <div class="box">
            <img src="../imgs/mujer.jpg" alt="For Her">
            <div class="overlay">
                <h2>FOR HER</h2>
                <a href="../catalogos/All/catalogo_all_index.php?genero=Mujer" class="btn">VER MÁS</a>
            </div>
        </div>
        <div class="box">
            <img src="../imgs/todo.jpg" alt="Pantalones">
            <div class="overlay">
                <h2>ALL</h2>
                <a href="../catalogos/All/catalogo_all_index.php" class="btn">VER MÁS</a>
            </div>
        </div>
    </div>
    <h1 id="titulo-new-drops">New drops</h1>
    <div class="catalogo">

<?php
            
            while($fila=mysqli_fetch_assoc($resultados)){ 
                ?>
            <div class="producto">
            <div class="imagen-container">

                <img src="<?php echo $fila['ruta_imagen_dorso']?>" alt="Producto 1" class="imagen-normal">

                <img src="<?php echo $fila['ruta_imagen_reverso']?>" alt="Producto 1 hover" class="imagen-hover">
            </div>
            <h2><?php echo $fila['nombre']?></h2>

            <p class="descripcion"><?php echo $fila['descripcion']?></p>

            <p class="precio">$<?php echo $fila['precio']?></p>

            <a id="botonc" href="../producto/producto.php?id=<?php echo $fila['productos_id'] ?>">

                <button class="comprar2">
                <span>VER PRODUCTO</span>
                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <defs>  </defs> <g id="cart"> <circle r="1.91" cy="20.59" cx="10.07" class="cls-1"></circle> <circle r="1.91" cy="20.59" cx="18.66" class="cls-1"></circle> <path d="M.52,1.5H3.18a2.87,2.87,0,0,1,2.74,2L9.11,13.91H8.64A2.39,2.39,0,0,0,6.25,16.3h0a2.39,2.39,0,0,0,2.39,2.38h10" class="cls-1"></path> <polyline points="7.21 5.32 22.48 5.32 22.48 7.23 20.57 13.91 9.11 13.91" class="cls-1"></polyline> </g> </g></svg>
                </button>
            </a>
            </div>

                <?php
            }
        }
?>
        </div>

    </main>

    <footer>
        <div class="footer-content">
        <h3>Street Tango</h3>
<ul class="politics">
<li><a href="#">Como comprar</a></li>
<li><a href="/politica_de_devolucion/politica_devolucion.php">Politica de devolucion</a></li>

</ul>
        <ul class="socials">
            <li><a href="https://www.instagram.com/nicoo.oddo/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAYAAAA+VemSAAAAAXNSR0IArs4c6QAAFRlJREFUeF7tnT3MbssUx9dFpRIF5UGlUQrRXFRICBXxkUsUKt/RKHAlIlEIcguFhOszIiESiYiC2yAoNAoVN1oFnUSC93/Onnv3fc7zsWfWmllrzfyf5OR93vPOno+11m+vNWtm9n5E+KEEKIG0Engkbc/ZcUqAEhACTCOgBBJLgAAnVh67TgkQYNoAJZBYAgQ4sfLYdUqAANMGKIHEEiDAiZXHrlMCBJg2QAkklgABTqw8dp0SIMC0AUogsQQIcGLlseuUAAGmDVACiSVAgBMrj12nBAgwbYASSCwBApxYeew6JUCAaQOUQGIJEODEymPXKQECTBugBBJLgAAnVh67TgkQYNoAJZBYAgQ4sfLYdUqAANMGKIHEEiDAiZXHrlMCBJg2QAkklgABTqw8dp0SIMC0AUogsQQIcGLlseuUAAGmDVACiSVAgBMrj12nBAhwmw28bHcZvpff7538P37dlz33+60enF5/q7zm739TXHx67aXfn961Ucrgp6ZtRbdzX0qAr+sP8LxeRABmARW/89NHAgXiX29AA3b8H37n54wECPBzhQJIH9ugJahxkCkeGiA/RaCfVQwBfuBhH70Tyefi2Ct7ckMCxSsD5m+tLK1VAf7sFhK/f2XlTzL2pWFeCeASHtPTTkLumWEAZnjkJ1dJiq0AMMGdF9hLIyteGSBPnQCbGWCCux64pyOe3iPPCjDmuAyVCXCRQAH58dlEMhvA8Lrf3JaBZtMVx6OXAEB+w0zz45kAxnLQr/Q6Zg2TS2AqbzwLwAyZJ6euw/CQ3II3Tv3JDjBD5tTm59759CF1ZoAJr7v9T9GB1BBnBRjw/nUK8+EgIkgAEH8g45pxRoBnT1ZlOVY38pjjCMhTQpwN4Eied3+Wtez2OXfWFca3hzILoK3QXDr/vP9/HB7BpxzRjHIzSAdxJoC95rxl2QEnX/CZemteK7UG1xWI8ROAI9LyONKZak6cCWCs8Y5Q6P7s6TKb4g0A7FFFeaACgC7fe7RzWmcaiLMA3BvevZelhx2BSFsbBeLy0IW2Wo5dlWKdOAPAvZNW2DM93R7ZYzaauhTOcpdz3b0GEt42ogPcM2kVXjm9rHKieotH7gVy+KRWdIB7hM4pQqOJIBsxlJ5HRwHxy0cMoqWNyAAjRMLJIssPva6lNOPVBZBx07delsJTPrDRI9wnMsD/M5RW+FDIcKyrV9UD4rBZ6agAw/NaPXCO8K6HdI+QOqQXjgiwZeKK89314N2P2PqYKY4fhlpmjAiwlfcNG/aszdTQ0Vvv3gvnECICbDX3DXe3HGq6bKxIwHpOHMquogFsFfKEEjJZcpeA5bQs1Fw4GsA446tdAgglYHfTZQeKBKyWJUNNzSIBbCHg0IvuZOmQBF4jIvj3ShF5iYg8T0T+ISJ/EZE/iMjvReTfh2p6uJBVfiXMfoJIAFsIF4vtS7/sqtGwI1z2ZhF5z/bvWn9+IiI/EJEfNXTaKpQOk8yKBLA2eUXv22DRAS55kYh8VEQ+IiIvPtif/9yV/ZqIfFVE/n7wmlLMwlGgrhB5ligAW4TP9L6VlhygOOD9vIh8uLEv3xGRz1Q+qN3KC4cIo6MArL0r0vs2EuB8GSDAyoPmAy/8iTuQ/1tRidbe0FSIMDoKwNrwmd63wnqDFH2LiMCDHg2br3UbB/y/XTEuKy+MU0quzziLALBF+BxhHBX2s3xR6Ou7IvJuI0n8cqsL2eqjH4ujqu7z4AiGrwWY675HTTZOudeKyG+Nu/N2EflpRZ0Wm4bc58ERANbORxg+V1htkKLIOn/FuC9fFJFPV9RpEUa7514iAKzdfeU+D6kwGhZ9IIGvi8iHjIXxMxF5a2WdWttbHmCLu2CEm1Cl3Sxf/Mci8g5jKWCHFnZw1XzSz4O9jZ/z3xpzm6csdlNhzmr5+aOIvLqyQosnnrrOg70B1iYSOP992GL3h0HK92ivdvnG3Q6qD1bCdqv4L0TkTbcKnfzdIgJ0TaJ6A6xNYK08/y2PjYFNwpOU9wzdsuH9O53wHa+Mwc+RT5r4lIh86VZHK//+ZRH5ZOU1KK4No103dHgDrE0iePe/wV6aLynA9npn0P6VMoC6J9AWoeupIN8lIj9skK7WibgmsrwB0ADsKrgGQ2m5pECLXIH2nHRt+z1fN/PC7UTR22o7daE81pTf2XCwAdVpp3Gow40jt4Y3RWi2ULrOPYwM71I18FDwDKOhvdQfwIzXz1ge1QRw3xOR5xvIEochnmisxwJgtx1ZngBrEwgzAgxj8vC2R22/eGWrd0lh3vrxo41fKAc7+NhdPf9qrMcinF8SYK3gXNP3jcZyzeMimZLlYwUybuJfUOyJ/vm2++pPCsFp7RBNE+AGBcywhGT92NMGMaousXg+1Cs2D1p7JhieF0cJNfBi8NpIEHW42aJnCK3dxOEmNJXJP3uxxdzLqCuqaiy88QtE5H0i8l4ReeON3vxORL6/HUX8p6rnDy62ANgtGswMsFvYojSa7F73WqILOtGcj32piLxORHBa6VUnD7X78/ZAu9/cebynlTo4vVyTTEVdBLhBIRk3cWijjgYxDb3EwhsP7fDWmGY5c1mAtSFkNoC1GwY8DLu1TTeP1Nhh7W4stxURzxBaC7Bn32vtRGsgte1FKJ8JYq1+3LZTekKg9Uiefa8BRGscNW1FK+tm2JWC0OrIbZyeEKwAsNYwKu0wZPEMW161tkiAK00vg1EQ3meV6mbgB+1KC7CbPWb1wG4CO2gQhPdhQbkleg7ojAAfENJpEY2RR76ja42hQZT3114BCNZHyzrs/jhgORRRzgzf284QYxvhyE/UxJY2oermUDw98IwAj1rn3QOrOSEEoAHxo9shihEwR9xBR4AbND8bwBZb8m6Jscexvn2buAHhLQc9PbPF/ulbcqr9uxZgtOfiDF0a3aSr2f0SMYTW3JBuGVxvcE/bB8gw6l7nkd1CzguCJsC3LPDM32cCuNe813NrYgmve4EcaT5MgAcDHCmjaXGe9Jz4okQZALk8aKBBzRcvwc0J8+Gez9462l+L3IVLNOvSqEEIHQngHqFzJO8EdZVnc6Fflp8oNykC3KBVTQgdBWALxZ+KLvIxSYtQM+J4LfTo4gxdGp3IA2tuQqeGHCmkvHY/hjdG1GGV4IqQ0CLAC3pgC6XvxRbZ856q13rJzHtt2EKXLs7QpdFJPLCl980Eb4HZwuhLXd5e2GIsLufTCXBD6LDtWsLSkcUnWsKqZkyWc2LPmxgBrtH6BB7YKvMcJQvboL77l1g+38tTFgS4wQI0DxLzzEJbrft6h40NKjt7iWVSy8sLE+AGa8gKsNWuKy9jbVDVzUssAEAjXtMJi/4vNwfOCrBF8sozXLxJY0MBq1DaKyohwA1KzwiwhaIhqpm8r3VW2kM2FnqlB664CXjNgS3C59m8b1GblRf2CKMJcAV8pWhGD2wRPnt4mAb1NF1ikeDzuMER4AZ1ZwRY0+ciIs+19wY1VV+ilZHHPJgAV6tZRKNojxDaQske/W5QjeoSizXy0VGKhW45B64wGw8QLJTsvee3QsTNRS3C6NHzYAvdEuAKk/EA2CKBNXv4XHZnIVeg+RDgg9LzNKhsIbQ2NPS46Rw0A/NiWlmNTmTRAzeYQDaAtRnoFcLnYgbaQw6jE1kEeAGANTcciGclgLVAjAbYYt7OOXDFTWB0OGpxgH10ZrVCnOZFLYAYOb2z6C8BrjCjjAC7KLhCppZFswGRrb/P6GrkXe7UQDQh6WiA0yrYksqKuiwilpE3vLT6JcDHrNJCwZ6yPjZKu1IWAI+ccljod+QNhx640lYtFLwSwBCvJsLC9SOBsNDvyP4SYAeAXRRcOU6r4hYeeKS8CHCD5jV36NFzYAuDHBkSNqjD9JJsQGTrLz1wpbkS4DqBadeB0drIKQcBrtPv/dKreWBu5KgzEgJ8QF4jhZR5GQl9126lHL1B/4D6uxXJtpWSHrjBFDJ5YAwv2wb9BpWYXaK92Y3OcRDgBtVnA1h7nHD0/t4GlZhdotEtOkGAD6qCIfRBQW0vuda+H3eFTLRFAmt0vsCizyOXvZiFPs7tMyUtwqzRnqVhmOpLtJEKOjAaBgLcoHZNmOUBgsVS0gphtHb+O3oJCe0R4AUAtkhkoY6Zw2gLEDxuzhb9Hh013EeOc+C6O492eQStzeyFtZl6yMdjuY0A13Fwv3S2EBp9tpgHz+qFLSDwmP8yhG6ANyvAVmH0jF7YYu47+mF2xXQtbj4MoStuBB7zpNI9izAadY1eKqkQb3VRCwA8ZWLRfwJcYTaeAFtko2ebC1t4X6/wmSF0BXj7ohnnwKX/Fska1OV5I2pU20OXWcnCK3y2AtglIezS6GYCmQG2SmZ5ZV2t4LWaTngn9ixCaBeWXBqdAGCrd+EWkDLOhy1vYt5JPQLccEvP7IGtwq4iNhgwIEYYmeFjCa9n8soyC+3iDF0a3aSmSXxEmDvCC2P+h58WH0CMXVr4GfljlcTb37yQwfX80AM3SF8DsGfCYz9UC8Xv6wO8uDk93iDPEZdYj9d77ksPrLCaGQDG8K2ysHtRemwnvKVKy4RVaWumG7FLNOvSqEEIHUXxGIp1SBnNuK0TdvsbRZSDHRaRhQtLLo1OBjCG08M7oV7vkBrjgnFbzfOjRhkE+Fb8debvs4TQxQvjIDuysz0+ABnzYsyPR3xg0IC3B7jof6QICv0hwA1WNRPAPUPpvWh7g4wbEG5EvcAtY3HZN3zFRrUAu61je4bQmuSPm8Bu3Ki0hnD0Pojxw4s9pfTKABXQ3rtrWPu8r6N9jzLv3fdXOwVys0cCfNTsjpfTGsPxlh6UhPEUoJ/erSOX/y/RQfkJaAEswO0V8l8aQ4T1+3N90+qMAFdarZvADvQTgJTkz4HiyxSJNu+lB1aa3owhdBFJz6UXpdhdLo8MLwSi9cBu4/MMobWPH/Xs+xEKrLdaHmkzYhk3464QhtYW3cboCYFWaJ59P2obq3tiN8M+qqCtnNYW3cbpCYE2bPHse419AOLHBmZ5a/rWs6ybUTcMSguwW3LOEwItwNHWEq/ZzWoQuxl0A7y4hAA3CG4lgIt4tGNuEPPwSzI+nECzqQgCdrtheXpg7aaHiBsCjtAya3Iry3nmczrSPFwC9bmdHvMEWPtUh6wAQ+GzhdRuBnzkjnmgjBZgt6jDE2DtMbzsRlNA7nkI4oDtqopk9rpl4Fo7RD0EuMGMZgC4DLv36Z8G8V69pPehCuv+XqtPGwmibrdo0NMDY+Ca0MUtcdDJukpY3ev8rUW3vc8nW4zhtA5tLgb1ua2IeAOsyf5lWmesMbxyQghrx6MPG1zq50wetwfAbhy5NbxJceb90DXQXipbvLLHyaHibZ9M8KRMjawtlvbcOHJreJO4ZgE98okkjUF5wrwKtHsZa2wQ9bhGgt4Aa+9+bsmDHoRW1FmemAHP/Oi2LIX/O/okjf0ZYjSLBwNkeah8hZgOFdVM49CAay6GAB/ScZpCpwDvfy8PjI/+4PjRwtYkUpcHWJvCdw1fRlsa2zOXgEUG2nU509sDaxfRV5sHm1vw4hVq578Qn9smDjTuDTD6oJ2DrDoPXpw9k+FrbQ+dcFsDjgKwZikJY3ANYUzMiJV4SEA7fSt9dnWCro1vEtAKkvNgD/PP36bF/Nc1Ax3FA3MenB+GjCPQRn4Ys/v0LYIHhiC0wnRNJGS0XvZZtQ8/RPgcxQOjH9oNHcxGk8gaCVhkn93D50gAa+fB7un8GuthWXcJaDdvhLG3KCG0dh4MgdILu3ORogMW3td9+ShMDL9TuXYeHOaumMKM1+ykhaMIxU4UDwyhWITR9MJrgnl01FbeN8T8N9IcGH2xujuGEe5Rq2K5IRKwcBClo+7LR6HCgJ36rO6Q3J01hIk0jVjCG2rjUKQQ2tILI5TG2vCqZ1zTkDWooxZ7nktXQ+05iAYwhGSRzCpZaYQ6PP86iJKgzVjZU8ioNSLAVnNhLi0FJWpgt6ymZKXL4aZmEQGGsCwFP8PDxwfa/DRNWXvekCscUQG29MLFEyM7/fg05smBXJJAr3cyh8k87wceFWD00eK416mSw4VA5NBUApbZ5n3HQmWeswDc6y1+UAYyiUxumbLjXpn2QMy1AYT0vuhwZA9suax0qpwVn3/sTlinDvQEF10OHbVFB7hXKF1siSB3ompAtQC393ukwobORb4ZAEZfrTOK5zwylIXXiHDzxwD6GpsY/QI41wfWHZFRFoB7zYfPyWj/1oKV31hwxH56lynAllC2d3v7+sPOe7MksU6VNRLifdsAGl4ZMBe4mQCzR6m8RQI/8boYjxe6lVGF2i55TdRZPHAZg/X6sMYM968qKd8B+X5+feu7pv1I1557J9P+/8r3e7tOl1en1rzTacSYU51mywYwFNhrrW+EcdS04eXlj74grWYsWcqGT1qdCjIjwCtBnMXwZ+hnOngh9KwAo+9ec+IZjJVjeK4EUoXNWZNY54yOEBNFrQRCb9S4NbjMHnif2CqL+rfGy79TAnsJpMk2X1LbDACXcPqxuy+4m/JDCdySwDRPbJkF4L03xq6tlTOpt4x39b+nne+eU9xsANMbr47n5fFP43VnSmJdM9eyDY9hNaFOnai6pr4ZPfDpeHs9oYFYxJfAtOAW0a8AMLPV8UGz7OFSR0RXAngPMjLWnpvlLQ2WdT2QQAF3qeeerQjw3uDLPJkw57wNLOVtV8lCt5oiYAbIxTu31sPr+klgf1YbD1/wOvDRb4SVNa/ugS+Jq6wjA2icTS1wV4qXxRUSKHDikAG+E9gzwiTAdRZWzq7iJ8627g+ho6bT3+tqX6P0/hx1mbvuf/IpKBV2QIArhNVQ9NZB931iraH6UJecC2dPYQ3V4Rk6Q4Bn0CLHsKwECPCyqufAZ5AAAZ5BixzDshIgwMuqngOfQQIEeAYtcgzLSoAAL6t6DnwGCRDgGbTIMSwrAQK8rOo58BkkQIBn0CLHsKwECPCyqufAZ5AAAZ5BixzDshIgwMuqngOfQQIEeAYtcgzLSoAAL6t6DnwGCRDgGbTIMSwrAQK8rOo58BkkQIBn0CLHsKwECPCyqufAZ5AAAZ5BixzDshIgwMuqngOfQQIEeAYtcgzLSoAAL6t6DnwGCRDgGbTIMSwrAQK8rOo58BkkQIBn0CLHsKwECPCyqufAZ5AAAZ5BixzDshIgwMuqngOfQQIEeAYtcgzLSuD/0ZFtLR+LrZcAAAAASUVORK5CYII=" alt="instagram">Instagram</a></li>

            <li><a href="#"><img src="data:image/png;base64,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"/>54 11 1234-5678</a></li>
            
            <li><a><img src="data:image/png;base64,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"/>11 1234-5678</a> </li>
            
            <li><a href="https://maps.app.goo.gl/CrNEwmtzwE25EKqi8"><img src="data:image/png;base64,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"/>Vallejos 3128</a></li>
            
            <li><a href="#"><img src="data:image/png;base64,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"/> Example@gmail.com</a></li>

    </ul>
        </div>
        <div class="footer-bottom">
        <p>&copy; 2024 Street Tango | Todos los derechos reservados | Diseñado por <span>Nicolas oddo y 1% Juan Luca Seijas Procopio</span></p>
        </div>
    </footer>
    
</body>
</html>