<?php
if (defined('MODULE_GAMBIOULTRA_STATUS') && MODULE_GAMBIOULTRA_STATUS == 'true') { 
//ADD_PRODUCTS_FIELDS
$add_select_product[] = 'p.nc_ultra_shipping_costs';

$add_where_search = $add_select_product;

$add_select_default = $add_select_search = $add_select_cart = $add_select_product;
}