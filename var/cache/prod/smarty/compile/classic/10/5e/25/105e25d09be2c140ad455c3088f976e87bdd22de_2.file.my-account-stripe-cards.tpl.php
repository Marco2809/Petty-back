<?php
/* Smarty version 3.1.43, created on 2022-08-09 15:20:36
  from 'C:\Users\Marco\PhpstormProjects\Petty-back\modules\stripe_official\views\templates\hook\my-account-stripe-cards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f25f24e53d76_57625611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105e25d09be2c140ad455c3088f976e87bdd22de' => 
    array (
      0 => 'C:\\Users\\Marco\\PhpstormProjects\\Petty-back\\modules\\stripe_official\\views\\templates\\hook\\my-account-stripe-cards.tpl',
      1 => 1660051013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f25f24e53d76_57625611 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isSaveCard']->value) {?>
  <?php if ($_smarty_tpl->tpl_vars['prestashop_version']->value == '1.7') {?>
      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('stripe_official','stripeCards'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My cards','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
          <span class="link-item">
              <i class="material-icons md-36">payment</i>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My cards','mod'=>'stripe_official'),$_smarty_tpl ) );?>

          </span>
      </a>
  <?php } else { ?>
      <li>
          <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('stripe_official','stripeCards'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My cards','mod'=>'stripe_official'),$_smarty_tpl ) );?>
">
              <i class="icon-credit-card"></i>
              <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My cards','mod'=>'stripe_official'),$_smarty_tpl ) );?>
</span>
          </a>
      </li>
  <?php }
}
}
}
