<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 12:47:43
         compiled from "module:ps_facetedsearch/ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3211459bc123f3dad50-86402394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearch/ps_facetedsearch.tpl',
      1 => 1503946276,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3211459bc123f3dad50-86402394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bc123f3ea759_79968051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc123f3ea759_79968051')) {function content_59bc123f3ea759_79968051($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        <?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<?php }} ?>
