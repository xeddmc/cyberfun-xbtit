ALTER TABLE `{$db_prefix}settings` CHANGE `key` `key` VARCHAR( 41 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
INSERT INTO `{$db_prefix}settings` (
`key` ,
`value`
)
VALUES (
'CyBerFuN_xBTiT_installed_version', '1.2 revision 504'
);
UPDATE `{$db_prefix}hacks` SET `version` = '3.1.1' WHERE `{$db_prefix}hacks`.`id` =1;
ALTER TABLE `{$db_prefix}users` ADD INDEX ( `smf_fid` );
UPDATE `{$db_prefix}users_level` SET `prefixcolor` = '<span style=''color:#000000''>' WHERE `{$db_prefix}users_level`.`id` =3;
UPDATE `{$db_prefix}users_level` SET `prefixcolor` = '<span style=''color:#428D67''>' WHERE `{$db_prefix}users_level`.`id` =6;
UPDATE `{$db_prefix}users_level` SET `prefixcolor` = '<span style=''color:#FF8000''>' WHERE `{$db_prefix}users_level`.`id` =7;
INSERT INTO `{$db_prefix}settings` SET `key`='inv_login', `value`='false';
INSERT INTO `{$db_prefix}settings` SET `key`='att_login', `value`='99';
CREATE TABLE `{$db_prefix}invalid_logins` (
`id` int( 10 ) unsigned NOT NULL AUTO_INCREMENT ,
`ip` bigint( 11 ) default '0',
`userid` int( 10 ) unsigned NOT NULL default '0',
`username` varchar( 40 ) NOT NULL default '',
`failed` int( 3 ) unsigned NOT NULL default '0',
`remaining` int( 3 ) unsigned NOT NULL default '0',
PRIMARY KEY ( `id` )
) AUTO_INCREMENT =1;