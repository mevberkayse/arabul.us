/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : application

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 24/11/2024 04:08:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
INSERT INTO `parameters` VALUES (5, 'Batarya Kapasitesi', '1400,1150,1219,1420,1432,1140,1510,1560,1810,2915,1715,2750,1624,1960,2900,1821,2691,2716,2658,3714,2942,3110,3046,3969,1821,2815,2227,3687,3227,2406,3095,4352,2018,3279,4325,3200,4323,3349,4383,3274,4422,3561,4674,3582,4685,Diğer', '5');
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

INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (1, -1, 'Telefon ve Aksesuar', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (2, -1, 'Bilgisayar ve Tablet', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (3, -1, 'Çevre Birimleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (5, 1, 'IOS Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (6, 1, 'Android Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (8, 1, 'Giyilebilir Teknoloji', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (9, 1, 'Telefon Aksesuarları', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (10, 1, 'Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (11, 1, 'Telsiz ve Masaüstü Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (12, 6, 'Samsung', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (13, 6, 'Xiaomi', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (14, 6, 'Techno', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (15, 6, 'Realme', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (16, 6, 'Reeder', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (17, 6, 'Infinix', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (18, 6, 'Omix', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (19, 6, 'General Mobile', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (20, 6, 'Poco', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (21, 6, 'Oukitel', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (22, 6, 'Vivo', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (23, 6, 'Casper', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (24, 6, 'Honor', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (25, 6, 'Huawei', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (26, 6, 'Diğer (Belirtiniz)', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (27, 8, 'Akıllı Saat', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (28, 8, 'Akıllı Bileklik', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (29, 8, 'Sanal & Artırılmış Gerçeklik', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (30, 8, 'Akıllı Gözlük', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (31, 9, 'Taşınabilir Şarj Aleti', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (32, 9, 'Ekran Koruyucu', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (33, 9, 'Telefon Kılıfı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (34, 9, 'Şarj Aleti', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (35, 9, 'Kablo', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (36, 10, 'Bluetooth Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (37, 10, 'Kulak İçi Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (38, 10, 'Kulak Üstü Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (39, 11, 'Tuşlu Telefon', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (40, 11, 'Gigaset', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (41, 11, 'Panasonic', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (42, 2, 'Laptop', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (43, 2, 'Masaüstü Bilgisayar', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (44, 2, 'Tablet', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (45, 2, 'Oyuncu Bilgisayarı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (46, 3, 'Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (47, 3, 'Bilgisayar Bileşenleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (48, 3, 'Modem ve Ağ Ürünleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (49, 3, 'Veri Depolama', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (50, 42, 'Laptop Çantası', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (51, 42, 'Soğutucu', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (52, 42, 'Adaptör', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (53, 42, 'Stand', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (54, 42, 'Ekran Koruyucu', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (55, 43, 'All-In-One', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (56, 43, 'Hazır Sistemler', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (57, 43, 'Mini Masaüstü', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (58, 43, 'Apple iMac', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (59, 44, 'Tablet Kılıfı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (60, 44, 'Ekran Koruyucu', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (61, 44, 'Klavye', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (62, 44, 'Tablet Kalemi', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (63, 44, 'Tablet Standı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (64, 45, 'Notebook', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (65, 45, 'Monitör', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (66, 45, 'Kulaklık', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (67, 45, 'Fare', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (68, 45, 'Klavye', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (69, 45, 'Joystick', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (70, 45, 'Gamepad', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (71, 45, 'Hoparlör', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (72, 46, 'Kartuş & Toner', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (73, 46, 'Lazer Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (74, 46, 'Mürekkepli Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (75, 46, 'Tanklı Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (76, 46, 'Fotoğraf Yazıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (77, 46, 'Barkod ve Etiket', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (78, 3, 'Çevre Birimleri', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (79, 78, 'Kablo, Çevirici, Çoklayıcı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (80, 78, 'Mouse', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (81, 78, 'Monitör, Ekran', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (82, 78, 'Klavye', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (83, 78, 'Mousepad', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (84, 78, 'Klavye & Mouse Seti', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (85, 47, 'Ram', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (86, 47, 'SSD', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (87, 47, 'Anakart', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (88, 47, 'Soğutma', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (89, 47, 'Güç Kaynağı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (90, 47, 'Ekran Kartı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (91, 47, 'Bilgisayar Kasası', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (92, 47, 'İşlemci', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (93, 47, 'Harddisk', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (94, 48, 'Network Kabloları', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (95, 48, 'Router', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (96, 48, 'Wireless Adaptör', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (97, 48, 'Menzil Genişletici', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (98, 48, 'Network Aksesuarları', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (99, 48, 'Access Point (AP)', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (100, 48, 'ADSL Modem', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (101, 48, 'Network Kartları', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (102, 48, 'VDSL Modem', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (103, 48, 'Powerline', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (104, 49, 'USB Bellek', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (105, 49, 'Taşınabilir SSD', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (106, 49, 'Taşınabilir HDD', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (107, 49, 'DVD/HDD Kasası', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (108, 49, 'Çoklu Depolama Ünitesi', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (109, 49, 'Disk Kılıfı', '2024-10-21 12:38:54', '2024-10-21 12:38:54');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (110, 49, 'Aksesuar', '2024-11-20 16:21:53', '2024-11-20 16:21:53');
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (111, 42, 'Laptop', NULL, NULL);
INSERT INTO `categories`(`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES (112, 45, 'Masaüstü', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
