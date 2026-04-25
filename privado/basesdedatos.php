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
            <th>Pagina Web</th>
            <th>Tipo</th>
            <th>Host</th>
            <th>Puerto</th>
            <th>Nombre de BD</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <?php
                if($_SESSION['usuario_rol'] == "admin"){
                    echo "<td>Acciones</td>";
                }
            ?>
        </tr>
        <?php
        $consulta = "SELECT * FROM database_credentials";
        $stmt = $conexion->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->fetchAll();

        foreach ($resultado as $bd) {
            ?>
                <tr>
                    <td><?= $bd['id'] ?></td>
                    <td><?= $bd['alias'] ?></td>
                    <td><?= $bd['db_type'] ?></td>
                    <td><?= $bd['host'] ?></td>
                    <td><?= $bd['port'] ?></td>
                    <td><?= $bd['database_name'] ?></td>
                    <td><?= $bd['db_user'] ?></td>
                    <td><?= $bd['db_password'] ?></td>
                    
                    <?php
                        if($_SESSION['usuario_rol'] == "admin"){
                            echo "<td><a href='anadirbd.php'>Añadir User</a></td>";
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