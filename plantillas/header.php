<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="./CSS/estilos.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola</title>
</head>
<body>
<!-- Checkbox principal: controla apertura del menú en móvil -->
<input type="checkbox" id="interruptor-menu" class="interruptor-menu">

<header class="cabecera">

    <div>
        <a href="index.php">Sincronizador de Bases de Datos</a>
    </div>

    <label for="interruptor-menu">
        <span></span>
        <span></span>
        <span></span>
    </label>

</header>

<nav>
    <ul>

        <li><a href="index.php">Inicio</a></li>

        <li>
            <input type="checkbox" id="submenu-conexiones">
            <label for="submenu-conexiones">Conexiones ▾</label>
            <ul>
                <li><a href="conexiones/nueva.php">Nueva conexión</a></li>
                <li><a href="conexiones/lista.php">Mis conexiones</a></li>
                <li><a href="conexiones/probar.php">Probar conexión</a></li>
            </ul>
        </li>

        <li>
            <input type="checkbox" id="submenu-sync">
            <label for="submenu-sync">Sincronización ▾</label>
            <ul>
                <li><a href="sync/nueva.php">Nueva tarea</a></li>
                <li><a href="sync/activas.php">Tareas activas</a></li>
                <li><a href="sync/historial.php">Historial</a></li>
                <li><a href="sync/configuracion.php">Configuración</a></li>
            </ul>
        </li>

        <li><a href="registros.php">Registros</a></li>

    </ul>
</nav>