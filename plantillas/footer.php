<?php
if (is_dir($rutaBase . "/img")) {
    $rutaStatic = "img/";
} else {
    $rutaStatic = "../img/";
}
?>
<footer>
    <div>
        <p>Contacto</p>
        <p>hugframon@alu.edu.gva.es</p>
        <p>danesccas@alu.edu.gva.es</p>
    </div>
    <div>
        <p>Redes Sociales</p>
        <a href="https://x.com/"><img src="<?= $rutaStatic ?>img/iconos/twitter.svg" height="30px"" height=" 30px"></a>
        <a href="https://www.linkedin.com/"><img src="<?= $rutaStatic ?>/img/iconos/linkedin.svg" height="30px"></a>
        <a href="https://github.com/"><img src="<?= $rutaStatic ?>/img/iconos/github.svg" height="30px"></a>
    </div>
    <div>
        <p>Porfolio</p>
        <p>Los mejores desrrollos By Daniel And Hugo</p>
        <p>© 2025 Mi Portfolio</p>
</footer>
</body>
</html>