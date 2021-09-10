-- Rango de OP.

SELECT * FROM ordenes WHERE op BETWEEN 10786 AND 10790;

-- Rango de Fecha.

SELECT * FROM ordenes WHERE fecha BETWEEN '2021-08-20' AND '2021-08-23';

-- Op

SELECT * FROM ordenes WHERE op=10792;

-- Fecha

SELECT * FROM ordenes WHERE fecha='202-08-26';

-- Cliente

SELECT * FROM ordenes WHERE cliente='810';

-- Mes

SELECT * FROM reporte_diario WHERE fecha LIKE '%-08-%';

-- Año

SELECT * FROM reporte_diario WHERE fecha LIKE '%2020-%';

-- Estado

SELECT * FROM ordenes WHERE estado='Forjado';
