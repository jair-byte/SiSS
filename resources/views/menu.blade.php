<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio Social</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* Estilos para el menú */
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .nav-link {
            color: #ffffff;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #f8f9fa;
        }

        .dropdown-menu {
            background-color: #343a40;
            border: none;
        }

        .dropdown-item {
            color: #ffffff;
        }

        .dropdown-item:hover {
            background-color: #343a40;
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación (menú) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
       
            <a class="navbar-brand" href="#">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="alumnosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bajas</a>
                        <div class="dropdown-menu" aria-labelledby="alumnosDropdown">
                            <a class="dropdown-item" href="#">Baja Temporal</a>
                            <a class="dropdown-item" href="#">Baja Definitiva</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="alumnosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reactivación</a>
                        <div class="dropdown-menu" aria-labelledby="alumnosDropdown">
                            <a class="dropdown-item" href="#">Solicitud de reactivación</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="alumnosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informes</a>
                        <div class="dropdown-menu" aria-labelledby="alumnosDropdown">
                            <a class="dropdown-item" href="#">Informes</a>
                        </div>
                    </li>

                    
                    <!-- Agrega más elementos de menú según tus necesidades -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-4">
        <!-- Contenido de tu página aquí -->
    </div>
    <div id="successModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro Exitoso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¡El registro se ha completado exitosamente!
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        // Mostrar ventana modal de registro exitoso al cargar la página
        document.addEventListener("DOMContentLoaded", function() {
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        });
    </script>
</body>
</html>
