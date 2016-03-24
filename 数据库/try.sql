/*
Navicat MySQL Data Transfer

Source Server         : month
Source Server Version : 50540
Source Host           : 127.0.0.1:3306
Source Database       : try

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-03-24 11:55:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_content` varchar(200) NOT NULL,
  `m_addtime` datetime NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('2', '测试', '2016-03-24 10:49:53');
INSERT INTO `message` VALUES ('3', '好好做吧', '2016-03-24 10:49:59');
INSERT INTO `message` VALUES ('4', '好好', '2016-03-24 10:50:02');
INSERT INTO `message` VALUES ('5', '好好个', '2016-03-24 10:50:07');
INSERT INTO `message` VALUES ('16', '这', '2016-03-24 10:50:12');
INSERT INTO `message` VALUES ('7', '好及', '2016-03-24 10:50:18');
INSERT INTO `message` VALUES ('8', '好及', '2016-03-24 10:50:23');
INSERT INTO `message` VALUES ('9', '好及', '2016-03-24 10:50:30');
INSERT INTO `message` VALUES ('10', '好及', '2016-03-24 10:50:34');
INSERT INTO `message` VALUES ('11', '好及', '2016-03-24 10:50:37');
INSERT INTO `message` VALUES ('12', '好及', '2016-03-24 10:50:42');
INSERT INTO `message` VALUES ('30', '100', '2016-03-24 11:03:19');
INSERT INTO `message` VALUES ('19', '6666', '2016-03-24 10:50:57');
INSERT INTO `message` VALUES ('34', '900', '2016-03-24 11:08:48');
INSERT INTO `message` VALUES ('32', '300', '2016-03-24 11:05:58');
INSERT INTO `message` VALUES ('31', '200', '2016-03-24 11:04:36');
INSERT INTO `message` VALUES ('33', '400', '2016-03-24 11:07:37');
INSERT INTO `message` VALUES ('26', '20', '2016-03-24 10:58:32');
