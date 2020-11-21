<?php
/* Smarty version 3.1.33, created on 2020-07-13 15:17:21
  from 'D:\phpEnv\www\localhost\xssplatform\themes\default\templates\project_create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c0a81d50013_42723610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db737842693fbbcc1d072ee170cbc50e033c4ca' => 
    array (
      0 => 'D:\\phpEnv\\www\\localhost\\xssplatform\\themes\\default\\templates\\project_create.html',
      1 => 1594623455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:menus.html' => 1,
  ),
),false)) {
function content_5f0c0a81d50013_42723610 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript">
function SubmitContent(){
	if($("#title").val()==""){
		ShowError("项目名称不能为空");
		return false;
	}
	$("#contentForm").submit();
}
function ShowError(content){
	$("#contentShow").attr("class","alert alert-danger");
	$("#contentShow").html(content);
}
<?php echo '</script'; ?>
>

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<?php $_smarty_tpl->_subTemplateRender("file:menus.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-sm-9">
          <div class="panel panel-default">
    	<div class="panel-heading">创建项目</div>
<form style="padding: 10px 15px;" id="contentForm" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=create_submit" method="post">
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
" />
<fieldset> 
	<div id="contentShow"></div>
	<div class="form-group">
		<label for="title">项目名称</label>
		<input type="text" class="form-control"  name="title" id="title">
	</div>
	
	<p> 
		<label for="description">项目描述</label><br> 
		<textarea name="description" style="height: 100px" class="form-control" id="description"></textarea>
	</p>
	<p> 
		<input class="btn btn-success" type="button" value="下一步" onclick="SubmitContent()"> &nbsp;&nbsp;
		<input class="btn btn-success" type="button" value="取消" onclick="history.go(-1)"> 
	</p> 
</fieldset> 
</form>
</div>
</div>
</div>
</body>
<?php echo '<script'; ?>
>document.getElementById('title').focus();<?php echo '</script'; ?>
>
</html><?php }
}
