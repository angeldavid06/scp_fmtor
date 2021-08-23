<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="public/css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="main">
        <img class="source source-1" src="public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <?php require_once 'public/components/header.php'; ?>
            <main>
                <h1><?php echo ''.$_SESSION['usuario']?></h1>
                <nav>
                    <a href="http://192.168.0.43/scp_fmtor/?controller=opController&action=mostrar" class="tag tag-1">ORDENES DE PRODUCCIÓN</a>
                    <a href="http://192.168.0.43/scp_fmtor/?controller=controlController&action=mostrar" class="tag tag-2">CONTROL DE PRODUCCIÓN</a>
                    <?php
                        if ($_SESSION['rol'] == 'ADMINISTRADOR') {
                    ?>
                        <a href="http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=mostrar" class="tag tag-3">GESTIÓN DE USUARIOS</a>
                        <a href="http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=bitacora" class="tag tag-4">BITÁCORA</a>
                    <?php } ?>
                </nav>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/sesion.js"></script>
</body>
</html>