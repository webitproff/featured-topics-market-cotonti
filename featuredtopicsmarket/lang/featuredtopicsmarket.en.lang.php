<?php
/**
 * featuredtopicsmarket.en.lang.php - English language file for Featured and Recommended Forum Topics in Market Item plugin
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: plugins/featuredtopicsmarket/lang/featuredtopicsmarket.en.lang.php
 *
 * Date: Jan 25th, 2026
 * @package featuredtopicsmarket
 * @version 2.7.7
 * @author webitproff
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

/**
 * Plugin Config
 */
$L['cfg_maxitems_market_rft'] = 'Number of recommended topics';
$L['cfg_maxitems_market_rft_hint'] = 'Maximum number of topics that can be attached to a product as recommended. Displayed in the product edit form and on the product page.';

$L['cfg_max_select_itemslist_market_rft'] = 'Topics in dropdown list';
$L['cfg_max_select_itemslist_market_rft_hint'] = 'Number of items shown in the topic search dropdown when editing a product.';

$L['cfg_desc_length_market_rft'] = 'Description text length';
$L['cfg_desc_length_market_rft_hint'] = 'Maximum number of characters of the topic description shown in the recommended topics list on the product page.';

$L['cfg_nonimage_market_rft'] = 'Placeholder image';
$L['cfg_nonimage_market_rft_hint'] = 'Used when a topic has no image. <br>Path is relative to site root, e.g.: <code>plugins/featuredtopicsmarket/img/image.webp</code> (no domain, no leading slash)';

/**
 * Plugin Info
 */
$L['info_name'] = 'Recommended Forum Topics in Products';
$L['info_desc'] = 'Allows attaching recommended forum topics to products and displaying them on the product page. Useful for discussions and support.';
$L['info_notes'] = 'Requires Cotonti 0.9.26+ with <code>Resources::SELECT2</code>.<br>Works only with Market PRO module v.5+<br>
<a href="https://github.com/webitproff/marketpro-cotonti" target="_blank">
<abbr title="Current free version of the online store module" class="initialism"><strong>(Download for free from GitHub)</strong></abbr>
</a>';

/**
 * Admin panel strings (used in plugin setup)
 */
$L['featuredtopicsmarket_title'] = $L['info_name']; // Plugin name in admin area
$L['featuredtopicsmarket_desc'] = $L['info_desc'];  // Plugin description in admin area

/**
 * Frontend strings (public part of the site)
 */
$L['featuredtopicsmarket_market_title'] = 'Recommended forum topics for this product';
$L['featuredtopicsmarket_edit_title'] = 'Recommended forum topics for this product';

$L['featuredtopicsmarket_add'] = 'Add another topic';
$L['featuredtopicsmarket_maxreached'] = 'Maximum number of recommended topics reached';

$L['featuredtopicsmarket_item_number'] = 'Recommended topic #';

$L['featuredtopicsmarket_selecttopic_hint'] = 'Start typing the topic title';
$L['featuredtopicsmarket_min_search'] = 'Enter at least 2 characters to search topics';