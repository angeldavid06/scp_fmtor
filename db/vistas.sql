CREATE OR REPLACE VIEW ordenes AS SELECT t_material.calibre,
        t_registro_diario.kilos,
        t_medida_tornillo.factor,
        t_op.op,t_op.fecha,t_clientes.nombre AS Cliente,
        concat_ws('*',t_medida_tornillo.espesor,t_medida_tornillo.longitud) AS Medida,
        t_descripcion_tornillo.descripcion AS Descripción,
        t_acabados.nombre AS Acabado,
        t_op.cantidad,
        precios.precio,
        precios.precio*t_op.cantidad AS Total,
        t_control_op.pzas_acumuladas AS Acumulado,
        t_estado.estado
        FROM
        t_material,
        t_tornillo,
        t_control_op,
        t_medida_tornillo,
        t_op,
        t_clientes,
        t_descripcion_tornillo,
        t_acabados,
        precios,
        t_estado,
        t_registro_diario
        WHERE
        t_tornillo.id_material=t_material.id
        AND t_control_op.op=t_op.op
        AND t_tornillo.id_medida=t_medida_tornillo.id
        AND t_op.id_tornillo=t_tornillo.id
        AND t_op.id_cliente=t_clientes.id
        AND t_tornillo.id_descripcion=t_descripcion_tornillo.id
        AND t_tornillo.id_acabado=t_acabados.id
        AND t_tornillo.id_precio=precios.id
        AND t_control_op.id_estado=t_estado.id
        AND t_registro_diario.id_control = t_control_op.id;

CREATE OR REPLACE VIEW control AS SELECT t_op.op, t_op.codigo_dibujo AS dibujo,
                                         t_clientes.nombre AS cliente,
                                         t_op.fecha,
                                         t_op.cantidad,
                                         concat_ws('*',t_medida_tornillo.espesor, t_medida_tornillo.longitud) AS descripcion,
                                         t_estado.estado AS estado
                                         FROM t_op,t_clientes,
                                         t_medida_tornillo,t_control_op,t_tornillo,
                                         t_estado
                                         WHERE t_control_op.op = t_op.op AND t_clientes.id = t_op.id_cliente AND t_op.id_tornillo = t_tornillo.id
					 AND t_tornillo.id_medida = t_medida_tornillo.id AND t_control_op.id_estado = t_estado.id;

CREATE OR REPLACE VIEW v_rolado AS SELECT t_control_op.id AS control,
                                        no_maquina,
                                        botes,
                                        pzas,
                                        fecha,
                                        kilos,
                                        op
                                        FROM 
                                        t_registro_diario,
                                        t_estado,
                                        t_control_op
                                        WHERE
                                        t_registro_diario.id_estado = t_estado.id
                                        AND t_control_op.id = t_registro_diario.id_control
                                        AND t_estado.estado='ROLADO';

CREATE OR REPLACE VIEW v_forjado AS SELECT t_control_op.id AS control,
                                        no_maquina,
                                        botes,
                                        pzas,
                                        fecha,
                                        kilos,
                                        op
                                        FROM 
                                        t_registro_diario,
                                        t_estado,
                                        t_control_op
                                        WHERE
                                        t_registro_diario.id_estado = t_estado.id
                                        AND t_control_op.id = t_registro_diario.id_control
                                        AND t_estado.estado='FORJADO';

CREATE OR REPLACE VIEW v_shank AS SELECT t_control_op.id AS control,
                                        no_maquina,
                                        botes,
                                        pzas,
                                        fecha,
                                        kilos,
                                        op
                                        FROM 
                                        t_registro_diario,
                                        t_estado,
                                        t_control_op
                                        WHERE
                                        t_registro_diario.id_estado = t_estado.id
                                        AND t_control_op.id = t_registro_diario.id_control
                                        AND t_estado.estado='SHANK';

CREATE OR REPLACE VIEW v_ranurado AS SELECT t_control_op.id AS control,
                                        no_maquina,
                                        botes,
                                        pzas,
                                        fecha,
                                        kilos,
                                        op
                                        FROM 
                                        t_registro_diario,
                                        t_estado,
                                        t_control_op
                                        WHERE
                                        t_registro_diario.id_estado = t_estado.id
                                        AND t_control_op.id = t_registro_diario.id_control
                                        AND t_estado.estado='RANURADO';

CREATE OR REPLACE VIEW v_cementado AS SELECT t_control_op.id AS control,
                                        no_maquina,
                                        botes,
                                        pzas,
                                        fecha,
                                        kilos,
                                        op
                                        FROM 
                                        t_registro_diario,
                                        t_estado,
                                        t_control_op
                                        WHERE
                                        t_registro_diario.id_estado = t_estado.id
                                        AND t_control_op.id = t_registro_diario.id_control
                                        AND t_estado.estado='CEMENTADO';

CREATE OR REPLACE VIEW v_acabado AS SELECT t_control_op.id AS control,
                                        no_maquina,
                                        botes,
                                        pzas,
                                        fecha,
                                        kilos,
                                        op
                                        FROM 
                                        t_registro_diario,
                                        t_estado,
                                        t_control_op
                                        WHERE
                                        t_registro_diario.id_estado = t_estado.id
                                        AND t_control_op.id = t_registro_diario.id_control
                                        AND t_estado.estado='ACABADO';
