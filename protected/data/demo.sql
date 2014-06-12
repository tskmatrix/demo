-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2014 at 05:28 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbii_choice`
--

CREATE TABLE IF NOT EXISTS `bbii_choice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `choice` varchar(200) NOT NULL,
  `poll_id` int(10) unsigned NOT NULL,
  `sort` smallint(6) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_choice_poll` (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_forum`
--

CREATE TABLE IF NOT EXISTS `bbii_forum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `public` tinyint(4) NOT NULL DEFAULT '1',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `moderated` tinyint(4) NOT NULL DEFAULT '0',
  `sort` smallint(6) NOT NULL DEFAULT '0',
  `num_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `num_topics` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post_id` int(10) unsigned DEFAULT NULL,
  `poll` tinyint(4) NOT NULL DEFAULT '0',
  `membergroup_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_ipaddress`
--

CREATE TABLE IF NOT EXISTS `bbii_ipaddress` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(39) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `source` tinyint(4) DEFAULT '0',
  `count` int(11) DEFAULT '0',
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip_UNIQUE` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_log_topic`
--

CREATE TABLE IF NOT EXISTS `bbii_log_topic` (
  `member_id` int(10) unsigned NOT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  `forum_id` int(10) unsigned NOT NULL,
  `last_post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`member_id`,`topic_id`),
  KEY `idx_log_forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_member`
--

CREATE TABLE IF NOT EXISTS `bbii_member` (
  `id` int(10) unsigned NOT NULL,
  `member_name` varchar(45) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `personal_text` varchar(255) DEFAULT NULL,
  `signature` text,
  `avatar` varchar(255) DEFAULT NULL,
  `show_online` tinyint(4) DEFAULT '1',
  `contact_email` tinyint(4) DEFAULT '0',
  `contact_pm` tinyint(4) DEFAULT '1',
  `timezone` varchar(80) DEFAULT NULL,
  `first_visit` timestamp NULL DEFAULT NULL,
  `last_visit` timestamp NULL DEFAULT NULL,
  `warning` tinyint(4) DEFAULT '0',
  `posts` int(10) unsigned DEFAULT '0',
  `group_id` tinyint(4) DEFAULT '0',
  `upvoted` smallint(6) DEFAULT '0',
  `blogger` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `flickr` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `metacafe` varchar(255) DEFAULT NULL,
  `myspace` varchar(255) DEFAULT NULL,
  `orkut` varchar(255) DEFAULT NULL,
  `tumblr` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `wordpress` varchar(255) DEFAULT NULL,
  `yahoo` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `moderator` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `member_name_UNIQUE` (`member_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_membergroup`
--

CREATE TABLE IF NOT EXISTS `bbii_membergroup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `min_posts` smallint(6) NOT NULL DEFAULT '-1',
  `color` varchar(6) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_message`
--

CREATE TABLE IF NOT EXISTS `bbii_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sendfrom` int(10) unsigned NOT NULL,
  `sendto` int(10) unsigned NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read_indicator` tinyint(4) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `inbox` tinyint(4) NOT NULL DEFAULT '1',
  `outbox` tinyint(4) NOT NULL DEFAULT '1',
  `ip` varchar(39) NOT NULL,
  `post_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sendfrom_INDEX` (`sendfrom`),
  KEY `sendto_INDEX` (`sendto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_poll`
--

CREATE TABLE IF NOT EXISTS `bbii_poll` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `expire_date` date DEFAULT NULL,
  `allow_revote` tinyint(4) NOT NULL DEFAULT '0',
  `allow_multiple` tinyint(4) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_poll_post` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_post`
--

CREATE TABLE IF NOT EXISTS `bbii_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `topic_id` int(10) unsigned DEFAULT NULL,
  `forum_id` int(10) unsigned DEFAULT NULL,
  `ip` varchar(39) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `approved` tinyint(4) DEFAULT NULL,
  `change_id` int(10) unsigned DEFAULT NULL,
  `change_time` timestamp NULL DEFAULT NULL,
  `change_reason` varchar(255) DEFAULT NULL,
  `upvoted` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id_INDEX` (`user_id`),
  KEY `topic_id_INDEX` (`topic_id`),
  KEY `create_time_INDEX` (`create_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_session`
--

CREATE TABLE IF NOT EXISTS `bbii_session` (
  `id` varchar(128) NOT NULL,
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_setting`
--

CREATE TABLE IF NOT EXISTS `bbii_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_topic`
--

CREATE TABLE IF NOT EXISTS `bbii_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_post_id` int(10) unsigned NOT NULL,
  `last_post_id` int(10) unsigned NOT NULL,
  `num_replies` int(10) unsigned NOT NULL DEFAULT '0',
  `num_views` int(10) unsigned NOT NULL DEFAULT '0',
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `sticky` tinyint(4) NOT NULL DEFAULT '0',
  `global` tinyint(4) NOT NULL DEFAULT '0',
  `moved` int(10) unsigned NOT NULL DEFAULT '0',
  `upvoted` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `forum_id_INDEX` (`forum_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_upvoted`
--

CREATE TABLE IF NOT EXISTS `bbii_upvoted` (
  `member_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  KEY `idx_upvoted_member` (`member_id`),
  KEY `idx_upvoted_post` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bbii_vote`
--

CREATE TABLE IF NOT EXISTS `bbii_vote` (
  `poll_id` int(10) unsigned NOT NULL,
  `choice_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`poll_id`,`choice_id`,`user_id`),
  KEY `idx_vote_poll` (`poll_id`),
  KEY `idx_vote_user` (`user_id`),
  KEY `idx_vote_choice` (`choice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migration`
--

CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `activation_key` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_visit_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `password_set_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `one_time_password_secret` varchar(255) DEFAULT NULL,
  `one_time_password_code` varchar(255) DEFAULT NULL,
  `one_time_password_counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_idx` (`username`),
  UNIQUE KEY `users_email_idx` (`email`),
  KEY `users_email_verified_idx` (`email_verified`),
  KEY `users_is_active_idx` (`is_active`),
  KEY `users_is_disabled_idx` (`is_disabled`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_pictures`
--

CREATE TABLE IF NOT EXISTS `user_profile_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `original_picture_id` int(11) DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profile_pictures_user_id_idx` (`user_id`),
  KEY `user_profile_pictures_original_picture_id_idx` (`original_picture_id`),
  KEY `user_profile_pictures_width_height_idx` (`width`,`height`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_remote_identities`
--

CREATE TABLE IF NOT EXISTS `user_remote_identities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `identifier` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_used_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_remote_identities_provider_identifier_idx` (`provider`,`identifier`),
  KEY `user_remote_identities_user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_used_passwords`
--

CREATE TABLE IF NOT EXISTS `user_used_passwords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `set_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_used_passwords_user_id_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
