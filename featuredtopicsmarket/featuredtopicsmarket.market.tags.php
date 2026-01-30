<?php
/**
 * [BEGIN_COT_EXT]
 * Hooks=market.tags
 * Tags=market.tpl:{RECOMMENDED_FR_TOPIC_MARKET_TOPICS}
 * [END_COT_EXT]
 */
/**
 * featuredtopicsmarket.market.tags.php
 * Выводит блок рекомендуемых тем на странице товара (шаблон market.tpl)
 * Поддерживает мультиязычность тем если есть плагин
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: featuredtopicsmarket.market.tags.php
 *
 * Date: Jan 25Th, 2026
 * @package featuredtopicsmarket
 * @version 2.7.7
 * @author webitproff
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

global $db, $db_forum_topics, $db_x, $cfg, $id, $t, $structure;

require_once cot_incfile('featuredtopicsmarket', 'plug');

$product_id = (int)$id; // {PHP.product_id} = ID = `fieldmrkt_id` - карточка товара

if ($product_id <= 0) {
    return;
}
// предел топиков на странице товара
$max_items = (int)($cfg['plugin']['featuredtopicsmarket']['maxitems_market_rft'] ?? 5);
if ($max_items < 1) $max_items = 5;

$desc_len = (int)($cfg['plugin']['featuredtopicsmarket']['desc_length_market_rft'] ?? 160);
if ($desc_len < 40) $desc_len = 120;

$table_recommended = $db_x . 'featured_topics_market';
// если пришел наш $product_id - то запрашиваем по нему у rtm_from_id что есть в rtm_to_id 
// rtm_from_id - это товар
// rtm_to_id  - это топик
$recommended_topics = $db->query(
    "SELECT
        rtm.rtm_to_id AS id,
        f.ft_title,
        f.ft_desc,
        f.ft_cat,
        f.ft_preview,
        f.ft_postcount,
        f.ft_viewcount,
        f.ft_lastpostername,
        f.ft_updated
     FROM $table_recommended rtm
     INNER JOIN $db_forum_topics f ON f.ft_id = rtm.rtm_to_id
     WHERE rtm.rtm_from_id = ?
       AND f.ft_state = 0
     ORDER BY rtm.rtm_order ASC
     LIMIT ?",
    [$product_id, $max_items]
)->fetchAll(PDO::FETCH_ASSOC);

if (empty($recommended_topics)) {
    return;
}

// присваиваем шаблону имя части и/или локации расширения
$tpl_ExtCode          = 'featuredtopicsmarket';   // код плагина в составе имени шаблона
$tpl_PartExt          = 'market';                 // говорим, что это карточка товара
$tpl_PartExtSecond    = 'topics';                 // говорим, что выводим топики

// Загружаем шаблон 
$extTplFile = cot_tplfile(
		[
		$tpl_ExtCode, 
		$tpl_PartExt, 
		$tpl_PartExtSecond
		], 
		'plug', 
		true
	);

/* 	
  Создаём объект шаблона XTemplate с указанным файлом шаблона в $extTplFile выше
  объявляем как $tt, потому что будем встраивать наш шаблон $tt в строку $t 
  $t = {RECOMMENDED_FR_TOPIC_MARKET_TOPICS} которую вешаем на market.tags 
  и присваиваем как тег в шаблон market.tpl
 */

// $mskin = для нейминга шаблонов плагинов больше не используем имя переменной как $mskin 
// во избежание перезаписи $mskin, если наш шаблон это строка внутри другого шаблона со своим $m (mode)
$tt = new XTemplate($extTplFile);

foreach ($recommended_topics as $topic) {
    $topic_id = (int)$topic['id'];
	//устанавливаем булеевый флаг
	// его используем в условии 
	// <!-- IF {PHP|cot_plugin_active('featuredtopicsmarket')} AND {RECOMMENDED_FR_TOPIC_MARKET_TOPICS_TRUE} -->
	// для того чтобы не грузить шаблон с версткой, но без данных
    $t->assign('RECOMMENDED_FR_TOPIC_MARKET_TOPICS_TRUE', true);
    // 
    $url = cot_url('forums', "m=posts&q={$topic_id}");
    $desc = !empty($topic['ft_desc'])
        ? cot_string_truncate(strip_tags($topic['ft_desc']), $desc_len, true, false)
        : cot_string_truncate(strip_tags($topic['ft_preview'] ?? ''), $desc_len, true, false);
    $cat_code = $topic['ft_cat'] ?? '';
    $cat_title = '';
    if (!empty($cat_code)) {
        $cat_title = !empty($structure['forums'][$cat_code]['title'])
            ? htmlspecialchars($structure['forums'][$cat_code]['title'], ENT_QUOTES, 'UTF-8')
            : htmlspecialchars($cat_code, ENT_QUOTES, 'UTF-8');
    }
    $main_image = get_recommended_forum_topic_main_first_image($topic_id);
    $tt->assign([
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_ID' => $topic_id,	
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_URL' => htmlspecialchars($url, ENT_QUOTES, 'UTF-8'),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_TITLE' => htmlspecialchars($topic['ft_title'] ?? '', ENT_QUOTES, 'UTF-8'),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_DESC' => htmlspecialchars($desc, ENT_QUOTES, 'UTF-8'),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_PREVIEW' => htmlspecialchars(cot_string_truncate(strip_tags($topic['ft_preview'] ?? ''), $desc_len), ENT_QUOTES, 'UTF-8'),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_CAT_TITLE' => $cat_title,
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_CAT_URL' => cot_url('forums', ['m' => 'topics', 's' => $cat_code]),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_LINK_MAIN_IMAGE' => htmlspecialchars($main_image, ENT_QUOTES, 'UTF-8'),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_POSTCOUNT' => $topic['ft_postcount'],
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_VIEWCOUNT' => $topic['ft_viewcount'],
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_LASTPOSTERNAME' => htmlspecialchars($topic['ft_lastpostername'], ENT_QUOTES, 'UTF-8'),
        'RECOMMENDED_FR_TOPIC_MARKET_ROW_UPDATED' => $topic['ft_updated']
    ]);
	// Парсим одну строку в цикле и отдаем 
	//в MAIN цикла - (BEGIN: RECOMMENDED_FR_TOPIC_MARKET_ROW и END: RECOMMENDED_FR_TOPIC_MARKET_ROW) 
    $tt->parse('MAIN.RECOMMENDED_FR_TOPIC_MARKET_ROW');
}
// Парсим основной блок шаблона $extTplFile
$tt->parse('MAIN');

// Присваиваем готовый HTML 
// в тег {RECOMMENDED_FR_TOPIC_MARKET_TOPICS} 
// для родительского шаблона market.tpl
$t->assign('RECOMMENDED_FR_TOPIC_MARKET_TOPICS', $tt->text('MAIN'));
unset($topic);
