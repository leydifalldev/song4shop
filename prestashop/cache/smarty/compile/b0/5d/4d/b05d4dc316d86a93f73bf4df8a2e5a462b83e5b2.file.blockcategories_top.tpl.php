<?php /* Smarty version Smarty-3.1.19, created on 2014-09-11 08:59:52
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1217134372541148680d0473-45227867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b05d4dc316d86a93f73bf4df8a2e5a462b83e5b2' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories_top.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217134372541148680d0473-45227867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'thumbnail' => 0,
    'numberColumn' => 0,
    'widthColumn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5411486812e221_70509452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5411486812e221_70509452')) {function content_5411486812e221_70509452($_smarty_tpl) {?>

<!-- Block categories module -->
<div id="categories_block_top">
	<div class="category_top">
		<div class="list">
			<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?> sf-menu sf-js-enabled clearfix">
				<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>				
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['blockCategTree']->value['thumbnails'])&&count($_smarty_tpl->tpl_vars['blockCategTree']->value['thumbnails'])>0) {?>
						<div id="category-thumbnails">
							<?php  $_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['thumbnails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->key => $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
?>
								<div><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
</div>
							<?php } ?>
						</div>
					<?php }?>
					<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['iteration']%$_smarty_tpl->tpl_vars['numberColumn']->value)==0&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
			</ul>
		</div>
	</div>

	<div class="category_footer" style="float:left;clear:none;width:<?php echo $_smarty_tpl->tpl_vars['widthColumn']->value;?>
%">
		<div style="float:left" class="list">
			<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
					<?php }?>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<!-- /Block categories module --><?php }} ?>
