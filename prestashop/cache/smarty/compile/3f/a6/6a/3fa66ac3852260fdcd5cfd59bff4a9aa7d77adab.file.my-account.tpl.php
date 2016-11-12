<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 20:25:49
         compiled from "/var/www/html/prestashop_1.6.1.9/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2764835858276cbdc38667-18283190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa66ac3852260fdcd5cfd59bff4a9aa7d77adab' => 
    array (
      0 => '/var/www/html/prestashop_1.6.1.9/prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1478514348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2764835858276cbdc38667-18283190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58276cbdf2b0a3_00310760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58276cbdf2b0a3_00310760')) {function content_58276cbdf2b0a3_00310760($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>
