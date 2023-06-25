SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

DROP TABLE IF EXISTS `students_data`;

CREATE TABLE IF NOT EXISTS `students_data` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `Name` varchar(50) NOT NULL,
    `Email` varchar(20) NOT NULL,
    `Phone_num` varchar(15) NOT NULL,
    `Dip_year` varchar(20) NOT NULL,
    `Eng_col` varchar(200) NOT NULL,
    `Eng_loc` varchar(200) NOT NULL,
    `Eng_branch` varchar(200) NOT NULL,
    `Eng_year` varchar(200) NOT NULL,
    `pcom_name` varchar(200) NOT NULL,
    `pcom_loc` varchar(200) NOT NULL,
    `pcom_salary` varchar(200) NOT NULL,
    `pcom_desig` varchar(200) NOT NULL,
    `pcom_tech` varchar(200) NOT NULL,
    `com_name` varchar(70) NOT NULL,
    `com_loc` varchar(50) NOT NULL,
    `com_salary` varchar(20) NOT NULL,
    `com_desig` varchar(20) NOT NULL,
    `com_tech` varchar(100) NOT NULL,
    `linkedin` varchar(20) NOT NULL,
    `github` varchar(80) NOT NULL,
    `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = MyISAM AUTO_INCREMENT = 0 DEFAULT CHARSET = latin1;

COMMIT;