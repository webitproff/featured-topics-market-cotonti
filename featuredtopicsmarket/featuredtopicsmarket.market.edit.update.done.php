<?php
/**
 * [BEGIN_COT_EXT]
 * Hooks=market.edit.update.done
 * [END_COT_EXT]
 */
/**
 * featuredtopicsmarket.market.edit.update.done.php - Saving recommended topics on product update
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: featuredtopicsmarket.market.edit.update.done.php
 *
 * Date: Jan 25Th, 2026
 * @package featuredtopicsmarket
 * @version 2.7.7
 * @author webitproff
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');
global $db, $db_forum_topics, $db_x, $cfg, $id;
$product_id = (int)$id;
if ($product_id <= 0) {
    return;
}
$max_items = (int)($cfg['plugin']['featuredtopicsmarket']['maxitems_market_rft'] ?? 5);
if ($max_items < 1) $max_items = 5;
$db_featured_topics_market = $db_x . 'featured_topics_market';
$db->delete($db_featured_topics_market, "rtm_from_id = ?", [$product_id]);
$recommended_topic_ids = cot_import('recommended_topic_id', 'P', 'ARR');
if (!is_array($recommended_topic_ids) || empty($recommended_topic_ids)) {
    return;
}
$used = [];
$order = 0;
foreach ($recommended_topic_ids as $index => $val) {
    $rel_id = (int)trim($val);
    if ($rel_id < 1 || $rel_id == $product_id || in_array($rel_id, $used)) {
        continue;
    }
    $exists = $db->query(
        "SELECT 1 FROM $db_forum_topics WHERE ft_id = ? AND ft_state = 0",
        [$rel_id]
    )->fetchColumn();
    if (!$exists) continue;
    $db->insert($db_featured_topics_market, [
        'rtm_from_id' => $product_id,
        'rtm_to_id' => $rel_id,
        'rtm_order' => $order++
    ]);
    $used[] = $rel_id;
    if ($order >= $max_items) break;
}