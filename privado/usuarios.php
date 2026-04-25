<?php
session_start();
require_once '../includes/conexion.php';
include '../plantillas/header.php'; 
    
if(!isset($_SESSION['usuario_rol'])){
    header("Location: ../login.php?=primero");
    exit;
}
?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contrasañe Encriptada</th>
            <th>Rol</th>
            <?php
                if($_SESSION['usuario_rol'] == "admin"){
                    echo "<td>Acciones</td>";
                }
            ?>
        </tr>
        <?php
        $consulta = "SELECT * FROM panel_users";
        $stmt = $conexion->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->fetchAll();

        foreach ($resultado as $bd) {
            ?>
                <tr>
                    <td><?= $bd['id'] ?></td>
                    <td><?= $bd['username'] ?></td>
                    <td><?= $bd['password_hash'] ?></td>
                    <td><?= $bd['rol'] ?></td>
                    <?php
                        if($_SESSION['usuario_rol'] == "admin"){
                            echo "<td><a href='anadirusuario.php'>Añadir User</a></td>";
                        }
                    ?>
                </tr>
            <?php
        }
        ?>
    </table>
<?php
include '../plantillas/footer.php'
?>