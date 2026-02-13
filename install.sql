/*
 Target Server Type    : MySQL
 Target Server Version : 50644
 File Encoding         : 65001
 Author                : zeyudada

 Date: 03/02/2021 00:12:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bmd
-- ----------------------------
DROP TABLE IF EXISTS `bmd`;
CREATE TABLE `bmd`  (
  `qq` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`qq`) USING BTREE,
  UNIQUE INDEX `qq`(`qq`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of bmd
-- ----------------------------

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `weburl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `webkey` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `webdes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `webgg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tcgg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `zzqq` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `qqqun` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `qburl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `fcurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `header` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `footer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `salt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '不懂不要乱改！会登录不上账号',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES (1, 'zeyudada', 'cc8ae8536a906565383100a7fa55d921', '主题2', 'Q绑查询工具', 'http://t2.qb-api.com', '泽宇大大,Q绑查询', '一个查询Q绑的小工具。', '本站仅供学习交流，目前正常使用<br>\r\n严禁用于违法犯罪活动<br>\r\n否则产生的一切后果自行承担，与本站无关！', '我是主题2，泽宇原创。这是弹窗公告<br><b>支持HTML：<font color=\"#FF0000\">字体样式</font><br>A标签：<a href=\"https://zeyudada.lanzous.com/b00u79wze\">点我下载源码密码zeyu</a></b>', '3069359291', 'zeyudada.pw', 'http://api.qb-api.com/qb-api.php?mod=cha&qq=', 'http://api.qb-api.com/bq-api.php?mod=cha&mobile=', '<script type=\"text/javascript\" src=\"https://js.users.51.la/21020775.js\"></script>', '马牛逼', 'zeyudada');

SET FOREIGN_KEY_CHECKS = 1;
