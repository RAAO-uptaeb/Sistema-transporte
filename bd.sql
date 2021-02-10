CREATE TABLE usuarios (
	id_usuario int not null AUTO_INCREMENT,
	cedula varchar (8),
	usuario varchar (15),
	nombre varchar (20),
	apellido varchar (20),
	contrasena varchar (20),
	rol varchar (20),
	primary key (id_usuario)
);
INSERT INTO usuarios (id_usuario, cedula, usuario, nombre, apellido, contrasena, rol)
VALUES ( 0, 1234, 'admin', 'admin', 'istrador', 'admin', 'admin');


CREATE TABLE bitacora (
	id_bitacora int not null AUTO_INCREMENT,
    id_usuario int not null,
	fecha date,
	hora time,
	accion varchar (200),
	primary key (id_bitacora),
    CONSTRAINT fk_usuarios_bitacora foreign key (id_usuario) references usuarios (id_usuario) on delete cascade on update cascade
);
CREATE TABLE taller (
	id_taller int not null,
	rif varchar (10) not null,
	nombre varchar (30) not null,
	direccion varchar (200),
	primary key (nombre)
);



CREATE TABLE vehiculos (
	id_vehiculo int not null,
	placa varchar (10) not null,
	modelo varchar (20),
	funcionamiento varchar (20),
	primary key (placa)
);



CREATE TABLE choferes(
	id_choferes int not null AUTO_INCREMENT,
	placa varchar (10),
	nombre varchar (20),
	apellido varchar (20),
	cedula varchar (8),
	telefono varchar (11),
	primary key (id_choferes),
	CONSTRAINT fk_placa_vehiculo foreign key (placa) references vehiculos (placa) on delete cascade on update cascade
);



CREATE TABLE rutas (
	id_ruta int not null AUTO_INCREMENT,
	placa varchar (10) not null,
	nombre_ruta varchar (50),
	direccion_ruta varchar (250),
	hora_salida time,
	primary key (id_ruta),
	CONSTRAINT fk2_placa foreign key (placa) references vehiculos (placa) on delete cascade on update cascade
);



CREATE TABLE tipos (
	id_tipos int not null,
	nombre_tipo varchar (50),
	descripcion varchar (200),
	tiempo varchar (20),

	primary key (nombre_tipo)
);



CREATE TABLE mantenimientos (
	id_mantenimiento int not null AUTO_INCREMENT,
	nombre_tipo varchar (30) not null,
	placa varchar (10) not null,
	nombre varchar (30) not null,
	costo varchar (30) not null,
	fecha date,

	primary key (id_mantenimiento),
	CONSTRAINT fk_nombre_tipo foreign key (nombre_tipo) references tipos (nombre_tipo) on delete cascade on update cascade,
	CONSTRAINT fk1_placa foreign key (placa) references vehiculos (placa) on delete cascade on update cascade,
	CONSTRAINT fk1_nombre foreign key (nombre) references taller (nombre) on delete cascade on update cascade
);


	
CREATE TABLE reparaciones (
	id_reparaciones int not null AUTO_INCREMENT,
	nombre varchar (30) not null,
	placa varchar (10) not null,
	costo varchar (30) not null,
	fecha date,
	descripcion varchar (200),
	primary key (id_reparaciones),
	CONSTRAINT fk_nombre foreign key (nombre) references taller (nombre) on delete cascade on update cascade,
	CONSTRAINT fk_placa foreign key (placa) references vehiculos (placa) on delete cascade on update cascade
);

