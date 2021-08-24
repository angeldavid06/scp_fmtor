<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/componentes/head.php'; ?>
    <title>Control de Producción</title>
</head>
<body>
    <div class="main">
        <img class="source source-1" src="../public/img/aux-2.png" alt="" srcset="">
        <div class="row-con">
            <?php require_once 'public/components/header.php'; ?>
            <main>
                <div class="options">
                    <div class="left">
                        <a href="http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=menu" class="regresar"><i class="material-icons">arrow_back_ios</i>Menú principal</a>
                    </div>
                    <div class="right">
                        <input type="number" name="" id="" placeholder="Buscar O.P.">
                        <button id="btn-form-control" class="material-icons btn-icon">add</button>
                    </div>
                </div>
                <div class="informacion">
                    <table>
                        <tbody>
                            <tr>
                                <td>Código del dibujo: </td>
                                <td>Cliente: </td>
                                <td>Fecha: </td>
                                <td>Cantidad: </td>
                            </tr>
                            <tr>
                                <td>Descripción: </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="estados">
                    <button class="boton_estado" data-estado="forjado">FORJADO</button>
                    <button class="boton_estado" data-estado="ranurado">RANURADO</button>
                    <button class="boton_estado" data-estado="rolado">ROLADO</button>
                    <button class="boton_estado" data-estado="shank">SHANK</button>
                    <button class="boton_estado" data-estado="cementado">CEMENTADO</button>
                    <button class="boton_estado" data-estado="acabado">ACABADO</button>
                </div>
                <div class="contenedor_tablas">
                    <div class="tabla_estado estado_forjado">
                        <h2>FORJADO</h2>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <th>Máquina</th>
                                    <th>Bote</th>
                                    <th>Fecha Entrega</th>
                                    <th>Pzas.</th>
                                    <th>Pzas. Acumuladas</th>
                                    <th>Kg.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_ranurado">
                        <h2>RANURADO</h2>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <th>Máquina</th>
                                    <th>Bote</th>
                                    <th>Fecha Entrega</th>
                                    <th>Pzas.</th>
                                    <th>Pzas. Acumuladas</th>
                                    <th>Kg.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_rolado">
                        <h2>ROLADO</h2>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <th>Máquina</th>
                                    <th>Bote</th>
                                    <th>Fecha Entrega</th>
                                    <th>Pzas.</th>
                                    <th>Pzas. Acumuladas</th>
                                    <th>Kg.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_shank">
                        <h2>SHANK</h2>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <th>Máquina</th>
                                    <th>Bote</th>
                                    <th>Fecha Entrega</th>
                                    <th>Pzas.</th>
                                    <th>Pzas. Acumuladas</th>
                                    <th>Kg.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_cementado">
                        <h2>CEMENTADO</h2>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <th>Máquina</th>
                                    <th>Bote</th>
                                    <th>Fecha Entrega</th>
                                    <th>Pzas.</th>
                                    <th>Pzas. Acumuladas</th>
                                    <th>Kg.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_acabado">
                        <h2>ACABADO</h2>
                        <div class="tabla">
                            <table>
                                <thead>
                                    <th>Máquina</th>
                                    <th>Bote</th>
                                    <th>Fecha Entrega</th>
                                    <th>Pzas.</th>
                                    <th>Pzas. Acumuladas</th>
                                    <th>Kg.</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                        <td>item-1</td>
                                        <td>item-2</td>
                                        <td>item-3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="ingresar">
                    <div class="contenedor_ingresar">
                        <form id="form-control">
                            <h2>Nuevo Registro</h2>
                            <p>Ingresa el número de máquina:</p>
                            <input class="input" type="number" name="" id="">
                            <p>Ingresa el número de botes:</p>
                            <input class="input" type="number" name="" id="">
                            <p>Ingresa la fecha de entrega:</p>
                            <input class="input" type="date" name="" id="">
                            <p>Ingresa las pzas. entregadas:</p>
                            <input class="input" type="number" name="" id="">
                            <p>Ingresa los kg. entregados:</p>
                            <input class="input" type="number" name="" id="">
                            <button data-btn="insertar" id="btn-form-control-registrar">Registrar</button>
                            <label class="btn-cancel" id="btn-form-control-cancel">Cancelar</label>
                        </form>
                    </div>
                </div>
            </main>
        </div>
        <img class="source source-2" src="../public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/alert.js"></script>
    <script src="public/js/estados.js"></script>
    <script src="public/js/control.js"></script>
    <script src="public/js/sesion.js"></script>
    <script src="public/js/preloader.js"></script>
</body>
</html>