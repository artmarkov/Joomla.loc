#
#<?php die('Forbidden.'); ?>
#Date: 2018-06-30 17:54:55 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2018-06-30T17:54:55+00:00	INFO 127.0.0.1	update	Update started by user Super User (44). Old version is 3.6.5.
2018-06-30T17:54:59+00:00	INFO 127.0.0.1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.8.10-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20180630%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20180630T175455Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=ab9fb9adb6e1973a1948db1bf5b7c0432903289339128dfcf24bd0b4bfe69691.
2018-06-30T17:55:07+00:00	INFO 127.0.0.1	update	File Joomla_3.8.10-Stable-Update_Package.zip successfully downloaded.
2018-06-30T17:55:07+00:00	INFO 127.0.0.1	update	Starting installation of new version.
2018-06-30T17:59:59+00:00	INFO 127.0.0.1	update	Finalising installation.
2018-06-30T17:59:59+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-06. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T17:59:59+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-22. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T17:59:59+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields` (   `id` int(10) unsigned NOT NULL AUTO_I.
2018-06-30T18:00:00+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_categories` (   `field_id` int(11) NOT NUL.
2018-06-30T18:00:00+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_groups` (   `id` int(10) unsigned NOT NULL.
2018-06-30T18:00:00+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_values` (   `field_id` int(10) unsigned NO.
2018-06-30T18:00:00+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-29. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T18:00:01+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-08-29. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T18:00:01+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-09-29. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2018-06-30T18:00:01+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-10-01. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T18:00:01+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-10-02. Query text: ALTER TABLE `#__session` MODIFY `client_id` tinyint(3) unsigned DEFAULT NULL;.
2018-06-30T18:00:02+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-04. Query text: ALTER TABLE `#__extensions` CHANGE `enabled` `enabled` TINYINT(3) NOT NULL DEFAU.
2018-06-30T18:00:02+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-19. Query text: ALTER TABLE `#__menu_types` ADD COLUMN `client_id` int(11) NOT NULL DEFAULT 0;.
2018-06-30T18:00:02+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-19. Query text: UPDATE `#__menu` SET `published` = 1 WHERE `menutype` = 'main' OR `menutype` = '.
2018-06-30T18:00:02+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-21. Query text: ALTER TABLE `#__languages` DROP INDEX `idx_image`;.
2018-06-30T18:00:03+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-24. Query text: ALTER TABLE `#__extensions` ADD COLUMN `package_id` int(11) NOT NULL DEFAULT 0 C.
2018-06-30T18:00:03+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-24. Query text: UPDATE `#__extensions` AS `e1` INNER JOIN (SELECT `extension_id` FROM `#__extens.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2016-11-27. Query text: ALTER TABLE `#__modules` MODIFY `content` text NOT NULL DEFAULT '';.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_alias` varchar(400) CHARACTER SET utf8.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext NOT NULL DEFAULT '';.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_time` varchar(255) NOT NUL.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_params` text NOT NULL DEFAULT '';.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadata` varchar(2048) NOT NULL DEFAU.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_language` char(7) NOT NULL DEFAULT '';.
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_up` datetime NOT NULL DEFAULT .
2018-06-30T18:00:04+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_down` datetime NOT NULL DEFAUL.
2018-06-30T18:00:05+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_content_item_id` int(10) unsigned NOT .
2018-06-30T18:00:06+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT.
2018-06-30T18:00:06+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_images` text NOT NULL DEFAULT '';.
2018-06-30T18:00:06+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text NOT NULL DEFAULT '';.
2018-06-30T18:00:06+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text NOT NULL DEFAULT '';.
2018-06-30T18:00:06+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text NOT NULL DEFAULT '';.
2018-06-30T18:00:06+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_xreference` varchar(50) NOT NULL DEFAU.
2018-06-30T18:00:07+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_type_id` int(10) unsigned NOT NULL DEF.
2018-06-30T18:00:07+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `title` varchar(255) NOT NULL DEFAULT '';.
2018-06-30T18:00:07+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `description` mediumtext NOT NULL DEFAULT '';.
2018-06-30T18:00:07+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `params` text NOT NULL DEFAULT '';.
2018-06-30T18:00:07+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metadesc` varchar(1024) NOT NULL DEFAULT '' .
2018-06-30T18:00:07+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metakey` varchar(1024) NOT NULL DEFAULT '' C.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metadata` varchar(2048) NOT NULL DEFAULT '' .
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `language` char(7) NOT NULL DEFAULT '';.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-15. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main_is_reserved_133C585'  WHERE `client_i.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"menutype":"main"','"men.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu_types`    SET `menutype` = 'main_is_reserved_133C585'  WHERE `cl.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `client_id` = 1  WHERE `menutype` = 'main';.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main'  WHERE `client_id` = 1     AND `menu.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main',        `client_id` = 1  WHERE `menu.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-17. Query text: DELETE FROM `#__menu_types`  WHERE `client_id` = 1    AND `menutype` IN ('main',.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-01-31. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-02. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-15. Query text: ALTER TABLE `#__redirect_links` MODIFY `comment` varchar(255) NOT NULL DEFAULT '.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `name` varchar(255) NOT NULL;.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `alias` varchar(400) CHARACTER SET utf8m.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname1` varchar(255) NOT NULL DEFAUL.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname2` varchar(255) NOT NULL DEFAUL.
2018-06-30T18:00:08+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname3` varchar(255) NOT NULL DEFAUL.
2018-06-30T18:00:09+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `language` varchar(7) NOT NULL;.
2018-06-30T18:00:09+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `xreference` varchar(50) NOT NULL DEFAUL.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE `#__languages` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 0.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE `#__menu_types` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT .
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE  `#__content` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE  `#__newsfeeds` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__categories` SET `published` = 1 WHERE `alias` = 'root';.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__categories` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.publis.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__menu` SET `published` = 1 WHERE `alias` = 'root';.
2018-06-30T18:00:10+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__menu` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.published) >.
2018-06-30T18:00:11+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-03-19. Query text: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2018-06-30T18:00:11+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-04-10. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2018-06-30T18:00:11+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.0-2017-04-19. Query text: UPDATE `#__extensions` SET `params` = '{"multiple":"0","first":"1","last":"100",.
2018-06-30T18:00:12+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.3-2017-06-03. Query text: ALTER TABLE `#__menu` MODIFY `checked_out_time` datetime NOT NULL DEFAULT '0000-.
2018-06-30T18:00:12+00:00	INFO 127.0.0.1	update	Ran query from file 3.7.4-2017-07-05. Query text: DELETE FROM `#__postinstall_messages` WHERE `title_key` = 'COM_CPANEL_MSG_PHPVER.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.0-2017-07-28. Query text: ALTER TABLE `#__fields_groups` ADD COLUMN `params` TEXT  NOT NULL  AFTER `orderi.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.0-2017-07-31. Query text: INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.2-2017-10-14. Query text: ALTER TABLE `#__content` ADD INDEX `idx_alias` (`alias`(191));.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.4-2018-01-16. Query text: ALTER TABLE `#__user_keys` DROP INDEX `series_2`;.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.4-2018-01-16. Query text: ALTER TABLE `#__user_keys` DROP INDEX `series_3`;.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.6-2018-02-14. Query text: INSERT INTO `#__extensions` (`extension_id`, `package_id`, `name`, `type`, `elem.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.6-2018-02-14. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.8-2018-05-18. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.9-2018-06-19. Query text: UPDATE `#__extensions` SET `enabled` = '1' WHERE `name` = 'mod_sampledata';.
2018-06-30T18:00:13+00:00	INFO 127.0.0.1	update	Deleting removed files and folders.
2018-06-30T18:00:15+00:00	INFO 127.0.0.1	update	Cleaning up after installation.
2018-06-30T18:00:16+00:00	INFO 127.0.0.1	update	Update to version 3.8.10 is complete.
