<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="public/css/estilos.css">
</head>
<body>
    <div class="welcome">
        <img class="source source-1" src="public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <div class="left">
                <p>Bienvenido</p>
                <h1>Sistema Central de <br> Producción</h1>
                <button class="btn-login-form">Iniciar Sesión</button>
            </div>
            <div class="center">
                <div class="card-sm card-sm-1">
                    <img class="tornillo tornillo-1" src="public/img/tornillo-1.png" alt="" srcset="">
                </div>
                <div class="card-sm card-sm-2">
                    <img class="tornillo tornillo-2" src="public/img/tornillo-2.png" alt="" srcset="">
                </div>
                <div class="card-sm card-sm-3">
                    <img class="tornillo tornillo-3" src="public/img/tornillo-3.png" alt="" srcset="">
                </div>
            </div>
            <div class="form-login">
                <h2>Inicar Sesión</h2>
                <form id="form-login">
                    <div class="inputs">
                        <label for="nombre_usuario">Nombre de usuario:</label>
                        <input id="nombre_usuario" name="nombre_usuario" class="" type="text" placeholder="Ingresa el nombre de usuario">
                        <label for="password">Contraseña:</label>
                        <input id="password" name="password" class="" type="password" placeholder="Ingresa el nombre de usuario">
                    </div>
                    <div class="options">
                        <button>Ingresar</button>
                        
                    </div>
                </form>
            </div>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/alert.js"></script>
    <script src="public/js/login.js?1.2"></script>
</body>
</html>