#Querys
SELECT * FROM tipousuario;
SELECT * FROM estadousuario;

## usuario
SELECT * FROM usuario;

--Vet
SELECT * FROM vet;

-- Vet con datos
SELECT U.idusuario, v.namevet, v.apevet, U.emailusuario
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
WHERE C.idcliente = M.idcliente;

--
SELECT* FROM tipocita;

SELECT * FROM tipoestadocita;

-- Cita

SELECT C.idcita, M.namemascota, C.datecita, C.hourcita, U.nameusuario as Veterinaria, T.nameestadocita
FROM usuario as U, mascota as M, cita as C, citaveterinario as V, tipoestadocita as T, citaestado AS CE
WHERE C.idmascota = M.idmascota AND V.idusuario = U.idusuario AND T.idestadocita = CE.idestadocita

