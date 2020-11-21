<?php
/* Smarty version 3.1.33, created on 2020-07-13 15:09:10
  from 'D:\phpEnv\www\localhost\xssplatform\themes\default\templates\module_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c0896550fa6_03376140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3bd419812ad1b65d3e97ae33ea0cc18ce499ec7' => 
    array (
      0 => 'D:\\phpEnv\\www\\localhost\\xssplatform\\themes\\default\\templates\\module_view.html',
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
function content_5f0c0896550fa6_03376140 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender("file:menus.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-sm-9">
          <div class="panel panel-default">
    	<div class="panel-heading">查看模块信息</div>
<form style="padding: 10px 15px;" id="contentForm" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module&act=set_submit" method="post">
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['id'];?>
" />
<fieldset> 
	<div id="contentShow"></div>
	<div class="form-group">
		<label for="title">模块名称</label>
		<input type="email" class="form-control" id="title" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
" readonly="readonly">
	</div>
	<p> 
		<label for="description">模块描述</label><br> 
		<textarea style="height:80px" class="form-control" name="description" id="description" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['module']->value['description'];?>
</textarea>
	</p>
    <p> 
		<label for="description">参数 (需要服务器接收的参数名)</label><br> 
        <ul id="keyList">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keys']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        	<li> <input name="keys[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" checked="checked" disabled="disabled" /> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
	</p>
	<p> 
		<label for="description">配置参数 (使用此模块时需要配置的参数，如参数名为user，则代码引用：{set.user})</label><br> 
        <ul id="setkeyList">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setkeys']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        	<li> <input name="setkeys[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="checkbox" checked="checked" disabled="disabled" /> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
	</p>
    <p> 
		<label for="description">代码</label> ({projectId}为项目id,{set.***}为***配置参数)<br> 
		<textarea name="code" id="code" class="form-control" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
</textarea>
	</p>
	<?php if ($_smarty_tpl->tpl_vars['module']->value['isOpen'] == 0) {?>
    <p> 
		<label for="description">是否公开</label>  
        <input type="radio" name="isOpen" readonly="readonly" value="0"<?php if ($_smarty_tpl->tpl_vars['module']->value['isOpen'] == 0) {?> checked="checked"<?php }?> /> 私有 
        <input type="radio" name="isOpen" readonly="readonly" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['isOpen'] == 1) {?> checked="checked"<?php }?> /> 公开 
        <br> 
	</p>
	<?php }?>
	<p> 
		<input class="btn btn-success" type="button" value="返回" onclick="history.go(-1)"> 
	</p> 
</fieldset> 
</form>
</div>
</div>
</div>
</body>
</html><?php }
}
