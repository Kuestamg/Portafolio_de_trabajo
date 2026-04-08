CREATE TABLE `midb`.`materia` (
  `id_materia` INT NOT NULL AUTO_INCREMENT,
  `nombre_mat` VARCHAR(45) NULL,
  PRIMARY KEY (`id_materia`));

CREATE TABLE `midb`.`evaluacion` (
  `id_evaluacion` INT NOT NULL AUTO_INCREMENT,
  `tipo_de_evaluacion` VARCHAR(45) NULL,
  `nombre_evaluacion` VARCHAR(45) NULL,
  PRIMARY KEY (`id_evaluacion`));

CREATE TABLE `midb`.`alumno` (
  `id_alumno` INT NOT NULL AUTO_INCREMENT,
  `numero_cuenta` INT NULL,
  `nombre_alumno` VARCHAR(45) NULL,
  `ap_pater_alumno` VARCHAR(45) NULL,
  `ap_mater_alumno` VARCHAR(45) NULL,
  `correo_alumno` VARCHAR(45) NULL,
  `mat_aprobada` VARCHAR(45) NULL,
  `genero_alumno` VARCHAR(45) NULL,
  PRIMARY KEY (`id_alumno`));

CREATE TABLE `midb`.`profesor` (
  `id_profesor` INT NOT NULL AUTO_INCREMENT,
  `nombre_profe` VARCHAR(45) NULL,
  `profesorcol` VARCHAR(45) NULL,
  `ap_pater_profe` VARCHAR(45) NULL,
  `ap_mater_profe` VARCHAR(45) NULL,
  `correo_profe` VARCHAR(45) NULL,
  PRIMARY KEY (`id_profesor`));

CREATE TABLE `midb`.`grupo` (
  `id_grupo` INT NOT NULL AUTO_INCREMENT,
  `id_profesor` INT NOT NULL,
  `id_materia` INT NOT NULL ,
  `ciclo_escolar` VARCHAR(45) NULL,
  `grado` VARCHAR(45) NULL,
  `nom_grupo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_grupo`),
  FOREIGN KEY (`id_profesor`)REFERENCES profesor(`id_profesor`),
  FOREIGN KEY (`id_materia`)REFERENCES materia(`id_materia`));

CREATE TABLE `midb`.`ins_alumno_grupo` (
  `id_ins_alumno_grupo` INT NOT NULL AUTO_INCREMENT,
  `id_grupo` INT NOT NULL,
  `id_alumno` INT NOT NULL ,
  PRIMARY KEY (`id_ins_alumno_grupo`),
  FOREIGN KEY (`id_grupo`)REFERENCES grupo(`id_grupo`),
  FOREIGN KEY (`id_alumno`)REFERENCES alumno(`id_alumno`));

CREATE TABLE `midb`.`calificacion` (
  `id_calificacion` INT NOT NULL AUTO_INCREMENT,
  `id_ins_alumno_grupo` INT NOT NULL,
  `id_evaluacion` INT NOT NULL ,
  `calificacion` INT NULL,
  `fecha_calificacion` DATE NULL,
  PRIMARY KEY (`id_calificacion`),
  FOREIGN KEY (`id_ins_alumno_grupo`)REFERENCES ins_alumno_grupo(`id_ins_alumno_grupo`),
  FOREIGN KEY (`id_evaluacion`)REFERENCES evaluacion(`id_evaluacion`));
  
