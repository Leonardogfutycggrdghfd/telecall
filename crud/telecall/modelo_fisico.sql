-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
-- -----------------------------------------------------
-- Schema pdo
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `pdo` ;

-- -----------------------------------------------------
-- Schema pdo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pdo` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
-- -----------------------------------------------------
-- Schema phpmyadmin
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `phpmyadmin` ;

-- -----------------------------------------------------
-- Schema phpmyadmin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
SHOW WARNINGS;
-- -----------------------------------------------------
-- Schema test
-- -----------------------------------------------------
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuario` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` INT NOT NULL,
  `nome_usuario` VARCHAR(50) NULL,
  `cpf_usuaro` DECIMAL(11) NULL,
  `telefone_usuario` DECIMAL(11) NULL,
  `pessoa_usuario` VARCHAR(45) NULL,
  `Emal_usuario` VARCHAR(45) NULL,
  `senha_usuario` VARCHAR(45) NULL,
  `usuariocol` VARCHAR(45) NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ferfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ferfil` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ferfil` (
  `id_fucionario` INT NOT NULL,
  `nome_fucionario` VARCHAR(50) NULL,
  `cpf_fucionario` DECIMAL(11) NULL,
  `telefone_fucionario` DECIMAL(11) NULL,
  `genero_fucionario` VARCHAR(45) NULL,
  `Email_fucionario` VARCHAR(45) NULL,
  `senha_fucionario` VARCHAR(45) NULL,
  `ferfilcol` VARCHAR(45) NULL,
  PRIMARY KEY (`id_fucionario`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `login`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `login` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `login` (
  `master` INT NOT NULL,
  `usuario_id_usuario` INT NOT NULL,
  `ferfil_id_fucionario` INT NOT NULL,
  PRIMARY KEY (`master`, `usuario_id_usuario`, `ferfil_id_fucionario`))
ENGINE = InnoDB;

SHOW WARNINGS;
USE `pdo` ;

-- -----------------------------------------------------
-- Table `clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` INT(11) NOT NULL,
  `telefone` INT(11) NOT NULL,
  `endereco` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SHOW WARNINGS;
USE `phpmyadmin` ;

-- -----------------------------------------------------
-- Table `pma__bookmark`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__bookmark` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__bookmark` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dbase` VARCHAR(255) NOT NULL DEFAULT '',
  `user` VARCHAR(255) NOT NULL DEFAULT '',
  `label` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `query` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Bookmarks';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__central_columns`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__central_columns` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__central_columns` (
  `db_name` VARCHAR(64) NOT NULL,
  `col_name` VARCHAR(64) NOT NULL,
  `col_type` VARCHAR(64) NOT NULL,
  `col_length` TEXT NULL DEFAULT NULL,
  `col_collation` VARCHAR(64) NOT NULL,
  `col_isNull` TINYINT(1) NOT NULL,
  `col_extra` VARCHAR(255) NULL DEFAULT '',
  `col_default` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`db_name`, `col_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Central list of columns';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__column_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__column_info` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__column_info` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `db_name` VARCHAR(64) NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) NOT NULL DEFAULT '',
  `column_name` VARCHAR(64) NOT NULL DEFAULT '',
  `comment` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `mimetype` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `transformation` VARCHAR(255) NOT NULL DEFAULT '',
  `transformation_options` VARCHAR(255) NOT NULL DEFAULT '',
  `input_transformation` VARCHAR(255) NOT NULL DEFAULT '',
  `input_transformation_options` VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Column information for phpMyAdmin';

SHOW WARNINGS;
CREATE UNIQUE INDEX `db_name` ON `pma__column_info` (`db_name` ASC, `table_name` ASC, `column_name` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__designer_settings`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__designer_settings` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__designer_settings` (
  `username` VARCHAR(64) NOT NULL,
  `settings_data` TEXT NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Settings related to Designer';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__export_templates`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__export_templates` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__export_templates` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) NOT NULL,
  `export_type` VARCHAR(10) NOT NULL,
  `template_name` VARCHAR(64) NOT NULL,
  `template_data` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Saved export templates';

SHOW WARNINGS;
CREATE UNIQUE INDEX `u_user_type_template` ON `pma__export_templates` (`username` ASC, `export_type` ASC, `template_name` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__favorite`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__favorite` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__favorite` (
  `username` VARCHAR(64) NOT NULL,
  `tables` TEXT NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Favorite tables';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__history`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__history` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__history` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) NOT NULL DEFAULT '',
  `db` VARCHAR(64) NOT NULL DEFAULT '',
  `table` VARCHAR(64) NOT NULL DEFAULT '',
  `timevalue` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `sqlquery` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'SQL history for phpMyAdmin';

SHOW WARNINGS;
CREATE INDEX `username` ON `pma__history` (`username` ASC, `db` ASC, `table` ASC, `timevalue` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__navigationhiding`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__navigationhiding` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__navigationhiding` (
  `username` VARCHAR(64) NOT NULL,
  `item_name` VARCHAR(64) NOT NULL,
  `item_type` VARCHAR(64) NOT NULL,
  `db_name` VARCHAR(64) NOT NULL,
  `table_name` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`username`, `item_name`, `item_type`, `db_name`, `table_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Hidden items of navigation tree';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__pdf_pages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__pdf_pages` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` VARCHAR(64) NOT NULL DEFAULT '',
  `page_nr` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_descr` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'PDF relation pages for phpMyAdmin';

SHOW WARNINGS;
CREATE INDEX `db_name` ON `pma__pdf_pages` (`db_name` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__recent`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__recent` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` VARCHAR(64) NOT NULL,
  `tables` TEXT NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Recently accessed tables';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__relation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__relation` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` VARCHAR(64) NOT NULL DEFAULT '',
  `master_table` VARCHAR(64) NOT NULL DEFAULT '',
  `master_field` VARCHAR(64) NOT NULL DEFAULT '',
  `foreign_db` VARCHAR(64) NOT NULL DEFAULT '',
  `foreign_table` VARCHAR(64) NOT NULL DEFAULT '',
  `foreign_field` VARCHAR(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`, `master_table`, `master_field`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Relation table';

SHOW WARNINGS;
CREATE INDEX `foreign_field` ON `pma__relation` (`foreign_db` ASC, `foreign_table` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__savedsearches`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__savedsearches` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__savedsearches` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) NOT NULL DEFAULT '',
  `db_name` VARCHAR(64) NOT NULL DEFAULT '',
  `search_name` VARCHAR(64) NOT NULL DEFAULT '',
  `search_data` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Saved searches';

SHOW WARNINGS;
CREATE UNIQUE INDEX `u_savedsearches_username_dbname` ON `pma__savedsearches` (`username` ASC, `db_name` ASC, `search_name` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__table_coords`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__table_coords` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` VARCHAR(64) NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) NOT NULL DEFAULT '',
  `pdf_page_number` INT(11) NOT NULL DEFAULT 0,
  `x` FLOAT UNSIGNED NOT NULL DEFAULT 0,
  `y` FLOAT UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`db_name`, `table_name`, `pdf_page_number`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Table coordinates for phpMyAdmin PDF output';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__table_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__table_info` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` VARCHAR(64) NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) NOT NULL DEFAULT '',
  `display_field` VARCHAR(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`, `table_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Table information for phpMyAdmin';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__table_uiprefs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__table_uiprefs` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` VARCHAR(64) NOT NULL,
  `db_name` VARCHAR(64) NOT NULL,
  `table_name` VARCHAR(64) NOT NULL,
  `prefs` TEXT NOT NULL,
  `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`username`, `db_name`, `table_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Tables\' UI preferences';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__tracking`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__tracking` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` VARCHAR(64) NOT NULL,
  `table_name` VARCHAR(64) NOT NULL,
  `version` INT(10) UNSIGNED NOT NULL,
  `date_created` DATETIME NOT NULL,
  `date_updated` DATETIME NOT NULL,
  `schema_snapshot` TEXT NOT NULL,
  `schema_sql` TEXT NULL DEFAULT NULL,
  `data_sql` LONGTEXT NULL DEFAULT NULL,
  `tracking` SET('UPDATE', 'REPLACE', 'INSERT', 'DELETE', 'TRUNCATE', 'CREATE DATABASE', 'ALTER DATABASE', 'DROP DATABASE', 'CREATE TABLE', 'ALTER TABLE', 'RENAME TABLE', 'DROP TABLE', 'CREATE INDEX', 'DROP INDEX', 'CREATE VIEW', 'ALTER VIEW', 'DROP VIEW') NULL DEFAULT NULL,
  `tracking_active` INT(1) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`db_name`, `table_name`, `version`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Database changes tracking for phpMyAdmin';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__userconfig`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__userconfig` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` VARCHAR(64) NOT NULL,
  `timevalue` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `config_data` TEXT NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'User preferences storage for phpMyAdmin';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__usergroups`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__usergroups` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__usergroups` (
  `usergroup` VARCHAR(64) NOT NULL,
  `tab` VARCHAR(64) NOT NULL,
  `allowed` ENUM('Y', 'N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`, `tab`, `allowed`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'User groups with configured menu items';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pma__users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pma__users` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pma__users` (
  `username` VARCHAR(64) NOT NULL,
  `usergroup` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`username`, `usergroup`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Users and their assignments to user groups';

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
