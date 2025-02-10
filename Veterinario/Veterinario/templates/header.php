<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    
    <!-- Enlace a la CDN de Bootstrap (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Enlace a la CDN de Font Awesome para los iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- Enlace al archivo JS de Bootstrap (opcional, solo si necesitas funcionalidades interactivas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        /* Estilizando el logo */
        .navbar-brand img {
            width: 80px; /* Hacemos el logo aún más pequeño */
            height: auto; /* Mantener la proporción del logo */
            border-radius: 50%; /* Bordes redondeados */
            border: 2px solid white; /* Borde blanco alrededor del logo */
            padding: 3px; /* Espacio entre el borde y la imagen */
        }

        /* Reducir la altura del header */
        #topheader {
            padding: 0.5rem 0; /* Menos espacio en el header */
        }

        /* Reducir el tamaño de la barra de navegación */
        .navbar {
            padding: 0.5rem 0; /* Menos espacio en la barra de navegación */
        }

        /* Reducir el tamaño de los enlaces en la barra de navegación */
        .navbar-nav .nav-link {
            font-size: 0.9rem; /* Tamaño más pequeño para los enlaces */
        }
    </style>
</head>

<body>
    <header id="topheader" class="bg-primary text-white py-3">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <aside 
            class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://img.freepik.com/vector-premium/logo-perro-gato-tienda-mascotas_414847-347.jpg?w=2000" alt="Logo">
                </a>
            </aside>
                
                <!-- Botón de navegación para pantallas pequeñas 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                 Menú de navegación 
                <div class="collapse navbar-collapse" id="navbarNav">
                    Aquí iría tu menú de navegación si lo activas 
                </div>-->
        </nav>
    </header>
    
    <main class="row">
        <!-- Contenido principal de la página -->
