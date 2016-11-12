<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 20:23:54
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/admin/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101305536958276c4a3bfcc9-24316440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375ee90a7a90552e3d9fa8a6a3cce31a10234fcb' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/admin/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1478514344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101305536958276c4a3bfcc9-24316440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58276c4a5ca436_79842487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58276c4a5ca436_79842487')) {function content_58276c4a5ca436_79842487($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
