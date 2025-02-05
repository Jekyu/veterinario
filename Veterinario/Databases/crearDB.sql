-- Active: 1738541819911@@127.0.0.1@5432@veterinaria
# Crear base de datos
--CREATE DATABASE veterinaria
;
# ----- CREACIÓN DE TABLAS -----

# TABLA USUARIO

CREATE TABLE tipoUsuario(
  	idTipoUsuario VARCHAR(3) PRIMARY KEY,
    nameTipoUsuario VARCHAR(30) NOT NULL
);

CREATE TABLE tipoEstadoUsuario(
  	idEstadoUsuario VARCHAR(3) PRIMARY KEY,
    nameEstadoUsuario VARCHAR(30) NOT NULL
);

CREATE TABLE usuario(
  idUsuario INT PRIMARY KEY,
  emailUsuario VARCHAR(40) NOT NULL UNIQUE,
  passwd VARCHAR(50) NOT NULL,
  idTipoUsuario VARCHAR(3) NOT NULL DEFAULT ('U3') REFERENCES tipoUsuario(idTipoUsuario)
);

CREATE TABLE estadoUsuario(
  idusuario INT REFERENCES usuario(idusuario),
  idEstadoUsuario VARCHAR(3) REFERENCES tipoEstadoUsuario(idEstadoUsuario),
  rgtoUsuario TIMESTAMP NOT NULL DEFAULT (NOW())
);

CREATE TABLE vet(
  idUsuario INT NOT NULL REFERENCES usuario(idUsuario),
  idVet VARCHAR(6) PRIMARY KEY,
  nameVet VARCHAR(40) NOT NULL,
  apeVet VARCHAR(30) NOT NULL,
  telVet INT
);

CREATE TABLE cliente(
  idUsuario INT NOT NULL UNIQUE REFERENCES usuario(idUsuario),
  nameCliente VARCHAR(30) NOT NULL,
  apeCliente VARCHAR(30) NOT NULL,
  edadCliente INT,
  telCliente INT,
  dirCliente VARCHAR(50)
);

# TABLA MASCOTAS

CREATE TABLE tipoMascota(
  idTipoMascota VARCHAR(3) PRIMARY KEY,
  nameTipoMascota VARCHAR(10) NOT NULL
);

CREATE TABLE mascota(
  idMascota VARCHAR(10) PRIMARY KEY,
  nameMascota VARCHAR(30) NOT NULL,
  idTipoMascota VARCHAR(3) REFERENCES tipoMascota(idTipoMascota),
  edadAprox INT,
  idUsuario int REFERENCES cliente(idUsuario),
  rgtoMascota TIMESTAMP not NULL DEFAULT (NOW()) 
);

# TABLA CITA
CREATE Table tipoEstadoCita(
  idEstadoCita VARCHAR(3) PRIMARY KEY,
  nameEstadoCita VARCHAR(15)
);

CREATE Table tipoCita(
  idTipoCita VARCHAR(3) PRIMARY KEY,
  nameTipoCita VARCHAR(15)
);

CREATE TABLE cita(
  idCita SERIAL PRIMARY KEY,
  dateCita DATE NOT NULL,
  hourCita TIME NOT NULL,
  idMascota VARCHAR(10) NOT NULL REFERENCES mascota(idMascota),
  idTipoCita VARCHAR(3) NOT NULL REFERENCES tipoCita(idTipoCita),
  idVet VARCHAR(6) NOT NULL REFERENCES vet(idVet)
);

CREATE Table citaEstados(
  idCita INT NOT NULL REFERENCES cita(idCita),
  idEstadoCita VARCHAR(3) NOT NULL REFERENCES tipoEstadoCita(idEstadoCita),
  hstrCita VARCHAR(256),
  rgtoCita TIMESTAMP NOT NULL DEFAULT(NOW())
)