<?php
/* Smarty version 3.1.43, created on 2022-08-09 15:20:08
  from 'C:\Users\Marco\PhpstormProjects\Petty-back\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f25f088f6925_73816829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '386e621241861168f45475ede7cd4cac11ee5940' => 
    array (
      0 => 'C:\\Users\\Marco\\PhpstormProjects\\Petty-back\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f25f088f6925_73816829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\Users\\Marco\\PhpstormProjects\\Petty-back\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\38\\6e\\62\\386e621241861168f45475ede7cd4cac11ee5940_2.file.helpers.tpl.php',
    'uid' => '386e621241861168f45475ede7cd4cac11ee5940',
    'call_name' => 'smarty_template_function_renderLogo_3096710462f25f088bab58_70751569',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_3096710462f25f088bab58_70751569 */
if (!function_exists('smarty_template_function_renderLogo_3096710462f25f088bab58_70751569')) {
function smarty_template_function_renderLogo_3096710462f25f088bab58_70751569(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_3096710462f25f088bab58_70751569 */
}
