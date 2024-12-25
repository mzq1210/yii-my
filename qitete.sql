/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : qitete

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2024-12-25 13:17:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('超管权限', '1', '1735041688');
INSERT INTO `auth_assignment` VALUES ('超级管理员', '1', '1735041681');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, null, null);
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1735041058', '1735041058');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1735041063', '1735041063');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1735041069', '1735041069');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1735041076', '1735041076');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1735041079', '1735041079');
INSERT INTO `auth_item` VALUES ('/blog/*', '2', null, null, null, '1735094231', '1735094231');
INSERT INTO `auth_item` VALUES ('/blog/create', '2', null, null, null, '1735094247', '1735094247');
INSERT INTO `auth_item` VALUES ('/blog/delete', '2', null, null, null, '1735094247', '1735094247');
INSERT INTO `auth_item` VALUES ('/blog/index', '2', null, null, null, '1735094222', '1735094222');
INSERT INTO `auth_item` VALUES ('/blog/update', '2', null, null, null, '1735094247', '1735094247');
INSERT INTO `auth_item` VALUES ('/blog/view', '2', null, null, null, '1735094247', '1735094247');
INSERT INTO `auth_item` VALUES ('/category/*', '2', null, null, null, '1735094236', '1735094236');
INSERT INTO `auth_item` VALUES ('/category/create', '2', null, null, null, '1735094255', '1735094255');
INSERT INTO `auth_item` VALUES ('/category/delete', '2', null, null, null, '1735094255', '1735094255');
INSERT INTO `auth_item` VALUES ('/category/index', '2', null, null, null, '1735094255', '1735094255');
INSERT INTO `auth_item` VALUES ('/category/update', '2', null, null, null, '1735094255', '1735094255');
INSERT INTO `auth_item` VALUES ('/category/view', '2', null, null, null, '1735094255', '1735094255');
INSERT INTO `auth_item` VALUES ('/user-backend-log/*', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend-log/create', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend-log/delete', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend-log/index', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend-log/update', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend-log/validate-form', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend-log/view', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend/*', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend/create', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend/delete', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend/index', '2', null, null, null, '1735094216', '1735094216');
INSERT INTO `auth_item` VALUES ('/user-backend/signup', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('/user-backend/update', '2', null, null, null, '1735094263', '1735094263');
INSERT INTO `auth_item` VALUES ('超管权限', '2', '所有权限', null, null, '1735041567', '1735099142');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', null, null, null, '1735041114', '1735041114');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('超管权限', '/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/*');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `views` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `is_delete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否删除 1未删除 2已删除',
  `created_at` datetime NOT NULL COMMENT '添加时间',
  `updated_at` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '系统设置', null, '/blog/create', null, null);
INSERT INTO `menu` VALUES ('2', '导航菜单', '1', '/admin/menu/index', null, null);
INSERT INTO `menu` VALUES ('3', '权限管理', '1', '/admin/permission/index', null, null);
INSERT INTO `menu` VALUES ('4', '角色管理', '1', '/admin/role/index', null, null);
INSERT INTO `menu` VALUES ('5', '路由管理', '1', '/admin/route/index', null, null);
INSERT INTO `menu` VALUES ('6', '用户管理', '1', '/admin/user/index', null, null);
INSERT INTO `menu` VALUES ('7', '权限分配', '1', '/admin/assignment/index', null, null);
INSERT INTO `menu` VALUES ('8', '文章管理', null, '/blog/index', null, null);
INSERT INTO `menu` VALUES ('9', '分类管理', null, '/category/index', null, null);
INSERT INTO `menu` VALUES ('10', '用户列表', null, '/user-backend/index', null, null);
INSERT INTO `menu` VALUES ('11', 'sfsd', null, '/blog/create', null, null);

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1735040041');
INSERT INTO `migration` VALUES ('m140506_102106_rbac_init', '1735040048');
INSERT INTO `migration` VALUES ('m170907_052038_rbac_add_index_on_auth_assignment_user_id', '1735040048');
INSERT INTO `migration` VALUES ('m180523_151638_rbac_updates_indexes_without_prefix', '1735040048');
INSERT INTO `migration` VALUES ('m200409_110543_rbac_update_mssql_trigger', '1735040048');

-- ----------------------------
-- Table structure for user_backend
-- ----------------------------
DROP TABLE IF EXISTS `user_backend`;
CREATE TABLE `user_backend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_backend
-- ----------------------------
INSERT INTO `user_backend` VALUES ('1', 'root', 'BQJ0kzBWA7Vi7CcTlSDjkCL5rI2HBkWK', '$2y$13$HomL7iMbcAW82aI9GfkgQeEuKRe1TWyXCCCW8lYU1mlH1Cm8Diwhq', 'root@qq.com', '1970-01-21 01:56:57', '1970-01-21 01:56:57', '1');
