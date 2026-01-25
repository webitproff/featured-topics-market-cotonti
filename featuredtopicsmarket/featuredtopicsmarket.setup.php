<?php
/* ====================
[BEGIN_COT_EXT]
Code=featuredtopicsmarket
Name=Featured Topics from Forums in Item Product of Market PRO 
Category=
Description=Allows attaching recommended forum topics to a market product and displaying them on the product page.
Version=1.0.0
Date=Jan 25Th, 2026
Author=webitproff
Copyright=(c) webitproff 2026 | https://github.com/webitproff
Notes=
Auth_guests=R
Lock_guests=WA
Auth_members=RW
Lock_members=A
Requires_modules=market,forums
Requires_plugins=
Recommends_modules=
Recommends_plugins=attacher
[END_COT_EXT]
[BEGIN_COT_EXT_CONFIG]
maxitems_market_rft=01:select:1,2,3,5,8:3:Количество рекомендуемых тем
max_select_itemslist_market_rft=02:select:10,50,75,100,150,200,300:100:Тем в выпадающем списке
desc_length_market_rft=03:select:0,50,75,100,150,200,300:100:Длина текста описания
nonimage_market_rft=04:string::plugins/featuredtopicsmarket/img/image.webp:Картинка-заглушка
[END_COT_EXT_CONFIG]
==================== */
/**
 * featuredtopicsmarket.setup.php - Register data in $db_core and $db_config. Setup & Config File for the Plugin Recommended and Featured Topics from Forums in Item Product of Market PRO 
 *
 * featuredtopicsmarket plugin for Cotonti 0.9.26, PHP 8.4+
 * Filename: featuredtopicsmarket.setup.php
 *
 * Date: Jan 25Th, 2026
 * @package featuredtopicsmarket
 * @version 2.7.7
 * @author webitproff
 * @copyright Copyright (c) webitproff 2026 | https://github.com/webitproff
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');