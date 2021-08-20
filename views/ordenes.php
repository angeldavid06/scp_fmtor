<?php 
    // require_once 'public/components/sesion.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenes de Producción</title>
    <link rel="stylesheet" href="public/css/estilos.css?1.1">
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
                        <a href="http://192.168.0.43/scp_fmtor/?controller=usuariosController&action=menu" class="regresar"><i class="material-icons">arrow_back_ios</i>Menú principal</a>
                    </div>
                    <div class="right">
                        <button class="btn-icon btn_filtrar_open material-icons">filter_alt</button>
                        <button class="btn-icon material-icons">print</button>
                    </div>
                </div>
                <div class="tabla">
                    <table>
                        <thead class="cabecera">
                            <th>CAL.</th>
                            <th>Kg.</th>
                            <th>Factor</th>
                            <th>N° O.P.</th>
                            <th>Fecha de O.P.</th>
                            <th>Cliente</th>
                            <th>Medida</th>
                            <th>Descripción</th>
                            <th>Acabado</th>
                            <th>Cant</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>Acumulado</th>
                            <th>Estado</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="filtrar">
                    <form id="form-formatos">
                        <div class="contenedor_filtros">
                            <h2>Formatos pre establecidos</h2>
                            <select name="seleccion_formato" id="seleccion_formato">
                                <option value="0">Ordenes de Producción</option>
                                <option value="1">Reporte Diario</option>
                                <option value="2">Reporte Diario por Máquina</option>
                            </select>
                            <button>Consultar</button>
                            <label class="btn-cancel">Cancelar</label>
                        </div>
                    </form>
                    <form id="form-filtros">
                        <div class="contenedor_filtros">
                            <h2>Filtrar Ordenes de Producción</h2>
                            <h3>Filtrar por O.P.:</h3>
                            <div class="filtro fecha">
                                <input type="checkbox" class="checkbox" name="check_op" id="check_op">
                                <label class="lbl_check"  for="check_op">Buscar O.P.:</label>
                                <input class="input" type="number" name="" id="">
                                <input type="checkbox" class="checkbox" name="check_rango_op" id="check_rango_op">
                                <label class="lbl_check"  for="check_rango_op">Filtrar por rango de O.P.: </label>
                                <div class="rango">
                                    <input class="input" type="number" name="" id="">
                                    <p>-</p>
                                    <input class="input" type="number" name="" id="">
                                </div>
                            </div>
                            <h3>Filtrar por fecha:</h3>
                            <div class="filtro fecha">
                                <input type="checkbox" class="checkbox" name="check_fecha" id="check_fecha">
                                <label class="lbl_check" for="check_fecha">Filtrar por fecha especifica:</label>
                                <input class="input" type="date" name="" id="">
                                <input type="checkbox" class="checkbox" name="check_fecha_mes" id="check_fecha_mes">
                                <label class="lbl_check" for="check_fecha_mes">Filtrar por mes: </label>
                                <input class="input" type="month" name="" id="">
                                <input type="checkbox" class="checkbox" name="check_fecha_año" id="check_fecha_año">
                                <label class="lbl_check" for="check_fecha_año">Filtrar por año: </label>
                                <input class="input" type="number" name="" id="">
                                <input type="checkbox" class="checkbox" name="check_rango_fecha" id="check_rango_fecha">
                                <label class="lbl_check" for="check_rango_fecha">Filtrar por rango de fecha: </label>
                                <div class="rango">
                                    <input class="input" type="date" name="" id="">
                                    <p>-</p>
                                    <input class="input" type="date" name="" id="">
                                </div>
                            </div>
                            <h3>Filtrar por cliente:</h3>
                            <div class="filtro fecha">
                                <input type="checkbox" class="checkbox" name="check_cliente" id="check_cliente">
                                <label class="lbl_check" for="check_cliente">Buscar cliente:</label>
                                <input class="input" type="text" name="" id="">
                            </div>
                            <h3>Filtrar por estado:</h3>
                            <div class="filtro fecha">
                                <input type="checkbox" class="checkbox" name="check_estado" id="check_estado">
                                <label class="lbl_check" for="check_estado">Selecciona el estado de las O.P.:</label>
                                <select name="" id="">
                                    <option value="1">FORJADO</option>
                                    <option value="2">RANURADO</option>
                                    <option value="3">ROLADO</option>
                                    <option value="4">SHANK</option>
                                    <option value="5">CEMENTADO</option>
                                    <option value="6">ACABADO</option>
                                    <option value="7">TERMINADO</option>
                                    <option value="8">CANCELADO</option>
                                </select>
                            </div>
                            <button>Buscar</button>
                            <label class="btn-cancel">Cancelar</label>
                        </div>
                    </form>
                </div>
            </main>
        </div>
        <img class="source source-2" src="public/img/aux-1.png" alt="" srcset="">
    </div>
    <script src="public/js/alert.js"></script>
    <script src="public/js/filtros.js"></script>
    <script src="public/js/ordenes.js"></script>
    <script src="public/js/sesion.js"></script>
</body>
</html>