<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca Urbana</title>
    <link rel="stylesheet" href="pagina_web_header_styles.css">
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
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAYAAAA+VemSAAAAAXNSR0IArs4c6QAACBJJREFUeF7t0zGOHEEQA8HTs/R/QN86OWdI5vTWANVkrL3TIJOVv778EEDgWgK/rk0uOAIIfBHYESBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugIENgNIHAxAQJfPJ7oCBDYDSBwMQECXzye6AgQ2A0gcDEBAl88nugI3CDw9/BM053/fH19/R7O6Lk9BKbvZbTZ6nA/TQk8OrnHHhJY7cjqcAR+eGr+/gaB1Y6sDkfgN+7Rmw8JrHZkdTgCPzw1f3+DwGpHVocj8Bv36M2HBFY7sjocgR+emr+/QWC1I6vDEfiNe/TmQwKrHVkdjsAPT83f3yCw2pHV4Qj8xj168yGB1Y6sDkfgh6fm728QWO3I6nAEfuMevfmQwGpHVocj8MNT8/c3CKx2ZHU4Ar9xj958SGC1I6vDEfjhqfn7GwRWO7I6HIHfuEdvPiSw2pHV4Qj88NT8/Q0Cqx1ZHY7Ab9yjNx8SWO3I6nAEfnhq/v4GgdWOrA5H4Dfu0ZsPCax2ZHW4h6D9HYE6AgSum1zhJAIETlpTlzoCBK6bXOEkAgROWlOXOgIErptc4SQCBE5aU5c6AgSum1zhJAIETlpTlzoCBK6bXOEkAgROWlOXOgIErptc4SQCBE5aU5c6AgSum1zhJAIETlpTlzoCBK6bXOEkAgROWlOXOgIErptc4SQCBE5aU5c6AgSum1zhJAIETlpTlzoCBK6bXOEkAgROWlOXOgIErptc4SQCBE5aU5c6AgSum1zhJAIETlpTlzoCBK6bXOEkAgROWlOXOgIErptc4SQCNwj8PQx8uvN0vuG6nvuQwPS9fBjn/89Xh/uJOi3IdOfpfKMDe+xjAtP38nGgfx9YHY7Ao1t77IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhyPw6CF67IzAakdWhyPw2cX5apTAakdWhxudwWMIBBIgcOCoKvUQIHDP1poGEiBw4Kgq9RAgcM/WmgYSIHDgqCr1ECBwz9aaBhIgcOCoKvUQIHDP1poGEiBw4Kgq9RAgcM/WmgYSIHDgqCr1ECBwz9aaBhIgcOCoKvUQIHDP1poGEiBw4Kgq9RAgcM/WmgYSIHDgqCr1ECBwz9aaBhIgcOCoKvUQIHDP1poGEiBw4Kgq9RAgcM/WmgYSIHDgqCr1ECBwz9aaBhIgcOCoKvUQIHDP1poGEiBw4Kgq9RAgcM/WmgYSIHDgqCr1ELhB4O/hOaY7T+cbruu5DwlM38uHcf7/fHW4n6jTgkx3ns43OrDHPiYwfS8fB/r3gdXhCDy6tcfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHU4Ao8eosfOCKx2ZHU4Ap9dnK9GCax2ZHW40Rk8hkAgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg8BAvdsrWkgAQIHjqpSDwEC92ytaSABAgeOqlIPAQL3bK1pIAECB46qUg+Bv55qePH8w04jAAAAAElFTkSuQmCC"/>        <h2>Programa tus pedidos</h2>
            <h3>Programa las entregas para tus compras</h3>
        </div>

        <div class="info-icons">
    <img src="data:image/png;base64,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"/>        <h2>Paganos en persona</h2>
    
            <h3>El abono total de tus compras sera de forma prensencial</h3>    
        </div>

        <div class="info-icons">
    <img src="data:image/png;base64,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"/>        <h2>Envio a domicilio</h2>
            <h3>Enivio a zonas de caba y partes de provincia</h3>    
        </div>
        
    </div>

    <div class="container">
        <div class="box">
            <img src="../imgs/hombre.jpg" alt="Remeras">
            <div class="overlay">
                <h2>FOR HIM</h2>
                <a href="#" class="btn">VER MÁS</a>
            </div>
        </div>
        <div class="box">
            <img src="../imgs/mujer.jpg" alt="For Her">
            <div class="overlay">
                <h2>FOR HER</h2>
                <a href="#" class="btn">VER MÁS</a>
            </div>
        </div>
        <div class="box">
            <img src="../imgs/todo.jpg" alt="Pantalones">
            <div class="overlay">
                <h2>ALL</h2>
                <a href="#" class="btn">VER MÁS</a>
            </div>
        </div>
    </div>
    <h1 id="titulo-new-drops">New drops</h1>
    <div class="catalogo">

        <div class="producto">
            <div class="imagen-container">

                <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/8-f64e9408a2acbd5dad17258334074051-1024-1024.webp" alt="Producto 1" class="imagen-normal">

                <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/7-9f4c293f1401bc5aca17258334069651-1024-1024.webp" alt="Producto 1 hover" class="imagen-hover">
            </div>
            <h2>Producto 2</h2>

            <p class="descripcion">Otra descripción del producto.</p>

            <p class="precio">$35.00</p>
            <button class="comprar"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAORJREFUSEvtld0RATEUhb+twKiATtCBDujAqAAdKEEHlEAlRgc6YI5JdshKbnZNxsvmZTP5Od/Nyd3cisKtKqxPLmAOrICpC+gM7AB9ky0HcAAWERVBtimCBVDkRyewBk6uvwQ2rj9LncQCyIIJIPF9EKkiF+TyZl3jMBbg4XYMgXuwewxc3VhUJxcQW+cDyAZ4S6zkSM1LQ/fyaiHZR/QL4EM3BvDjlgXhfGP93wFtrWp9gh4QTVPrB4xZ19+BmVSmRXoxB6ZMesEN0Ev79S1SSVQFG3WESFzFqC6lXbMlm18c8ATvMDIZGBnHqwAAAABJRU5ErkJggg=="/></button>

        </div>
            <div class="producto">
                <div class="imagen-container">
        
                    <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/1-c6124a31f902aeffc517258163877937-1024-1024.webp" alt="Producto 2" class="imagen-normal">
        
                    <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/2-3fc33741afe2b8552a17258163871547-1024-1024.webp" alt="Producto 2 hover" class="imagen-hover">
                </div>            
                <h2>Producto 2</h2>
        
                <p class="descripcion">Otra descripción del producto.</p>
        
                <p class="precio">$35.00</p>
        
                <button class="comprar"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAORJREFUSEvtld0RATEUhb+twKiATtCBDujAqAAdKEEHlEAlRgc6YI5JdshKbnZNxsvmZTP5Od/Nyd3cisKtKqxPLmAOrICpC+gM7AB9ky0HcAAWERVBtimCBVDkRyewBk6uvwQ2rj9LncQCyIIJIPF9EKkiF+TyZl3jMBbg4XYMgXuwewxc3VhUJxcQW+cDyAZ4S6zkSM1LQ/fyaiHZR/QL4EM3BvDjlgXhfGP93wFtrWp9gh4QTVPrB4xZ19+BmVSmRXoxB6ZMesEN0Ev79S1SSVQFG3WESFzFqC6lXbMlm18c8ATvMDIZGBnHqwAAAABJRU5ErkJggg=="/></button>
            </div>

            <div class="producto">
                <div class="imagen-container">
        
                    <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/23-49ef3cba535618d6ef17227330424354-1024-1024.webp" alt="Producto 2" class="imagen-normal">
        
                    <img src="https://acdn.mitiendanube.com/stores/001/497/956/products/22-05b768235cd197eeb917227330418618-1024-1024.webp" alt="Producto 2 hover" class="imagen-hover">
                </div>            
                <h2>Producto 2</h2>
        
                <p class="descripcion">Otra descripción del producto.</p>
        
                <p class="precio">$35.00</p>
        
                <button class="comprar"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAORJREFUSEvtld0RATEUhb+twKiATtCBDujAqAAdKEEHlEAlRgc6YI5JdshKbnZNxsvmZTP5Od/Nyd3cisKtKqxPLmAOrICpC+gM7AB9ky0HcAAWERVBtimCBVDkRyewBk6uvwQ2rj9LncQCyIIJIPF9EKkiF+TyZl3jMBbg4XYMgXuwewxc3VhUJxcQW+cDyAZ4S6zkSM1LQ/fyaiHZR/QL4EM3BvDjlgXhfGP93wFtrWp9gh4QTVPrB4xZ19+BmVSmRXoxB6ZMesEN0Ev79S1SSVQFG3WESFzFqC6lXbMlm18c8ATvMDIZGBnHqwAAAABJRU5ErkJggg=="/></button>
            </div>
    </div>

    </main>

    <footer>
    </footer>
</body>
</html>