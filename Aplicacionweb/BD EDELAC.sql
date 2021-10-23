USE Proyecto

CREATE TABLE ENCARGADO(
Id_encargado int primary key not null,
dpi bigint unique not null,  
nom_encargado varchar (25) not null,
ape_encargado varchar(25) not null,
sexo_enc varchar(10) not null,
correo varchar(30) not null,
direccion_casa varchar(50) not null,
telefono int not null, 
celular int not null
)

CREATE TABLE ALUMNO (
carnet int primary key not null,  
nom_alumno varchar (25) not null,
ape_alumno varchar(25) not null,
fecha_nac date,
edad tinyint not null,
sexo varchar(10) not null,
id_grado varchar(2) not null,
id_encargado int not null
)

CREATE TABLE GRADO(
codigo varchar(2) primary key not null,
nombre_grado varchar(10) not null,
seccion varchar(2) not null,
id_maestro int
)

CREATE TABLE MAESTRO(
Id_maestro int primary key not null,
nom_maestro varchar(25) not null,
ape_maestro varchar(25) not null,
edad tinyint not null,
sexo varchar(10) not null,
telefono int not null,
direccion varchar(50) not null,
correo varchar(30) not null 
)
 
-- ----------------------- RESTRICCIONES -------------------------

ALTER TABLE ALUMNO 
ADD CONSTRAINT FK_encargado FOREIGN KEY(id_encargado) REFERENCES ENCARGADO(id_encargado);

Alter table alumno 
ADD CONSTRAINT FK_alumno_grado FOREIGN KEY(id_grado) REFERENCES grado(codigo);

ALTER TABLE Grado
ADD CONSTRAINT FK_grado_maestro FOREIGN KEY(id_maestro) REFERENCES maestro(id_maestro);


-- ------------ SP PARA REGISTRAR ENCARGADO --------------------

DROP PROCEDURE IF EXISTS `registrar_encargado`;

DELIMITER $$
CREATE PROCEDURE `registrar_encargado`(
 IN _Id_encargado int,
IN _dpi bigint,  
IN _nom_encargado varchar (25),
IN _ape_encargado varchar(25),
IN _sexo_enc varchar(10),
IN _correo varchar(30),
IN _direccion_casa varchar(50),
IN _telefono int, 
IN _celular int 
   )
BEGIN
    insert into `encargado` VALUES (_Id_encargado, _dpi, _nom_encargado, _ape_encargado, _sexo_enc, _correo, _direccion_casa, _telefono, _celular);
    END$$

-- call registrar_encargado (4, 123456789876543, 'Raul', 'Lopez', 'Masculino', 'raul@gmail.com', 'Quetzaltenango', 12345678, 87654321);  


----------- SP PARA REGISTRAR ALUMNOS -----------------------

DROP PROCEDURE IF EXISTS `registrar_alumno`;

DELIMITER $$
CREATE PROCEDURE `registrar_alumno`(
 IN _carnet int,  
IN _nom_alumno varchar (25),
IN _ape_alumno varchar(25),
IN _fecha_nac date, 
IN _edad int, 
IN _sexo varchar(10),
IN _id_grado varchar(2), 
IN _id_encargado int 
   )
BEGIN
    insert into `alumno` VALUES (_carnet, _nom_alumno, _ape_alumno, _fecha_nac, _edad, _sexo, _id_grado, _id_encargado);
    END$$

-- call registrar_alumno(6, 'Luis', 'Guzman', '2013-01-10', 12, 'Masculino', '1C', 3);


-- ------------ SP PARA ACTUALIZAR ALUMNO --------

DROP PROCEDURE IF EXISTS `mod_alumno`;

DELIMITER $$
CREATE PROCEDURE `mod_alumno`(
IN _carnet int,  
IN _nom_alumno varchar (25),
IN _ape_alumno varchar(25),
IN _fecha_nac date, 
IN _edad int, 
IN _sexo varchar(10),
IN _id_grado varchar(2), 
IN _id_encargado int  )
BEGIN
    UPDATE `alumno` SET 
   nom_alumno=_nom_alumno, ape_alumno = _ape_alumno, fecha_nac=_fecha_nac, edad=_edad, sexo=_sexo, id_grado=_id_grado,    id_encargado=_id_encargado
    WHERE  carnet = _carnet;
END $$

-- call mod_alumno(1, 'Mario', 'Reyes', '2013-01-10', 8, 'Masculino', '2A', 3);


