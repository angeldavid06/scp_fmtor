<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/components/head.php'; ?>
    <title>Página Principal</title>
</head>
<body>
    <div class="main">
        <img class="source source-1" src="public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <?php require_once 'public/components/header.php'; ?>
            <main>
                <h1><?php echo ''.$_SESSION['usuario']?></h1>
                <nav>
                    <a href="http://localhost/scp_fmtor/?controller=opController&action=mostrar" class="tag tag-1">ORDENES DE PRODUCCIÓN</a>
                    <a href="http://localhost/scp_fmtor/?controller=controlController&action=mostrar" class="tag tag-2">CONTROL DE PRODUCCIÓN</a>
                    <?php
                        if ($_SESSION['rol'] == 'ADMINISTRADOR') {
                    ?>
                        <a href="http://localhost/scp_fmtor/?controller=usuariosController&action=mostrar" class="tag tag-3">GESTIÓN DE USUARIOS</a>
                        <a href="http://localhost/scp_fmtor/?controller=usuariosController&action=bitacora" class="tag tag-4">BITÁCORA</a>
                    <?php } ?>
                </nav>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/origin.js?1.2"></script>
    <script src="public/js/sesion.js?1.2"></script>
</body>
</html>