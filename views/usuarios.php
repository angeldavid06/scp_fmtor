<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/components/head.php'; ?>
    <title>Gestión de usuarios</title>
</head>
<body>
    <div class="main">
        <img class="source source-1" src="public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <?php require_once 'public/components/header.php'; ?>
            <main>
                <div class="options">
                    <div class="left">
                        <a href="http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=menu" class="regresar"><i class="material-icons">arrow_back_ios</i>Regresar al menú principal</a>
                    </div>
                    <div class="right">
                        <button class="btn-tooltip btn-icon btn-form-add">Agregar un nuevo usuario</button>
                    </div>
                </div>
                <div class="tabla">
                    <table>
                        <thead>
                            <th class="th-btn">Editar</th>
                            <th class="th-btn">Eliminar</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
                        </thead>
                        <tbody class="body">
                        </tbody>
                    </table>
                </div>
                <div class="ingresar">
                    <div class="contenedor_ingresar">
                        <form id="form-usuarios">
                            <h2>Nuevo Usuario</h2>
                            <p>Ingresa el nombre de usuario:</p>
                            <input class="input" type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            <p>Ingresa la contraseña:</p>
                            <input class="input" type="password" name="password" id="password" placeholder="Contraseña del usuario">
                            <p>Ingresa el correo del usuario:</p>
                            <input class="input" type="email" name="email" id="email" placeholder="Correo electrónico del usuario">
                            <p>Selecciona el rol:</p>
                            <select class="input" name="rol" id="rol">
                                <option value="0">Rol del usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">General</option>
                            </select>
                            <button data-btn="actualizar" id="btn-form-control-registrar">Registrar</button>
                            <label class="btn-cancel" id="btn-form-control-cancel">Cancelar</label>
                        </form>
                    </div>
                </div>
                
                <div class="ingresar actualizar">
                    <div class="contenedor_actualizar">
                        <form id="form-usuarios-actualizar">
                            <h2>Actualizar usuario</h2>
                            <!-- <p>Ingresa el nombre de usuario:</p>
                            <input class="input" type="text" hidden="" name="" id="">
                            <input class="input" type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            <p>Ingresa la contraseña:</p>
                            <input class="input" type="password" name="password" id="password" placeholder="Contraseña del usuario">
                            <p>Ingresa el correo del usuario:</p>
                            <input class="input" type="email" name="email" id="email" placeholder="Correo electrónico del usuario">
                            <p>Selecciona el rol:</p>
                            <select class="input" name="rol" id="rol">
                                <option value="0">Rol del usuario</option>
                                <option value="1">Administrador</option>
                                <option value="2">General</option>
                            </select> -->
                            <button data-btn="actualizar" id="btn-form-control-actualizar">Registrar</button>
                            <label class="btn-cancel" id="btn-form-control-cancel">Cancelar</label>
                        </form>
                    </div>
                </div>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/alert.js"></script>
    <script src="public/js/usuario.js?1.5"></script>
    <script src="public/js/sesion.js"></script>
    <script src="public/js/preloader.js"></script>
</body>
</html>