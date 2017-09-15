<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\cms\sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2032159bc15474bb016-26644060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae4b5bd6f8ff464cdf707c4594f7c3f4325c7a0' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\cms\\sitemap.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '40f3fdde33c5a42328031fe7321179246527f950' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\page.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    'be4e12407558cd12b455956e27e22aa6bfdad369' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    'e9a4207e162c43630ae08329572fce05b849c926' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '1e39e50b723525b3324dcb168d84da5ee98d4fb5' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\stylesheets.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    'f992ead6ecd8fc6c667130cb6e6ee77d3a7242ff' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\javascript.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    'af24b886acc02c4d6c73550c2798991bfb22093f' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\head.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '11930d3eea6064f9f728e19a6bf7e8d3b5171c8b' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    'ef4f6de346fcb233460f9019dd7304a44842fa34' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '99458250297d09efacd4f0f205dcf08ea96d9946' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\notifications.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '7764056f16f8d21570ce2331177ce39a061e8632' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '2940ebdcf18681a04458a72bebdaa9d1b61b98dc' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\cms\\_partials\\sitemap-nested-list.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
    '7341d7800f918456d344362614eef0bd3bbaad6e' => 
    array (
      0 => 'C:\\xampp5.5\\htdocs\\drogasalcosto\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1503946276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032159bc15474bb016-26644060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bc15476d6194_53184763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bc15476d6194_53184763')) {function content_59bc15476d6194_53184763($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2032159bc15474bb016-26644060');
content_59bc1547510f26_23040006($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2032159bc15474bb016-26644060');
content_59bc154758a0c4_45454902($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      

      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2032159bc15474bb016-26644060');
content_59bc15475a17c5_75202464($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>

      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2032159bc15474bb016-26644060');
content_59bc15475b8ed4_49262842($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      

      <section id="wrapper">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

        <div class="container">
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2032159bc15474bb016-26644060');
content_59bc15475f3858_74830281($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          

          

          
  <div id="content-wrapper">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <section id="main">

    
      
        <header class="page-header">
          <h1>
  <span class="sitemap-title"><?php echo smartyTranslate(array('s'=>'Sitemap','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
</h1>
        </header>
      
    

    
  <div class="container-fluid">
    <div class="row sitemap col-xs-12">
        <div class="col-md-3">
          <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['our_offers']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php /*  Call merged included template "cms/_partials/sitemap-nested-list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('links'=>$_smarty_tpl->tpl_vars['links']->value['offers']), 0, '2032159bc15474bb016-26644060');
content_59bc1547635ee6_29248078($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cms/_partials/sitemap-nested-list.tpl" */?>
        </div>
        <div class="col-md-3">
          <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php /*  Call merged included template "cms/_partials/sitemap-nested-list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('links'=>$_smarty_tpl->tpl_vars['links']->value['categories']), 0, '2032159bc15474bb016-26644060');
content_59bc1547635ee6_29248078($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cms/_partials/sitemap-nested-list.tpl" */?>
        </div>
        <div class="col-md-3">
          <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['your_account']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php /*  Call merged included template "cms/_partials/sitemap-nested-list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('links'=>$_smarty_tpl->tpl_vars['links']->value['user_account']), 0, '2032159bc15474bb016-26644060');
content_59bc1547635ee6_29248078($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cms/_partials/sitemap-nested-list.tpl" */?>
        </div>
        <div class="col-md-3">
          <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pages']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php /*  Call merged included template "cms/_partials/sitemap-nested-list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('links'=>$_smarty_tpl->tpl_vars['links']->value['pages']), 0, '2032159bc15474bb016-26644060');
content_59bc1547635ee6_29248078($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cms/_partials/sitemap-nested-list.tpl" */?>
        </div>
    </div>
  </div>


    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </section>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


          
        </div>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2032159bc15474bb016-26644060');
content_59bc15476b6d85_16239086($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '2032159bc15474bb016-26644060');
content_59bc15475535b9_31775938($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc1547510f26_23040006')) {function content_59bc1547510f26_23040006($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '2032159bc15474bb016-26644060');
content_59bc154753beb8_81270245($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '2032159bc15474bb016-26644060');
content_59bc15475535b9_31775938($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc154753beb8_81270245')) {function content_59bc154753beb8_81270245($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc15475535b9_31775938')) {function content_59bc15475535b9_31775938($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc154758a0c4_45454902')) {function content_59bc154758a0c4_45454902($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc15475a17c5_75202464')) {function content_59bc15475a17c5_75202464($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>



  <nav class="header-nav">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down">
            <div class="col-md-4 col-xs-12">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

            </div>
            <div class="col-md-8 right-nav">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

            </div>
          </div>
          <div class="hidden-md-up text-sm-center mobile">
            <div class="float-xs-left" id="menu-icon">
              <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
            <div class="float-xs-right" id="_mobile_cart"></div>
            <div class="float-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>



  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-md-10 col-sm-12 position-static">
          <div class="row">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc15475b8ed4_49262842')) {function content_59bc15475b8ed4_49262842($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc15475f3858_74830281')) {function content_59bc15475f3858_74830281($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\cms\_partials\sitemap-nested-list.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc1547635ee6_29248078')) {function content_59bc1547635ee6_29248078($_smarty_tpl) {?>

  <ul<?php if (isset($_smarty_tpl->tpl_vars['is_nested']->value)) {?> class="nested"<?php }?>>
    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
      <li>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['children'])&&count($_smarty_tpl->tpl_vars['link']->value['children'])>0) {?>
          <?php /*  Call merged included template "cms/_partials/sitemap-nested-list.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('links'=>$_smarty_tpl->tpl_vars['link']->value['children'],'is_nested'=>true), 0, '2032159bc15474bb016-26644060');
content_59bc1547635ee6_29248078($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "cms/_partials/sitemap-nested-list.tpl" */?>
        <?php }?>
      </li>
    <?php } ?>
  </ul>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-09-15 13:00:39
         compiled from "C:\xampp5.5\htdocs\drogasalcosto\themes\classic\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59bc15476b6d85_16239086')) {function content_59bc15476b6d85_16239086($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          
            <a class="_blank" href="http://www.prestashop.com" target="_blank">
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

            </a>
          
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
