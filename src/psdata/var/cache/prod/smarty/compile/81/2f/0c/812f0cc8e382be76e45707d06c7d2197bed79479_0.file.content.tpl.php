<?php
/* Smarty version 3.1.48, created on 2024-12-17 19:49:11
  from '/var/www/html/admin284wsmgoi/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6761c7a7d8dbf2_68918882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '812f0cc8e382be76e45707d06c7d2197bed79479' => 
    array (
      0 => '/var/www/html/admin284wsmgoi/themes/default/template/content.tpl',
      1 => 1734461079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6761c7a7d8dbf2_68918882 (Smarty_Internal_Template $_smarty_tpl) {
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
