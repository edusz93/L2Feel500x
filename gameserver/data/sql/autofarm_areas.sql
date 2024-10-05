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

 Date: 05/10/2024 09:45:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for autofarm_areas
-- ----------------------------
DROP TABLE IF EXISTS `autofarm_areas`;
CREATE TABLE `autofarm_areas`  (
  `player_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `area_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(44) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`player_id`, `area_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
