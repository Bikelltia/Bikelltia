SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `Bikelltia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Bikelltia` ;

-- -----------------------------------------------------
-- Table `Bikelltia`.`perfil`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`perfil` (
  `idPerfil` INT NOT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoPerfil` BIT NULL DEFAULT 1 ,
  PRIMARY KEY (`idPerfil`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`usuario` (
  `idUsuario` INT NOT NULL ,
  `nombreUsuario` VARCHAR(100) NULL ,
  `contrasena` VARCHAR(100) NULL ,
  `estadoUsuario` BIT NULL DEFAULT 1 ,
  `idPerfil` INT NOT NULL ,
  PRIMARY KEY (`idUsuario`) ,
  INDEX `fk_usuario_perfil1_idx` (`idPerfil` ASC) ,
  CONSTRAINT `fk_usuario_perfil1`
    FOREIGN KEY (`idPerfil` )
    REFERENCES `Bikelltia`.`perfil` (`idPerfil` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`permisos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`permisos` (
  `idPermiso` INT NOT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoPermiso` BIT NULL DEFAULT 1 ,
  PRIMARY KEY (`idPermiso`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`perfilPermiso`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`perfilPermiso` (
  `idPermiso` INT NOT NULL ,
  `idPerfil` INT NOT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoPerfilPermiso` BIT NULL DEFAULT 1 ,
  PRIMARY KEY (`idPermiso`, `idPerfil`) ,
  INDEX `fk_perfilPermiso_permisos1_idx` (`idPermiso` ASC) ,
  INDEX `fk_perfilPermiso_perfil1_idx` (`idPerfil` ASC) ,
  CONSTRAINT `fk_perfilPermiso_permisos1`
    FOREIGN KEY (`idPermiso` )
    REFERENCES `Bikelltia`.`permisos` (`idPermiso` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_perfilPermiso_perfil1`
    FOREIGN KEY (`idPerfil` )
    REFERENCES `Bikelltia`.`perfil` (`idPerfil` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`persona`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`persona` (
  `idPersona` INT NOT NULL ,
  `nombre` VARCHAR(45) NULL ,
  `apellidoPaterno` VARCHAR(45) NULL ,
  `apellidoMaterno` VARCHAR(45) NULL ,
  `celular` INT NULL ,
  `telefono` INT NULL ,
  `direccion` VARCHAR(200) NULL ,
  `idUsuario` INT NOT NULL ,
  PRIMARY KEY (`idPersona`) ,
  INDEX `fk_persona_usuario_idx` (`idUsuario` ASC) ,
  CONSTRAINT `fk_persona_usuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `Bikelltia`.`usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`orden`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`orden` (
  `idOrden` INT NOT NULL ,
  `fecha` DATETIME NULL ,
  `monto` INT NULL ,
  `tipoPago` CHAR NULL ,
  `idPersona` INT NOT NULL ,
  PRIMARY KEY (`idOrden`) ,
  INDEX `fk_orden_persona1_idx` (`idPersona` ASC) ,
  CONSTRAINT `fk_orden_persona1`
    FOREIGN KEY (`idPersona` )
    REFERENCES `Bikelltia`.`persona` (`idPersona` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`tipoProducto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`tipoProducto` (
  `idTipoProducto` INT NOT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoTipoProducto` BIT NULL DEFAULT 1 ,
  PRIMARY KEY (`idTipoProducto`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`producto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`producto` (
  `idProducto` INT NOT NULL ,
  `nombre` VARCHAR(100) NULL ,
  `precio` INT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoProducto` BIT NULL DEFAULT 1 ,
  `idTipoProducto` INT NOT NULL ,
  PRIMARY KEY (`idProducto`) ,
  INDEX `fk_producto_tipoProducto1_idx` (`idTipoProducto` ASC) ,
  CONSTRAINT `fk_producto_tipoProducto1`
    FOREIGN KEY (`idTipoProducto` )
    REFERENCES `Bikelltia`.`tipoProducto` (`idTipoProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`detalleOrden`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`detalleOrden` (
  `idOrden` INT NOT NULL ,
  `idProducto` INT NOT NULL ,
  `cantidad` INT NULL ,
  PRIMARY KEY (`idOrden`, `idProducto`) ,
  INDEX `fk_detalleOrden_orden1_idx` (`idOrden` ASC) ,
  INDEX `fk_detalleOrden_producto1_idx` (`idProducto` ASC) ,
  CONSTRAINT `fk_detalleOrden_orden1`
    FOREIGN KEY (`idOrden` )
    REFERENCES `Bikelltia`.`orden` (`idOrden` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalleOrden_producto1`
    FOREIGN KEY (`idProducto` )
    REFERENCES `Bikelltia`.`producto` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`ocasion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`ocasion` (
  `idOcasion` INT NOT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoOcasion` BIT NULL DEFAULT 1 ,
  `fechaInicio` DATE NULL ,
  `fechaFin` DATE NULL ,
  `nombreOcasion` VARCHAR(45) NULL ,
  PRIMARY KEY (`idOcasion`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`promocion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`promocion` (
  `idPromocion` INT NOT NULL ,
  `precio` INT NULL ,
  `nombrePromocion` VARCHAR(100) NULL ,
  `estadoPromocion` BIT NULL DEFAULT 1 ,
  `idOcasion` INT NOT NULL ,
  PRIMARY KEY (`idPromocion`) ,
  INDEX `fk_promocion_ocasion1_idx` (`idOcasion` ASC) ,
  CONSTRAINT `fk_promocion_ocasion1`
    FOREIGN KEY (`idOcasion` )
    REFERENCES `Bikelltia`.`ocasion` (`idOcasion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`productoPromocion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`productoPromocion` (
  `idProducto` INT NOT NULL ,
  `idPromocion` INT NOT NULL ,
  `descripcion` VARCHAR(100) NULL ,
  `estadoProductoPromocion` BIT NULL DEFAULT 1 ,
  PRIMARY KEY (`idProducto`, `idPromocion`) ,
  INDEX `fk_productoPromocion_promocion1_idx` (`idPromocion` ASC) ,
  CONSTRAINT `fk_productoPromocion_producto1`
    FOREIGN KEY (`idProducto` )
    REFERENCES `Bikelltia`.`producto` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productoPromocion_promocion1`
    FOREIGN KEY (`idPromocion` )
    REFERENCES `Bikelltia`.`promocion` (`idPromocion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bikelltia`.`multimedia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Bikelltia`.`multimedia` (
  `idmultimedia` INT NOT NULL ,
  `ruta` VARCHAR(300) NULL ,
  `idProducto` INT NOT NULL ,
  PRIMARY KEY (`idmultimedia`) ,
  INDEX `fk_multimedia_producto1_idx` (`idProducto` ASC) ,
  CONSTRAINT `fk_multimedia_producto1`
    FOREIGN KEY (`idProducto` )
    REFERENCES `Bikelltia`.`producto` (`idProducto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `Bikelltia` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


insert into permisos values(1,'ver Gestionar Producto',1);
insert into permisos values(2,'ver Gestionar Promocion',1);
insert into permisos values(3,'ver Gestionar Blog',1);
insert into permisos values(4,'ver Gestionar Reportes',1);

insert into perfil values(1,'Administrador',1);
insert into perfil values(2,'Contador',1);
insert into perfil values(3,'Cliente',1);

insert into perfilPermiso values(1, 1,'Gestion de Productos',1);
insert into perfilPermiso values(2, 1,'Gestion de Promociones',1);
insert into perfilPermiso values(3, 1,'Gestion del Blog',1);
insert into perfilPermiso values(4, 2,'Generar Reportes ',1);

insert into usuario values(1, 'dievacri','12345',1,1);
insert into usuario values(2, 'massimo','massimo',1,2);
insert into usuario values(3, 'ricardo','ricardo',1,3);

insert into persona values(1, 'Diego','Vasquez','Crisostomo',956323829,2572999,'Av.Ariadna 180',1);
insert into persona values(2, 'Massimo','Ludeña','Lezama',123456789,1234567,'Av.Chorrillos',2);
insert into persona values(3, 'Ricardo','Vasquez','Perez',123456789,1234567,'Av.Molina',3);