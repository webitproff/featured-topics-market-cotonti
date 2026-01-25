-- file featuredtopicsmarket.install.sql
CREATE TABLE IF NOT EXISTS `cot_featured_topics_market` (
  `rtm_id` int unsigned NOT NULL auto_increment,
  `rtm_from_id` int unsigned NOT NULL default '0',
  `rtm_to_id` int unsigned NOT NULL default '0',
  `rtm_order` tinyint unsigned NOT NULL default '0',
  PRIMARY KEY (`rtm_id`),
  UNIQUE KEY `unique_pair` (`rtm_from_id`,`rtm_to_id`),
  KEY `idx_from` (`rtm_from_id`),
  KEY `idx_to` (`rtm_to_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;