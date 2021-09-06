<?php require_once 'public/components/sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'public/components/head.php'; ?>
    <title>Control de Producción</title>
</head>
<body>
    <div class="main">
        <div class="row-con">
            <?php require_once 'public/components/header.php'; ?>
            <main>
                <div class="options">
                    <div class="left">
                        <a href="http://localhost/scp_fmtor/?controller=usuariosController&action=menu" class="regresar"><i class="material-icons">arrow_back_ios</i>Menú principal</a>
                    </div>
                    <div class="right">
                        <input type="number" name="op_control" id="op_control" placeholder="Buscar O.P.">
                        <button class="material-icons btn-icon">search</button>
                        <button id="btn-form-control" class="material-icons btn-icon">add</button>
                    </div>
                </div>
                <div class="informacion">
                    <table>
                        <tbody>
                            <tr class="info_1">
                                <td >Código del dibujo: </td>
                                <td >Cliente: </td>
                                <td >Fecha: </td>
                                <td >Cantidad: </td>
                            </tr>
                            <tr class="info_2">
                                <td >Descripción: </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="estados">
                    <button class="boton_estado" data-estado="v_forjado">FORJADO</button>
                    <button class="boton_estado" data-estado="v_ranurado">RANURADO</button>
                    <button class="boton_estado" data-estado="v_rolado">ROLADO</button>
                    <button class="boton_estado" data-estado="v_shank">SHANK</button>
                    <button class="boton_estado" data-estado="v_cementado">CEMENTADO</button>
                    <button class="boton_estado" data-estado="v_acabado">ACABADO</button>
                </div>
                <div class="contenedor_tablas">
                    <div class="tabla_estado estado_v_forjado">
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
                                <tbody class="body_v_forjado">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_v_ranurado">
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
                                <tbody class="body_v_ranurado">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_v_rolado">
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
                                <tbody class="body_v_rolado">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_v_shank">
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
                                <tbody  class="body_v_shank">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_v_cementado">
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
                                <tbody class="body_v_cementado">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tabla_estado estado_v_acabado">
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
                                <tbody class="body_v_acabado">
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
    </div>
    <script src="public/js/origin.js"></script>
    <script src="public/js/alert.js"></script>
    <script src="public/js/estados.js?1.2"></script>
    <script src="public/js/control.js?1.1"></script>
    <script src="public/js/sesion.js"></script>
    <script src="public/js/preloader.js"></script>
</body>
</html>