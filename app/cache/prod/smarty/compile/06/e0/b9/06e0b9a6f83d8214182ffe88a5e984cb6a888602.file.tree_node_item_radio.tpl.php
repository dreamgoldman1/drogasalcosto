<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 12:23:15
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\admin-alcosto\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2627959bc0c833ee802-53746005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e0b9a6f83d8214182ffe88a5e984cb6a888602' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\admin-alcosto\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1503946274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2627959bc0c833ee802-53746005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bc0c83402091_76513377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc0c83402091_76513377')) {function content_59bc0c83402091_76513377($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
