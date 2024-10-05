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

 Date: 05/10/2024 09:49:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for auction_table
-- ----------------------------
DROP TABLE IF EXISTS `auction_table`;
CREATE TABLE `auction_table`  (
  `auctionid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ownerid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `itemid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `enchant` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `costid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `costcount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `objid` int(10) NOT NULL,
  PRIMARY KEY (`auctionid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
