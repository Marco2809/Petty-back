<?php
/* Smarty version 3.1.43, created on 2022-08-09 15:20:33
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f25f21283712_55678673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1658334665,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_62f25f21283712_55678673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\Users\\Marco\\PhpstormProjects\\Petty-back\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\38\\6e\\62\\386e621241861168f45475ede7cd4cac11ee5940_2.file.helpers.tpl.php',
    'uid' => '386e621241861168f45475ede7cd4cac11ee5940',
    'call_name' => 'smarty_template_function_renderLogo_3096710462f25f088bab58_70751569',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/index.php?controller=my-account" rel="nofollow">
      Il tuo account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Il tuo account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/index.php?controller=identity" title="Informazioni personali" rel="nofollow">
            Informazioni personali
          </a>
        </li>
            <li>
          <a href="http://localhost/index.php?controller=history" title="Ordini" rel="nofollow">
            Ordini
          </a>
        </li>
            <li>
          <a href="http://localhost/index.php?controller=order-slip" title="Note di credito" rel="nofollow">
            Note di credito
          </a>
        </li>
            <li>
          <a href="http://localhost/index.php?controller=addresses" title="Indirizzi" rel="nofollow">
            Indirizzi
          </a>
        </li>
          <li>
    <a href="http://localhost/index.php?fc=module&amp;module=blockwishlist&amp;controller=lists" title="Le mie liste di desideri" rel="nofollow">
      Lista dei desideri
    </a>
  </li>

	</ul>
</div>
<?php }
}
