-- Rango de OP.

SELECT * FROM ordenes WHERE op BETWEEN 10786 AND 10790;

-- Rango de Fecha.

SELECT * FROM ordenes WHERE fecha BETWEEN '2021-08-20' AND '2021-08-23';

-- Mes

SELECT * FROM reporte_diario WHERE fecha LIKE '%-08-%';

-- Año

SELECT * FROM reporte_diario WHERE fecha LIKE '%2020-%';