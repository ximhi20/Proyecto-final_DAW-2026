<?php
    require_once "_config.php";

    function incEscritura($actual){
        switch($actual){
            case "titulo":
                global $titulo;
                if($titulo){
                    echo $titulo;
                }
                else{
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
?>