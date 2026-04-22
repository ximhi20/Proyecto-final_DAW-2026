<?php
    $titulo = "KH";
    $h1 = "Juegos de";

    require_once "_functions.php";
    inc("inicio");

    echo "<section class='lista'>";
    kh();
    echo "</section>";

    inc("final");