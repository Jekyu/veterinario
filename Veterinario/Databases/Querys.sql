#Querys
SELECT * FROM tipousuario;
SELECT * FROM estadousuario;

## usuario
SELECT * FROM usuario;

-- Login usuario
SELECT emailusuario, passwd
FROM usuario
WHERE emailusuario='admin' and passwd ='admin'

-- Solo veterinarios
SELECT U.idusuario, U.nameusuario, U.apeusuario FROM usuario as U WHERE idtipousuario='U2';

SELECT * FROM tipomascota;

SELECT * FROM mascota;

TABLE usuario as U;

--Mascotas por usuario
SELECT U.nameusuario, M.idmascota, M.namemascota
FROM usuario as U, mascota as M
WHERE U.idusuario = M.idusuario;

--
SELECT* FROM tipocita;

SELECT * FROM tipoestadocita;

-- Cita

SELECT C.idcita, M.namemascota, C.datecita, C.hourcita, U.nameusuario as Veterinaria, T.nameestadocita
FROM usuario as U, mascota as M, cita as C, citaveterinario as V, tipoestadocita as T, citaestado AS CE
WHERE C.idmascota = M.idmascota AND V.idusuario = U.idusuario AND T.idestadocita = CE.idestadocita

