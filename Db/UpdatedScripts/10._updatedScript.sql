-------------------------------------------------------------------------------
--Create User Table
-------------------------------------------------------------------------------
CREATE TABLE `thesidevelopment`.`user`(
    `Userid` INT NOT NULL AUTO_INCREMENT,
    `FirstName` VARCHAR(30) NOT NULL,
    `LastName` VARCHAR(30) NOT NULL,
    `Modified` TIMESTAMP NOT NULL,
    `Created` TIMESTAMP NOT NULL,
    PRIMARY KEY(`Userid`)
) ENGINE = InnoDB;

-------------------------------------------------------------------------------
--Insert Dummy data User Table
-------------------------------------------------------------------------------
INSERT INTO `user`(`FirstName`, `LastName`) VALUES ('Kavindu','Manaram')
INSERT INTO `user`(`FirstName`, `LastName`) VALUES ('Ishanka','Madhuranga')