<?php
/* Smarty version 3.1.43, created on 2022-08-09 15:19:52
  from 'C:\Users\Marco\PhpstormProjects\Petty-back\admin2\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f25ef82e4e83_88290210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d53b0debb9a1aa03aaddfd732be6e48eee681d' => 
    array (
      0 => 'C:\\Users\\Marco\\PhpstormProjects\\Petty-back\\admin2\\themes\\default\\template\\content.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f25ef82e4e83_88290210 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
