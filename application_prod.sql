/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MariaDB
 Source Server Version : 110502
 Source Host           : localhost:3306
 Source Schema         : application_prod

 Target Server Type    : MariaDB
 Target Server Version : 110502
 File Encoding         : 65001

 Date: 16/01/2025 10:34:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for addresses
-- ----------------------------
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES (1, 'admin', '$2a$12$vaLBVFqQk7YlQ0lZpkFhTufL7kgODpCVEsgvtYXIUzl3sYtaq0any', '127.0.0.1', NULL, NULL);

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache
-- ----------------------------
INSERT INTO `cache` VALUES ('admin@gmail.com|172.69.182.202', 'i:1;', 1736694857);
INSERT INTO `cache` VALUES ('admin@gmail.com|172.69.182.202:timer', 'i:1736694857;', 1736694857);
INSERT INTO `cache` VALUES ('admin1@admin.com|172.69.182.202', 'i:1;', 1736694838);
INSERT INTO `cache` VALUES ('admin1@admin.com|172.69.182.202:timer', 'i:1736694838;', 1736694838);
INSERT INTO `cache` VALUES ('admin1@admin.com|172.69.182.203', 'i:1;', 1736694837);
INSERT INTO `cache` VALUES ('admin1@admin.com|172.69.182.203:timer', 'i:1736694837;', 1736694837);
INSERT INTO `cache` VALUES ('bby.gndz@gmail.com|172.69.199.159', 'i:3;', 1736976724);
INSERT INTO `cache` VALUES ('bby.gndz@gmail.com|172.69.199.159:timer', 'i:1736976724;', 1736976724);
INSERT INTO `cache` VALUES ('kaan@gmail.com|172.71.182.142', 'i:1;', 1736769814);
INSERT INTO `cache` VALUES ('kaan@gmail.com|172.71.182.142:timer', 'i:1736769814;', 1736769814);
INSERT INTO `cache` VALUES ('lv:v3.14.0:file:18edffae-laravel.log:ecf8427e:chunk:0', 'a:144:{i:1736678949;a:1:{s:5:\"ERROR\";a:1:{i:0;i:0;}}i:1736679478;a:1:{s:5:\"ERROR\";a:1:{i:1;i:1771;}}i:1736680943;a:1:{s:5:\"ERROR\";a:1:{i:2;i:10732;}}i:1736696832;a:1:{s:5:\"ERROR\";a:1:{i:3;i:31089;}}i:1736697548;a:1:{s:5:\"ERROR\";a:1:{i:4;i:51446;}}i:1736697638;a:1:{s:5:\"ERROR\";a:1:{i:5;i:71803;}}i:1736697693;a:1:{s:5:\"ERROR\";a:1:{i:6;i:95166;}}i:1736697707;a:1:{s:5:\"ERROR\";a:1:{i:7;i:118529;}}i:1736697803;a:1:{s:5:\"ERROR\";a:1:{i:8;i:141892;}}i:1736697812;a:1:{s:5:\"ERROR\";a:1:{i:9;i:165255;}}i:1736697859;a:1:{s:5:\"ERROR\";a:1:{i:10;i:188618;}}i:1736697935;a:1:{s:5:\"ERROR\";a:1:{i:11;i:211981;}}i:1736697975;a:1:{s:5:\"ERROR\";a:1:{i:12;i:235344;}}i:1736697991;a:1:{s:5:\"ERROR\";a:1:{i:13;i:258707;}}i:1736698010;a:1:{s:5:\"ERROR\";a:1:{i:14;i:282070;}}i:1736698106;a:1:{s:5:\"ERROR\";a:1:{i:15;i:305433;}}i:1736698261;a:1:{s:5:\"ERROR\";a:1:{i:16;i:325790;}}i:1736698294;a:1:{s:5:\"ERROR\";a:1:{i:17;i:349153;}}i:1736702770;a:1:{s:5:\"ERROR\";a:1:{i:18;i:372516;}}i:1736703078;a:1:{s:5:\"ERROR\";a:1:{i:19;i:36510297;}}i:1736703101;a:1:{s:5:\"ERROR\";a:1:{i:20;i:36510658;}}i:1736703102;a:1:{s:5:\"ERROR\";a:1:{i:21;i:36511019;}}i:1736703112;a:1:{s:5:\"ERROR\";a:1:{i:22;i:36511380;}}i:1736703173;a:1:{s:5:\"ERROR\";a:1:{i:23;i:36511741;}}i:1736703190;a:1:{s:5:\"ERROR\";a:1:{i:24;i:36512102;}}i:1736703204;a:1:{s:5:\"ERROR\";a:1:{i:25;i:36512463;}}i:1736703440;a:1:{s:5:\"ERROR\";a:1:{i:26;i:36512824;}}i:1736703452;a:1:{s:5:\"ERROR\";a:1:{i:27;i:36513185;}}i:1736703464;a:1:{s:5:\"ERROR\";a:2:{i:28;i:36513546;i:29;i:36513907;}}i:1736703719;a:1:{s:5:\"ERROR\";a:1:{i:30;i:36514268;}}i:1736704075;a:1:{s:5:\"ERROR\";a:1:{i:31;i:72652049;}}i:1736704106;a:1:{s:5:\"ERROR\";a:1:{i:32;i:72652410;}}i:1736704122;a:1:{s:5:\"ERROR\";a:1:{i:33;i:72652771;}}i:1736704145;a:1:{s:5:\"ERROR\";a:1:{i:34;i:72653132;}}i:1736704148;a:1:{s:5:\"ERROR\";a:1:{i:35;i:72653493;}}i:1736712498;a:1:{s:5:\"ERROR\";a:1:{i:36;i:72653854;}}i:1736712546;a:1:{s:5:\"ERROR\";a:1:{i:37;i:72654215;}}i:1736770356;a:1:{s:5:\"ERROR\";a:1:{i:38;i:72654576;}}i:1736771178;a:1:{s:5:\"ERROR\";a:1:{i:39;i:72663793;}}i:1736771183;a:1:{s:5:\"ERROR\";a:1:{i:40;i:72673010;}}i:1736771256;a:1:{s:5:\"ERROR\";a:1:{i:41;i:72682227;}}i:1736771271;a:1:{s:5:\"ERROR\";a:1:{i:42;i:72691444;}}i:1736771274;a:1:{s:5:\"ERROR\";a:5:{i:43;i:72700661;i:44;i:72709878;i:45;i:72719095;i:46;i:72728312;i:47;i:72737529;}}i:1736771275;a:1:{s:5:\"ERROR\";a:1:{i:48;i:72746746;}}i:1736771312;a:1:{s:5:\"ERROR\";a:1:{i:49;i:72755963;}}i:1736771362;a:1:{s:5:\"ERROR\";a:1:{i:50;i:72765180;}}i:1736771404;a:1:{s:5:\"ERROR\";a:1:{i:51;i:72774397;}}i:1736771414;a:1:{s:5:\"ERROR\";a:1:{i:52;i:72783614;}}i:1736771460;a:1:{s:5:\"ERROR\";a:1:{i:53;i:72792831;}}i:1736771465;a:1:{s:5:\"ERROR\";a:1:{i:54;i:72802048;}}i:1736771466;a:1:{s:5:\"ERROR\";a:3:{i:55;i:72811265;i:56;i:72820482;i:57;i:72829699;}}i:1736771508;a:1:{s:5:\"ERROR\";a:1:{i:58;i:72838916;}}i:1736771534;a:1:{s:5:\"ERROR\";a:1:{i:59;i:72848133;}}i:1736771611;a:1:{s:5:\"ERROR\";a:1:{i:60;i:72857350;}}i:1736771618;a:1:{s:5:\"ERROR\";a:1:{i:61;i:72866567;}}i:1736771619;a:1:{s:5:\"ERROR\";a:1:{i:62;i:72875784;}}i:1736771620;a:1:{s:5:\"ERROR\";a:5:{i:63;i:72885001;i:64;i:72894218;i:65;i:72903435;i:66;i:72912652;i:67;i:72921869;}}i:1736771623;a:1:{s:5:\"ERROR\";a:3:{i:68;i:72931086;i:69;i:72940303;i:70;i:72949520;}}i:1736771625;a:1:{s:5:\"ERROR\";a:3:{i:71;i:72958737;i:72;i:72967954;i:73;i:72977171;}}i:1736771636;a:1:{s:5:\"ERROR\";a:1:{i:74;i:72986388;}}i:1736771643;a:1:{s:5:\"ERROR\";a:1:{i:75;i:72995605;}}i:1736771644;a:1:{s:5:\"ERROR\";a:6:{i:76;i:73004822;i:77;i:73014039;i:78;i:73023256;i:79;i:73032473;i:80;i:73041690;i:81;i:73050907;}}i:1736771645;a:1:{s:5:\"ERROR\";a:1:{i:82;i:73060124;}}i:1736771646;a:1:{s:5:\"ERROR\";a:1:{i:83;i:73069341;}}i:1736771653;a:1:{s:5:\"ERROR\";a:1:{i:84;i:73078558;}}i:1736771654;a:1:{s:5:\"ERROR\";a:5:{i:85;i:73087775;i:86;i:73096992;i:87;i:73106209;i:88;i:73115426;i:89;i:73124643;}}i:1736771723;a:1:{s:5:\"ERROR\";a:3:{i:90;i:73133860;i:91;i:73143077;i:92;i:73152294;}}i:1736771725;a:1:{s:5:\"ERROR\";a:4:{i:93;i:73161511;i:94;i:73170728;i:95;i:73179945;i:96;i:73189162;}}i:1736771726;a:1:{s:5:\"ERROR\";a:1:{i:97;i:73198379;}}i:1736771727;a:1:{s:5:\"ERROR\";a:2:{i:98;i:73207596;i:99;i:73216813;}}i:1736771728;a:1:{s:5:\"ERROR\";a:1:{i:100;i:73226030;}}i:1736771729;a:1:{s:5:\"ERROR\";a:1:{i:101;i:73235247;}}i:1736771730;a:1:{s:5:\"ERROR\";a:1:{i:102;i:73244464;}}i:1736771732;a:1:{s:5:\"ERROR\";a:3:{i:103;i:73253681;i:104;i:73262898;i:105;i:73272115;}}i:1736771733;a:1:{s:5:\"ERROR\";a:3:{i:106;i:73281332;i:107;i:73290549;i:108;i:73299766;}}i:1736771734;a:1:{s:5:\"ERROR\";a:3:{i:109;i:73308983;i:110;i:73318200;i:111;i:73327417;}}i:1736771735;a:1:{s:5:\"ERROR\";a:1:{i:112;i:73336634;}}i:1736771736;a:1:{s:5:\"ERROR\";a:1:{i:113;i:73345851;}}i:1736771737;a:1:{s:5:\"ERROR\";a:2:{i:114;i:73355068;i:115;i:73364285;}}i:1736771739;a:1:{s:5:\"ERROR\";a:1:{i:116;i:73373502;}}i:1736771740;a:1:{s:5:\"ERROR\";a:4:{i:117;i:73382719;i:118;i:73391936;i:119;i:73401153;i:120;i:73410370;}}i:1736771741;a:1:{s:5:\"ERROR\";a:2:{i:121;i:73419587;i:122;i:73428804;}}i:1736771742;a:1:{s:5:\"ERROR\";a:4:{i:123;i:73438021;i:124;i:73447238;i:125;i:73456455;i:126;i:73465672;}}i:1736771743;a:1:{s:5:\"ERROR\";a:2:{i:127;i:73474889;i:128;i:73484106;}}i:1736771744;a:1:{s:5:\"ERROR\";a:1:{i:129;i:73493323;}}i:1736771745;a:1:{s:5:\"ERROR\";a:2:{i:130;i:73502540;i:131;i:73511757;}}i:1736771746;a:1:{s:5:\"ERROR\";a:1:{i:132;i:73520974;}}i:1736771747;a:1:{s:5:\"ERROR\";a:3:{i:133;i:73530191;i:134;i:73539408;i:135;i:73548625;}}i:1736771748;a:1:{s:5:\"ERROR\";a:3:{i:136;i:73557842;i:137;i:73567059;i:138;i:73576276;}}i:1736771749;a:1:{s:5:\"ERROR\";a:2:{i:139;i:73585493;i:140;i:73594710;}}i:1736771750;a:1:{s:5:\"ERROR\";a:1:{i:141;i:73603927;}}i:1736771751;a:1:{s:5:\"ERROR\";a:5:{i:142;i:73613144;i:143;i:73622361;i:144;i:73631578;i:145;i:73640795;i:146;i:73650012;}}i:1736771753;a:1:{s:5:\"ERROR\";a:5:{i:147;i:73659229;i:148;i:73668446;i:149;i:73677663;i:150;i:73686880;i:151;i:73696097;}}i:1736771755;a:1:{s:5:\"ERROR\";a:1:{i:152;i:73705314;}}i:1736771760;a:1:{s:5:\"ERROR\";a:1:{i:153;i:73714531;}}i:1736771761;a:1:{s:5:\"ERROR\";a:2:{i:154;i:73723748;i:155;i:73732965;}}i:1736771762;a:1:{s:5:\"ERROR\";a:3:{i:156;i:73742182;i:157;i:73751399;i:158;i:73760616;}}i:1736771764;a:1:{s:5:\"ERROR\";a:3:{i:159;i:73769833;i:160;i:73779050;i:161;i:73788267;}}i:1736771765;a:1:{s:5:\"ERROR\";a:2:{i:162;i:73797484;i:163;i:73806701;}}i:1736771766;a:1:{s:5:\"ERROR\";a:1:{i:164;i:73815918;}}i:1736771767;a:1:{s:5:\"ERROR\";a:3:{i:165;i:73825135;i:166;i:73834352;i:167;i:73843569;}}i:1736771769;a:1:{s:5:\"ERROR\";a:1:{i:168;i:73852786;}}i:1736771770;a:1:{s:5:\"ERROR\";a:3:{i:169;i:73862003;i:170;i:73871220;i:171;i:73880437;}}i:1736771782;a:1:{s:5:\"ERROR\";a:1:{i:172;i:73889654;}}i:1736771805;a:1:{s:5:\"ERROR\";a:1:{i:173;i:73910011;}}i:1736771812;a:1:{s:5:\"ERROR\";a:3:{i:174;i:73919228;i:175;i:73928445;i:176;i:73937662;}}i:1736771944;a:1:{s:5:\"ERROR\";a:1:{i:177;i:73946879;}}i:1736771946;a:1:{s:5:\"ERROR\";a:5:{i:178;i:73956096;i:179;i:73965313;i:180;i:73974530;i:181;i:73983747;i:182;i:73992964;}}i:1736771951;a:1:{s:5:\"ERROR\";a:1:{i:183;i:74002181;}}i:1736771952;a:1:{s:5:\"ERROR\";a:2:{i:184;i:74011398;i:185;i:74020615;}}i:1736771961;a:1:{s:5:\"ERROR\";a:2:{i:186;i:74029832;i:187;i:74039049;}}i:1736771962;a:1:{s:5:\"ERROR\";a:2:{i:188;i:74048266;i:189;i:74057483;}}i:1736771975;a:1:{s:5:\"ERROR\";a:1:{i:190;i:74066700;}}i:1736771980;a:1:{s:5:\"ERROR\";a:1:{i:191;i:74075917;}}i:1736771984;a:1:{s:5:\"ERROR\";a:2:{i:192;i:74085134;i:193;i:74094351;}}i:1736771985;a:1:{s:5:\"ERROR\";a:4:{i:194;i:74103568;i:195;i:74112785;i:196;i:74122002;i:197;i:74131219;}}i:1736771997;a:1:{s:5:\"ERROR\";a:3:{i:198;i:74140436;i:199;i:74149653;i:200;i:74158870;}}i:1736772006;a:1:{s:5:\"ERROR\";a:1:{i:201;i:74168087;}}i:1736772008;a:1:{s:5:\"ERROR\";a:2:{i:202;i:74177304;i:203;i:74186521;}}i:1736772009;a:1:{s:5:\"ERROR\";a:2:{i:204;i:74195738;i:205;i:74204955;}}i:1736772010;a:1:{s:5:\"ERROR\";a:4:{i:206;i:74214172;i:207;i:74223389;i:208;i:74232606;i:209;i:74241823;}}i:1736772011;a:1:{s:5:\"ERROR\";a:1:{i:210;i:74251040;}}i:1736772012;a:1:{s:5:\"ERROR\";a:2:{i:211;i:74260257;i:212;i:74269474;}}i:1736772043;a:1:{s:5:\"ERROR\";a:1:{i:213;i:74278691;}}i:1736772115;a:1:{s:5:\"ERROR\";a:1:{i:214;i:74287908;}}i:1736772121;a:1:{s:5:\"ERROR\";a:1:{i:215;i:74297125;}}i:1736772123;a:1:{s:5:\"ERROR\";a:1:{i:216;i:74306342;}}i:1736772125;a:1:{s:5:\"ERROR\";a:1:{i:217;i:74315559;}}i:1736772179;a:1:{s:5:\"ERROR\";a:1:{i:218;i:74335916;}}i:1736772239;a:1:{s:5:\"ERROR\";a:1:{i:219;i:74345133;}}i:1736772247;a:1:{s:5:\"ERROR\";a:2:{i:220;i:74354350;i:221;i:74363567;}}i:1736772249;a:1:{s:5:\"ERROR\";a:3:{i:222;i:74372784;i:223;i:74382001;i:224;i:74391218;}}i:1736772250;a:1:{s:5:\"ERROR\";a:3:{i:225;i:74400435;i:226;i:74409652;i:227;i:74418869;}}i:1736772254;a:1:{s:5:\"ERROR\";a:2:{i:228;i:74428086;i:229;i:74437303;}}i:1736772255;a:1:{s:5:\"ERROR\";a:2:{i:230;i:74446520;i:231;i:74455737;}}i:1736784723;a:1:{s:5:\"ERROR\";a:1:{i:232;i:74464954;}}i:1736785048;a:1:{s:5:\"ERROR\";a:1:{i:233;i:141341275;}}i:1736785157;a:1:{s:5:\"ERROR\";a:1:{i:234;i:141341636;}}i:1736785173;a:1:{s:5:\"ERROR\";a:1:{i:235;i:141341997;}}i:1736785210;a:1:{s:5:\"ERROR\";a:1:{i:236;i:141342358;}}i:1736785246;a:1:{s:5:\"ERROR\";a:1:{i:237;i:141342719;}}i:1736785261;a:1:{s:5:\"ERROR\";a:2:{i:238;i:141343080;i:239;i:141343441;}}i:1736785269;a:1:{s:5:\"ERROR\";a:1:{i:240;i:141343802;}}i:1736861674;a:1:{s:5:\"ERROR\";a:1:{i:241;i:141344163;}}}', 1737581100);
INSERT INTO `cache` VALUES ('lv:v3.14.0:file:18edffae-laravel.log:ecf8427e:metadata', 'a:9:{s:5:\"query\";N;s:10:\"identifier\";s:8:\"ecf8427e\";s:26:\"last_scanned_file_position\";i:141353368;s:18:\"last_scanned_index\";i:242;s:24:\"next_log_index_to_create\";i:242;s:14:\"max_chunk_size\";i:50000;s:19:\"current_chunk_index\";i:0;s:17:\"chunk_definitions\";a:0:{}s:24:\"current_chunk_definition\";a:5:{s:5:\"index\";i:0;s:4:\"size\";i:242;s:18:\"earliest_timestamp\";i:1736678949;s:16:\"latest_timestamp\";i:1736861674;s:12:\"level_counts\";a:1:{s:5:\"ERROR\";i:242;}}}', 1737581100);
INSERT INTO `cache` VALUES ('lv:v3.14.0:file:18edffae-laravel.log:metadata', 'a:8:{s:4:\"type\";s:7:\"laravel\";s:4:\"name\";s:11:\"laravel.log\";s:4:\"path\";s:53:\"C:\\inetpub\\wwwroot\\arabul.us\\storage\\logs\\laravel.log\";s:4:\"size\";i:141353368;s:18:\"earliest_timestamp\";i:1736678949;s:16:\"latest_timestamp\";i:1736861674;s:26:\"last_scanned_file_position\";i:141353368;s:15:\"related_indices\";a:1:{s:8:\"ecf8427e\";a:2:{s:5:\"query\";N;s:26:\"last_scanned_file_position\";i:141353368;}}}', 1737581100);
INSERT INTO `cache` VALUES ('nani.yozgat@gmail.com|172.69.182.202', 'i:1;', 1736680343);
INSERT INTO `cache` VALUES ('nani.yozgat@gmail.com|172.69.182.202:timer', 'i:1736680343;', 1736680343);
INSERT INTO `cache` VALUES ('nelefir262@wirelay.com|172.69.182.177', 'i:1;', 1736694490);
INSERT INTO `cache` VALUES ('nelefir262@wirelay.com|172.69.182.177:timer', 'i:1736694490;', 1736694490);
INSERT INTO `cache` VALUES ('test@example.com|162.158.14.174', 'i:1;', 1736697017);
INSERT INTO `cache` VALUES ('test@example.com|162.158.14.174:timer', 'i:1736697016;', 1736697016);

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 113 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, -1, 'Telefon ve Aksesuar', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (2, -1, 'Bilgisayar ve Tablet', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (3, -1, 'Çevre Birimleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (5, 1, 'IOS Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (6, 1, 'Android Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (8, 1, 'Giyilebilir Teknoloji', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (9, 1, 'Telefon Aksesuarları', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (10, 1, 'Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (11, 1, 'Telsiz ve Masaüstü Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (12, 6, 'Samsung', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (13, 6, 'Xiaomi', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (14, 6, 'Techno', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (15, 6, 'Realme', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (16, 6, 'Reeder', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (17, 6, 'Infinix', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (18, 6, 'Omix', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (19, 6, 'General Mobile', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (20, 6, 'Poco', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (21, 6, 'Oukitel', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (22, 6, 'Vivo', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (23, 6, 'Casper', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (24, 6, 'Honor', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (25, 6, 'Huawei', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (26, 6, 'Diğer (Belirtiniz)', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (27, 8, 'Akıllı Saat', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (28, 8, 'Akıllı Bileklik', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (29, 8, 'Sanal & Artırılmış Gerçeklik', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (30, 8, 'Akıllı Gözlük', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (31, 9, 'Taşınabilir Şarj Aleti', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (32, 9, 'Ekran Koruyucu', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (33, 9, 'Telefon Kılıfı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (34, 9, 'Şarj Aleti', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (35, 9, 'Kablo', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (36, 10, 'Bluetooth Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (37, 10, 'Kulak İçi Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (38, 10, 'Kulak Üstü Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (39, 11, 'Tuşlu Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (40, 11, 'Gigaset', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (41, 11, 'Panasonic', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (42, 2, 'Laptop', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (43, 2, 'Masaüstü Bilgisayar', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (44, 2, 'Tablet', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (45, 2, 'Oyuncu Bilgisayarı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (46, 3, 'Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (47, 3, 'Bilgisayar Bileşenleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (48, 3, 'Modem ve Ağ Ürünleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (49, 3, 'Veri Depolama', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (50, 42, 'Laptop Çantası', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (51, 42, 'Soğutucu', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (52, 42, 'Adaptör', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (53, 42, 'Stand', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (54, 42, 'Ekran Koruyucu', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (55, 43, 'All-In-One', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (56, 43, 'Hazır Sistemler', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (57, 43, 'Mini Masaüstü', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (58, 43, 'Apple iMac', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (59, 44, 'Tablet Kılıfı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (60, 44, 'Ekran Koruyucu', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (61, 44, 'Klavye', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (62, 44, 'Tablet Kalemi', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (63, 44, 'Tablet Standı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (64, 45, 'Notebook', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (65, 45, 'Monitör', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (66, 45, 'Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (67, 45, 'Fare', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (68, 45, 'Klavye', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (69, 45, 'Joystick', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (70, 45, 'Gamepad', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (71, 45, 'Hoparlör', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (72, 46, 'Kartuş & Toner', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (73, 46, 'Lazer Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (74, 46, 'Mürekkepli Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (75, 46, 'Tanklı Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (76, 46, 'Fotoğraf Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (77, 46, 'Barkod ve Etiket', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (78, 3, 'Çevre Birimleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (79, 78, 'Kablo, Çevirici, Çoklayıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (80, 78, 'Mouse', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (81, 78, 'Monitör, Ekran', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (82, 78, 'Klavye', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (83, 78, 'Mousepad', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (84, 78, 'Klavye & Mouse Seti', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (85, 47, 'Ram', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (86, 47, 'SSD', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (87, 47, 'Anakart', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (88, 47, 'Soğutma', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (89, 47, 'Güç Kaynağı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (90, 47, 'Ekran Kartı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (91, 47, 'Bilgisayar Kasası', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (92, 47, 'İşlemci', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (93, 47, 'Harddisk', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (94, 48, 'Network Kabloları', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (95, 48, 'Router', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (96, 48, 'Wireless Adaptör', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (97, 48, 'Menzil Genişletici', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (98, 48, 'Network Aksesuarları', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (99, 48, 'Access Point (AP)', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (100, 48, 'ADSL Modem', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (101, 48, 'Network Kartları', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (102, 48, 'VDSL Modem', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (103, 48, 'Powerline', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (104, 49, 'USB Bellek', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (105, 49, 'Taşınabilir SSD', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (106, 49, 'Taşınabilir HDD', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (107, 49, 'DVD/HDD Kasası', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (108, 49, 'Çoklu Depolama Ünitesi', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (109, 49, 'Disk Kılıfı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories` VALUES (110, 49, 'Aksesuar', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories` VALUES (111, 42, 'Laptop', NULL, NULL);
INSERT INTO `categories` VALUES (112, 45, 'Masaüstü', NULL, NULL);

-- ----------------------------
-- Table structure for chatboxes
-- ----------------------------
DROP TABLE IF EXISTS `chatboxes`;
CREATE TABLE `chatboxes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `message_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for conversations
-- ----------------------------
DROP TABLE IF EXISTS `conversations`;
CREATE TABLE `conversations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_one_id` bigint(20) UNSIGNED NOT NULL,
  `user_two_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `listing_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `conversations_user_one_id_foreign`(`user_one_id`) USING BTREE,
  INDEX `conversations_user_two_id_foreign`(`user_two_id`) USING BTREE,
  CONSTRAINT `conversations_user_one_id_foreign` FOREIGN KEY (`user_one_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `conversations_user_two_id_foreign` FOREIGN KEY (`user_two_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of conversations
-- ----------------------------
INSERT INTO `conversations` VALUES (1, 2, 1, '2024-12-20 15:54:23', '2024-12-20 15:54:23', 3);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for favorites
-- ----------------------------
DROP TABLE IF EXISTS `favorites`;
CREATE TABLE `favorites`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of favorites
-- ----------------------------
INSERT INTO `favorites` VALUES (2, 2, 3, '2024-12-20 16:00:01', '2024-12-20 16:00:01');
INSERT INTO `favorites` VALUES (3, 1, 4, '2025-01-12 14:04:33', '2025-01-12 14:04:33');
INSERT INTO `favorites` VALUES (5, 7, 5, '2025-01-12 14:35:49', '2025-01-12 14:35:49');
INSERT INTO `favorites` VALUES (7, 6, 4, '2025-01-12 14:37:38', '2025-01-12 14:37:38');
INSERT INTO `favorites` VALUES (8, 1, 5, '2025-01-12 15:00:36', '2025-01-12 15:00:36');

-- ----------------------------
-- Table structure for followings
-- ----------------------------
DROP TABLE IF EXISTS `followings`;
CREATE TABLE `followings`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `following_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int(11) NULL DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED NULL DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for listings
-- ----------------------------
DROP TABLE IF EXISTS `listings`;
CREATE TABLE `listings`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `lat` decimal(65, 10) NULL DEFAULT NULL,
  `long` decimal(65, 10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of listings
-- ----------------------------
INSERT INTO `listings` VALUES (3, 'iPhone 13', 'sıfır ürün, ihtiyaçtan satılıktır.', '{\"images\":[\"\\/listings\\/3\\/image_0.png\"],\"0\":{\"parameter_id\":\"1\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Apple\"},\"1\":{\"parameter_id\":\"2\",\"parameter_name\":\"RAM\",\"parameter_value\":\"6 GB\"},\"2\":{\"parameter_id\":\"3\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"32 GB\"},\"3\":{\"parameter_id\":\"4\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"12 MP\"},\"4\":{\"parameter_id\":\"5\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"2001-2500 mAh\"},\"5\":{\"parameter_id\":\"6\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Gri\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"S\\u0131f\\u0131r\"}}', 'Binevler, 27070 Şahinbey/Gaziantep, Türkiye', 45000, 1, 1, 1, '2024-12-20 15:00:45', '2024-12-20 15:09:32', 'iphone-13', 5, 37.0499397000, 37.3290815000);
INSERT INTO `listings` VALUES (4, 'Logitech MX Keys S', 'Mx Keys ama S', '{\"images\":[\"\\/listings\\/4\\/image_0.png\",\"\\/listings\\/4\\/image_1.png\",\"\\/listings\\/4\\/image_2.png\"],\"0\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Var\"},\"1\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"2\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Orta Kullan\\u0131m\"}}', 'Sancak, 42250 Selçuklu/Konya, Türkiye', 2501, 3, 1, 1, '2025-01-12 13:31:15', '2025-01-12 13:36:15', 'logitech-mx-keys-s', 78, 37.9582560000, 32.5164257500);
INSERT INTO `listings` VALUES (5, 'Telefon', 'Hiçbir hasarı yok', '{\"images\":[\"\\/listings\\/5\\/image_0.png\",\"\\/listings\\/5\\/image_1.png\",\"\\/listings\\/5\\/image_2.png\"],\"0\":{\"parameter_id\":\"10\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Xiaomi\"},\"1\":{\"parameter_id\":\"11\",\"parameter_name\":\"RAM\",\"parameter_value\":\"4 GB\"},\"2\":{\"parameter_id\":\"12\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"512 GB\"},\"3\":{\"parameter_id\":\"13\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"48 MP\"},\"4\":{\"parameter_id\":\"14\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"4001-4500\"},\"5\":{\"parameter_id\":\"15\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Mor\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Var\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'General Şükrü Kanatlı, Antakya/Hatay, Türkiye', 12000, 6, 1, 1, '2025-01-12 14:20:10', '2025-01-12 14:25:52', 'telefon', 13, 36.2042794000, 36.1618938000);
INSERT INTO `listings` VALUES (6, 'Sahibinden satılık MD Barcelona MUSLUK', '• 25 mm paslanmaz krom boru\n• Kromlu ABS tepe ve el duşu\n• Pirinç yönlendirici\n• Krom kaplama ABS kurulum ekipmanları\n• 150 cm den 180 cm ye uzayabilen, çift kenetli, EPDM iç hortumu, uçları ve somunları pirinç, kromlu paslanmaz çelik duş hortumu', '{\"images\":[\"\\/listings\\/6\\/image_0.png\",\"\\/listings\\/6\\/image_1.png\",\"\\/listings\\/6\\/image_2.png\",\"\\/listings\\/6\\/image_3.png\"],\"0\":{\"parameter_id\":\"59\",\"parameter_name\":\"T\\u00fcr\\u00fc\",\"parameter_value\":\"Lazer\"},\"1\":{\"parameter_id\":\"60\",\"parameter_name\":\"Bask\\u0131 \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"4800x1200 dpi\"},\"2\":{\"parameter_id\":\"61\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Ethernet\"},\"3\":{\"parameter_id\":\"62\",\"parameter_name\":\"Renkli Bask\\u0131\",\"parameter_value\":\"Di\\u011fer\"},\"4\":{\"parameter_id\":\"63\",\"parameter_name\":\"Ka\\u011f\\u0131t Kapasitesi\",\"parameter_value\":\"250 Sayfa\"},\"5\":{\"parameter_id\":\"64\",\"parameter_name\":\"Kartu\\u015f \\/ Toner\",\"parameter_value\":\"M\\u00fcrekkep Kartu\\u015flu\"},\"6\":{\"parameter_id\":\"65\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Beyaz\"},\"7\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"9\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"S\\u0131f\\u0131r\"}}', 'Pınartepe, 34500 Büyükçekmece/İstanbul, Türkiye', 4500, 7, 1, 1, '2025-01-12 14:21:52', '2025-01-12 14:26:07', 'sahibinden-satilik-md-barcelona-musluk', 73, 41.0091520000, 28.6162944000);
INSERT INTO `listings` VALUES (7, 'Sunix Kulaklık', 'Az kullanıldı satıyorum', '{\"images\":[\"\\/listings\\/7\\/image_0.png\",\"\\/listings\\/7\\/image_1.png\",\"\\/listings\\/7\\/image_2.png\"],\"0\":{\"parameter_id\":\"26\",\"parameter_name\":\"T\\u00fcr\",\"parameter_value\":\"Kablosuz\"},\"1\":{\"parameter_id\":\"28\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Bluetooth\"},\"2\":{\"parameter_id\":\"30\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Beyaz\"},\"3\":{\"parameter_id\":\"29\",\"parameter_name\":\"Pil \\u00d6mr\\u00fc\",\"parameter_value\":\"2000-2499\"},\"4\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"5\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"6\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'General Şükrü Kanatlı, Antakya/Hatay, Türkiye', 200, 6, 1, 1, '2025-01-12 14:28:42', '2025-01-12 14:39:15', 'sunix-kulaklik', 37, 36.2042794000, 36.1618938000);
INSERT INTO `listings` VALUES (8, 'LogiTech Sessiz Mouse', 'Sessiz mouse, pil ile çalışır.', '{\"images\":[\"\\/listings\\/8\\/image_0.png\",\"\\/listings\\/8\\/image_1.png\"],\"0\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"1\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"2\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Orta Kullan\\u0131m\"}}', 'General Şükrü Kanatlı, Antakya/Hatay, Türkiye', 100, 6, 1, 1, '2025-01-12 14:35:56', '2025-01-12 14:39:18', 'logitech-sessiz-mouse', 67, 36.2042794000, 36.1618938000);
INSERT INTO `listings` VALUES (9, '2. El Sony Bluetooth Kulaklık', 'kullanıcı, kendisi kullandıkça değerlenen bir ürün olduğu için bu fiyatı biçmiştir.', '{\"images\":[\"\\/listings\\/9\\/image_0.png\",\"\\/listings\\/9\\/image_1.png\"],\"0\":{\"parameter_id\":\"26\",\"parameter_name\":\"T\\u00fcr\",\"parameter_value\":\"Kablosuz\"},\"1\":{\"parameter_id\":\"28\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Bluetooth\"},\"2\":{\"parameter_id\":\"30\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Siyah\"},\"3\":{\"parameter_id\":\"29\",\"parameter_name\":\"Pil \\u00d6mr\\u00fc\",\"parameter_value\":\"3500-3999\"},\"4\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Var\"},\"5\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"6\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Osmanlı, Şahinbey/Gaziantep, Türkiye', 2500, 10, 1, 1, '2025-01-12 17:21:33', '2025-01-12 19:07:27', '2-el-sony-bluetooth-kulaklik', 36, 37.0089345000, 37.4344455000);
INSERT INTO `listings` VALUES (10, 'Canon Maxify İB4050', 'ihtiyaç fazlasından satılıktır.', '{\"images\":[\"\\/listings\\/10\\/image_0.png\"],\"0\":{\"parameter_id\":\"59\",\"parameter_name\":\"T\\u00fcr\\u00fc\",\"parameter_value\":\"Inkjet\"},\"1\":{\"parameter_id\":\"60\",\"parameter_name\":\"Bask\\u0131 \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"1200x1200 dpi\"},\"2\":{\"parameter_id\":\"61\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Wi-Fi\"},\"3\":{\"parameter_id\":\"62\",\"parameter_name\":\"Renkli Bask\\u0131\",\"parameter_value\":\"Siyah-Beyaz ve Renkli\"},\"4\":{\"parameter_id\":\"63\",\"parameter_name\":\"Ka\\u011f\\u0131t Kapasitesi\",\"parameter_value\":\"500 Sayfa\"},\"5\":{\"parameter_id\":\"64\",\"parameter_name\":\"Kartu\\u015f \\/ Toner\",\"parameter_value\":\"M\\u00fcrekkep Kartu\\u015flu\"},\"6\":{\"parameter_id\":\"65\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Siyah\"},\"7\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"9\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 5900, 8, 1, 1, '2025-01-12 19:17:44', '2025-01-13 15:47:38', 'canon-maxify-ib4050', 72, 37.0145834775, 37.3429106727);
INSERT INTO `listings` VALUES (11, 'Canon Maxify İB4050', 'ihtiyaç fazlasından satılıktır.', '{\"images\":[\"\\/listings\\/11\\/image_0.png\"],\"0\":{\"parameter_id\":\"59\",\"parameter_name\":\"T\\u00fcr\\u00fc\",\"parameter_value\":\"Inkjet\"},\"1\":{\"parameter_id\":\"60\",\"parameter_name\":\"Bask\\u0131 \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"1200x1200 dpi\"},\"2\":{\"parameter_id\":\"61\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Wi-Fi\"},\"3\":{\"parameter_id\":\"62\",\"parameter_name\":\"Renkli Bask\\u0131\",\"parameter_value\":\"Siyah-Beyaz ve Renkli\"},\"4\":{\"parameter_id\":\"63\",\"parameter_name\":\"Ka\\u011f\\u0131t Kapasitesi\",\"parameter_value\":\"500 Sayfa\"},\"5\":{\"parameter_id\":\"64\",\"parameter_name\":\"Kartu\\u015f \\/ Toner\",\"parameter_value\":\"M\\u00fcrekkep Kartu\\u015flu\"},\"6\":{\"parameter_id\":\"65\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Siyah\"},\"7\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"9\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 5900, 8, 1, 2, '2025-01-12 19:17:44', '2025-01-13 15:48:10', 'canon-maxify-ib4050', 72, 37.0145834775, 37.3429106727);
INSERT INTO `listings` VALUES (12, 'iPhone 15 pro', '15 pro titanyum beyaz', '{\"images\":[\"\\/listings\\/12\\/image_0.png\"],\"0\":{\"parameter_id\":\"1\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Apple\"},\"1\":{\"parameter_id\":\"2\",\"parameter_name\":\"RAM\",\"parameter_value\":\"8 GB\"},\"2\":{\"parameter_id\":\"3\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"128 GB\"},\"3\":{\"parameter_id\":\"4\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"48 MP\"},\"4\":{\"parameter_id\":\"5\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"3001-3500 mAh\"},\"5\":{\"parameter_id\":\"6\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Beyaz\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Kültür, 07090 Kepez/Antalya, Türkiye', 71200, 9, 1, 1, '2025-01-12 19:21:55', '2025-01-13 15:47:41', 'iphone-15-pro', 5, 36.9049499000, 30.6509722000);
INSERT INTO `listings` VALUES (13, 'REEDER D19 DİZÜSTÜ BİLGİSAYAR', 'Temiz kullanılmıştır', '{\"images\":[\"\\/listings\\/13\\/image_0.png\"],\"0\":{\"parameter_id\":\"35\",\"parameter_name\":\"Ekran Boyutu\",\"parameter_value\":\"15.6 in\\u00e7\"},\"1\":{\"parameter_id\":\"36\",\"parameter_name\":\"Ekran \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"1920 x 1080\"},\"2\":{\"parameter_id\":\"37\",\"parameter_name\":\"\\u0130\\u015flemci\",\"parameter_value\":\"Intel Core i7\"},\"3\":{\"parameter_id\":\"38\",\"parameter_name\":\"RAM Kapasitesi\",\"parameter_value\":\"16 GB\"},\"4\":{\"parameter_id\":\"39\",\"parameter_name\":\"Ekran Kart\\u0131\",\"parameter_value\":\"NVIDIA GeForce RTX\"},\"5\":{\"parameter_id\":\"40\",\"parameter_name\":\"\\u0130\\u015fletim Sistemi\",\"parameter_value\":\"Windows\"},\"6\":{\"parameter_id\":\"41\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Di\\u011fer\"},\"7\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Var\"},\"8\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"9\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Cumhuriyet, 34290 Küçükçekmece/İstanbul, Türkiye', 45000, 18, 1, 1, '2025-01-13 15:33:35', '2025-01-13 15:47:42', 'reeder-d19-dizustu-bilgisayar', 111, 41.0026792000, 28.7831875000);
INSERT INTO `listings` VALUES (14, 'airpods pro', 'sahibinden fazlaca kullanilmis airpods', '{\"images\":[\"\\/listings\\/14\\/image_0.png\"],\"0\":{\"parameter_id\":\"26\",\"parameter_name\":\"T\\u00fcr\",\"parameter_value\":\"Kablosuz\"},\"1\":{\"parameter_id\":\"28\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Bluetooth\"},\"2\":{\"parameter_id\":\"30\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Beyaz\"},\"3\":{\"parameter_id\":\"29\",\"parameter_name\":\"Pil \\u00d6mr\\u00fc\",\"parameter_value\":\"4000-4499\"},\"4\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Var\"},\"5\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"6\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"\\u00c7ok Kullan\\u0131m\"}}', 'Mimarsinan, 55200 Atakum/Samsun, Türkiye', 8652, 19, 1, 1, '2025-01-13 15:46:22', '2025-01-13 15:47:43', 'airpods-pro', 36, 41.3339215000, 36.2762001000);
INSERT INTO `listings` VALUES (15, 'Xbox Controller Elite 2', 'dosta gider', '{\"images\":[\"\\/listings\\/15\\/image_0.png\",\"\\/listings\\/15\\/image_1.png\",\"\\/listings\\/15\\/image_2.png\",\"\\/listings\\/15\\/image_3.png\",\"\\/listings\\/15\\/image_4.png\"],\"0\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"1\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"2\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"S\\u0131f\\u0131r\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 7000, 8, 1, 1, '2025-01-13 17:51:30', '2025-01-13 17:53:02', 'xbox-controller-elite-2', 84, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (16, 'Samsung Galaxy S24+ Blue Edition', 'Online satışa özel 12GB RAM\'li versiyonudur. Pazarlık yoktur.', '{\"images\":[\"\\/listings\\/16\\/image_0.png\",\"\\/listings\\/16\\/image_1.png\",\"\\/listings\\/16\\/image_2.png\",\"\\/listings\\/16\\/image_3.png\",\"\\/listings\\/16\\/image_4.png\"],\"0\":{\"parameter_id\":\"10\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Samsung\"},\"1\":{\"parameter_id\":\"11\",\"parameter_name\":\"RAM\",\"parameter_value\":\"12 GB\"},\"2\":{\"parameter_id\":\"12\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"256 GB\"},\"3\":{\"parameter_id\":\"13\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"Di\\u011fer\"},\"4\":{\"parameter_id\":\"14\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"4501-5000\"},\"5\":{\"parameter_id\":\"15\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Mavi\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 50000, 8, 1, 1, '2025-01-13 18:15:32', '2025-01-14 18:11:41', 'samsung-galaxy-s24-blue-edition', 12, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (17, 'Samsung Galaxy Buds 2', 'Takas mevcuttur.', '{\"images\":[\"\\/listings\\/17\\/image_0.png\",\"\\/listings\\/17\\/image_1.png\",\"\\/listings\\/17\\/image_2.png\",\"\\/listings\\/17\\/image_3.png\",\"\\/listings\\/17\\/image_4.png\"],\"0\":{\"parameter_id\":\"26\",\"parameter_name\":\"T\\u00fcr\",\"parameter_value\":\"Kablosuz\"},\"1\":{\"parameter_id\":\"28\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"Bluetooth\"},\"2\":{\"parameter_id\":\"30\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Beyaz\"},\"3\":{\"parameter_id\":\"29\",\"parameter_name\":\"Pil \\u00d6mr\\u00fc\",\"parameter_value\":\"0-1449\"},\"4\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"5\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"6\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"\\u00c7ok Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 3000, 8, 1, 1, '2025-01-13 18:19:52', '2025-01-14 18:11:59', 'samsung-galaxy-buds-2', 36, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (18, 'Asus ROG Strix G15 (2022) G513RM-HF265', 'Ağır render işlerinde kullanılmamıştır.', '{\"images\":[\"\\/listings\\/18\\/image_0.png\",\"\\/listings\\/18\\/image_1.png\",\"\\/listings\\/18\\/image_2.png\",\"\\/listings\\/18\\/image_3.png\",\"\\/listings\\/18\\/image_4.png\",\"\\/listings\\/18\\/image_5.png\",\"\\/listings\\/18\\/image_6.png\"],\"0\":{\"parameter_id\":\"43\",\"parameter_name\":\"Monit\\u00f6r Boyutu\",\"parameter_value\":\"15.6 in\\u00e7\"},\"1\":{\"parameter_id\":\"45\",\"parameter_name\":\"\\u0130\\u015flemci\",\"parameter_value\":\"AMD Ryzen 7\"},\"2\":{\"parameter_id\":\"46\",\"parameter_name\":\"RAM Kapasitesi\",\"parameter_value\":\"16 GB\"},\"3\":{\"parameter_id\":\"47\",\"parameter_name\":\"Ekran Kart\\u0131\",\"parameter_value\":\"NVIDIA GeForce RTX\"},\"4\":{\"parameter_id\":\"48\",\"parameter_name\":\"\\u0130\\u015fletim Sistemi\",\"parameter_value\":\"Windows\"},\"5\":{\"parameter_id\":\"49\",\"parameter_name\":\"Toplam Depolama\",\"parameter_value\":\"512 GB\"},\"6\":{\"parameter_id\":\"50\",\"parameter_name\":\"Depolama T\\u00fcr\\u00fc\",\"parameter_value\":\"SSD\"},\"7\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"9\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Az Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 48000, 8, 1, 1, '2025-01-13 18:25:46', '2025-01-14 18:12:03', 'asus-rog-strix-g15-2022-g513rm-hf265', 64, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (19, 'Western Digital myPassport HDD', 'CrystalDiskMark testler yapılmıştır, sorunsuzdur.', '{\"images\":[\"\\/listings\\/19\\/image_0.png\",\"\\/listings\\/19\\/image_1.png\"],\"0\":{\"parameter_id\":\"77\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Di\\u011fer\"},\"1\":{\"parameter_id\":\"78\",\"parameter_name\":\"T\\u00fcr\",\"parameter_value\":\"HDD\"},\"2\":{\"parameter_id\":\"74\",\"parameter_name\":\"Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"USB 3.1\"},\"3\":{\"parameter_id\":\"75\",\"parameter_name\":\"Depolama Kapasitesi\",\"parameter_value\":\"1TB\"},\"4\":{\"parameter_id\":\"76\",\"parameter_name\":\"USB Ba\\u011flant\\u0131 T\\u00fcr\\u00fc\",\"parameter_value\":\"USB 3.1\"},\"5\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"6\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Orta Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 1500, 8, 1, 1, '2025-01-13 18:29:58', '2025-01-14 18:12:12', 'western-digital-mypassport-hdd', 106, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (20, 'Polo Smart Mouse', 'sol tık bazen basmıyor onun dışında düzgün çalışıyor.', '{\"images\":[\"\\/listings\\/20\\/image_0.png\",\"\\/listings\\/20\\/image_1.png\"],\"0\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Var\"},\"1\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"2\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"\\u00c7ok Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 200, 8, 1, 1, '2025-01-13 18:34:43', '2025-01-14 18:12:12', 'polo-smart-mouse', 80, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (21, 'Samsung Galaxy Fit2', 'yedek kayışı yanında verilecektir.', '{\"images\":[\"\\/listings\\/21\\/image_0.png\",\"\\/listings\\/21\\/image_1.png\",\"\\/listings\\/21\\/image_2.png\",\"\\/listings\\/21\\/image_3.png\"],\"0\":{\"parameter_id\":\"16\",\"parameter_name\":\"Ekran T\\u00fcr\\u00fc\",\"parameter_value\":\"Super AMOLED\"},\"1\":{\"parameter_id\":\"17\",\"parameter_name\":\"Pil \\u00d6mr\\u00fc\",\"parameter_value\":\"0-1449\"},\"2\":{\"parameter_id\":\"18\",\"parameter_name\":\"Sens\\u00f6rler\",\"parameter_value\":\"Nab\\u0131z\"},\"3\":{\"parameter_id\":\"19\",\"parameter_name\":\"Kay\\u0131\\u015f Malzemesi\",\"parameter_value\":\"Metal\"},\"4\":{\"parameter_id\":\"20\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Siyah\"},\"5\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"6\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Var\"},\"7\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"Orta Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 3000, 8, 1, 1, '2025-01-13 18:43:49', '2025-01-14 18:12:13', 'samsung-galaxy-fit2', 28, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (22, 'Minolta Pocket Autopak 460 TX 110mm', 'filmli bir kameradır 110mm film kullanır.', '{\"images\":[\"\\/listings\\/22\\/image_0.png\",\"\\/listings\\/22\\/image_1.png\",\"\\/listings\\/22\\/image_2.png\",\"\\/listings\\/22\\/image_3.png\",\"\\/listings\\/22\\/image_4.png\"],\"0\":{\"parameter_id\":\"10\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Di\\u011fer\"},\"1\":{\"parameter_id\":\"11\",\"parameter_name\":\"RAM\",\"parameter_value\":\"Di\\u011fer\"},\"2\":{\"parameter_id\":\"12\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"Di\\u011fer\"},\"3\":{\"parameter_id\":\"13\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"Di\\u011fer\"},\"4\":{\"parameter_id\":\"14\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"1000-1500\"},\"5\":{\"parameter_id\":\"15\",\"parameter_name\":\"Renk\",\"parameter_value\":\"G\\u00fcm\\u00fc\\u015f\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"S\\u0131f\\u0131r\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 5000, 8, 1, 1, '2025-01-13 18:56:42', '2025-01-14 18:12:27', 'minolta-pocket-autopak-460-tx-110mm', 26, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (23, 'Polaroid 780', 'Polaroid 600 serisi filmlere uygundur.', '{\"images\":[\"\\/listings\\/23\\/image_0.png\",\"\\/listings\\/23\\/image_1.png\",\"\\/listings\\/23\\/image_2.png\",\"\\/listings\\/23\\/image_3.png\"],\"0\":{\"parameter_id\":\"10\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Di\\u011fer\"},\"1\":{\"parameter_id\":\"11\",\"parameter_name\":\"RAM\",\"parameter_value\":\"Di\\u011fer\"},\"2\":{\"parameter_id\":\"12\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"Di\\u011fer\"},\"3\":{\"parameter_id\":\"13\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"Di\\u011fer\"},\"4\":{\"parameter_id\":\"14\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"1000-1500\"},\"5\":{\"parameter_id\":\"15\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Siyah\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"S\\u0131f\\u0131r\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 4000, 8, 1, 1, '2025-01-13 19:03:50', '2025-01-14 18:12:26', 'polaroid-780', 26, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (24, 'Kodak EasyShare C530', 'nadir bir parçadır hasarlı olmasına rağmen fiyat uygun tutulmuştur.', '{\"images\":[\"\\/listings\\/24\\/image_0.png\",\"\\/listings\\/24\\/image_1.png\",\"\\/listings\\/24\\/image_2.png\",\"\\/listings\\/24\\/image_3.png\",\"\\/listings\\/24\\/image_4.png\",\"\\/listings\\/24\\/image_5.png\"],\"0\":{\"parameter_id\":\"10\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Di\\u011fer\"},\"1\":{\"parameter_id\":\"11\",\"parameter_name\":\"RAM\",\"parameter_value\":\"Di\\u011fer\"},\"2\":{\"parameter_id\":\"12\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"Di\\u011fer\"},\"3\":{\"parameter_id\":\"13\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"5 MP\"},\"4\":{\"parameter_id\":\"14\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"1000-1500\"},\"5\":{\"parameter_id\":\"15\",\"parameter_name\":\"Renk\",\"parameter_value\":\"G\\u00fcm\\u00fc\\u015f\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"\\u00c7ok Kullan\\u0131m\"}}', 'Şahintepe, Şahinbey/Gaziantep, Türkiye', 4000, 8, 1, 1, '2025-01-13 19:09:46', '2025-01-14 18:12:26', 'kodak-easyshare-c530', 26, 37.0145896914, 37.3429152221);
INSERT INTO `listings` VALUES (25, 'iPhone 13', 'Sıfır, hiç kullanılmadı. Kutusu ve faturası vardır.', '{\"images\":[\"\\/listings\\/25\\/image_0.png\"],\"0\":{\"parameter_id\":\"1\",\"parameter_name\":\"Marka\",\"parameter_value\":\"Apple\"},\"1\":{\"parameter_id\":\"2\",\"parameter_name\":\"RAM\",\"parameter_value\":\"3 GB\"},\"2\":{\"parameter_id\":\"3\",\"parameter_name\":\"Depolama\",\"parameter_value\":\"128 GB\"},\"3\":{\"parameter_id\":\"4\",\"parameter_name\":\"Kamera \\u00c7\\u00f6z\\u00fcn\\u00fcrl\\u00fc\\u011f\\u00fc\",\"parameter_value\":\"12 MP\"},\"4\":{\"parameter_id\":\"5\",\"parameter_name\":\"Batarya Kapasitesi\",\"parameter_value\":\"2501-3000 mAh\"},\"5\":{\"parameter_id\":\"6\",\"parameter_name\":\"Renk\",\"parameter_value\":\"Beyaz\"},\"6\":{\"parameter_id\":\"89\",\"parameter_name\":\"Pazarl\\u0131k\",\"parameter_value\":\"Yok\"},\"7\":{\"parameter_id\":\"90\",\"parameter_name\":\"Takas\",\"parameter_value\":\"Yok\"},\"8\":{\"parameter_id\":\"91\",\"parameter_name\":\"Durum\",\"parameter_value\":\"S\\u0131f\\u0131r\"}}', 'Binevler, 27070 Şahinbey/Gaziantep, Türkiye', 45000, 1, 1, 0, '2025-01-16 00:38:19', '2025-01-16 00:38:19', 'iphone-13', 5, 37.0499496000, 37.3290607000);

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `conversation_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `messages_conversation_id_foreign`(`conversation_id`) USING BTREE,
  INDEX `messages_sender_id_foreign`(`sender_id`) USING BTREE,
  INDEX `messages_recipient_id_foreign`(`recipient_id`) USING BTREE,
  CONSTRAINT `messages_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `messages_recipient_id_foreign` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 97 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES (1, 1, 2, 1, 'Merhaba, hala satılık mı?', '2024-12-20 15:54:42', '2024-12-20 15:54:42');
INSERT INTO `messages` VALUES (2, 1, 1, 2, 'evet, halen satılık', '2024-12-20 15:55:27', '2024-12-20 15:55:27');
INSERT INTO `messages` VALUES (3, 1, 1, 2, 'hfghfghfh', '2025-01-12 14:03:59', '2025-01-12 14:03:59');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_10_19_120736_create_categories_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_10_19_121419_create_favorites_table', 1);
INSERT INTO `migrations` VALUES (6, '2024_10_19_123444_create_listings_table', 1);
INSERT INTO `migrations` VALUES (7, '2024_10_19_124415_create_followings_table', 1);
INSERT INTO `migrations` VALUES (8, '2024_10_19_124818_create_reports_table', 1);
INSERT INTO `migrations` VALUES (9, '2024_10_19_125354_create_addresses_table', 1);
INSERT INTO `migrations` VALUES (10, '2024_10_19_130001_create_orders_table', 1);
INSERT INTO `migrations` VALUES (11, '2024_10_19_130333_create_chatboxes_table', 1);
INSERT INTO `migrations` VALUES (12, '2024_11_19_102326_add_profile_picture_to_users_table', 1);
INSERT INTO `migrations` VALUES (13, '2024_11_19_140828_add_slug_to_listings', 1);
INSERT INTO `migrations` VALUES (14, '2024_11_19_155848_add_lat_lng_to_listings_table', 1);
INSERT INTO `migrations` VALUES (15, '2024_11_22_144644_add_google_id_to_users_table', 1);
INSERT INTO `migrations` VALUES (16, '2024_11_22_203805_create_parameters_table', 1);
INSERT INTO `migrations` VALUES (17, '2024_11_24_041402_update_parameters_type', 1);
INSERT INTO `migrations` VALUES (18, '2024_11_28_002048_update_parameters_to_json', 1);
INSERT INTO `migrations` VALUES (19, '2024_12_03_010053_create_conversations_table', 1);
INSERT INTO `migrations` VALUES (20, '2024_12_03_010109_create_messages_table', 1);
INSERT INTO `migrations` VALUES (21, '2024_12_03_015430_add_listing_id_to_conversations', 1);
INSERT INTO `migrations` VALUES (22, '2024_12_19_032208_create_admin_users_table', 1);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `listing_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` double NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for parameters
-- ----------------------------
DROP TABLE IF EXISTS `parameters`;
CREATE TABLE `parameters`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parameter_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 92 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of parameters
-- ----------------------------
INSERT INTO `parameters` VALUES (1, 'Marka', 'Apple', '5');
INSERT INTO `parameters` VALUES (2, 'RAM', '128 MB,256 MB,512 MB,1 GB,2 GB,3 GB,4 GB,6 GB,8 GB,Diğer', '5');
INSERT INTO `parameters` VALUES (3, 'Depolama', '4 GB,8 GB,16 GB,32 GB,64 GB,128 GB,256 GB,512 GB,1TB,Diğer', '5');
INSERT INTO `parameters` VALUES (4, 'Kamera Çözünürlüğü', '2 MP,3 MP,5 MP,8 MP,12 MP,48 MP,Diğer', '5');
INSERT INTO `parameters` VALUES (5, 'Batarya Kapasitesi', '1000-1500 mAh, 1501-2000 mAh, 2001-2500 mAh, 2501-3000 mAh, 3001-3500 mAh, 3501-4000 mAh, 4001-4500 mAh,Diğer', '5');
INSERT INTO `parameters` VALUES (6, 'Renk', 'Altın,Bej,Beyaz,Gri,Gümüş,Kırmızı,Lacivert,Mavi,Mor,Pembe,Sarı,Siyah,Diğer', '5');
INSERT INTO `parameters` VALUES (10, 'Marka', 'Samsung,Xiaomi,Techno,Realme,Reeder,Infinix,Omix,Oppo,General Mobile,Poco,Oukitel,Vivo,Casper,Honor,Huawei,Diğer', '6');
INSERT INTO `parameters` VALUES (11, 'RAM', '1 GB,2 GB,3 GB,4 GB,6 GB,8 GB,12 GB,16 GB,18 GB,Diğer', '6');
INSERT INTO `parameters` VALUES (12, 'Depolama', '4 GB,8 GB,16 GB,32 GB,64 GB,128 GB,256 GB,512 GB,1TB,Diğer', '6');
INSERT INTO `parameters` VALUES (13, 'Kamera Çözünürlüğü', '2 MP,3 MP,5 MP,8 MP,12 MP,48 MP,Diğer', '6');
INSERT INTO `parameters` VALUES (14, 'Batarya Kapasitesi ', '1000-1500,1501-2000,2001-2500,2501-3000,3001-3500,3501-4000,4001-4500,4501-5000,Diğer', '6');
INSERT INTO `parameters` VALUES (15, 'Renk', 'Altın,Bej,Beyaz,Gri,Gümüş,Kahverengi,Kırmızı,Lacivert,Mavi,Metalik,Mor,Pembe,Sarı,Siyah,Turkuaz,Turuncu,Yeşil,Bordo,Haki,Krem,Diğer', '6');
INSERT INTO `parameters` VALUES (16, 'Ekran Türü', 'AMOLED,LCD,E-Ink,IPS LCD,OLED,TFT LCD,Super AMOLED,Dynamic AMOLED,Diğer', '8');
INSERT INTO `parameters` VALUES (17, 'Pil Ömrü', '0-1449,1500-1999,2000-2499,2500-2999,3000-3499,3500-3999,4000-4499,Diğer', '8');
INSERT INTO `parameters` VALUES (18, 'Sensörler', 'Nabız,GPS,SpO2,Adım Sayar,Diğer', '8');
INSERT INTO `parameters` VALUES (19, 'Kayış Malzemesi', 'Silikon,Deri,Metal,Diğer', '8');
INSERT INTO `parameters` VALUES (20, 'Renk', 'Siyah,Beyaz,Yeşil,Kırmızı,Lacivert,Koyu Yeşil,Gri,Mavi,Turuncu,Pembe,Bronz,Gümüş,Altın,Sarı,Bordo,Diğer', '8');
INSERT INTO `parameters` VALUES (21, 'Uyumluluk', 'Samsung,Xiaomi,Techno,Realme,Reeder,Infinix,Omix,Oppo,General Mobile,Poco,Oukitel,Vivo,Casper,Honor,Huawei,Diğer', '9');
INSERT INTO `parameters` VALUES (22, 'Malzeme', 'Silikon,TPU,Sert Plastik,Cam,Metal,Diğer', '9');
INSERT INTO `parameters` VALUES (23, 'Bağlantı Türü\r\n', 'USB-C, Lightning, 3.5mm Jack, Bluetooth,Diğer', '9');
INSERT INTO `parameters` VALUES (24, 'Marka', 'Spigen,Anker,UGREEN,Apple,Diğer', '9');
INSERT INTO `parameters` VALUES (25, 'Renk', 'Altın,Bej,Beyaz,Gri,Gümüş,Kahverengi,Kırmızı,Lacivert,Mavi,Metalik,Mor,Pembe,Sarı,Siyah,Turkuaz,Turuncu,Yeşil,Bordo,Haki,Krem,Diğer', '9');
INSERT INTO `parameters` VALUES (26, 'Tür', 'Kablolu,Kablosuz', '10');
INSERT INTO `parameters` VALUES (28, 'Bağlantı Türü ', 'Bluetooth,3.5mm jack,Lightning,Diğer', '10');
INSERT INTO `parameters` VALUES (29, 'Pil Ömrü', '0-1449,1500-1999,2000-2499,2500-2999,3000-3499,3500-3999,4000-4499,Diğer', '36');
INSERT INTO `parameters` VALUES (30, 'Renk', 'Siyah,Beyaz,Diğer', '10');
INSERT INTO `parameters` VALUES (31, 'Marka', 'Panasonic,Siemens,Gigaset', '11');
INSERT INTO `parameters` VALUES (32, 'Bağlantı Türü ', 'Kablolu,Kablosuz,IP (VoIP)', '11');
INSERT INTO `parameters` VALUES (33, 'Telefon Türü ', 'Masaüstü,Telsiz,IP Telefonu', '11');
INSERT INTO `parameters` VALUES (34, 'Renk', 'Siyah,Beyaz,Mavi,Diğer', '11');
INSERT INTO `parameters` VALUES (35, 'Ekran Boyutu', '15.6 inç,14 inç,16 inç,13.3 inç,17.3 inç,14.1 inç,13.4 inç,15 inç,13 inç,14.5 inç,13.6 inç,12.4 inç,13.5 inç,14.2 inç,10.1 inç,11.6 inç,16.1 inç,17 inç', '42');
INSERT INTO `parameters` VALUES (36, 'Ekran Çözünürlüğü', '1920 x 1080,1920 x 1200,2560 x 1600,1920 x 1280,2560 x 1664,1366 x 768,3024 x 1964,2880 x 1800,3456 x 2234,2880 x 1920,3840 x 2400,2160 x 1440,3200 x 2000,3840 x 2160,1600 x 900,2224 x 1668,2560 x 1440,2880 x 1620,3000 x 2000', '42');
INSERT INTO `parameters` VALUES (37, 'İşlemci', 'Intel Core i5, Intel Core i7, Intel Core i3,AMD Ryzen 7,Intel Core Ultra 7,AMD Ryzen 5,Intel Core i9, Intel Core Ultra 5,Intel Celeron,Apple M3,AMD Athlon,Apple M2,AMD Ryzen 3,Intel Core Ultra 9,Intel Diğer,M4,Apple M1,Apple M3 Pro, AMD Ryzen 9,Apple M3 M', '42');
INSERT INTO `parameters` VALUES (38, 'RAM Kapasitesi', '2 GB,4 GB,8 GB,10 GB, 12 GB,16 GB,18 GB,20 GB, 24 GB,32 GB, 40 GB,48 GB,96 GB,Diğer', '42');
INSERT INTO `parameters` VALUES (39, 'Ekran Kartı', 'Intel Iris Xe,Intel UHD,Dahili,AMD Radeon,NVIDIA GeForce RTX, NVIDIA GeForce MX,Intel HD Graphics,NVIDIA GeForce RTX,NVIDIA RTX, NVIDIA Quadro,Diğer', '42');
INSERT INTO `parameters` VALUES (40, 'İşletim Sistemi', 'Windows, macOS, Linux,FreeDOS,Diğer', '42');
INSERT INTO `parameters` VALUES (41, 'Marka', 'Lenovo,Dell,HP,Asus,Huawei,Casper,Acer,Apple,Monster,MSI,Toshiba,Quadro,Dynabook,Diğer', '42');
INSERT INTO `parameters` VALUES (43, 'Monitör Boyutu', '23.8 inç,27 inç,21.5 inç,24 inç,Monitör Yok,15.6 inç,23 inç,23.6 inç,28 inç,Diğer', '43,45');
INSERT INTO `parameters` VALUES (45, 'İşlemci', '\r\nIntel Core i5,Intel Core i7,Intel Core i3,Intel Celeron,AMD Ryzen 7,Intel Core i9,Intel Xeon,AMD Ryzen 9,AMD Ryzen 5,Intel Pentium,AMD Ryzen 3,M4,AMD Ryzen,Intel Core Ultra 7,Intel Tabanlı,Apple M3,Intel Core 2 Duo,Intel Core 7,Intel Pentium Gold   (1)', '43,45');
INSERT INTO `parameters` VALUES (46, 'RAM Kapasitesi', '2 GB,4 GB,8 GB,10 GB, 12 GB,16 GB,18 GB,20 GB, 24 GB,32 GB, 40 GB,48 GB,96 GB,Diğer', '43,45');
INSERT INTO `parameters` VALUES (47, 'Ekran Kartı', 'Intel Iris Xe,Intel UHD,Dahili,AMD Radeon,NVIDIA GeForce RTX, NVIDIA GeForce MX,Intel HD Graphics,NVIDIA GeForce RTX,NVIDIA RTX, NVIDIA Quadro,Diğer', '43,45');
INSERT INTO `parameters` VALUES (48, 'İşletim Sistemi', 'Windows, macOS, Linux,FreeDOS,Diğer', '43,45');
INSERT INTO `parameters` VALUES (49, 'Toplam Depolama', '4 GB,8 GB,16 GB,32 GB,64 GB,128 GB,256 GB,512 GB,1TB,Diğer', '43,45');
INSERT INTO `parameters` VALUES (50, 'Depolama Türü', 'SSD,HDD', '43,45');
INSERT INTO `parameters` VALUES (51, 'Marka', 'Apple,Samsung,Xiaomi,Techno,Realme,Reeder,Infinix,Omix,Oppo,General Mobile,Poco,Oukitel,Vivo,Casper,Honor,Huawei,Diğer', '44');
INSERT INTO `parameters` VALUES (52, 'Ekran Boyutu', '8\",10.1\",11\",12.9\",Diğer', '44');
INSERT INTO `parameters` VALUES (55, 'RAM Kapasitesi', '1 GB,2 GB,4 GB,8 GB,12 GB,Diğer', '44');
INSERT INTO `parameters` VALUES (56, 'Depolama Kapasitesi ', '8 GB,16 GB,32 GB, 64 GB, 128 GB,Diğer', '44');
INSERT INTO `parameters` VALUES (57, 'İşletim Sistemi', 'iPadOS, Android, Windows', '44');
INSERT INTO `parameters` VALUES (58, 'Renk', 'Siyah, Beyaz, Mavi,Diğer', '44');
INSERT INTO `parameters` VALUES (59, 'Türü', 'Lazer,Inkjet,Matrix,Fotokopi,Diğer', '46');
INSERT INTO `parameters` VALUES (60, 'Baskı Çözünürlüğü', '1200x1200 dpi, 4800x1200 dpi,Diğer', '46');
INSERT INTO `parameters` VALUES (61, 'Bağlantı Türü', 'USB,Wi-Fi,Ethernet,Bluetooth,', '46');
INSERT INTO `parameters` VALUES (62, 'Renkli Baskı', 'Siyah-Beyaz,Renkli,Siyah-Beyaz ve Renkli, Diğer', '46');
INSERT INTO `parameters` VALUES (63, 'Kağıt Kapasitesi', '100 Sayfa, 250 Sayfa, 500 Sayfa', '46');
INSERT INTO `parameters` VALUES (64, 'Kartuş / Toner', 'Mürekkep Kartuşlu, Lazer Tonerli,Diğer', '46');
INSERT INTO `parameters` VALUES (65, 'Renk', 'Siyah,Beyaz,Mavi,Diğer', '46');
INSERT INTO `parameters` VALUES (66, 'RAM Kapasitesi', '1 GB,2 GB,4 GB,8 GB,16 GB,32 GB,64 GB', '85');
INSERT INTO `parameters` VALUES (67, 'Marka', 'Intel,AMD,Corsair,MSI,Asus,Gigabyte,Samsung,Kingston', '47');
INSERT INTO `parameters` VALUES (68, 'Depolama Kapasitesi', '128 GB,250 GB,500 GB,1 TB, 2 TB', '86');
INSERT INTO `parameters` VALUES (69, 'İşlemci Çekirdek Sayısı', '2,4,6,810,21,14,16,18,20,Diğer', '92');
INSERT INTO `parameters` VALUES (70, 'Depolama Türü', 'SSD,HDD,M.2,NVMe', '86');
INSERT INTO `parameters` VALUES (71, 'İşlemci Modeli', 'Intel Core 12.Nesil,AMD Ryzen 5.Nesil,AMD Ryzen 7.Nesil,Intel Core 14.Nesil,Intel Core 10.Nesil,Intel Core 11.Nesil,Intel Core 13.Nesil,AMD Ryzen 3.Nesil,AMD Ryzen 8.Nesil,Intel Core 1.Nesil,AMD A 7.Nesil,AMD Ryzen 4.Nesil,Yok,AMD Ryzen 2.Nesil,AMD Ryzen ', '92');
INSERT INTO `parameters` VALUES (72, 'Ekran Kartı Modeli', 'Asus,MSI,Gigabyte,Galax,Sapphire,Turbox,PNY,Xaser,Colorful,Hi-Level,NVIDIA,Gainward,PowerColor,XFX,İzoly,Inno3D,AMD,Zotac,Esonic,Palit,Zeiron,Lenovo,Monster,Afox,Biostar,Diğer', '90');
INSERT INTO `parameters` VALUES (73, 'Ekran Kartı Bellek Kapasitesi', '8 GB,4 GB,12 GB,2 GB,16 GB,20 GB,6 GB,24 GB,Diğer', '90');
INSERT INTO `parameters` VALUES (74, 'Bağlantı Türü', 'USB 3.0, USB 3.1, USB-C, SATA, PCIe, Thunderbolt', '104,105,106,108');
INSERT INTO `parameters` VALUES (75, 'Depolama Kapasitesi', '64 GB,128 GB,256 GB,32 GB,16 GB,512 GB,1024 GB,8 GB,4 GB,1000 GB,2 GB,2048 GB, 1TB,2TB,3TB,4TB,6TB,8TB,Diğer', '104,105,106,108');
INSERT INTO `parameters` VALUES (76, 'USB Bağlantı Türü', 'USB 2.0, USB 3.0, USB 3.1, USB-C', '104,105,106,108');
INSERT INTO `parameters` VALUES (77, 'Renk', 'Siyah,Beyaz,Mavi,Diğer', '49');
INSERT INTO `parameters` VALUES (78, 'Tür', 'SSD, HDD, USB Bellek, NAS, RAID,Diğer', '49');
INSERT INTO `parameters` VALUES (79, 'Tür', 'Modem, Router, Access Point, Switch,Diğer', '48');
INSERT INTO `parameters` VALUES (80, 'Marka', 'TP-Link, Netgear, Asus, Huawei, Cisco,Diğer', '48');
INSERT INTO `parameters` VALUES (81, 'Bağlantı Türü\r\n', 'DSL, VDSL, Fiber, 4G, 5G, Kablosuz (Wi-Fi),Diğer', '48');
INSERT INTO `parameters` VALUES (82, 'Wi-Fi Standartı\r\n', 'Wi-Fi 5 (802.11ac), Wi-Fi 6 (802.11ax), Wi-Fi 6E,Diğer', '48');
INSERT INTO `parameters` VALUES (83, 'Ethernet Port Sayısı\r\n', '0,2,4,8,Diğer', '48');
INSERT INTO `parameters` VALUES (84, 'USB Bağlantı Desteği', 'Evet,Hayır', '48');
INSERT INTO `parameters` VALUES (85, 'VPN Desteği', 'Evet,Hayır', '48');
INSERT INTO `parameters` VALUES (87, 'İşlemci Markası', 'Intel,AMD,Nvidia,Diğer', '92');
INSERT INTO `parameters` VALUES (88, 'İşlemci Frekansı', '3.5 GHz,3.7 GHz,3.6 GHz,3.8 GHz,3.4 GHz,2.1 GHz,4.2 GHz,2.5 GHz,3 GHz,4.3 GHz,2.6 GHz,2.9 GHz,3.2 GHz,4.1 GHz,4.5 GHz,4.7 GHz,2 GHz,2.2 GHz,2.7 GHz,3.3 GHz,3.9 GHz,4.8 GHz,5 GHz,6 GHz,Diğer', '92');
INSERT INTO `parameters` VALUES (89, 'Pazarlık', 'Var,Yok', '-1');
INSERT INTO `parameters` VALUES (90, 'Takas', 'Var,Yok', '-1');
INSERT INTO `parameters` VALUES (91, 'Durum', 'Sıfır, Az Kullanım, Orta Kullanım, Çok Kullanım', '-1');

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for reports
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reporter_id` int(11) NOT NULL,
  `reported_id` int(11) NOT NULL,
  `report_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('07GKUNdSWabLahLtYDk1s15ZJGpYeRnvfKcH6wjB', NULL, '141.101.98.53', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXRWanRaQUdmS1l1a2g0cTh4NXhldnNZOWdzZzVpT2FjSTFsanFLZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026219);
INSERT INTO `sessions` VALUES ('0EwNEWwEDdmMZX1ZWWyjsgGxwEXDsvUHYzcKZh15', NULL, '172.69.43.208', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1BTeGxiUHBEMVdwQzBHT2lQZmdPN2ZJeE12dE16eXlBNGVVTXllTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNy1zYW1zdW5nLWdhbGF4eS1idWRzLTIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026150);
INSERT INTO `sessions` VALUES ('2SOwEbQ6ldV3eC1sHtk5RMf4BorrGJwmkvHUOxam', NULL, '141.101.98.21', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickc3YWFRYllCc21BNUlvSDI4bnhROWQzUEl6SmNUNWRrdVdJNlNlTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNC1haXJwb2RzLXBybyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026158);
INSERT INTO `sessions` VALUES ('34yoYfn99aK0X2sE1lZXs2o8OsqhK2eCIsPpnoHv', NULL, '172.70.46.123', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienpuTFlXb3N4dXo1a0g4em1IUFlHRHZYRThuYzloVnp1aVpkU2F3SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNS14Ym94LWNvbnRyb2xsZXItZWxpdGUtMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737044052);
INSERT INTO `sessions` VALUES ('4yjS3SP3GfenCAXiRotOcfIzqQha62tGE5izvHhY', NULL, '172.69.150.138', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0 (Edition ASUS)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEpyckVRNkVFUTl0bm50OFBzSk9hdW1WSUhpb3FnMEhtYlI0VmNlZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736980047);
INSERT INTO `sessions` VALUES ('520M1wEkQz77r4C38DVXMWkKht3NosAU8gEuM9IK', NULL, '141.101.98.83', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWRrTVFvenJSUm43aUpEYm1NY3RTRVF1WFJFdGNCU0k3Ym5sdHo2TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci81Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026079);
INSERT INTO `sessions` VALUES ('5AqrHk6uyXYU3Ii1lpQUbVx9m2dueeCXIR6VqwuJ', NULL, '172.70.162.213', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXU2NWd2eUpVMG05OVBFeFdIUTNtT0pNVVVJcjRIVVFOaXFGTFA4USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi81LXRlbGVmb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026180);
INSERT INTO `sessions` VALUES ('6xQuTltjoj5pWTfPJGNJ5YcFrEHo79SPq37VGLeL', NULL, '162.158.102.199', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2VkdVM3cGZnUUhiUXYweEhTSW5sdU44SlNYUkN1cGNDQk16QjVkQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNS14Ym94LWNvbnRyb2xsZXItZWxpdGUtMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737044052);
INSERT INTO `sessions` VALUES ('7ldVHcm63ttwL2TwgQjgt6WfRMKRJJeoL882g6PT', NULL, '172.70.91.163', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUlqbnVMZzRhem5haUg2d3FwMFVmbTlZc0V4SnBTTlJFV2RIOEE5RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9hcmFidWwudXMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026076);
INSERT INTO `sessions` VALUES ('7rZywoqw55zd9A3dsnXPhaSbMYlHUXQ62TbMtBDI', NULL, '141.101.98.250', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWo1V1dyaldsT0hhY213Sk9USHdQdkJEMG1qUXBNalNVZGt2NHpVdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026106);
INSERT INTO `sessions` VALUES ('813lPpRcovrKAhFRKSvpPKchjbrTZIYlXY8SBmlb', NULL, '162.158.79.73', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHZKeUI1N1cxQTFUb2dMSndzVWRSaDdjWk9Gc2FNeUJLUEQ3a1ZheiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci8xMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737020267);
INSERT INTO `sessions` VALUES ('8fOlzjFGDk6dVc4i00gGyZrXiwI33NY4Y7HtRZ8c', NULL, '141.101.98.34', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmVtaE5nV3lOZTFReUF2S2Iya1lBc2RrbnAyS25Ub203VGYxdUIyQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xMC1jYW5vbi1tYXhpZnktaWI0MDUwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026166);
INSERT INTO `sessions` VALUES ('8zQcJQs7EtTsbTWHFNO8eD4jAvBL5m30oqy3G4Me', NULL, '172.70.90.149', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjFjSGFHSHBkem1xamVBa3NWcTZvQnJqejhvNFNpdTJ4Y1prdnE4cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026103);
INSERT INTO `sessions` VALUES ('AgK0AxEpaP00o52ZwEEeim7EkYlvrJjbHXPxHe2G', NULL, '162.158.90.122', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Nicecrawler/1.1; +http://www.nicecrawler.com/) Chrome/90.0.4430.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicENndkJTTDNJaUJoaWFFRDZ2ZFpMa1l3bTB2YTJRcUJwWWlnSUdaciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737022840);
INSERT INTO `sessions` VALUES ('aMAJqJ4KAQVazf8LKCyCTipxc7mJEmtCXVKbtUMy', NULL, '172.70.206.211', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/80.0.3987.132 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTY5a2dXaU9XZlpja1FDOEg3S1ZTUkZ0c0xzeUxKU3A0TDQxM1pWayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737022845);
INSERT INTO `sessions` VALUES ('aPxEHuwwTagw1RNsjunjJt68WqvqmdHXRGLyepWT', NULL, '172.68.245.230', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWlSRHkzRkhFNVplallzRjBYTlc4TGx2VXhzMlAxakVxTnhGNU12bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80NiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736986483);
INSERT INTO `sessions` VALUES ('aqgRU4l8hrckp4qEKj68qZrOhyYqo2PcK8sH8TI0', NULL, '172.70.160.187', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVJFUWRhdnFxUmNoSmhha0FhS3N2cnpweGZlZDRJQWJJWGxIRDJWSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci84Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026086);
INSERT INTO `sessions` VALUES ('AS7Qub66plqhGU7rSUGjV22kivQN8ux6od3KTGfQ', NULL, '172.70.91.184', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnY4MUVGaFJRZFhHM0VuMkFjQUhRMEFCRXo4SVQwN0hkOFZ0dmxlRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8yMS1zYW1zdW5nLWdhbGF4eS1maXQyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026138);
INSERT INTO `sessions` VALUES ('aUnXromxeP7rZH6mIgmjw5MRJMsYN3TuO9zhnSpS', NULL, '172.68.186.150', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV210WXlRcjBjQW5EWENqY0l4Qzg0WUhCcUo5eXZMNU1VcFlDd2FDNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xOC1hc3VzLXJvZy1zdHJpeC1nMTUtMjAyMi1nNTEzcm0taGYyNjUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026147);
INSERT INTO `sessions` VALUES ('BSRiZz4olXFsc9PYYDKoYuyP9CJCTPhWb5CWC8vH', NULL, '172.69.43.193', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGtpc1lyRWRGdG1wRk5XS2lqZHhuVkxocUY0emxjaUpHQnFyQUhWWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvMTAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026216);
INSERT INTO `sessions` VALUES ('Cr2VYAGqFRtK0pofQS4AFKIZk9ZxspvMdtVVO5CG', NULL, '172.70.100.47', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRW1lV1VNMUl0SkJDend1aE9WeDV4UFZXR2R2ZFA2cWRlaU9ONFNFZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737032739);
INSERT INTO `sessions` VALUES ('csLalU5AN83GIVhPfQYWCa4lvcL4VnGNalfc5PY5', NULL, '172.71.182.106', 'Python/3.11 aiohttp/3.11.11', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTNIWlJzeER0ZEhjbDJXUmtTOXhGNGcwTDBFcHBta3V6ZTlWcjFEeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736980948);
INSERT INTO `sessions` VALUES ('ctbGWXxadoag6tRTSUEUX9LXLdxRj50gw6NC8E3f', NULL, '141.101.98.81', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1VQdkNOa3ZsQzdkWEt3UUxLelprRjdiblEzTExjVTIxQkV2QlRUViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80NiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026113);
INSERT INTO `sessions` VALUES ('CTT3p1J0YOSSFERosWrSugOEvxF6UCVUbYFQwSRu', NULL, '172.69.194.174', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFM3eXhoSmhPd1Z1STM1VzFJWUs5TURPMUs4b1g0aG5jRnk3YU9WYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci83OCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026126);
INSERT INTO `sessions` VALUES ('dovCsKdjI5JGKTUChLsSxFFD1WqDmMBhiFxVX4Gi', NULL, '172.70.163.164', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlRiN2t4a1BIT0FXZk9sRldaUkdIMlptSVlLaUpINW9QbkRmRmExYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjI6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi82LXNhaGliaW5kZW4tc2F0aWxpay1tZC1iYXJjZWxvbmEtbXVzbHVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026178);
INSERT INTO `sessions` VALUES ('dYTTcPEGmIPxzTCdvqu2pzttfBpagqY8YV571ZnE', NULL, '172.70.179.102', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieW5TRUF5VlAwUmZYeXg4RFVEckxWNkx2b3Bwa25UTnFtdDFlS1VMQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737027269);
INSERT INTO `sessions` VALUES ('eMG62kCvwCRSYafPKfBXHeuR01zLqiZZePlFGCkK', NULL, '172.71.26.121', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXVPYUlkcWVkZ2d2MUZQZFEyTVA5QkhpbkJoeTJPNFg3UUcyaGIzWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8zLWlwaG9uZS0xMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026195);
INSERT INTO `sessions` VALUES ('eMKfImnCpV9DoGHwwSEQvN6S4l42e3etbM1IW6TG', NULL, '172.69.195.198', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlR1SFlvSjdGaHdRdGZQMXZlc0dCOFJOczZTWkFhd1h4d2RydUVuSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xMy1yZWVkZXItZDE5LWRpenVzdHUtYmlsZ2lzYXlhciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026161);
INSERT INTO `sessions` VALUES ('EojmNa4lJ6gpQ3FjBZwRq7QR8CfhAEc2aKUHOHlv', NULL, '172.71.103.168', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0 (Edition ASUS)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzhRVzZnR0kyUUN3eVpoVTZLYUsxNVpHeXFyOXNYUlRiZFdsUGo1WCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO319', 1736969415);
INSERT INTO `sessions` VALUES ('FxJPqzQd5QcgXtDbU2nTjtsvp1hDEq4a6T2yCeZb', NULL, '172.70.91.191', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3l0UzRRM011YWIyMWFtUGk0bXNIdUpRWlVVT2Q3cVJSSnJqaXFvRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi80LWxvZ2l0ZWNoLW14LWtleXMtcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026183);
INSERT INTO `sessions` VALUES ('hHnVpyzgj1EfPSzMjTrXRwMbvWWOzgAQrxon8QeO', NULL, '172.70.46.123', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1FDUEREMnpUYkhROUJXdmxqcFNWQUJVczF6ZFQ0dE53UmRrdFhpdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNS14Ym94LWNvbnRyb2xsZXItZWxpdGUtMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737044049);
INSERT INTO `sessions` VALUES ('i16RuGP8BZYtDLxMYRJPPbscYmYaMGf0rjS7QLkB', NULL, '172.69.43.221', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjY3ZGdINkhXclBYelNDb2ZRMUdJZnhwYWV4S2xwVW1XU0dkQ3FvWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvNyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026222);
INSERT INTO `sessions` VALUES ('INF4ZMIBvSgguAY4Ol1AVcYyTUKGZdsZCXCxqili', NULL, '162.158.222.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjVVVUl0MXZkdXVjTXRud3U1NGM3cjRiVmYxRXRnSm9nSFR0TXdYNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736994947);
INSERT INTO `sessions` VALUES ('iwK52jpHCUWht5MaPSJybo61N6B19WuLD7oIH2O7', NULL, '172.70.126.110', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkFHdE1reHhhalhBZURtaDNsVEt3a2NHMmwxdjlyUWtxRzBUU1pPUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737032726);
INSERT INTO `sessions` VALUES ('JbyCtxEpThtQhxoNAcS1H30sH68oxBLVHEVdlqJH', NULL, '141.101.98.151', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUdFTEJNdDVXR1FQSUhsWm5xOGVXUjVaREFFVTBGVElrSnBpSTN6VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xMi1pcGhvbmUtMTUtcHJvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026164);
INSERT INTO `sessions` VALUES ('JhdW9TbXqKXJO2ENSgog7mSIy8e9qeauw9VHO67Y', NULL, '172.70.38.131', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkhLY0RycDRxcnVHU01vV29PWUhUWHVIaUNHQ1R6dWVyWUZHc0lkaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci81Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737006879);
INSERT INTO `sessions` VALUES ('JLSRICPpgZeuTJRS4obXDYWt4cZrFH8hvu3W7G7v', NULL, '141.101.98.90', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWRtSkxRUTN6NzQ1alc2dXlmYVlVd2VhT1RDQ3RlazZ2amJUbldVMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNi1zYW1zdW5nLWdhbGF4eS1zMjQtYmx1ZS1lZGl0aW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026152);
INSERT INTO `sessions` VALUES ('kcajABdzYh589JVrqfSf7rDsir28BHFO4kyreuda', NULL, '172.70.91.70', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDdhemk5bkZsamdmYkZXdkwyYVB1WUZCckZaYmwyd3pZZkM0ZklObyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8yNC1rb2Rhay1lYXN5c2hhcmUtYzUzMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026129);
INSERT INTO `sessions` VALUES ('KG0EFbgLImACORtQuV6sYNY2u9T4LniQjW0uXzRp', NULL, '172.69.182.157', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQ0IzWFdOSlhGNVgzUUF5cG5LcDlkZkg0YlhoTUZYQlBxRnQ3MEJZdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJsYXQiO3M6MTA6IjM3LjAzMjg1MzgiO3M6MzoibG5nIjtzOjEwOiIzNy4zMTg3NzA1IjtzOjc6ImFkZHJlc3MiO3M6NDc6IkfDvG5leWtlbnQsIDI3NDcwIMWeYWhpbmJleS9HYXppYW50ZXAsIFTDvHJraXllIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0ODoiaHR0cDovL2FyYWJ1bC51cy9pbGFuLzE1LXhib3gtY29udHJvbGxlci1lbGl0ZS0yIjt9fQ==', 1737044042);
INSERT INTO `sessions` VALUES ('KRtXeoJjYVqkZwlL9HA0ec6GDI2xahbKEXqXbGxU', NULL, '141.101.99.14', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHRaYjNEWENCSjM1SGkwSUwwNjNYSFo2V2c1NWw1SEt1SzJXTkFlUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvMTgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026210);
INSERT INTO `sessions` VALUES ('kryKhaR0LEkPfDcGuvs7249jhwyBhkwGiOIqGk8g', NULL, '172.71.124.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnFqekRRM0h4bzVudnFZYVlYVEFwMzJpbnBQb2pvSnhBRlVEdHJjWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737012488);
INSERT INTO `sessions` VALUES ('kyIcQOD3lbIoTDc5M51FAIlAAVQdBrOY6ogsDIrq', NULL, '172.69.195.116', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid29LSEgwRTdQdmtSUk5nYXhEUFpGcTh6ZGpFeWlwUndJdjNvZGFsaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi85LTItZWwtc29ueS1ibHVldG9vdGgta3VsYWtsaWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026169);
INSERT INTO `sessions` VALUES ('LKcfkUziaRyh5NGWo7oQtRyUZKOqDXfERlFvLZAK', NULL, '172.70.85.203', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGx2QzZrNU1mNnNQN3k3Z3cyY3JWZW1ZV3VINjcwWWJUTHFISW1VUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737019168);
INSERT INTO `sessions` VALUES ('LuoqlVIGnAo4iJdkB6Exdwmev32exoLKEZcrN1nq', NULL, '172.71.195.119', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTNkVDBFZ3l1cThuWTRSWHpUODkxTWg4dkJHZFhiQXFvN3BhOEYxVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737018258);
INSERT INTO `sessions` VALUES ('mDrt0i3R3RbK674v5YEEztTEhPWH9w9Lq4wcIMir', NULL, '141.101.98.17', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkpLUUgydTJDRzV4aFRBTlhjMGh2cmFoT3M2bnpaNWJSWUtCZ0hqYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80MiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026099);
INSERT INTO `sessions` VALUES ('nbTzglhTpkDRFnKg2Ufn3OhbUYF2jGKvNZljG6Qo', NULL, '172.68.192.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0 (Edition ASUS)', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUXR2ZkxOQTFVYVRITnVQa2VQcEZZT01PclZpaWxNNWpnc2RQVlVsMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737025631);
INSERT INTO `sessions` VALUES ('nQNaYOqbIr5O1F1xZPCI96NXpUSjeQ9Xf8Yvgh1v', NULL, '172.71.26.32', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTFNDemc4TkZFWFI3anF6bTZLaEJvcW94YVFWa29rZk10NFBneGlJViI7czo1OiJzdGF0ZSI7czo0MDoiNGpvUHFjaWJBUXRpZHJKV0xZdHhiaTNzT0tyMlpsZFI0dlZBemJ3USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9hcmFidWwudXMvbG9naW4vZ29vZ2xlL3JlZGlyZWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026186);
INSERT INTO `sessions` VALUES ('o9DWoa5z2D59d3ngIZAM7aPlqXbdFvpWxauTK1sE', NULL, '172.68.245.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHZDRlhyakpmNWpqSXhZcGhaMVdmcHowSUI2Zm8zNkRNdzVYTnBtRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736992775);
INSERT INTO `sessions` VALUES ('ocYvz9UjVWopbINDFqLvRdq6Apm7HESjCNa5yG4R', NULL, '172.71.26.29', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXFFeHB5czl1YW5qZ2tYb1libGh0TTRKTmFTdGhPOGs5ZWFjbkI2VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8yMy1wb2xhcm9pZC03ODAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026132);
INSERT INTO `sessions` VALUES ('oHwwnB3cmr4N5pBvQOE1CLSxQucHA5NTikNdxaJy', NULL, '172.69.195.78', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlIyYjQyMTZvUUlSMGVONnp0eDYyeWlkbW55SjhuTHY1VENjcThUcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026192);
INSERT INTO `sessions` VALUES ('p6RT62oTSi0zrEzIChAthlGEaP4Zc860KsgQ30it', NULL, '172.69.194.239', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVRQejExNVhEUUNzOEY3ZVBneW5CRFlyS3lVQ3puM21WSHZwcGx1ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xNS14Ym94LWNvbnRyb2xsZXItZWxpdGUtMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026155);
INSERT INTO `sessions` VALUES ('pDg4CVHg744Z40BZXYFaGd6b3RywbmAbYNS2jjPC', NULL, '141.101.98.79', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXA1aGhQSWN5ODhiOVA5Y05wWmhJTVpJSWRaWEJjRldnNDNCaFJpTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026225);
INSERT INTO `sessions` VALUES ('Ph4zbCc1j3YMrpyjRBN1j50iWnoNOomB4XUSbKky', NULL, '172.70.163.90', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEw4RHVjVDZsNTRrdGpleHFHaFQ3RzdZdkNINXA5YWtSbmo2WmZQZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8xOS13ZXN0ZXJuLWRpZ2l0YWwtbXlwYXNzcG9ydC1oZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026144);
INSERT INTO `sessions` VALUES ('Pk4lhjpbSeXdv02rK6xgiU2aQJsPJeFAIq0W0d68', NULL, '172.71.222.212', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzRaV0k5eHBJd0hLc2xFNm1Jb21EUVZrclZIcWI1SjNlRWlqeXVrTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737038870);
INSERT INTO `sessions` VALUES ('PKfKuun1KPQo1RBwVPAjJiXaA8OuBNbVH0ogJ59w', NULL, '172.69.194.243', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFZqOFpjWnNSUE1Oek1PNlN5WGlEUWJ0Wm5xSDlRWlRCUURpS3FzWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvMTkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026208);
INSERT INTO `sessions` VALUES ('PqAfr0gtMqQ0rQh27vfnDEt6S4QaEfCCwETz2T0X', NULL, '172.69.195.98', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoialZyWnRxMUZJOW5KV2Jic1RZOG8wc3RaQmxoVlJKUlVJY0FMSmprRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi83LXN1bml4LWt1bGFrbGlrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026175);
INSERT INTO `sessions` VALUES ('qdZfy2Hdu72OKICvjxSYJFRdRRSIylFzIEuMT6kN', NULL, '172.70.162.99', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSEpiNG5FbkV6Z0xwTWxQNVFjZnlaVFVPOGIxOXoyUkFNbnRBZmFMQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026227);
INSERT INTO `sessions` VALUES ('qephFAStWWhz99EeZYCOY8rML58yoFfKVVSuZqZz', NULL, '172.69.195.113', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFZncklxZ3llbVE5UFkwT2pXbHU1ZWZKYXhtNURRejZrbDU1Y1VXRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80OSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026123);
INSERT INTO `sessions` VALUES ('qtohL4rxnafrQb0hAvbJL8OgNtXWuMHZHsZzsPV5', NULL, '172.69.194.132', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGY2VkVBcDl5WE4yWUVkR1FtT2lXUFpjeVQzVEZMcm91MHFMVDdMTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026204);
INSERT INTO `sessions` VALUES ('Rfn8POjaYfyrznwVcgbCDTtmP4n1CDvzPZR1Nm3x', NULL, '172.70.160.151', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHlmSnoxeklzV01uVVZjNHl3UFBVTzhOMENzTE5WU0FGV0ZNSmEzTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026073);
INSERT INTO `sessions` VALUES ('RkLAu7GXKtWIJOcCi2fJcocH9nJNbhyjhG9XLzr2', NULL, '172.70.206.85', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; Nicecrawler/1.1; +http://www.nicecrawler.com/) Chrome/90.0.4430.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFFPN2RGYjM2WVh3aFVkd2pqcGQxaTd5SllyZ1dxemI1bzhSVjBqbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737022875);
INSERT INTO `sessions` VALUES ('s8syUzowmGNKAbtXei6nrp3liMmX56GVfcDlyE2C', NULL, '172.69.195.217', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1hWWFh3Z2ZYYTRWaXlkMk9Xc0RTaVJHa0g3dngyc2lwd2hJQUdzNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci8zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026202);
INSERT INTO `sessions` VALUES ('sg3N999itzTxwFwukpGRrvHgev3kSFvR7XuPGRqm', NULL, '172.70.100.34', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUlKWWJqZEZOS015SUkzYzJaTlczcEoxbndJQUlqb1JLQ2F2MEptOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737032732);
INSERT INTO `sessions` VALUES ('sZI5XRQXO4TzrdsfQ2y2TDwAQkTz1w0mRgQ08jXB', NULL, '141.101.98.241', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQlZTTTBRdVlEMDNSNnBlcTJqcVFLRDFxbDhacTl3MUZ4bmJtNDJwdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci85Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026089);
INSERT INTO `sessions` VALUES ('T5C1JDPcCVJdZeXpoi41QHqKW3IkuJQcsd9dkOn6', NULL, '172.70.94.194', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidkhzbEVLUnRwakpONzU1MExKN1ppN1JyaGl1NnY4eUE3TjZIVHFyUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1736979477);
INSERT INTO `sessions` VALUES ('TgBgYmVwVFY58UgWfJmrhuMMMzgQvehDnSX74aR6', NULL, '172.69.43.172', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0pwQjY0WEVVTDZuOUcxY0t1RnhsemdRdFBTZVNUSTVFaE9SZW9tMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026083);
INSERT INTO `sessions` VALUES ('TP5SZdn90HaLrZX9UjIiaifnKgfnTiwZeBcwGRwL', NULL, '172.68.186.133', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGl6MnZnVnFydVlvNU53T2U3cXVUeTYzS2xPRzlMaDFkcmt4ZzI3WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci8xMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026096);
INSERT INTO `sessions` VALUES ('TwSJneV6eBKYAvUtBg15n9ybemXdotX2BdHZ3Pie', NULL, '172.70.162.201', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWNVUXdBMHIwTkQzYkcwb0ZjYVZTSW9qNzNJMzViUjhXWkRqMURpbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8yMC1wb2xvLXNtYXJ0LW1vdXNlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026141);
INSERT INTO `sessions` VALUES ('U3UD1trfqu5ACOAi8PyK9oFU5vYZbKRdpnzacuzP', NULL, '172.70.160.151', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3lGSDNNRmpCeVl4QXR0REduZzB3YzR3azJVU0t6bHlqdXJ3TnRjWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9hcmFidWwudXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737026070);
INSERT INTO `sessions` VALUES ('uJsUs2hqKmwQ7B2TbQlEiF8mL891QL7br2QxCKL7', NULL, '172.70.160.179', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSEVwNE9JREM0SktMVE5WWlVrbHdVcFlTWUZCbFA5OHhqNTVFbzhuYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80NSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026110);
INSERT INTO `sessions` VALUES ('UTVLB6aRUuEhWfblAhFt5uWgXRg2MhWr8G6Y1dCE', NULL, '172.69.195.119', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUk9BQkh1NVhiYzdNV3ZyMFRzWll0MllSUmFmMXJScGlzamtnR0poVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci8xMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026092);
INSERT INTO `sessions` VALUES ('vuR8yzoQRfOGw7gXUiN4Jp18KZKNtMO5KfCsaJrD', NULL, '172.69.194.207', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRW4ydUJoQndZdnZGNHBXNW5yaGtrQ1h4cnFHNERLdUR1Y3pWazNDdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80NyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026116);
INSERT INTO `sessions` VALUES ('XZhPJ5Oo3BxdDRl3rf58JDJt41NMARHOSaKELUqZ', 1, '172.69.199.221', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YToxMDp7czo2OiJfdG9rZW4iO3M6NDA6InZjemN1ZFpFRTR0QzJ0VDJxQUR2d0U4ODc0V2dCZ0JqQkdEMDg0bm4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoibGF0IjtzOjEwOiIzNy4wNDk5NDk2IjtzOjM6ImxuZyI7czoxMDoiMzcuMzI5MDYwNyI7czo3OiJhZGRyZXNzIjtzOjQ1OiJCaW5ldmxlciwgMjcwNzAgxZ5haGluYmV5L0dhemlhbnRlcCwgVMO8cmtpeWUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjE2OiJodHRwOi8vYXJhYnVsLnVzIjt9czoxMToiYWRtaW5fbG9naW4iO2I6MTtzOjg6ImFkbWluX2lkIjtpOjE7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE0OiJjcmVhdGVfbGlzdGluZyI7YTowOnt9fQ==', 1736977294);
INSERT INTO `sessions` VALUES ('Y8d75QC9JOJopB5PqVM4G7VTmpaBDhKk3gu25TkB', NULL, '172.70.162.7', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFlVR3RuVmo5R0tHNGFwZW9xNGVsY1Q1WGdkT2piWWFNcVB5S0lZMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci80OCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026120);
INSERT INTO `sessions` VALUES ('YwwqLgCotJbOMaizCB1kceoxAWf56uqumxes38UZ', NULL, '172.69.194.193', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0dpeVJKNjdLUmUxSFdGZVhHWm5yTTg4dUlCTFhpdnhNNEJ2SDUyUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9hcmFidWwudXMva3VsbGFuaWNpLXByb2ZpbGkvOSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026213);
INSERT INTO `sessions` VALUES ('ZhjimV2aRsPJNQYh7Tpf4JWtmlkVkmYSkO0FNexD', NULL, '172.69.195.79', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVdZQmlZV1hpdkp3aW1iZ1NDZWlsdlhFMEJIb0Zpa0VoaFdzZXg5dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi8yMi1taW5vbHRhLXBvY2tldC1hdXRvcGFrLTQ2MC10eC0xMTBtbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026135);
INSERT INTO `sessions` VALUES ('ZkDFt81XVmZX9MUvqCoMGK7wiqdqSc6je6lNgu54', NULL, '172.70.162.186', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2pLd0ZybXc2NkF3aGxhOEQwWnRSb0Y3Q1VjN2ZGZkt5UWNQOGgwOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9hcmFidWwudXMvaWxhbi84LWxvZ2l0ZWNoLXNlc3Npei1tb3VzZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737026172);
INSERT INTO `sessions` VALUES ('zPCkAFJjmofbF9v34LkyfUxfCTvLPUOu2QQ0zU26', NULL, '172.70.163.181', 'Mozilla/5.0 (compatible; SeekportBot; +https://bot.seekport.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGdSWEtidHVtSzBXM2JJbXRrbXlZbG1ndHRGbHhCcGJNNjQ4NDlRYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9hcmFidWwudXMvaWxhbmxhci8yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737026198);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `profile_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '//cdn.arabul.us/images/default.png',
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Berkay Gündüz', 'bby.gndz@gmail.com', NULL, '$2y$12$RopOYzX./O0d5vF/N5SD.Odl9IPAR6MMW3No9iq7YPO2W5js0BKiC', NULL, '2024-12-20 14:51:57', '2024-12-20 14:51:57', 'https://lh3.googleusercontent.com/a/ACg8ocK-5K80y1F6RAcgvMHbNQWOuQIjURsRji6CgqFeLsnAZXvFXQ=s96-c', '102483485784565949008');
INSERT INTO `users` VALUES (2, 'Berkay Gündüz 2', 'bby.gndz2@gmail.com', NULL, '$2y$12$agzNXYQS91lztcv2wZ0HKekYrA93ghiu4riLh4xIWHN8Vg8IK0/J6', NULL, '2024-12-20 15:53:07', '2024-12-20 15:53:07', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (3, 'Vahşi Kelebek', 'selambebek@benkele.bek', NULL, '$2y$12$bdfBrCv2dOB/nWNbwHCarum3dcs4wCXzYonK7.bUFoqArzFVo33g6', NULL, '2025-01-12 13:09:27', '2025-01-12 13:09:27', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (4, 'Bahar Yildiz', 'baharmevsimq@gmail.com', NULL, '$2y$12$B62Gv7g3DzwIq.N1FbeeMuAOlrSZiFlFXILW6q0H.rZ1GnJafg9vS', NULL, '2025-01-12 13:53:13', '2025-01-12 13:53:13', 'https://lh3.googleusercontent.com/a/ACg8ocITcJO7MNqpdExtalI3qvnfU-1iHOyizLwlYXheeyeHSOe3nA=s96-c', '100808810204228811436');
INSERT INTO `users` VALUES (5, 'Mevsim Yıldız', 'mevodido@gmail.com', NULL, '$2y$12$OYlRmEo5r5lwaxsVDHC/aODvzMK6SsGcEiPPtotKDnBUgSDZhriyq', NULL, '2025-01-12 13:55:47', '2025-01-12 13:55:47', 'https://lh3.googleusercontent.com/a/ACg8ocLfz3n9rQ9SkVVeMyCRmM9IfgNBaEaRV3H6Qji1TXzMwgl51Q=s96-c', '110761683052662915851');
INSERT INTO `users` VALUES (6, 'Ayşegül Yılmaz', 'nani.yozgat@gmail.com', NULL, '$2y$12$KEtBk5PpLXnINUs.wfDsIuwuAp2pgWU.ny7T7Jo6IIe3SFK1W/1R.', NULL, '2025-01-12 14:11:53', '2025-01-12 14:38:56', '/image/1736681936.jpg', NULL);
INSERT INTO `users` VALUES (7, 'Arda', 'ilovepatatos@gmail.com', NULL, '$2y$12$C6iDKHK.CQ.djMHBsoesyea4Tfzb2p4.V3JT1uzdPz1w0WzkUR9HO', NULL, '2025-01-12 14:11:56', '2025-01-12 14:11:56', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (8, 'Satuk Buğra Malkoçoğlu', 'satukbugra.2003@gmail.com', NULL, '$2y$12$XiSAqAXHMt4F/KMrh4H9Gu0Pk.wI86phQGTnMnPdAVBaarITNaShe', NULL, '2025-01-12 14:29:09', '2025-01-12 14:29:09', 'https://lh3.googleusercontent.com/a/ACg8ocL77SPQwoWq-C9vo5jEtNzDNWgDKPP5-zLjktnylB0d2xkKpBFF=s96-c', '115492493165650513490');
INSERT INTO `users` VALUES (9, 'Helin', 'helin@gmail.com', NULL, '$2y$12$kR0opdK79yYBALIpCdyOSuvTlZw7wYf6Kx7uMDgQqiE.D/rAvZdn2', NULL, '2025-01-12 16:57:38', '2025-01-12 16:57:38', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (10, 'Melis Bozdağ', 'melisbozdag169@gmail.com', NULL, '$2y$12$JQSoq727a08HM5WBBz.abulE4enCJYtvZHrSNNVDUCSQ4yyH1mydO', NULL, '2025-01-12 17:14:18', '2025-01-12 17:14:18', 'https://lh3.googleusercontent.com/a/ACg8ocI-JpaEvDJ3mRrhGtgtP1B7pPbq8zSOCymi3LasxlQe46jHIQ=s96-c', '101646892509770062886');
INSERT INTO `users` VALUES (11, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'nelefir262@wirelay.com', NULL, '$2y$12$33wadNmEvpgWdxF6VeQsC.ibzxLCPSd1ac..H/BnAYEQf9vzFFfQS', NULL, '2025-01-12 18:09:48', '2025-01-12 18:09:48', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (12, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'a@a.a', NULL, '$2y$12$l3MRmr/meJGz0ilQco7ry.EyZchlIJ4iRYvT1QGO2JcvTPvOo2zca', NULL, '2025-01-12 18:12:16', '2025-01-12 18:12:16', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (13, '<img src=\"x\" onerror=\"alert(\'XSS\')\">', 'test@example.com\' OR \'1\'=\'1', NULL, '$2y$12$gNoNhpwN4T0FFthsdyFf6e1dAQk44Et5Yu.Oip47pxn3gt5YHWoxK', NULL, '2025-01-12 18:13:51', '2025-01-12 18:17:41', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (14, '12345', 'nomoni6665@pariag.com', NULL, '$2y$12$npXrU/DGqBz7j1cwg1b3TOe2UsjvOrOHi3WjuEeRdmt32Lk2JKj.q', NULL, '2025-01-12 18:19:51', '2025-01-12 18:21:15', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (15, '|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||', '@.', NULL, '$2y$12$8Y6xhSuXpl5Ocvx5dupt2eHHIpvxaHBIQEj6AT/hGVeQX1vi6po7a', NULL, '2025-01-12 18:50:49', '2025-01-12 18:55:15', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (16, 'ads', 'sad@asd', NULL, '$2y$12$cqvIiNSqK2opDtRcqYuhqeWuv9zWkuqb2APLPmA7hHt77ic83gvjq', NULL, '2025-01-12 19:10:08', '2025-01-12 19:10:08', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (17, 'Mevlüt Mete Yakar', 'mmyyakar@gmail.com', NULL, '$2y$12$WOf4ImAoQOxaXK/wR6zbj.y5bWWq5ZOAxqDpi9j90hTnyDmvoG9PG', NULL, '2025-01-12 19:59:43', '2025-01-12 19:59:43', 'https://lh3.googleusercontent.com/a/ACg8ocJn5RwoQxt-S_jKpZ78ge9bn5c0qkLO6_M5DT7daW6IpJmqKVdAJw=s96-c', '107992397706259365216');
INSERT INTO `users` VALUES (18, 'Kaan', 'kaan@gmail.com', NULL, '$2y$12$cNsZmYvos65edezlpwo6JO5m021PlASFC/2woLct4iIfOx0T5PvAu', NULL, '2025-01-13 15:03:27', '2025-01-13 15:03:27', '//cdn.arabul.us/images/default.png', NULL);
INSERT INTO `users` VALUES (19, 'Alp', 'alptuna57@gmail.com', NULL, '$2y$12$US2a4WgGWNJ7SEOgPknpceXrkp4DRPFU9Af/OsiFogwX0udPFyVX.', NULL, '2025-01-13 15:12:28', '2025-01-13 15:12:28', 'https://lh3.googleusercontent.com/a/ACg8ocIoVD8btnfj3r4S3OZteG65o50Bw_Xl5oCz01a-XU9lWIGcgA=s96-c', '113726822300249018701');
INSERT INTO `users` VALUES (20, 'Yusuf abacık', 'yusufabacik2@gmail.com', NULL, '$2y$12$uVP77vrnRKLmaCfFpok8zugIBGXmvPKPJkUOJKFTZkUQYtmcbVX0C', NULL, '2025-01-15 10:16:41', '2025-01-15 10:16:41', '//cdn.arabul.us/images/default.png', NULL);

SET FOREIGN_KEY_CHECKS = 1;
