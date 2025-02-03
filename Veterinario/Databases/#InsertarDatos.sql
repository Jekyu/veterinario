#InsertarDatos

## USUARIOS

-- Tipo usuario
INSERT INTO tipoUsuario values ('U1','Admin'); 
INSERT INTO tipousuario values ('U2','Veterinario'); 
INSERT INTO tipousuario values ('U3','Cliente'); 

-- tipoEstadoUsuario
INSERT INTO tipoEstadoUsuario VALUES ('E1','Activo');
INSERT INTO tipoEstadoUsuario VALUES ('E2','No activo');

-- Admin Usuario
INSERT INTO  usuario (idUsuario, emailusuario, passwd, idtipousuario)
VALUES( 
  '1010',
  'admin',--Email
  'admin', --passwd
  'U1' -- Tipo usuario
);

-- Veterinario Usuario

INSERT INTO  usuario (idUsuario, emailusuario, passwd, idtipousuario)
VALUES(2020,'vet1@gmail.com','vet1','U2');
INSERT INTO  estadousuario VALUES(2020,'E1')

INSERT INTO vet(idusuario,idvet, nameVet, apeVet, telVet)
VALUES(2020,'VET1','Suzy','Bae',123456789);

-- Cliente Usuario
INSERT INTO  usuario (idusuario,emailusuario, passwd, idtipousuario)
VALUES(3030,'cliente1@gmail.com','cliente1','U3');

INSERT INTO estadousuario VALUES(3030,'E1')

insert into cliente (
  idusuario,
  namecliente,
  apecliente,
  edadcliente,
  telcliente,
  dircliente)
VALUES(
  3030,
  'Alex',
  'Turner',
  39,
  321654987,
  'Sheffield'
); --Automaticamente se agrega el U3 como cliente

## MASCOTAS
INSERT INTO tipomascota VALUES ('M1', 'Perro');
INSERT INTO tipomascota VALUES ('M2', 'Gato');
INSERT INTO tipomascota VALUES ('M3', 'Pájaro');
INSERT INTO tipomascota VALUES ('M4', 'Pez');
INSERT INTO tipomascota VALUES ('M5', 'Conejo');
INSERT INTO tipomascota VALUES ('M6', 'Hamster');
INSERT INTO tipomascota VALUES ('M7', 'Tortuga');
INSERT INTO tipomascota VALUES ('M8', 'Serpiente');
INSERT INTO tipomascota VALUES ('M9', 'Lagarto');
INSERT INTO tipomascota VALUES ('M10', 'Cuyo');

insert into mascota (idmascota,namemascota,idtipomascota,edadaprox,idCliente)
values ('A1','Felix','M2',3,1);
insert into mascota (idmascota,namemascota,idtipomascota,edadaprox,idCliente)
values ('A2','Luna','M1',2,1);

## Citas
insert into tipoestadocita values ('T1','Agendado');
insert into tipoestadocita values ('T2','Asistida');
insert into tipoestadocita values ('T3','Reprogramado');
insert into tipoestadocita values ('T4','Cancelado');

-- tipoCita
insert into tipocita values ('C1','Consulta');
insert into tipocita values ('C2','Baño');
insert into tipocita values ('C3','Corte');
insert into tipocita values ('C4','Vacuna');
insert into tipocita values ('C5','Operación');
insert into tipocita values ('C6','Urgencia');

-- cita
insert into cita (datecita, hourcita, idmascota, idtipocita)
values(
  '2025-02-15', --YYYY-MM-DD
  '13:20', --HH:MM:SS
  'A1', 
  'C2'
);

INSERT INTO citavet VALUES (1,'VET1'); --idCita, idVet

insert into citaestado (idcita, idestadocita, hstrcita)
values (1,'T1','Se agenda cita');