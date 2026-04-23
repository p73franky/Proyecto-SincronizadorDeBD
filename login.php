<?php
session_start();
require_once './includes/conexion.php';
 
$error = '';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre   =$_POST['nombre'];
    $password = $_POST['password'];
 
    if ($nombre == '' || $password == '') {
        $error = 'Por favor, rellena todos los campos.';
    } else {
        $stmt = $pdo->prepare('SELECT id, nombre, password, rol FROM usuarios WHERE nombre = ?');
        $stmt->execute([$nombre]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
 
        if ($usuario && $password == $usuario['password']) {
            $_SESSION['usuario_id']     = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_rol']    = $usuario['rol'];
            header('Location: index.php');
            exit;
        } else {
            $error = 'Nombre de usuario o contraseña incorrectos.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="./CSS/estiloss.css">
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
 
<?php include './plantillas/header.php'; ?>
 
<div class="login-wrapper">
    <div class="login-card">
 
        <div class="login-header">
            <h1>Iniciar sesión</h1>
            <p>Introduce tus credenciales para continuar</p>
        </div>
 
        <?php if ($error != '') { ?>
            <div class="login-error"><?php echo $error; ?></div>
        <?php } ?>
 
        <form method="POST" action="login.php">
            <div class="login-body">
 
                <label for="nombre">Usuario</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre de usuario" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?>" >
 
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="••••••••" >
 
                <button type="submit">Iniciar sesión</button>
 
            </div>
        </form>
 
    </div>
</div>
 
<?php include './plantillas/footer.php'; ?>