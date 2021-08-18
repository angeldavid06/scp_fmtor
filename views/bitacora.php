<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitácora</title>
    <link rel="stylesheet" href="public/css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="main">
        <img class="source source-1" src="public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <header>
                <div class="logo">
                    <img src="public/img/logo.png" alt="">
                </div>
                <div class="info">
                    <h3>Sistema Central de Producción</h3>
                    <p>Bitácora</p>
                </div>
                <div class="options">
                    <button class="material-icons">logout</button>
                </div>
            </header>
            <main>
                <div class="options">
                    <div class="left">
                        <a href="http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=menu" class="regresar"><i class="material-icons">arrow_back_ios</i>Menú principal</a>
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
                        <tbody>
                            <tr>
                                <td>item-1</td>
                                <td>item-2</td>
                                <td>item-3</td>
                                <td>item-4</td>
                                <td>item-5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/filtros.js"></script>
</body>
</html>