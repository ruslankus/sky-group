/*
Navicat MySQL Data Transfer

Source Server         : mysql connection
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : sky_db

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-05-03 00:55:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clients`
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL DEFAULT '0',
  `login` longtext,
  `password` longtext,
  `profile_array` longtext,
  `status_id` int(11) DEFAULT NULL,
  `created_time` int(11) DEFAULT NULL,
  `current_packet_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('5', 'test@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'a:7:{s:6:\"step_1\";a:6:{s:16:\"promotion_number\";s:12:\"244324324324\";s:9:\"user_name\";s:5:\" Roma\";s:9:\"last_name\";s:6:\"Pupkin\";s:5:\"email\";s:13:\"test@mail.com\";s:8:\"password\";s:4:\"test\";s:9:\"next_pass\";s:4:\"test\";}s:6:\"step_2\";a:13:{s:9:\"id_number\";s:0:\"\";s:5:\"fname\";s:0:\"\";s:5:\"lname\";s:0:\"\";s:6:\"street\";s:0:\"\";s:5:\"house\";s:0:\"\";s:4:\"flat\";s:0:\"\";s:4:\"city\";s:0:\"\";s:7:\"country\";s:0:\"\";s:9:\"post_code\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:6:\"mphone\";s:0:\"\";s:10:\"profession\";s:0:\"\";s:10:\"employment\";s:0:\"\";}s:6:\"step_3\";a:10:{s:10:\"partner_Id\";s:0:\"\";s:7:\"p_fname\";s:0:\"\";s:7:\"p_lname\";s:0:\"\";s:4:\"bday\";s:10:\"Число\";s:6:\"bmonth\";s:10:\"Месяц\";s:5:\"byear\";s:6:\"Год\";s:10:\"profession\";s:0:\"\";s:10:\"employment\";s:0:\"\";s:5:\"login\";s:0:\"\";s:8:\"password\";s:0:\"\";}s:6:\"step_4\";a:1:{s:8:\"children\";a:3:{i:0;a:5:{s:4:\"name\";s:0:\"\";s:7:\"surname\";s:0:\"\";s:3:\"day\";s:10:\"Число\";s:5:\"month\";s:10:\"Месяц\";s:4:\"year\";s:6:\"Год\";}i:1;a:5:{s:4:\"name\";s:0:\"\";s:7:\"surname\";s:0:\"\";s:3:\"day\";s:10:\"Число\";s:5:\"month\";s:10:\"Месяц\";s:4:\"year\";s:6:\"Год\";}i:2;a:5:{s:4:\"name\";s:0:\"\";s:7:\"surname\";s:0:\"\";s:3:\"day\";s:10:\"Число\";s:5:\"month\";s:10:\"Месяц\";s:4:\"year\";s:6:\"Год\";}}}s:6:\"step_5\";a:9:{s:5:\"ssudy\";s:2:\"no\";s:4:\"strh\";s:4:\"bank\";s:7:\"posobie\";s:2:\"no\";s:4:\"kasa\";s:2:\"no\";s:9:\"kasa-type\";s:6:\"leumit\";s:15:\"kasa-additional\";s:2:\"no\";s:5:\"dohod\";s:1:\"1\";s:10:\"automobile\";s:2:\"no\";s:18:\"chasnaya-strahovka\";s:2:\"no\";}s:6:\"step_6\";a:1:{s:6:\"packet\";s:1:\"3\";}s:6:\"step_7\";a:1:{s:12:\"other-person\";s:2:\"no\";}}', '1', null, '3');

-- ----------------------------
-- Table structure for `discounts`
-- ----------------------------
DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts` (
  `id` int(11) NOT NULL DEFAULT '0',
  `code` longtext,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of discounts
-- ----------------------------
INSERT INTO `discounts` VALUES ('1', '', '0');
INSERT INTO `discounts` VALUES ('2', 'aa123', '10');
INSERT INTO `discounts` VALUES ('3', 'Bb000', '30');
INSERT INTO `discounts` VALUES ('4', 'CC000', '60');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `label` longtext,
  `value` longtext,
  `route` longtext,
  `value_en` longtext,
  `value_ru` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'index', 'Главная', null, 'Home', 'Главная');
INSERT INTO `menu` VALUES ('2', 'about', 'О нас', null, 'About us', 'О нас');
INSERT INTO `menu` VALUES ('3', 'products', 'Продукты', null, 'Products', 'Продукты');
INSERT INTO `menu` VALUES ('4', 'news', 'Новости', null, 'News', 'Новости');
INSERT INTO `menu` VALUES ('5', 'contacts', 'Контакты', null, 'Contacts', 'Контакты');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL DEFAULT '0',
  `client_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_time` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `payment_status` longtext,
  `discount_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` longtext,
  `class` longtext,
  `description_text` longtext,
  `price` int(11) DEFAULT NULL,
  `old_price` int(11) DEFAULT NULL,
  `description_text_en` longtext,
  `description_text_ru` longtext,
  `name_en` longtext,
  `name_ru` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Серебряный клиент', 'silver', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n</ul>', '3125', '6035', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n</ul>', '<ul>\r\n<li>Возврат налогов</li>\r\n<li>Страховые заявления</li>\r\n<li>Оптимизация коммуникационных затрат </li>\r\n</ul>', 'Silver Membership', 'Серебряный клиент');
INSERT INTO `products` VALUES ('2', 'Золотой клиент', 'gold', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>National Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n<li>Refinancing Mortgages</li>\r\n<li>Filling documents for government offices</li>\r\n</ul>\r\n', '6250', '9856', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>National Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n<li>Refinancing Mortgages</li>\r\n<li>Filling documents for government offices</li>\r\n</ul>\r\n', '<ul>\r\n<li>Возврат налогов</li>\r\n<li>Страховые заявления</li>\r\n<li>Заявки на национальную страховку</li>\r\n<li>Оптимизация коммуникационных затрат</li>\r\n<li>Повторное финансирование ипотеки</li>\r\n<li>Заполнение документов для государственных учреждений</li>\r\n</ul>\r\n', 'Gold Membership', 'Золотой клиент');
INSERT INTO `products` VALUES ('3', 'Платиновый клиент ', 'platinum', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>National Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n<li>Refinancing Mortgages</li>\r\n<li>Filling documents for government offices</li>\r\n<li>Medical examination By orthopaedist Not for court</li>\r\n<li>Optimisation of services from HMO</li>\r\n<li>Call back services</li>\r\n</ul>', '9375', '15000', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>National Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n<li>Refinancing Mortgages</li>\r\n<li>Filling documents for government offices</li>\r\n<li>Medical examination By orthopaedist Not for court</li>\r\n<li>Optimisation of services from HMO</li>\r\n<li>Call back services</li>\r\n</ul>', '<ul>\r\n<li>Возврат налогов</li>\r\n<li>Страховые заявления</li>\r\n<li>Заявки на национальную страховку</li>\r\n<li>Оптимизация коммуникационных затрат</li>\r\n<li>Повторное финансирование ипотеки</li>\r\n<li>Заполнение документов для государственных учреждений</li>\r\n<li>Медицинский осмотр ортопеда (не для суда)</li>\r\n<li>Оптимизация услуг для HMO</li>\r\n<li>Услуга обратной связи </li>\r\n</ul>', 'Platinum Membership[MM1] ', 'Платиновый клиент ');
INSERT INTO `products` VALUES ('4', 'Бизнес клиент ', 'business', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>National Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n<li>Refinancing Mortgages</li>\r\n<li>Filling documents for government offices</li>\r\n<li>Medical examination By orthopaedist Not for court</li>\r\n<li>Optimisation of services from HMO</li>\r\n<li>Call back services</li>\r\n<li>Secretary services - calendar</li>\r\n<li>Fax to mail service</li>\r\n<li>Basic internet site</li>\r\n</ul>', '31250', '35099', '<ul>\r\n<li>Tax refund</li>\r\n<li>Insurance claims</li>\r\n<li>National Insurance claims</li>\r\n<li>Communication costs optimisation</li>\r\n<li>Refinancing Mortgages</li>\r\n<li>Filling documents for government offices</li>\r\n<li>Medical examination By orthopaedist Not for court</li>\r\n<li>Optimisation of services from HMO</li>\r\n<li>Call back services</li>\r\n<li>Secretary services - calendar</li>\r\n<li>Secretary services - calendar</li>\r\n<li>Basic internet site</li>\r\n</ul>', '<ul>\r\n<li>Возврат налогов</li>\r\n<li>Страховые заявления</li>\r\n<li>Заявки на национальную страховку</li>\r\n<li>Оптимизация коммуникационных затрат</li>\r\n<li>Повторное финансирование ипотеки</li>\r\n<li>Заполнение документов для государственных учреждений</li>\r\n<li>Медицинский осмотр ортопеда (не для суда)</li>\r\n<li>Оптимизация услуг для HMO</li>\r\n<li>Услуга обратной связи</li>\r\n<li>Услуги секретаря – календарные</li>\r\n<li>Услуги факса на почту</li>\r\n<li>Базовый интернет сайт</li>\r\n</ul>', 'Business Membership ', 'Бизнес клиент ');
INSERT INTO `products` VALUES ('5', 'Все услуги клиента со статусом платиновый + возврат наличных денег  ', 'loylity', '', '15000', '20000', null, null, 'Loyalty Membership = platinum + cash back', 'Все услуги клиента со статусом платиновый + возврат наличных денег');
