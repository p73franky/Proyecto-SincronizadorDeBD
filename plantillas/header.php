<!-- Checkbox principal: controla la apertura del menú en móvil -->
<input type="checkbox" id="interruptor-menu" class="interruptor-menu">
 
<header class="cabecera">
 
    <div class="marca">
        <a href="index.php">Sincronizador de Bases de Datos</a>
    </div>
 
    <!-- Label que actúa como botón -->
    <label for="interruptor-menu" class="boton-menu">
        <span></span>
        <span></span>
        <span></span>
    </label>
 
</header>
 
<nav class="navegacion">
    <ul class="lista-menu">
 
        <li><a href="index.php">Inicio</a></li>
 
        <li>
            <!-- Checkbox para el submenú Conexiones -->
            <input type="checkbox" id="submenu-conexiones" class="interruptor-submenu">
            <label for="submenu-conexiones">Conexiones ▾</label>
            <ul class="submenu">
                <li><a href="conexiones/nueva.php">Nueva conexión</a></li>
                <li><a href="conexiones/lista.php">Mis conexiones</a></li>
                <li><a href="conexiones/probar.php">Probar conexión</a></li>
            </ul>
        </li>
 
        <li>
            <!-- Checkbox para el submenú Sincronización -->
            <input type="checkbox" id="submenu-sync" class="interruptor-submenu">
            <label for="submenu-sync">Sincronización ▾</label>
            <ul class="submenu">
                <li><a href="sync/nueva.php">Nueva tarea</a></li>
                <li><a href="sync/activas.php">Tareas activas</a></li>
                <li><a href="sync/historial.php">Historial</a></li>
                <li><a href="sync/configuracion.php">Configuración</a></li>
            </ul>
        </li>
 
        <li><a href="registros.php">Registros</a></li>
 
    </ul>
</nav>
 
</header>