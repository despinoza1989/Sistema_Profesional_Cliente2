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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Visita en Terreno
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?view=listado-visita-profesional">Lista de Visita Profesional</a></li>
                </ul>
            </li>

            <!-- PESTAÑA CAPACITACIONES CON SUB MENUS -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Capacitación
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?view=solicitar-capacitacion">Solicitud de Capacitación</a></li>
                    <li><a class="dropdown-item" href="index.php?view=listar-solicitud-capacitacion">Lista de Solicitudes de Capacitaciones</a></li>
                    <li><a class="dropdown-item" href="index.php?view=listar-respuesta-capacitacion">Lista de Capacitaciones</a></li>
                </ul>
            </li>

            <!-- PESTAÑA MEJORAS CON SUB MENUS -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mejoras
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?view=listado-mejora">Lista de Mejoras</a></li>
                </ul>
            </li>

            <!-- PESTAÑA ASESORIAS CON SUB MENUS -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Asesorías
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?view=solicitar-asesoria">Solicitar Asesoría</a></li>
                    <li><a class="dropdown-item" href="index.php?view=listar-respuesta-asesoria">Listar Respuesta de Asesorías</a></li>

                </ul>
            </li>


            <!-- PESTAÑA ACCIDENTES CON SUB MENUS -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Accidentes
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?view=reporte-accidente">Reportar Accidente</a></li>
                    <li><a class="dropdown-item" href="index.php?view=lista-accidente">Listado Accidentes</a></li>
                </ul>
            </li>

                <!-- PESTAÑA CHECKLIST CON SUB MENUS -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Check-List
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?view=listado-check-list">Listado Check-List</a></li>
                </ul>
            </li>

            <!-- PESTAÑA PAGO -->
            <li class="nav-item">
                <a class="nav-link active" href="index.php?view=pago-servicio">Pago</a>
            </li>

            <!-- PESTAÑA MANUALES CON SUB MENUS -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Manuales
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="openManual()">Manual de Usuarios</a></li>
                </ul>
            </li>

            <!-- PESTAÑA NOTIFICACIONES -->
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?view=notificaciones">Notificaciones <span class="badge bg-primary rounded-pill" id="cantidad">0</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?view=logout">Salir</a>
            </li>

        </ul>

        </div>
    </div>
</nav>

<script>

    var id = <?php echo $_SESSION['usuarioCliente']['id_cliente']; ?>


    function init (){

        fetch('api.php/notificaciones/cantidad/' + id, {
            method: "GET",
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response=>response.json())
        .then((data) => {


            document.getElementById('cantidad').innerHTML=data.cantidad;
            setTimeout(() => {
                init()
            }, 5000);
        })



    }

    init()


    function openManual(){
                    
        window.open('http://localhost/sistema_profesional_cliente/assents/manual/ManualFerme.pdf');
            
    }


</script>