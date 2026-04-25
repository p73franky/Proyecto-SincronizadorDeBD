<?php
    session_start();
    if(!isset($_SESSION['usuario_rol'])){
        header("Location: ./login.php?primero");
        exit;
    }
?>
<?php include './plantillas/header.php'; ?>
<main>
    <div>
        <h1>Bienvenido Al Sincronizador de BD's</h1>
        <img src="./img/LogoProyectoGrande.png">
        <div>
            <h2>Sincronizador</h2>
        </div>
        <div>
            <h2>Solicitar Citas</h2>
        </div>
        <div>
            <h2>Permisos</h2>
        </div>

        <div id="cajapopup">
            <div id="popup">
                <button id="boton-cerrar">&times;</button>
                <h3 id="popup-titulo"></h3>
                <p id="popup-texto"></p>
            </div>
        </div>
    </div>
</main>
<?php include './plantillas/footer.php'; ?>