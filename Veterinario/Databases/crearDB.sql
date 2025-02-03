# Crear base de datos
CREATE DATABASE veterinario;

# ----- CREACIÓN DE TABLAS -----

# TABLA USUARIO

CREATE TABLE tipoUsuario(
  	idTipoUsuario VARCHAR(2) PRIMARY KEY,
    nameTipoUsuario VARCHAR(30) NOT NULL
);

CREATE TABLE estadoUsuario(
  	idEstadoUsuario VARCHAR(2) PRIMARY KEY,
    nameEstadoUsuario VARCHAR(30) NOT NULL
);

CREATE TABLE usuario(
	idUsuario SERIAL PRIMARY KEY,
    emailUsuario VARCHAR(40) NOT NULL UNIQUE,
    passwd VARCHAR(50) NOT NULL,
    idTipoUsuario VARCHAR(2) NOT NULL DEFAULT ('U3') REFERENCES tipoUsuario(idTipoUsuario),
    nameUsuario VARCHAR(30) NOT NULL,
    apeUsuario VARCHAR(30) NOT NULL,
    edadUsuario INT,
    telUsuario INT,
    dirUsuario VARCHAR(50),
    creacionUsuario TIMESTAMP NOT NULL DEFAULT (NOW()),
);

# TABLA MASCOTAS

CREATE TABLE tipoMascota(
  idTipoMascota VARCHAR(3) PRIMARY KEY,
  nameTipoMascota VARCHAR(10) NOT NULL
);

CREATE TABLE mascota(
  idMascota SERIAL PRIMARY KEY,
  nameMascota VARCHAR(30) NOT NULL,
  idTipoMascota VARCHAR(2) REFERENCES tipoMascota(idTipoMascota),
  edadAprox INT,
  idUsuario int REFERENCES usuario(idUsuario),
  rgtoMascota TIMESTAMP not NULL DEFAULT (NOW()) 
);

# TABLA CITA
CREATE Table tipoEstadoCita(
  idEstadoCita VARCHAR(2) PRIMARY KEY,
  nameEstadoCita VARCHAR(15)
);

CREATE Table tipoCita(
  idTipoCita VARCHAR(2) PRIMARY KEY,
  nameTipoCita VARCHAR(15)
);

CREATE TABLE cita(
  idCita SERIAL PRIMARY KEY,
  dateCita DATE NOT NULL,
  hourCita TIME NOT NULL,
  idMascota INT NOT NULL REFERENCES mascota(idMascota),
  idTipoCita VARCHAR(2) NOT NULL REFERENCES tipoCita(idTipoCita)
);

CREATE Table citaVeterinario(
  idCita INT NOT NULL REFERENCES cita(idCita),
  idUsuario INT NOT NULL REFERENCES usuario(idUsuario)
)

CREATE Table citaEstado(
  idCita INT NOT NULL REFERENCES cita(idCita),
  idEstadoCita VARCHAR(2) NOT NULL REFERENCES tipoEstadoCita(idEstadoCita),
  hstrCita VARCHAR(256),
  rgtoCita TIMESTAMP NOT NULL DEFAULT(NOW()) --Cuando se consulte traer el ultimo
)
