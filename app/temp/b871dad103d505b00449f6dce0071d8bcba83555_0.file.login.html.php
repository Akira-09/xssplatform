<?php
/* Smarty version 3.1.33, created on 2020-11-22 00:18:53
  from '/mnt/app/themes/default/templates/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb93dedb82328_04163425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b871dad103d505b00449f6dce0071d8bcba83555' => 
    array (
      0 => '/mnt/app/themes/default/templates/login.html',
      1 => 1605883823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5fb93dedb82328_04163425 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php echo '<script'; ?>
>
function Login(){
	if($("#user").val()==""){
		ShowError("用户名不能为空");
		return false;
	}
	if($("#pwd").val()==""){
		ShowError("密码不能为空");
		return false;
	}
}
function ShowError(content){
	$("#contentShow").attr("class","error");
	$("#contentShow").html(content);
}
<?php echo '</script'; ?>
>

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=login&act=submit" method="post" onsubmit="return Login()">
<div class="panel panel-default">
  <div class="panel-heading">登陆</div>
  <div class="panel-body">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-user"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text" placeholder="输入用户名/邮箱" name="user" id="user">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
       <div class="input-group">
           <span class="input-group-addon fs_17"><i class="glyphicon glyphicon-lock"></i><iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></span>
              <input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password" placeholder="输入密码" name="pwd" id="pwd">
       </div>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
</div>
</div>
</form>
</div>

</html><?php }
}