-- ------------ SP PARA ACTUALIZAR Encargado --------

DROP PROCEDURE IF EXISTS `mod_encargado`;

DELIMITER $$
CREATE PROCEDURE `mod_encargado`(
IN _id_encargado int,
IN _dpi bigint,  
IN _nom_encargado varchar (25),
IN _ape_encargado varchar(25),
IN _sexo_enc varchar(10),
IN _correo varchar(30),
IN _direccion_casa varchar(50),
IN _telefono int, 
IN _celular int 
  )
BEGIN
    UPDATE `encargado` SET 
   dpi=_dpi, nom_encargado=_nom_encargado, ape_encargado=_ape_encargado, sexo_enc=_sexo_enc, correo=_correo, direccion_casa=_direccion_casa, telefono=_telefono, celular=_celular
    WHERE  id_encargado = _id_encargado;
END $$

-- call mod_encargado (1, 1234567898765, 'Raul', 'Lopez', 'Masculino', 'raul@gmail.com', 'Quetzaltenango', 12345678, 87654321);  


-- ----------- SP PARA BUSCAR ALUMNO ------------

DROP PROCEDURE IF EXISTS `buscar_alumno`;

DELIMITER $$
CREATE PROCEDURE `buscar_alumno`(
 IN _carnet int 
 )
BEGIN
 select * from alumno where carnet = _carnet;
 END $$

-- call buscar_alumno (1);


-- ----------- SP PARA BUSCAR ENCARGADO ------------

DROP PROCEDURE IF EXISTS `buscar_encargado`;

DELIMITER $$
CREATE PROCEDURE `buscar_encargado`(
 IN _id_encargado int 
 )
BEGIN
 select * from encargado where id_encargado = _id_encargado;
 END $$

-- call buscar_encargado (1);


-- ----------- SP PARA ELIMINAR ENCARGADO ------------

DROP PROCEDURE IF EXISTS `eliminar_encargado`;

DELIMITER $$
CREATE PROCEDURE `buscar_encargado`(
 IN _id_encargado int 
 )
BEGIN
  DELETE FROM encargado WHERE id_encargado = _id_encargado_alumno;
END $$


-- ----------- SP PARA ELIMINAR ALUMNO ------------

DROP PROCEDURE IF EXISTS `eliminar_alumno`;

DELIMITER $$
CREATE PROCEDURE `eliminar_alumno`(
 IN _carnet int 
 )
BEGIN
  DELETE FROM alumno WHERE carnet = _carnet;
END $$

-- ------------------- VISTAS -----------------

DROP VIEW IF EXISTS `vista_primero`;

CREATE view Vista_primero
As
Select A.carnet As 'Carnet', 
A.ape_alumno As 'Apellido', 
A.nom_alumno As 'Nombre',
G.seccion AS 'Seccion'
from alumno As A inner join grado AS G on
A.id_grado = G.codigo
where G.nombre_grado = 'Primero';
-- ----------------------------

DROP VIEW IF EXISTS `vista_segundo`;

CREATE view Vista_segundo
As
Select A.carnet As 'Carnet', 
A.ape_alumno As 'Apellido', 
A.nom_alumno As 'Nombre',
G.seccion AS 'Seccion'
from alumno As A inner join grado AS G on
A.id_grado = G.codigo
where G.nombre_grado = 'Segundo';
-- -----------------------------

DROP VIEW IF EXISTS `vista_tercero`;

CREATE view Vista_tercero
As
Select A.carnet As 'Carnet', 
A.ape_alumno As 'Apellido', 
A.nom_alumno As 'Nombre',
G.seccion AS 'Seccion'
from alumno As A inner join grado AS G on
A.id_grado = G.codigo
where G.nombre_grado = 'Tercero';
-- -----------------------------

DROP VIEW IF EXISTS `vista_cuarto`;

CREATE view Vista_cuarto
As
Select A.carnet As 'Carnet', 
A.ape_alumno As 'Apellido', 
A.nom_alumno As 'Nombre',
G.seccion AS 'Seccion'
from alumno As A inner join grado AS G on
A.id_grado = G.codigo
where G.nombre_grado = 'Cuarto';
-- -----------------------------

DROP VIEW IF EXISTS `vista_quinto`;

CREATE view Vista_quinto
As
Select A.carnet As 'Carnet', 
A.ape_alumno As 'Apellido', 
A.nom_alumno As 'Nombre',
G.seccion AS 'Seccion'
from alumno As A inner join grado AS G on
A.id_grado = G.codigo
where G.nombre_grado = 'Quinto';
-- ----------------------------

