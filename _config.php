<?php
    const ENLAZAR = [
        "inicio" => "assets/inc-php/_inicio.php",
        "final" => "assets/inc-php/_final.php"
    ];

    $json = file_get_contents("assets/json/datos.json");
    $infoKH = json_decode($json, true);