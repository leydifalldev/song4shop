<?php /* Smarty version Smarty-3.1.19, created on 2014-09-11 09:08:30
         compiled from "/Applications/MAMP/htdocs/prestashop/admin2443/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162628693154114a6e5fb3a2-95649430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6a25f6ff739e4e6fb7999d4ae655d9e858a834' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin2443/themes/default/template/content.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162628693154114a6e5fb3a2-95649430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54114a6e606994_98049490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54114a6e606994_98049490')) {function content_54114a6e606994_98049490($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
