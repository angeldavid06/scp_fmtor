<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/components/head.php'; ?>
    <title>Bienvenida</title>
    <!-- <link rel="shortcut icon" type="image/png" href="fmtor_16.png">
    <link rel="apple-touch-startup-image" href="fmtor_16.png">
    <link rel="apple-touch-icon" href="fmtor_16.png">

    <link rel="manifest" href="manifest.json">
    <script src="script.js"></script> -->
</head>
<body>
    <div class="welcome">
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
                <h2>Iniciar Sesión</h2>
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
    </div>
    <script src="public/js/origin.js?1.2"></script>
    <script src="public/js/alert.js"></script>
    <script src="public/js/login.js?1.8"></script>
    <script src="public/js/preloader.js?2.0"></script>
</body>
</html>