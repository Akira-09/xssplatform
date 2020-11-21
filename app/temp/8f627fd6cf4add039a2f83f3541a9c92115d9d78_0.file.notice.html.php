<?php
/* Smarty version 3.1.33, created on 2020-07-20 10:12:18
  from 'D:\phpstudy_pro\WWW\xssplatform\themes\default\templates\notice.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f14fd82f23341_89045094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f627fd6cf4add039a2f83f3541a9c92115d9d78' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\xssplatform\\themes\\default\\templates\\notice.html',
      1 => 1594623455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f14fd82f23341_89045094 (Smarty_Internal_Template $_smarty_tpl) {
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
