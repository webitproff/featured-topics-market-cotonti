<?php
/**
 * [BEGIN_COT_EXT]
 * Hooks=market.delete.done
 * [END_COT_EXT]
 */
/**
 * featuredtopicsmarket.market.delete.done.php - Delete links on product delete
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: featuredtopicsmarket.market.delete.done.php
 *
 * Date: May 14Th, 2026
 * @package featuredtopicsmarket
 * @version 2.7.8
 * @author webitproff
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('featuredtopicsmarket', 'plug');

global $db, $db_featured_topics_market, $id;

if ($id > 0)
{
    $db->delete($db_featured_topics_market, "rtm_from_id = ? OR rtm_to_id = ?", [$id, $id]);
}

/* просто как шпаргалка
	global $db, $db_x, $id;
	if ($id > 0) {
		$table = $db_x . 'featured_topics_market';
		$db->delete($table, "rtm_from_id = ? OR rtm_to_id = ?", [$id, $id]);
	} 
*/
