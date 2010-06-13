ALTER TABLE `{$db_prefix}settings` CHANGE `key` `key` VARCHAR( 41 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
INSERT INTO `{$db_prefix}settings` (
`key` ,
`value`
)
VALUES (
'CyBerFuN_xBTiT_installed_version', '1.2 revision 541'
);
UPDATE `{$db_prefix}hacks` SET `version` = '3.1.1' WHERE `{$db_prefix}hacks`.`id` =1;
ALTER TABLE `{$db_prefix}users` ADD INDEX ( `smf_fid` );
UPDATE `{$db_prefix}users_level` SET `prefixcolor` = '<span style=''color:#000000''>' WHERE `{$db_prefix}users_level`.`id` =3;
UPDATE `{$db_prefix}users_level` SET `prefixcolor` = '<span style=''color:#428D67''>' WHERE `{$db_prefix}users_level`.`id` =6;
UPDATE `{$db_prefix}users_level` SET `prefixcolor` = '<span style=''color:#FF8000''>' WHERE `{$db_prefix}users_level`.`id` =7;
INSERT INTO `{$db_prefix}settings` SET `key`='inv_login', `value`='false';
INSERT INTO `{$db_prefix}settings` SET `key`='att_login', `value`='5';
CREATE TABLE `{$db_prefix}invalid_logins` (
`id` int( 10 ) unsigned NOT NULL AUTO_INCREMENT ,
`ip` bigint( 11 ) default '0',
`userid` int( 10 ) unsigned NOT NULL default '0',
`username` varchar( 40 ) NOT NULL default '',
`failed` int( 3 ) unsigned NOT NULL default '0',
`remaining` int( 3 ) unsigned NOT NULL default '0',
PRIMARY KEY ( `id` )
) AUTO_INCREMENT =1;
ALTER TABLE `{$db_prefix}files` ADD `gold` ENUM( '0', '1', '2' ) NOT NULL DEFAULT '0';
CREATE TABLE IF NOT EXISTS `{$db_prefix}gold` (
  `id` int(11) NOT NULL auto_increment,
  `level` int(11) NOT NULL default '4',
  `gold_picture` varchar(255) NOT NULL default 'gold.gif',
  `silver_picture` varchar(255) NOT NULL default 'silver.gif',
  `active` enum('-1','0','1') NOT NULL default '1',
  `date` date NOT NULL default '0000-00-00',
  `gold_description` text NOT NULL,
  `silver_description` text NOT NULL,
  `classic_description` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;
INSERT INTO `{$db_prefix}gold` (`id`, `level`, `gold_picture`, `silver_picture`, `active`, `date`, `gold_description`, `silver_description`, `classic_description`) VALUES
(1, 3, 'gold.gif', 'silver.gif', '1', '0000-00-00', 'Gold torrent description', 'Silver torrent description', 'Classic torrent description');
CREATE TABLE IF NOT EXISTS `{$db_prefix}ignore` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned NOT NULL default '0',
  `ignore_id` int(10) unsigned NOT NULL default '0',
  `ignore_name` varchar(250) NOT NULL default '',
  `added` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `{$db_prefix}friendlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `friend_id` int(10) unsigned NOT NULL DEFAULT '0',
  `friend_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `friend_id` (`friend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
INSERT INTO `{$db_prefix}modules` (`name`,`activated`,`type`,`changed`,`created`) VALUES ('helpdesk','yes','misc',NOW(),NOW());
CREATE TABLE IF NOT EXISTS `{$db_prefix}helpdesk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `msg_problem` text,
  `added` int(11) NOT NULL DEFAULT '0',
  `solved_date` int(11) NOT NULL DEFAULT '0',
  `solved` enum('no','yes','ignored') NOT NULL DEFAULT 'no',
  `added_by` int(10) NOT NULL DEFAULT '0',
  `solved_by` int(10) NOT NULL DEFAULT '0',
  `msg_answer` text,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `{$db_prefix}banned_client` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `peer_id` varchar(16) NOT NULL,
  `peer_id_ascii` varchar(8) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `peer_id` (`peer_id`),
  KEY `peer_id_ascii` (`peer_id_ascii`),
  KEY `user_agent` (`user_agent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
RENAME TABLE `tags` TO `{$db_prefix}tags` ;
ALTER TABLE `{$db_prefix}sticky` CHANGE `id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT ;
ALTER TABLE `{$db_prefix}visible` CHANGE `id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT ;