DROP VIEW IF EXISTS `vista_sexto`;

CREATE view Vista_sexto
As
Select A.carnet As 'Carnet', 
A.ape_alumno As 'Apellido', 
A.nom_alumno As 'Nombre',
G.seccion AS 'Seccion'
from alumno As A inner join grado AS G on
A.id_grado = G.codigo
where G.nombre_grado = 'Sexto';
-- ----------------------------



-- ---------------------------- DATOS DE PRUEBA -------------------------

-- --------------------------------------TABLA MESTRO ----------------------------------------

insert INTO maestro values (1, 'Manuel', 'Figueroa', 30, 'Masculino', 44578932, 'Quetzaltenango', 'mfigeroa@gmai.com');

insert INTO maestro values (2, 'Victoria', 'Alvarado', 38, 'Femenino', 44578932, 'Totonicapan', 'victoriaa@gmai.com');

insert INTO maestro values (3, 'Susana', 'Morales', 38, 'Femenino', 31579932, 'Guatemala', 'susmo@gmai.com');

insert INTO maestro values (4, 'Raul', 'Mendez', 41, 'Masculino', 65231789, 'Quetzaltenango', 'raulm@gmai.com');

insert INTO maestro values (5, 'Hector', 'Guzman', 44, 'Masculino', 17542396, 'Guatemala', 'hectgu@gmai.com');

insert INTO maestro values (6, 'Laurz', 'Ortega', 29, 'Femenino', 323048917, 'Totonicapan', 'lortega@gmai.com');

-- --------------------------------------TABLA GRADO ----------------------------------------

INSERT INTO grado VALUES ('1A', 'Primero', 'A', 6);
INSERT INTO grado VALUES ('1B', 'Primero', 'B', 3);
INSERT INTO grado VALUES ('1C', 'Primero', 'C', 2);
INSERT INTO grado VALUES ('2A', 'Segundo', 'A', 2);
INSERT INTO grado VALUES ('2B', 'Segundo', 'B', 6);
INSERT INTO grado VALUES ('2C', 'Segundo', 'C', 3);
INSERT INTO grado VALUES ('3A', 'Tercero', 'A', 3);
INSERT INTO grado VALUES ('3B', 'Tercero', 'B', 2);
INSERT INTO grado VALUES ('3C', 'Tercero', 'C', 6);
INSERT INTO grado VALUES ('4A', 'Cuarto', 'A', 1);
INSERT INTO grado VALUES ('4B', 'Cuarto', 'B', 4);
INSERT INTO grado VALUES ('4C', 'Cuarto', 'C', 5);
INSERT INTO grado VALUES ('5A', 'Quinto', 'A', 5);
INSERT INTO grado VALUES ('5B', 'Quinto', 'B', 1);
INSERT INTO grado VALUES ('5C', 'Quinto', 'C', 4);
INSERT INTO grado VALUES ('6A', 'Sexto', 'A', 4);
INSERT INTO grado VALUES ('6B', 'Sexto', 'B', 5);
INSERT INTO grado VALUES ('6C', 'Sexto', 'C', 1);

-- --------------------------------------TABLA ENCARGADO ----------------------------------------

insert into encargado values (1, 8534076981, 'Raul', 'Mendez', 'Masculino', 'raul@gmail.com', 'Quetzaltenango', 14785346, 12345678);

insert into encargado values (2, 1086475138943, 'Pedro', 'Lopez', 'Masculino', 'peter@gmail.com', 'Quetzaltenango', 30789241, 57892431);
insert into encargado values (3, 1086475938943, 'Daniela', 'Gutierrez', 'Femenino', 'Daniela@gmail.com', 'Guatemala', 87543457, 20178535);

-- --------------------------------------ALUMNO ----------------------------------------

insert into `alumno` values (1,'Mario', 'Reyes', '15-07-2013', 8, 'Masculino', '2B', 1);
insert into `alumno` values (2, 'Hugo', 'Paz', '2013-05-22', 7, 'Masculino', '1C', 3);
insert into `alumno` values (3,'Wendy', 'Jerez', '20-06-2012', 9, 'Femenino', '3A', 2);
insert into `alumno` values (4,'Victoria', 'Herrera', '20-06-2011', 10, 'Femenino', '6A', 2);
