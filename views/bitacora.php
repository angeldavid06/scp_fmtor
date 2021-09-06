<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/components/head.php'; ?>
    <title>Bitácora</title>
</head>
<body>
    <div class="main">
        <img class="source source-1" src="public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <?php require_once 'public/components/header.php'; ?>
            <main>
                <div class="options">
                    <div class="left">
                        <a href="http://localhost/scp_fmtor/?controller=usuariosController&action=menu" class="regresar"><i class="material-icons">arrow_back_ios</i>Menú principal</a>
                    </div>
                    <div class="right">
                    </div>
                </div>
                <div class="tabla">
                    <table>
                        <thead>
                            <th>Usuario</th>
                            <th>Tabla</th>
                            <th>Acción</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                        </thead>
                        <tbody class="body">
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/origin.js"></script>
    <script src="public/js/sesion.js"></script>
    <script src="public/js/preloader.js"></script>
    <script src="public/js/bitacora.js"></script>
</body>
</html>