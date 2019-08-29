/*
Navicat MySQL Data Transfer

Source Server         : platformeges
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : platformeges

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-08-29 13:37:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cookie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_user` int(10) unsigned DEFAULT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `discount_percentage` decimal(5,2) NOT NULL,
  `coupon_id` int(10) unsigned DEFAULT NULL,
  `shipping_charges` decimal(8,2) NOT NULL,
  `net_total` decimal(8,2) NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `round_off` decimal(8,2) NOT NULL,
  `payable` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES ('6', 'XG26hxpI1FAdBkPSkG14', null, '376716.00', '0.00', '0.00', null, '0.00', '376716.00', '75343.20', '452059.20', '0.00', '452059.20', '2019-08-20 18:43:10', '2019-08-20 19:35:25');
INSERT INTO `carts` VALUES ('7', '4ejsAgXjNGkN8ZTSU4fh', null, '624.00', '0.00', '0.00', null, '0.00', '624.00', '124.80', '748.80', '0.00', '748.80', '2019-08-21 09:48:27', '2019-08-21 17:25:39');
INSERT INTO `carts` VALUES ('12', 'jZ5UiuJDZvBBYKWTjugO', null, '42000.00', '0.00', '0.00', null, '0.00', '42000.00', '8400.00', '50400.00', '0.00', '50400.00', '2019-08-28 17:05:14', '2019-08-28 17:05:18');
INSERT INTO `carts` VALUES ('13', '7aXiCH20mKBt3UeUKhLQ', '27', '54000.00', '0.00', '0.00', null, '0.00', '54000.00', '10800.00', '64800.00', '0.00', '64800.00', '2019-08-28 21:09:40', '2019-08-28 21:11:47');

-- ----------------------------
-- Table structure for cart_items
-- ----------------------------
DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_items_cart_id_index` (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cart_items
-- ----------------------------
INSERT INTO `cart_items` VALUES ('16', '6', 'App\\Model\\produit', '12', 'eee', '78.00', 'a0baeded4dba578c97405ffeedf1a4fd.jpg', '11', '2019-08-20 18:43:10', '2019-08-20 19:35:22');
INSERT INTO `cart_items` VALUES ('17', '6', 'App\\Model\\produit', '11', 'FGDFS', '75000.00', '30fb1bf25a0b335e2ef583864d0ae5bf.jpg', '5', '2019-08-20 18:43:10', '2019-08-20 19:35:24');
INSERT INTO `cart_items` VALUES ('18', '6', 'App\\Model\\produit', '13', 'eee', '78.00', '89410fdfea1427ed1de1bb9de4ec805b.jpg', '7', '2019-08-20 18:43:10', '2019-08-20 19:35:20');
INSERT INTO `cart_items` VALUES ('19', '6', 'App\\Model\\produit', '14', 'eee', '78.00', '732c2185d09dba706b33d486423a4737.jpg', '4', '2019-08-20 19:27:59', '2019-08-20 19:35:17');
INSERT INTO `cart_items` VALUES ('20', '7', 'App\\Model\\produit', '14', 'eee', '78.00', '732c2185d09dba706b33d486423a4737.jpg', '4', '2019-08-21 09:48:27', '2019-08-21 17:24:40');
INSERT INTO `cart_items` VALUES ('21', '7', 'App\\Model\\produit', '13', 'eee', '78.00', '89410fdfea1427ed1de1bb9de4ec805b.jpg', '2', '2019-08-21 09:48:41', '2019-08-21 17:23:11');
INSERT INTO `cart_items` VALUES ('22', '7', 'App\\Model\\produit', '12', 'eee', '78.00', 'a0baeded4dba578c97405ffeedf1a4fd.jpg', '2', '2019-08-21 16:17:08', '2019-08-21 17:25:39');
INSERT INTO `cart_items` VALUES ('35', '12', 'App\\Model\\produit', '20', 'ibmolo', '12000.00', '37ed1e16d91c8e8593e16bbf3cdeca1a.jpg', '1', '2019-08-28 17:05:14', '2019-08-28 17:05:14');
INSERT INTO `cart_items` VALUES ('36', '12', 'App\\Model\\produit', '22', 'Amouni', '30000.00', '119e2ec71123429bf12f086c0d89d535.jpg', '1', '2019-08-28 17:05:19', '2019-08-28 17:05:19');
INSERT INTO `cart_items` VALUES ('37', '13', 'App\\Model\\produit', '20', 'ibmolo', '12000.00', '37ed1e16d91c8e8593e16bbf3cdeca1a.jpg', '2', '2019-08-28 21:09:40', '2019-08-28 21:09:41');
INSERT INTO `cart_items` VALUES ('38', '13', 'App\\Model\\produit', '22', 'Amouni', '30000.00', '119e2ec71123429bf12f086c0d89d535.jpg', '1', '2019-08-28 21:09:57', '2019-08-28 21:09:57');

-- ----------------------------
-- Table structure for categorie
-- ----------------------------
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categorie
-- ----------------------------
INSERT INTO `categorie` VALUES ('1', 'woodin', '2019-08-23 10:13:43', '2019-08-27 08:43:16');
INSERT INTO `categorie` VALUES ('2', 'visco', '2019-08-27 06:11:53', '2019-08-27 06:11:53');

-- ----------------------------
-- Table structure for commande
-- ----------------------------
DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `taxe` decimal(8,2) NOT NULL,
  `prix_total` decimal(8,2) NOT NULL,
  `etat_commande_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commande_users_id_foreign` (`users_id`),
  KEY `commande_etat_commande_id_foreign` (`etat_commande_id`),
  CONSTRAINT `commande_etat_commande_id_foreign` FOREIGN KEY (`etat_commande_id`) REFERENCES `etat_commande` (`id`),
  CONSTRAINT `commande_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of commande
-- ----------------------------
INSERT INTO `commande` VALUES ('7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '27', '42800.00', '256800.00', '1');
INSERT INTO `commande` VALUES ('8', '2019-08-26 17:17:08', '2019-08-26 17:17:08', '9', '37000.00', '222000.00', '1');

-- ----------------------------
-- Table structure for etat_commande
-- ----------------------------
DROP TABLE IF EXISTS `etat_commande`;
CREATE TABLE `etat_commande` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` enum('Livréé','En cours','Annuler') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of etat_commande
-- ----------------------------
INSERT INTO `etat_commande` VALUES ('1', 'En cours', '2019-08-26 16:54:10', '2019-08-26 16:54:12');

-- ----------------------------
-- Table structure for fourniseur
-- ----------------------------
DROP TABLE IF EXISTS `fourniseur`;
CREATE TABLE `fourniseur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fourniseur_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of fourniseur
-- ----------------------------

-- ----------------------------
-- Table structure for lignecommande
-- ----------------------------
DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE `lignecommande` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `produit_id` int(10) unsigned NOT NULL,
  `commande_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qts` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_produitcommande_produit_id_foreign` (`produit_id`),
  KEY `type_produitcommande_commande_id_foreign` (`commande_id`),
  CONSTRAINT `type_produitcommande_commande_id_foreign` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`),
  CONSTRAINT `type_produitcommande_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lignecommande
-- ----------------------------
INSERT INTO `lignecommande` VALUES ('5', '20', '7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '2');
INSERT INTO `lignecommande` VALUES ('6', '21', '7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '1');
INSERT INTO `lignecommande` VALUES ('7', '22', '7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '1');
INSERT INTO `lignecommande` VALUES ('8', '24', '7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '1');
INSERT INTO `lignecommande` VALUES ('9', '27', '7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '4');
INSERT INTO `lignecommande` VALUES ('10', '26', '7', '2019-08-26 10:39:25', '2019-08-26 10:39:25', '1');
INSERT INTO `lignecommande` VALUES ('11', '22', '8', '2019-08-26 17:17:09', '2019-08-26 17:17:09', '2');
INSERT INTO `lignecommande` VALUES ('12', '24', '8', '2019-08-26 17:17:09', '2019-08-26 17:17:09', '4');
INSERT INTO `lignecommande` VALUES ('13', '21', '8', '2019-08-26 17:17:09', '2019-08-26 17:17:09', '1');
INSERT INTO `lignecommande` VALUES ('14', '27', '8', '2019-08-26 17:17:09', '2019-08-26 17:17:09', '1');
INSERT INTO `lignecommande` VALUES ('15', '25', '8', '2019-08-26 17:17:09', '2019-08-26 17:17:09', '1');

-- ----------------------------
-- Table structure for lignepromotion
-- ----------------------------
DROP TABLE IF EXISTS `lignepromotion`;
CREATE TABLE `lignepromotion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `produit_id` int(10) unsigned NOT NULL,
  `promotion_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_produitpromotion_produit_id_foreign` (`produit_id`),
  KEY `type_produitpromotion_promotion_id_foreign` (`promotion_id`),
  CONSTRAINT `type_produitpromotion_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`),
  CONSTRAINT `type_produitpromotion_promotion_id_foreign` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lignepromotion
-- ----------------------------

-- ----------------------------
-- Table structure for livraison
-- ----------------------------
DROP TABLE IF EXISTS `livraison`;
CREATE TABLE `livraison` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of livraison
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('3', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('4', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('5', '2019_07_18_221634_create_commande_table', '2');
INSERT INTO `migrations` VALUES ('6', '2019_07_18_222500_create_produit_table', '2');
INSERT INTO `migrations` VALUES ('7', '2019_07_18_223344_create_typeproduit_table', '2');
INSERT INTO `migrations` VALUES ('8', '2019_07_18_224201_create_livraison_table', '3');
INSERT INTO `migrations` VALUES ('9', '2019_07_18_224504_create_modelivraison_table', '3');
INSERT INTO `migrations` VALUES ('10', '2019_07_18_224810_create_payement_table', '3');
INSERT INTO `migrations` VALUES ('11', '2019_07_18_225201_create_modepayement_table', '3');
INSERT INTO `migrations` VALUES ('12', '2019_07_18_225431_create_fourniseur_table', '3');
INSERT INTO `migrations` VALUES ('13', '2019_07_18_225801_create_promotion_table', '4');
INSERT INTO `migrations` VALUES ('14', '2019_07_19_094128_create_type_client_table', '4');
INSERT INTO `migrations` VALUES ('16', '2019_07_23_111546_create_type_produitfourniseur_table', '6');
INSERT INTO `migrations` VALUES ('17', '2019_07_23_112242_create_type_produitpromotion_table', '6');
INSERT INTO `migrations` VALUES ('18', '2019_07_23_102758_create_type_produitcommande_table', '7');
INSERT INTO `migrations` VALUES ('21', '2019_08_19_170630_alter_typeproduit_table', '8');
INSERT INTO `migrations` VALUES ('22', '2019_08_20_095256_ajouter_colonne_image_aux_produit', '9');
INSERT INTO `migrations` VALUES ('23', '2017_12_21_120348_create_carts_table', '10');
INSERT INTO `migrations` VALUES ('24', '2017_12_21_120815_create_cart_items_table', '10');
INSERT INTO `migrations` VALUES ('25', '2019_08_22_161928_rename_tables', '11');
INSERT INTO `migrations` VALUES ('26', '2019_08_22_170212_add_ajouter_to_users_table', '12');
INSERT INTO `migrations` VALUES ('27', '2019_08_22_172301_add_ajouter_to_commande_table', '13');
INSERT INTO `migrations` VALUES ('28', '2019_08_22_182412_alter_commande_table', '14');
INSERT INTO `migrations` VALUES ('29', '2019_08_22_183442_add_lignecoommande_table', '14');
INSERT INTO `migrations` VALUES ('30', '2019_08_22_185511_alter_client_table', '15');
INSERT INTO `migrations` VALUES ('31', '2019_08_22_191833_add_produit_table', '16');
INSERT INTO `migrations` VALUES ('32', '2019_08_22_203256_drop_table_categorie', '17');
INSERT INTO `migrations` VALUES ('35', '2019_08_22_203404_create_table_categorie', '18');
INSERT INTO `migrations` VALUES ('36', '2019_08_22_203617_add_foreign_key_produit', '19');
INSERT INTO `migrations` VALUES ('37', '2019_08_23_111119_add_lignecoommande_table', '20');
INSERT INTO `migrations` VALUES ('38', '2019_08_23_200910_alter_cmd_delete_prixtotal', '21');
INSERT INTO `migrations` VALUES ('39', '2019_08_23_202505_alter_cmd_add_prixtotal', '22');
INSERT INTO `migrations` VALUES ('40', '2019_08_23_204157_alter_lignecommande_remove', '23');
INSERT INTO `migrations` VALUES ('41', '2019_08_26_082126_create_table__etat_commande', '24');
INSERT INTO `migrations` VALUES ('42', '2019_08_26_132112_create_etat_commande_table', '25');
INSERT INTO `migrations` VALUES ('43', '2019_08_26_132751_alter_cmd_add_id_etatcommande', '26');
INSERT INTO `migrations` VALUES ('44', '2019_08_29_102610_alter_cmd_add_qts', '27');

-- ----------------------------
-- Table structure for modelivraison
-- ----------------------------
DROP TABLE IF EXISTS `modelivraison`;
CREATE TABLE `modelivraison` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livraison_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modelivraison_livraison_id_foreign` (`livraison_id`),
  CONSTRAINT `modelivraison_livraison_id_foreign` FOREIGN KEY (`livraison_id`) REFERENCES `livraison` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of modelivraison
-- ----------------------------

-- ----------------------------
-- Table structure for modepayement
-- ----------------------------
DROP TABLE IF EXISTS `modepayement`;
CREATE TABLE `modepayement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `libe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payement_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `modepayement_payement_id_foreign` (`payement_id`),
  CONSTRAINT `modepayement_payement_id_foreign` FOREIGN KEY (`payement_id`) REFERENCES `payement` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of modepayement
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for payement
-- ----------------------------
DROP TABLE IF EXISTS `payement`;
CREATE TABLE `payement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of payement
-- ----------------------------

-- ----------------------------
-- Table structure for produit
-- ----------------------------
DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nouveau` tinyint(1) NOT NULL DEFAULT '1',
  `enpromotion` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie_id` int(10) unsigned NOT NULL,
  `qts` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produit_categorie_id_foreign` (`categorie_id`),
  CONSTRAINT `produit_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of produit
-- ----------------------------
INSERT INTO `produit` VALUES ('20', 'ibmolo', '12000', 'C:\\Users\\Damienne\\AppData\\Local\\Temp\\php2957.tmp', '1', '0', '2019-08-22 02:17:47', '2019-08-29 11:05:56', '1', '0');
INSERT INTO `produit` VALUES ('21', 'Viada', '25000', 'C:\\Users\\Damienne\\AppData\\Local\\Temp\\php3146.tmp', '1', '0', '2019-08-22 02:19:13', '2019-08-29 12:43:00', '1', '0');
INSERT INTO `produit` VALUES ('22', 'Amouni', '30000', 'C:\\Users\\Damienne\\AppData\\Local\\Temp\\php80ED.tmp', '1', '0', '2019-08-22 02:20:48', '2019-08-29 12:43:19', '1', '0');
INSERT INTO `produit` VALUES ('24', 'vicota', '15000', 'cedb3337d86f5740d1dd66b63a4e07b5.jpg', '1', '0', '2019-08-22 14:01:20', '2019-08-22 14:01:20', '1', '0');
INSERT INTO `produit` VALUES ('25', 'presidante', '15000', '583b4dc8afac1ece834f4cda1fad02fb.jpg', '1', '0', '2019-08-22 14:07:50', '2019-08-22 14:07:50', '1', '0');
INSERT INTO `produit` VALUES ('26', 'Fines', '20000', 'e9078ab0798c2e6e5fc99f4be5961969.jpg', '1', '0', '2019-08-22 14:19:38', '2019-08-22 14:19:38', '1', '0');
INSERT INTO `produit` VALUES ('27', 'Fabioa', '25000', 'b55d3c0701ce57b2df11ddc121a9f041.jpg', '1', '0', '2019-08-22 14:45:36', '2019-08-22 14:45:36', '1', '0');
INSERT INTO `produit` VALUES ('28', 'lavida', '10000', '2b0672c298a3641e5cc39c0388e76bf4.jpg', '1', '0', '2019-08-27 08:23:16', '2019-08-27 08:23:16', '2', '0');
INSERT INTO `produit` VALUES ('29', 'qqqqq', '111111', 'dbdec11388b67b86b2cfddaa24c6112a.jpg', '1', '0', '2019-08-27 09:54:06', '2019-08-27 09:54:06', '1', '0');
INSERT INTO `produit` VALUES ('30', 'Delicia', '10000', 'c8e1d0eb3d7ff8389ee7e87f025ae27a.jpg', '1', '0', '2019-08-27 13:26:32', '2019-08-27 13:26:32', '1', '0');

-- ----------------------------
-- Table structure for produitfourniseur
-- ----------------------------
DROP TABLE IF EXISTS `produitfourniseur`;
CREATE TABLE `produitfourniseur` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `produit_id` int(10) unsigned NOT NULL,
  `fourniseur_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_produitfourniseur_produit_id_foreign` (`produit_id`),
  KEY `type_produitfourniseur_fourniseur_id_foreign` (`fourniseur_id`),
  CONSTRAINT `type_produitfourniseur_fourniseur_id_foreign` FOREIGN KEY (`fourniseur_id`) REFERENCES `fourniseur` (`id`),
  CONSTRAINT `type_produitfourniseur_produit_id_foreign` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of produitfourniseur
-- ----------------------------

-- ----------------------------
-- Table structure for promotion
-- ----------------------------
DROP TABLE IF EXISTS `promotion`;
CREATE TABLE `promotion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `montant` double NOT NULL,
  `nbr` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of promotion
-- ----------------------------

-- ----------------------------
-- Table structure for table__etat_commande
-- ----------------------------
DROP TABLE IF EXISTS `table__etat_commande`;
CREATE TABLE `table__etat_commande` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of table__etat_commande
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prenom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('9', 'innocent', 'innocentroot@gmail.com', null, '$2y$10$34f0F3G0b44XOKjXSSfgWerAMI6aLYIS4d/pOvQuTfMKa0EE4xkxq', null, '2019-08-16 16:08:07', '2019-08-16 16:08:07', '', '0', '', '', '', '');
INSERT INTO `users` VALUES ('26', 'irrrrrsuzuzuzuu', 'nouglozehdamienne@gmail.com', null, '$2y$10$Mz19oS3LH9LtX39I4zJOyO.8mJqks1HLoOhh21dPv3d/XZeZgrZzW', null, '2019-08-19 11:13:37', '2019-08-19 11:13:37', '', '0', '', '', '', '');
INSERT INTO `users` VALUES ('27', 'parfaite', 'parfaite@llf.com', null, '$2y$10$Gui2rP8DsWJ0x.hIoA4Z/.3rERxyx3iNRivwT56FPOzJKbLngClPW', null, '2019-08-19 11:31:05', '2019-08-19 11:31:05', '', '0', '', '', '', '');
INSERT INTO `users` VALUES ('28', 'dadi', 'dadi@gmail.com', null, '$2y$10$anYNX.YTYFVqRQ7niibhsuA0IC9ENewEjoCmPxhnn3h9yiDkAEE4S', null, '2019-08-20 12:20:13', '2019-08-20 12:20:13', '', '0', '', '', '', '');
