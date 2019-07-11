/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.7.19 : Database - connectionary
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`connectionary` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `connectionary`;

/*Table structure for table `connectionary` */

DROP TABLE IF EXISTS `connectionary`;

CREATE TABLE `connectionary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_exchange_location` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_start_time` datetime NOT NULL,
  `service_end_time` datetime NOT NULL,
  `service_provider_gps` tinyint(4) DEFAULT NULL,
  `service_receiver_gps` tinyint(4) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `request` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `experience` */

DROP TABLE IF EXISTS `experience`;

CREATE TABLE `experience` (
  `experience_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `organization_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `job_level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` date NOT NULL,
  `currently_working` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`experience_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `kyc` */

DROP TABLE IF EXISTS `kyc`;

CREATE TABLE `kyc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permanent_district` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_municipality_vdc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_ward_no` int(11) NOT NULL,
  `permanent_street` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_house_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_landline_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_mobile_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temporary_district` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temporary_municipality_vdc` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temporary_ward_no` int(11) NOT NULL,
  `temporary_street` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temporary_house_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temporary_landline_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temporary_mobile_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship_no` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_issued_district` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_issued_date` date NOT NULL,
  `grandfather_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_time` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `available_spots` int(11) DEFAULT NULL,
  `minimum_interval` decimal(10,0) DEFAULT NULL,
  `maximum_interval` decimal(11,0) DEFAULT NULL,
  `price_per` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `service_service_type` */

DROP TABLE IF EXISTS `service_service_type`;

CREATE TABLE `service_service_type` (
  `service_service_type` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`service_service_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `service_type` */

DROP TABLE IF EXISTS `service_type`;

CREATE TABLE `service_type` (
  `service_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`service_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
