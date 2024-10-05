/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MariaDB
 Source Server Version : 100509
 Source Host           : localhost:3306
 Source Schema         : l2jbrazuca

 Target Server Type    : MariaDB
 Target Server Version : 100509
 File Encoding         : 65001

 Date: 05/10/2024 09:46:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for autofarm_nodes
-- ----------------------------
DROP TABLE IF EXISTS `autofarm_nodes`;
CREATE TABLE `autofarm_nodes`  (
  `node_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `area_id` int(11) NOT NULL DEFAULT 0,
  `loc_x` int(11) NOT NULL DEFAULT 0,
  `loc_y` int(11) NOT NULL DEFAULT 0,
  `loc_z` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`area_id`, `node_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
