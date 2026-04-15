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
            default:
                echo "Proyecto final";
        }
    }

    function inc($zona){
        include ENLAZAR[$zona];
    }
?>