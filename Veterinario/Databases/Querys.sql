#Querys
SELECT * FROM tipousuario;
SELECT * FROM estadousuario;

## usuario
SELECT * FROM usuario;

SELECT C.*
--SELECT U.idusuario, v.namevet, v.apevet, U.emailusuario
FROM usuario as U, cliente as C
WHERE U.idusuario = C.idusuario;

--Vet
SELECT * FROM vet;

-- Vet con datos

SELECT U.*
--SELECT U.idusuario, v.namevet, v.apevet, U.emailusuario
FROM usuario as U, vet as V
WHERE U.idusuario = V.idusuario;

--Cliente con datos
SELECT * FROM cliente;

SELECT U.idusuario, C.namecliente, C.apecliente, U.emailusuario
FROM usuario as U, cliente as C
WHERE U.idusuario = C.idusuario;

-- Login usuario

SELECT emailusuario, passwd
FROM usuario
WHERE emailusuario='admin' and passwd ='admin'

# mascotas

SELECT * FROM tipomascota;

SELECT * FROM mascota;

TABLE usuario as U;

--Mascotas por usuario
SELECT C.namecliente, M.idmascota, M.namemascota
FROM cliente as C, mascota as M
WHERE C.idusuario = M.idusuario;
--
SELECT* FROM tipocita;

SELECT * FROM tipoestadocita;

-- Cita

SELECT * FROM cita;

SELECT * FROM citavet;

SELECT * FROM 

--Agenda general

SELECT C.idcita, TC.nametipocita, M.namemascota, C.datecita, C.hourcita
FROM 
    mascota AS M, 
    vet as V, 
    cita as C, 
    citavet as CV,
    tipocita as TC
WHERE C.idcita=CV.idcita 
AND C.idtipocita = TC.idtipocita
AND C.idmascota = M.idmascota 
AND V.idvet = CV.idvet;

--Agenda vet
SELECT C.idcita, TC.nametipocita, M.namemascota, C.datecita, C.hourcita
FROM 
    mascota AS M, 
    vet as V, 
    cita as C, 
    citavet as CV,
    tipocita as TC
WHERE C.idcita=CV.idcita 
AND C.idtipocita = TC.idtipocita
AND C.idmascota = M.idmascota 
AND V.idvet = CV.idvet;

--Agenda cliente
SELECT C.idcita, M.namemascota, C.datecita, C.hourcita, 
FROM mascota AS M, vet as V, cita as C, citavet
WHERE C.idmascota = M.idmascota AND V.idusuario = U.idusuario AND T.idestadocita = CE.idestadocita

