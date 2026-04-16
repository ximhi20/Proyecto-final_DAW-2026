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
        include ENLAZAR[$zona];
    }

    function kh(){
        global $infoKH;
        foreach ($infoKH["juegos"] as $id => $info){
            echo "
                <div id='$id'>
                <h2>{$infoKH["general"]["nombreGen"]} {$info["original"]}</h2>
                <p>Tiene la abreviatura: {$infoKH["general"]["abrevGen"]} {$info["abrevOrig"]}</p>
            ";
            if ($info["extra"]){
                if ($info["dlc"]) {
                    echo "<p>Se le añadió el DLC ";
                }
                else {
                    echo "<p>Fue remasterizado ";
                }
                echo "con el nombre: {$infoKH["general"]["nombreGen"]} {$info["extra"]}, abreviado como {$infoKH["general"]["abrevGen"]} {$info["abrevExt"]}.</p>";
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
            echo "</div>";
        }
    }