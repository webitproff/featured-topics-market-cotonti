<?php
/**
 * featuredtopicsmarket.ru.lang.php - Русский языковой файл для плагина Featured and Recommended Forum Topics in Market Item
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: plugins/featuredtopicsmarket/lang/featuredtopicsmarket.ru.lang.php
 *
 * Date: Jan 25Th, 2026
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
$L['cfg_maxitems_market_rft'] = 'Количество рекомендуемых тем';
$L['cfg_maxitems_market_rft_hint'] = 'Максимальное число тем, которые можно прикрепить к товару как рекомендуемые. Показываются в форме редактирования товара и на странице товара.';
$L['cfg_max_select_itemslist_market_rft'] = 'Тем в выпадающем списке';
$L['cfg_max_select_itemslist_market_rft_hint'] = 'Количество элементов, которые отображаются в выпадающем списке поиска тем при редактировании товара.';
$L['cfg_desc_length_market_rft'] = 'Длина текста описания';
$L['cfg_desc_length_market_rft_hint'] = 'Максимальное количество символов описания темы, которое показывается в списке рекомендуемых тем на странице товара.';
$L['cfg_nonimage_market_rft'] = 'Картинка-заглушка';
$L['cfg_nonimage_market_rft_hint'] = 'Если у темы нет изображения — используется эта заглушка. <br>Путь указывается относительно сайта, например: <code>plugins/featuredtopicsmarket/img/image.webp</code> (без домена и ведущих слешей)';
/**
 * Plugin Info
 */
$L['info_name'] = 'Рекомендуемые темы форума в товарах';
$L['info_desc'] = 'Позволяет прикреплять рекомендуемые темы форума к товару и показывать их на странице товара. Полезно для обсуждения и поддержки.';
$L['info_notes'] = 'Требуется Cotonti 0.9.26+ с <code>Resources::SELECT2</code>. <br>Работает только с модулем Market PRO v.5+<br>
<a href="https://github.com/webitproff/marketpro-cotonti" target="_blank">
<abbr title="Актуальная бесплатная версия модуля интернет-магазина" class="initialism"><strong>(Скачать бесплатно с GitHub)</strong></abbr>
</a>';
/**
 * Admin panel strings (used in plugin setup)
 */
$L['featuredtopicsmarket_title'] = $L['info_name']; // Название плагина в админке
$L['featuredtopicsmarket_desc'] = $L['info_desc']; // Описание плагина в админке
/**
 * Frontend strings (публичная часть сайта)
 */
$L['featuredtopicsmarket_market_title'] = 'Рекомендуемые темы форума для этого товара';
$L['featuredtopicsmarket_edit_title'] = 'Рекомендуемые темы форума для этого товара';
$L['featuredtopicsmarket_add'] = 'Добавить ещё тему';
$L['featuredtopicsmarket_maxreached'] = 'Достигнут максимум рекомендуемых тем';
$L['featuredtopicsmarket_item_number'] = 'Рекомендуемая тема № ';
$L['featuredtopicsmarket_selecttopic_hint'] = 'Начните вводить название темы';
$L['featuredtopicsmarket_min_search'] = 'Введите минимум 2 символа для поиска тем';