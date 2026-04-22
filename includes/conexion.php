<?php
    try{
            $usuario = "adminbd3";
			$password = "WpzchGX0@w62u?mu";
			$dsn = "mysql:host=POAPMYSQL129.dns-servicio.com;dbname=8648645_sincronizador";
			$conexion = new PDO($dsn, $usuario, $password);
    } catch (PDOException $e) {
			echo "Algo salió mal". $e->getMessage();
	}
?>