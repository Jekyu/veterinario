#InsertarDatos

## USUARIOS

-- Tipo usuario
INSERT INTO tipoUsuario values ('U1','Admin'); 
INSERT INTO tipousuario values ('U2','Veterinario'); 
INSERT INTO tipousuario values ('U3','Cliente'); 

-- Estado Usuario

INSERT INTO estadousuario VALUES ('E1','Activo');
INSERT INTO estadousuario VALUES ('E2','No activo');

-- Admin Usuario

INSERT INTO  usuario (
    emailusuario, 
    passwd,
    nameusuario, 
    apeusuario,
    idtipousuario
  )
 VALUES(
    'admin',--Email
    'admin', --passwd
    'admin', --Nombre
    'admin', --Apellido
    'U1' -- Tipo usuario

);

-- Veterinario Usuario

INSERT INTO usuario (
    emailusuario,
    passwd,
    nameusuario, 
    apeusuario, 
    edadusuario, 
    telusuario,
    idtipousuario
  )
 VALUES(
    'vet1@gmail.com',
    'vet1',
    'Suzy',
    'Bae',
    31,
    123456789,
    'U2'
);

-- Cliente Usuario

insert into 
  usuario (
    emailusuario,
    passwd, 
    nameusuario, 
    apeusuario, 
    edadusuario, 
    telusuario, 
    dirusuario
  )
/*values
  (
    $emailusuario, 
    $passwd,    
    $nameusuario, 
    $apeusuario, 
    $edadusuario, 
    $telusuario, 
    $dirusuario
  );*/
VALUES(
    'cliente1@gmail.com',
    'cliente1',
    'Alex',
    'Turner',
    39,
    321654987,
    Sheffield
); --Automaticamente se agrega el U3 como cliente

## MASCOTAS

INSERT INTO tipomascota VALUES ('M1', 'Perro');
INSERT INTO tipomascota VALUES    ('M2', 'Gato');
INSERT INTO tipomascota VALUES    ('M3', 'Pájaro');
INSERT INTO tipomascota VALUES    ('M4', 'Pez');
INSERT INTO tipomascota VALUES    ('M5', 'Conejo');
INSERT INTO tipomascota VALUES ('M6', 'Hamster');
INSERT INTO tipomascota VALUES ('M7', 'Tortuga');
INSERT INTO tipomascota VALUES ('M8', 'Serpiente');
INSERT INTO tipomascota VALUES  ('M9', 'Lagarto');
INSERT INTO tipomascota VALUES  ('M10', 'Cuyo');

insert into mascota (namemascota,idtipomascota,edadaprox,idusuario)
values ('Felix','M2',3,5);
insert into mascota (namemascota,idtipomascota,edadaprox,idusuario)
values ('Luna','M1',2,5);

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
insert into cita (
  datecita, 
  hourcita, 
  idmascota, 
  idtipocita
)
values
(
  '2025-02-15', --YYYY-MM-DD
  '13:20', --HH:MM:SS
  1, 
  'C2'
);

INSERT INTO citaVeterinario VALUES (1, 4); --idCita, idUsuario vet

insert into citaestado 
(
  idcita, 
  idestadocita, 
  hstrcita
)
values (1,'T1','Se agenda cita');