/*
Navicat MySQL Data Transfer

Source Server         : beetroot
Source Server Version : 50725
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-04-02 23:50:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('12', 'keyboards');
INSERT INTO `categories` VALUES ('2', 'Laptops');
INSERT INTO `categories` VALUES ('4', 'Monitors');
INSERT INTO `categories` VALUES ('15', 'new category');
INSERT INTO `categories` VALUES ('3', 'Tablets');
INSERT INTO `categories` VALUES ('1', 'TV');

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `amount` smallint(6) NOT NULL DEFAULT '0',
  `category_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', 'Ergo LE40CT5530AK', '6899.00', '8', '1');
INSERT INTO `items` VALUES ('2', 'LG 32LK6190PLA', '8899.00', '11', '1');
INSERT INTO `items` VALUES ('3', 'Samsung UE43N5000AUXUA', '9999.00', '10', '1');
INSERT INTO `items` VALUES ('4', 'HP 250 G6', '11999.00', '4', '2');
INSERT INTO `items` VALUES ('5', 'Dell Inspiron 3573', '7999.00', '12', '2');
INSERT INTO `items` VALUES ('6', 'Asus TUF Gaming', '27000.00', '4', '2');
INSERT INTO `items` VALUES ('7', 'Impression ImPAD M701', '1399.00', '12', '3');
INSERT INTO `items` VALUES ('8', 'Lenovo Tab E7', '2199.00', '21', '3');
INSERT INTO `items` VALUES ('9', 'Mystery MID-703G', '1349.00', '12', '3');
INSERT INTO `items` VALUES ('10', 'Dell SE2416H', '3549.00', '6', '4');

-- ----------------------------
-- Table structure for shopping_cart
-- ----------------------------
DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` smallint(6) NOT NULL DEFAULT '0',
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `item_id` (`item_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shopping_cart
-- ----------------------------
INSERT INTO `shopping_cart` VALUES ('7', '1', '1', '6', '2019-03-31 09:20:06');
INSERT INTO `shopping_cart` VALUES ('10', '2', '1', '15', '2019-03-31 09:39:18');
INSERT INTO `shopping_cart` VALUES ('11', '3', '1', '2', '2019-04-01 09:04:07');
INSERT INTO `shopping_cart` VALUES ('14', '4', '1', '3', '2019-04-01 13:42:24');
INSERT INTO `shopping_cart` VALUES ('15', '4', '2', '3', '2019-04-01 13:42:53');
INSERT INTO `shopping_cart` VALUES ('21', '1', '21', '3', '2019-04-02 15:09:07');
INSERT INTO `shopping_cart` VALUES ('22', '2', '21', '2', '2019-04-02 15:09:39');
INSERT INTO `shopping_cart` VALUES ('24', '3', '22', '2', '2019-04-02 20:38:36');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Denis', 'denis@test.com', 'dfgh');
INSERT INTO `users` VALUES ('2', 'Vlad', 'Vlad@test.com', 'vbnm');
INSERT INTO `users` VALUES ('3', 'Alexandr', 'Alex@test.com', 'asdf');
INSERT INTO `users` VALUES ('4', 'Nikola', 'Nikola@test.com', 'nmzx');
INSERT INTO `users` VALUES ('5', 'Vasya', 'denis@test.com', 'dfgh');
INSERT INTO `users` VALUES ('12', 'Katya', 'katya@test.com', 'ca36d29d48da21dde409f51679c48befa50eeb1c');
INSERT INTO `users` VALUES ('13', 'Andrey', 'andrey@test.com', '716f8f4a1024c892fb62c9dec554aedb571d626c');
INSERT INTO `users` VALUES ('14', 'Sergey', 'sergey@test.com', '39a5686146ef4b2b90512f727d9cdf0674f0e96f');
INSERT INTO `users` VALUES ('19', 'Tanya', 'Tanya@test.com', '5bf278bc6702bc0a2a1329c74db84b380cf8402f');
INSERT INTO `users` VALUES ('21', 'Rodion', 'rodion@test.com', 'd92764a0c2eeed0838a57fba33c8a0ce2b30fd7b');
INSERT INTO `users` VALUES ('22', 'Karina', 'karina@test.com', 'ca36d29d48da21dde409f51679c48befa50eeb1c');
SET FOREIGN_KEY_CHECKS=1;
