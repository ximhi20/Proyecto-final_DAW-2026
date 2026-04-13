<?php
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
?>