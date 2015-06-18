/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : gobernanza

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-06-18 14:12:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `gob_contenido`
-- ----------------------------
DROP TABLE IF EXISTS `gob_contenido`;
CREATE TABLE `gob_contenido` (
  `co_id` int(11) DEFAULT NULL,
  `co_titulo` varchar(50) DEFAULT NULL,
  `co_descripcion` varchar(800) DEFAULT NULL,
  `co_acta` varchar(100) DEFAULT NULL,
  `co_fecha` datetime DEFAULT NULL,
  `co_tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gob_contenido
-- ----------------------------
