<?php /* Smarty version Smarty-3.1.19, created on 2014-09-11 08:59:56
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8009446935411486c230041-68305407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7431e1a05cd21f901f08a78bffbc9ef9bb4e1e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/default-bootstrap/order-confirmation.tpl',
      1 => 1406810456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8009446935411486c230041-68305407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_ORDER_CONFIRMATION' => 0,
    'HOOK_PAYMENT_RETURN' => 0,
    'is_guest' => 0,
    'id_order_formatted' => 0,
    'reference_order' => 0,
    'email' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5411486c2937c9_48306796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5411486c2937c9_48306796')) {function content_5411486c2937c9_48306796($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Order confirmation'),$_smarty_tpl);?>
</h1>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
	<p><?php echo smartyTranslate(array('s'=>'Your order ID is:'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['id_order_formatted']->value;?>
</span> . <?php echo smartyTranslate(array('s'=>'Your order ID has been sent via email.'),$_smarty_tpl);?>
</p>
    <p class="cart_navigation exclusive">
	<a class="button-exclusive btn btn-default" href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['reference_order']->value);?>
<?php $_tmp26=ob_get_clean();?><?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['email']->value);?>
<?php $_tmp27=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking',true,null,"id_order=".$_tmp26."&email=".$_tmp27), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
"><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Follow my order'),$_smarty_tpl);?>
</a>
    </p>
<?php } else { ?>
<p class="cart_navigation exclusive">
	<a class="button-exclusive btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
"><i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Back to orders'),$_smarty_tpl);?>
</a>
</p>
<?php }?>
<?php }} ?>
