<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de usuarios</title>
    <link rel="stylesheet" href="public/css/estilos.css?1.5">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                            <?php while ($usu = $data->fetch_object()):?>
                                <tr>
                                    <td class="td-btn"><button class="material-icons btn-icon">edit</button></td>
                                    <td class="td-btn"><button class="material-icons btn-icon">close</button></td>
                                    <td><?=$usu->nombre?></td>
                                    <td><?=$usu->correo?></td>
                                    <td><?=$usu->rol?></td>
                                </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
                <div class="ingresar">
                    <div class="contenedor_ingresar">
                        <form id="form-usuarios">
                            <h2>Nuevo Usuario</h2>
                            <p>Ingresa el nombre de usuario:</p>
                            <input class="input" type="text" name="usuario" id="usuario">
                            <p>Ingresa la contraseña:</p>
                            <input class="input" type="password" name="password" id="password">
                            <p>Ingresa el correo del usuario:</p>
                            <input class="input" type="email" name="email" id="email">
                            <p>Selecciona el rol:</p>
                            <select class="input" name="rol" id="rol">
                                <option value="0"></option>
                                <option value="1">Administrador</option>
                                <option value="2">General</option>
                            </select>
                            <button data-btn="insertar" id="btn-form-control-registrar">Registrar</button>
                            <label class="btn-cancel" id="btn-form-control-cancel">Cancelar</label>
                        </form>
                    </div>
                </div>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/alert.js"></script>
    <script src="public/js/usuario.js?1.3"></script>
    <script src="public/js/sesion.js"></script>
</body>
</html>