        <!-- BARRA DE MENUS -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="assents/img/Logo Empresa.png" alt="empresa" width="90px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?view=home">Inicio</a>
                    </li>
                <!-- PESTAÑA DE VISITA EN TERRENO CON SUB MENUS -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?view=crear-visita">Visita en Terreno</a>
                </li>

                <!-- PESTAÑA CAPACITACIONES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Capacitación
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?view=crear-capacitacion">Crear Capacitación</a></li>
                        <li><a class="dropdown-item" href="#">Lista de Capacitaciones</a></li>
                    </ul>
                </li>

                <!-- PESTAÑA MEJORAS CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mejoras
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?view=crear-mejora">Crear Mejoras</a></li>
                        <li><a class="dropdown-item" href="index.php?view=listado-mejora">Lista de Mejoras</a></li>
                    </ul>
                </li>

                <!-- PESTAÑA ASESORIAS CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Asesorías
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?view=crear-asesoria">Solicitar Asesoría</a></li>
                        <li><a class="dropdown-item" href="#">Lista de Asesorías</a></li>
                    </ul>
                </li>

                <!-- PESTAÑA MANUALES CON SUB MENUS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Manuales
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Manual de Usuarios</a></li>
                        <li><a class="dropdown-item" href="#">Manual de Requerimientos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?view=logout">Salir</a>
                </li>

            </ul>

          </div>
        </div>
      </nav>
