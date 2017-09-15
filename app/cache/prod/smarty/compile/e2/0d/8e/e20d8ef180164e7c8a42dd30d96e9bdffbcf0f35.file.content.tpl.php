<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 11:33:42
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\admin-alcosto\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3115659bc00e652d750-73984121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e20d8ef180164e7c8a42dd30d96e9bdffbcf0f35' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\admin-alcosto\\themes\\default\\template\\content.tpl',
      1 => 1503946274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3115659bc00e652d750-73984121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bc00e65315d9_50072610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc00e65315d9_50072610')) {function content_59bc00e65315d9_50072610($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
