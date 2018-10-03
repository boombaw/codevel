/*
Navicat MySQL Data Transfer

Source Server         : Localhost 3306
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : ci_eloquent

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2018-10-03 14:58:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Fery', 'Dedi', 'fery.dedi@gmail.com');
INSERT INTO `users` VALUES ('2', 'Dedi', 'Supardi', 'dedi.supardi@gmail.com');
SET FOREIGN_KEY_CHECKS=1;
