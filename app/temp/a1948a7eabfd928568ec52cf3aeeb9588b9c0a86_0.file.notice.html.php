<?php
/* Smarty version 3.1.33, created on 2020-11-22 00:18:59
  from '/mnt/app/themes/default/templates/notice.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb93df3093e33_93197055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1948a7eabfd928568ec52cf3aeeb9588b9c0a86' => 
    array (
      0 => '/mnt/app/themes/default/templates/notice.html',
      1 => 1605883823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb93df3093e33_93197055 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['notice']->value['str'];?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/style/screen.css" type="text/css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/style/print.css" type="text/css">
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/style/ie.css" type="text/css"><![endif]-->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/style/style.css" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript">
setTimeout("location.href='<?php echo $_smarty_tpl->tpl_vars['notice']->value['turnto'];?>
'",500);
<?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
	<div style="margin:50px auto 0 auto" class="<?php echo $_smarty_tpl->tpl_vars['notice']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value['str'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['notice']->value['turnto'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value['urltitle'];?>
</a></div>
</div>
</body>
</html><?php }
}
