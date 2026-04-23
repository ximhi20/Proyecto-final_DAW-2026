<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php incEscritura('titulo'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1><?php incEscritura("h1"); ?></h1>
        <?php
            if($page == "index"){
                echo "<img src='https://kh.wiki.gallery/images/3/3a/Kingdom_Hearts_Series_Logo.png' alt='Logo de kingdom Hearts general.'>";
            }
        ?>
    </header>

    <main>