<?php
/* -----------------------------------------------------------------------------------------
   $Id: zones.php,v 1.1 2003/12/19 13:19:08 fanta2k Exp $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(zones.php,v 1.3 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (zones.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_GAMBIOULTRA_TEXT_TITLE', 'Shipping costs by product');
define('MODULE_SHIPPING_GAMBIOULTRA_TEXT_DESCRIPTION', 'Zone Based Rates');
define('MODULE_SHIPPING_GAMBIOULTRA_TEXT_WAY', 'Shipping to:');
define('MODULE_SHIPPING_GAMBIOULTRA_TEXT_UNITS', 'lb(s)');
define('MODULE_SHIPPING_GAMBIOULTRA_INVALID_ZONE', 'No shipping available to the selected country!');
define('MODULE_SHIPPING_GAMBIOULTRA_UNDEFINED_RATE', 'The shipping rate cannot be determined at this time.');

define('MODULE_SHIPPING_GAMBIOULTRA_STATUS_TITLE' , 'Enable Zones Method');
define('MODULE_SHIPPING_GAMBIOULTRA_STATUS_DESC' , 'Do you want to offer zone rate shipping?');
define('MODULE_SHIPPING_GAMBIOULTRA_ALLOWED_TITLE' , 'Allowed Zones');
define('MODULE_SHIPPING_GAMBIOULTRA_ALLOWED_DESC' , 'Please enter the zones <b>separately</b> which should be allowed to use this modul (e. g. AT,DE (leave empty if you want to allow all zones))');
define('MODULE_SHIPPING_GAMBIOULTRA_TAX_CLASS_TITLE' , 'Tax Class');
define('MODULE_SHIPPING_GAMBIOULTRA_TAX_CLASS_DESC' , 'Use the following tax class on the shipping fee.');
define('MODULE_SHIPPING_GAMBIOULTRA_SORT_ORDER_TITLE' , 'Sort Order');
define('MODULE_SHIPPING_GAMBIOULTRA_SORT_ORDER_DESC' , 'Sort order of display.');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_1_TITLE' , 'Zone 1 Countries');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_1_DESC' , 'Comma separated list of two character ISO country codes that are part of Zone 1.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_1_TITLE' , 'Zone 1 Shipping Table');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_1_DESC' , 'Shipping rates to Zone 1 destinations based on a group of maximum order weights. Example: 3:8.50,7:10.50,... Weights less than or equal to 3 would cost 8.50 for Zone 1 destinations.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_1_TITLE' , 'Zone 1 Handling Fee');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_1_DESC' , 'Handling Fee for this shipping zone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_2_TITLE' , 'Zone 2 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_2_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 2 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_2_TITLE' , 'Zone 2 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_2_DESC' , 'Versandkosten nach Zone 2 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_2_TITLE' , 'Zone 2 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_2_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_3_TITLE' , 'Zone 3 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_3_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 3 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_3_TITLE' , 'Zone 3 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_3_DESC' , 'Versandkosten nach Zone 3 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_3_TITLE' , 'Zone 3 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_3_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_4_TITLE' , 'Zone 4 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_4_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 4 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_4_TITLE' , 'Zone 4 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_4_DESC' , 'Versandkosten nach Zone 4 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_4_TITLE' , 'Zone 4 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_4_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_5_TITLE' , 'Zone 5 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_5_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 5 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_5_TITLE' , 'Zone 5 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_5_DESC' , 'Versandkosten nach Zone 5 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_5_TITLE' , 'Zone 5 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_5_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_6_TITLE' , 'Zone 6 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_6_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 6 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_6_TITLE' , 'Zone 6 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_6_DESC' , 'Versandkosten nach Zone 6 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_6_TITLE' , 'Zone 6 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_6_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_7_TITLE' , 'Zone 7 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_7_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 7 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_7_TITLE' , 'Zone 7 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_7_DESC' , 'Versandkosten nach Zone 7 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_7_TITLE' , 'Zone 7 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_7_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_8_TITLE' , 'Zone 8 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_8_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 8 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_8_TITLE' , 'Zone 8 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_8_DESC' , 'Versandkosten nach Zone 8 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_8_TITLE' , 'Zone 8 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_8_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_9_TITLE' , 'Zone 9 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_9_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 9 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_9_TITLE' , 'Zone 9 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_9_DESC' , 'Versandkosten nach Zone 9 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_9_TITLE' , 'Zone 9 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_9_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');

define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_10_TITLE' , 'Zone 10 L&auml;nder');
define('MODULE_SHIPPING_GAMBIOULTRA_COUNTRIES_10_DESC' , 'Durch Komma getrennte Liste von ISO L&auml;ndercodes (2 Zeichen), welche Teil von Zone 10 sind.');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_10_TITLE' , 'Zone 10 Versandkosten');
define('MODULE_SHIPPING_GAMBIOULTRA_COST_10_DESC' , 'Versandkosten nach Zone 10 Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 w&uuml;rde 8.50 für die Zone 1 Bestimmungsl&auml;nder kosten.');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_10_TITLE' , 'Zone 10 Handling Geb&uuml;hr');
define('MODULE_SHIPPING_GAMBIOULTRA_HANDLING_10_DESC' , 'Handling Geb&uuml;hr für diese Versandzone');
?>