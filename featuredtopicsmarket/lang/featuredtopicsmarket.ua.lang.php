<?php
/**
 * featuredtopicsmarket.ua.lang.php - Український мовний файл для плагіна Рекомендовані теми форуму в товарах
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: plugins/featuredtopicsmarket/lang/featuredtopicsmarket.ua.lang.php
 *
 * Date: Jan 25th, 2026
 * @package featuredtopicsmarket
 * @version 2.7.7
 * @author webitproff
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff
 * @license BSD
 */
defined('COT_CODE') or die('Неправильний URL');

/**
 * Налаштування плагіна
 */
$L['cfg_maxitems_market_rft'] = 'Кількість рекомендованих тем';
$L['cfg_maxitems_market_rft_hint'] = 'Максимальна кількість тем, які можна прикріпити до товару як рекомендовані. Відображаються у формі редагування товару та на сторінці товару.';

$L['cfg_max_select_itemslist_market_rft'] = 'Тем у випадаючому списку';
$L['cfg_max_select_itemslist_market_rft_hint'] = 'Кількість елементів, які показуються у випадаючому списку пошуку тем під час редагування товару.';

$L['cfg_desc_length_market_rft'] = 'Довжина тексту опису';
$L['cfg_desc_length_market_rft_hint'] = 'Максимальна кількість символів опису теми, що відображається у списку рекомендованих тем на сторінці товару.';

$L['cfg_nonimage_market_rft'] = 'Зображення-заглушка';
$L['cfg_nonimage_market_rft_hint'] = 'Використовується, якщо у теми немає зображення. <br>Шлях вказується відносно кореня сайту, наприклад: <code>plugins/featuredtopicsmarket/img/image.webp</code> (без домену та початкових слешів)';

/**
 * Інформація про плагін
 */
$L['info_name'] = 'Рекомендовані теми форуму в товарах';
$L['info_desc'] = 'Дозволяє прикріплювати рекомендовані теми форуму до товару та показувати їх на сторінці товару. Корисно для обговорення та підтримки.';
$L['info_notes'] = 'Потрібен Cotonti 0.9.26+ з <code>Resources::SELECT2</code>.<br>Працює тільки з модулем Market PRO версії 5+<br>
<a href="https://github.com/webitproff/marketpro-cotonti" target="_blank">
<abbr title="Актуальна безкоштовна версія модуля інтернет-магазину" class="initialism"><strong>(Завантажити безкоштовно з GitHub)</strong></abbr>
</a>';

/**
 * Рядки адмін-панелі (використовуються в налаштуваннях плагіна)
 */
$L['featuredtopicsmarket_title'] = $L['info_name']; // Назва плагіна в адмінці
$L['featuredtopicsmarket_desc'] = $L['info_desc'];  // Опис плагіна в адмінці

/**
 * Рядки фронтенду (публічна частина сайту)
 */
$L['featuredtopicsmarket_market_title'] = 'Рекомендовані теми форуму для цього товару';
$L['featuredtopicsmarket_edit_title'] = 'Рекомендовані теми форуму для цього товару';

$L['featuredtopicsmarket_add'] = 'Додати ще тему';
$L['featuredtopicsmarket_maxreached'] = 'Досягнуто максимум рекомендованих тем';

$L['featuredtopicsmarket_item_number'] = 'Рекомендована тема № ';

$L['featuredtopicsmarket_selecttopic_hint'] = 'Почніть вводити назву теми';
$L['featuredtopicsmarket_min_search'] = 'Введіть щонайменше 2 символи для пошуку тем';