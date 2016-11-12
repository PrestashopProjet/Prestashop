<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 20:24:48
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169733124558276c80636724-15864467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfcd349c928073ec32eea60be156211f41b0570b' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1478514344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169733124558276c80636724-15864467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58276c807d81a3_88534619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58276c807d81a3_88534619')) {function content_58276c807d81a3_88534619($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
