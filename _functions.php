<?php
    require_once "_config.php";

    function incEscritura($actual){
        switch($actual){
            case "titulo":
                global $titulo;
                if ($titulo) {
                    echo $titulo;
                }
                else {
                    echo "Proyecto";
                }
                break;
            case "h1":
                global $h1;
                if ($h1) {
                    echo $h1;
                }
                else {
                    echo "Proyecto";
                }
                break;
            default:
                echo "Proyecto final";
        }
    }

    function inc($zona){
        global $page;
        include ENLAZAR[$zona];
    }

    function kh(){
        global $infoKH;
        foreach ($infoKH["juegos"] as $id => $info){
            echo "<div id='$id'><h2>{$infoKH["general"]["nombreGen"]}";
            if ($info["original"]) {
                echo " {$info["original"]}";
            }
            echo "</h2>
            <img src='{$info["img"]}' alt='Logo de {$infoKH["general"]["abrevGen"]}";
            if ($info["abrevOrig"]){
                echo " {$info["abrevOrig"]}";
            }
            echo ".'><p>Tiene como abreviatura {$infoKH["general"]["abrevGen"]}";
            if ($info["abrevOrig"]){
                echo " {$info["abrevOrig"]}";
            }
            echo " y salió en {$info["lanzOrig"]}</p>";
            if ($info["extra"]){
                if ($info["dlc"]) {
                    echo "<p>Se le añadió el DLC ";
                }
                else {
                    echo "<p>Fue remasterizado ";
                }
                echo "con el nombre {$infoKH["general"]["nombreGen"]} {$info["extra"]}, abreviado como {$infoKH["general"]["abrevGen"]} {$info["abrevExt"]} y siendo publicado en {$info["lanzExt"]}.</p>";
                if ($info["peli"]){
                    echo "<p>También existe una película con un resumen de la trama.</p>";
                }
            }
            else if ($info["peli"]) {
                echo "<p>No tiene remasterización, pero puedes ver un resumen de la trama en forma de película.</p>";
            }
            else {
                echo "<p>No fue ni remasterizado ni resumido en forma de película.</p>";
            }
            echo "<details>
                <summary>Opening del juego:</summary>
                <iframe width='100%' height='200' src='https://www.youtube.com/embed/{$info["opening"]}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>
            </details></div>";
        }
    }