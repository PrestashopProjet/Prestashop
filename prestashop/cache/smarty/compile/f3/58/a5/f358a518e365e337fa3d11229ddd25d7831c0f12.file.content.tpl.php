<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 20:33:02
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/admin104ylkikz/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153903496158276e6e87c587-39542503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f358a518e365e337fa3d11229ddd25d7831c0f12' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/admin104ylkikz/themes/default/template/content.tpl',
      1 => 1478514344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153903496158276e6e87c587-39542503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58276e6e88a835_45037250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58276e6e88a835_45037250')) {function content_58276e6e88a835_45037250($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
