<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 20:26:06
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64681890658276cce542e69-17085181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1be73e850a114ec711e04227475f50675d342b' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1478514344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64681890658276cce542e69-17085181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58276cce54ab52_97922640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58276cce54ab52_97922640')) {function content_58276cce54ab52_97922640($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
