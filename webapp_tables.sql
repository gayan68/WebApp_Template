-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.5-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table webapp_auth.onetime_token
DROP TABLE IF EXISTS `onetime_token`;
CREATE TABLE IF NOT EXISTS `onetime_token` (
  `id` int(12) NOT NULL,
  `token` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table webapp_auth.onetime_token: ~30 rows (approximately)
INSERT INTO `onetime_token` (`id`, `token`) VALUES
	(1, 'f901689c145747f90120fe939f2beaee'),
	(2, '2b9160903e184c8b39decc461ce0fb19'),
	(3, '24abd84cc6e67182e9c8fb01b3c16864'),
	(4, '4816bb382039266cf925adbfbe108363'),
	(5, 'b5735236f942e1663de56cef2275742d'),
	(6, 'b9f6eac252a630176646e0c6ae1e45a9'),
	(7, 'a11fc71b4561cd18441752fc6eccc3dc'),
	(8, 'd46bfb919390aae3240f1dd1c4cbecfa'),
	(9, '943829ae77f200bd984829394ef6f7c8'),
	(10, '7247c4970534ebe5a4a33d336676ca2c'),
	(11, '27e9a32ff004d62d6e2c5ee49d8fb14b'),
	(12, '876ae11c2f6671bda5b7499f5f580653'),
	(13, '920aeca77b1dabde46947024aa831653'),
	(14, '489bcdf0e8fb6487d1d8f6026d9db2dc'),
	(15, '07f70eac2deada12002f5130d8012896'),
	(16, 'e94c171ba95cb1f21783829d4cd78e73'),
	(17, 'f0a694b95dd423df1c6c8756e648e5d1'),
	(18, 'e3ea841b91dbc542a4ec0e21013ffc81'),
	(19, '2e4ddc25ebcf7ff0d47cf42e62411460'),
	(20, '69ca5674d1c1fd1765a8df7db614de9f'),
	(21, 'c8ab0afb923f0508eb07580791231057'),
	(22, 'f9c8ce6a4f4006fe4806be647f141a85'),
	(23, '720366fd002478d37287f14e662f9e3b'),
	(24, 'ca9543c5ea9e0ffb6d67270e843f9c8a'),
	(25, '076161da305c1c10ab5ca28756f735f2'),
	(26, 'e2748384d27f5aab190ded87b02b5ad1'),
	(27, '8d561085b0a57338f681ab8f2d34fce3'),
	(28, '6e6205e52ef87390c095611f7faefd1d'),
	(29, 'daf8069317e3b6a27914ee8c4f6768aa'),
	(30, '65b7a8542002160a5413267202afc9c4');

-- Dumping structure for table webapp_auth.timezone
DROP TABLE IF EXISTS `timezone`;
CREATE TABLE IF NOT EXISTS `timezone` (
  `value` double NOT NULL,
  `name` char(100) NOT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table webapp_auth.timezone: ~31 rows (approximately)
INSERT INTO `timezone` (`value`, `name`) VALUES
	(-12, '(GMT -12:00) Eniwetok, Kwajalein'),
	(-11, '(GMT -11:00) Midway Island, Samoa'),
	(-10, '(GMT -10:00) Hawaii'),
	(-9, '(GMT -9:00) Alaska'),
	(-8, '(GMT -8:00) Pacific Time (US &amp; Canada)'),
	(-7, '(GMT -7:00) Mountain Time (US &amp; Canada)'),
	(-6, '(GMT -6:00) Central Time (US &amp; Canada), Mexico City'),
	(-5, '(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima'),
	(-4, '(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz'),
	(-3.5, '(GMT -3:30) Newfoundland'),
	(-3, '(GMT -3:00) Brazil, Buenos Aires, Georgetown'),
	(-2, '(GMT -2:00) Mid-Atlantic'),
	(-1, '(GMT -1:00 hour) Azores, Cape Verde Islands'),
	(0, '(GMT) Western Europe Time, London, Lisbon, Casablanca'),
	(1, '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris'),
	(2, '(GMT +2:00) Kaliningrad, South Africa'),
	(3, '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg'),
	(3.5, '(GMT +3:30) Tehran'),
	(4, '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi'),
	(4.5, '(GMT +4:30) Kabul'),
	(5, '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent'),
	(5.5, '(GMT +5:30) Bombay, Madras, New Delhi, Colombo'),
	(5.75, '(GMT +5:45) Kathmandu'),
	(6, '(GMT +6:00) Almaty, Dhaka'),
	(7, '(GMT +7:00) Bangkok, Hanoi, Jakarta'),
	(8, '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong'),
	(9, '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk'),
	(9.5, '(GMT +9:30) Adelaide, Darwin'),
	(10, '(GMT +10:00) Eastern Australia, Guam, Vladivostok'),
	(11, '(GMT +11:00) Magadan, Solomon Islands, New Caledonia'),
	(12, '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka');

-- Dumping structure for table webapp_auth.userprofile
DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE IF NOT EXISTS `userprofile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `password` char(32) NOT NULL,
  `email` char(32) NOT NULL,
  `type` int(1) NOT NULL COMMENT '1=admin, 2=user',
  `change_pw` int(1) NOT NULL DEFAULT 0,
  `token` char(32) NOT NULL,
  `token_expiry` timestamp NULL DEFAULT NULL,
  `system` int(3) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=disabled, 1=enabled, 2=pending',
  PRIMARY KEY (`id`),
  KEY `FK_userprofile_system` (`system`),
  CONSTRAINT `FK_userprofile_system` FOREIGN KEY (`system`) REFERENCES `systems` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table webapp_auth.userprofile: ~2 rows (approximately)
INSERT INTO `userprofile` (`id`, `username`, `password`, `email`, `type`, `change_pw`, `token`, `token_expiry`, `system`, `status`) VALUES
	(1, 'user1', '25d55ad283aa400af464c76d713c07ad', 'user1@test.com', 1, 0, '064096267f7159dda43517ccd767a734', '2018-08-06 14:35:48', 1, 1),
	(2, 'user2', '25d55ad283aa400af464c76d713c07ad', 'user2@test.com', 2, 0, '9ed3976feba0516cf9e713cacbbc5e6d', NULL, 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
