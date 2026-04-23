<!DOCTYPE html>
<html lang="en">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estiloss.css">
    <title>Ola</title>
</head>
<body>
<!-- Checkbox principal: controla apertura del menú en móvil -->

<header>
    <input type="checkbox" id="interruptor-menu" class="interruptor-menu">

    <div>
        <a href="index.php">Sincronizador de Bases de Datos</a>
    </div>

<!-- Sustituir los span por icono-->
    <label for="interruptor-menu">
        <span></span>
        <span></span>
        <span></span>
    </label>

    <nav>
        <ul>

            <li><a href="index.php">Inicio</a></li>

            <li>
                <input type="checkbox" id="submenu-conexiones">
                <label for="submenu-conexiones">Conexiones ▾</label>
                <ul>
                    <li><a href="#">Nueva conexión</a></li>
                    <li><a href="#">Mis conexiones</a></li>
                    <li><a href="#">Probar conexión</a></li>
                </ul>
            </li>

            <li>
                <input type="checkbox" id="submenu-sync">
                <label for="submenu-sync">Sincronización ▾</label>
                <ul>
                    <li><a href="#">Nueva tarea</a></li>
                    <li><a href="#">Tareas activas</a></li>
                    <li><a href="#">Historial</a></li>
                    <li><a href="#">Configuración</a></li>
                </ul>
            </li>

            <li><a href="#">Registros</a></li>

        </ul>
    </nav>

</header>