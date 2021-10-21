<?php
if (defined('MODULE_GAMBIOULTRA_STATUS') && MODULE_GAMBIOULTRA_STATUS == 'true') { 
?>

<?php // BOC new for gambioultra module ?>
<table class="tableInput">
  <tr>
    <td><span class="main"><?php echo TEXT_NC_GAMBIOULTRA_COSTS; ?></span></td>
    <td><span class="main"><?php echo xtc_draw_input_field('nc_ultra_shipping_costs', $pInfo->nc_ultra_shipping_costs, 'style="width: 135px"'); ?></span></td>
  </tr>
</table>
<?php // EOC new for gambioultra module ?>

<script>
/* Eingabefelder dynamisch verschieben */
/*$("[name='feldname_des_zu_verschiebenden_feldes']").closest("tr").detach().insertAfter($("[name='feldname_des_feldes_hinter_das_das_andere_soll']").closest("tr"));*/
$( document ).ready(function() {
  $("[name='nc_ultra_shipping_costs']").closest("tr").detach().insertAfter($("[name='products_weight']").closest("tr"));
});
</script>

<?php  }  ?>