<?php
/* Smarty version 3.1.33, created on 2020-07-13 15:16:12
  from 'D:\phpEnv\www\localhost\xssplatform\themes\default\templates\user_invite.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c0a3cb70e75_58424179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f23bb0bb20b80c707a35455b01ebc54b3a36b3c4' => 
    array (
      0 => 'D:\\phpEnv\\www\\localhost\\xssplatform\\themes\\default\\templates\\user_invite.html',
      1 => 1594623455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5f0c0a3cb70e75_58424179 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>XSS Platform</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/css/css.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/js/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value['themePath'];?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<div class="col-sm-12">
          <div class="panel panel-default">
    	<div class="panel-heading">邀请码生成</div>
		<div style="padding: 10px 15px;">
	<h3>未使用的邀请码</h3>
	<table class="table" border="0" cellspacing="0" cellpadding="0">
		<b>乌云币奖品邀请码 (<?php echo count($_smarty_tpl->tpl_vars['codesWooyun']->value);?>
)</b> 
		<a style="float: right;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=user&act=createinvite&isWooyun=1">生成奖品邀请码</a>
		<thead>
			<tr>
				<th>邀请码 (生成时间倒序排列)</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['codesWooyun']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>

	<table class="table" border="0" cellspacing="0" cellpadding="0">
		<b>其它邀请码 (<?php echo count($_smarty_tpl->tpl_vars['codesOther']->value);?>
)</b> <a style="float: right;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=user&act=createinvite&isWooyun=0">生成其它邀请码</a>
		<thead>
			<tr>
				<th>邀请码 (生成时间倒序排列)</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['codesOther']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
</body>
</html><?php }
}
