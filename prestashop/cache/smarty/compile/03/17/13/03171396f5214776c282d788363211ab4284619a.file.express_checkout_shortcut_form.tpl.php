<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 21:16:14
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6295121895827788e2f3884-32202143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03171396f5214776c282d788363211ab4284619a' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl',
      1 => 1478979547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6295121895827788e2f3884-32202143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'product_minimal_quantity' => 0,
    'id_product_attribute_ecs' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
    'use_paypal_in_context' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5827788e33bff6_49852510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5827788e33bff6_49852510')) {function content_5827788e33bff6_49852510($_smarty_tpl) {?>

<form id="paypal_payment_form_cart" class="paypal_payment_form" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/express_checkout/payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])) {?><input type="hidden" name="id_product" value="<?php echo intval($_GET['id_product']);?>
" /><?php }?>
	<!-- Change dynamicaly when the form is submitted -->
	<?php if (isset($_smarty_tpl->tpl_vars['product_minimal_quantity']->value)) {?>
	<input type="hidden" name="quantity" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product_minimal_quantity']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<?php } else { ?>
	<input type="hidden" name="quantity" value="1" />
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['id_product_attribute_ecs']->value)) {?>
	<input type="hidden" name="id_p_attr" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id_product_attribute_ecs']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<?php } else { ?>
	<input type="hidden" name="id_p_attr" value="" />
	<?php }?>
	<input type="hidden" name="express_checkout" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_current_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
</form>

<?php if ($_smarty_tpl->tpl_vars['use_paypal_in_context']->value) {?>
	<input type="hidden" id="in_context_checkout_enabled" value="1">
<?php } else { ?>
	<input type="hidden" id="in_context_checkout_enabled" value="0">
<?php }?>


<?php }} ?>
