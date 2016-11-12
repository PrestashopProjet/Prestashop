<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 20:40:59
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7600837285827704b0ca9f0-25950200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da43a7c03e3e5c5ef8bfe289f53dccc5ef0e16f3' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1478514350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7600837285827704b0ca9f0-25950200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5827704b0ee2c4_94494141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5827704b0ee2c4_94494141')) {function content_5827704b0ee2c4_94494141($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
