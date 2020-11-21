<?php
/* Smarty version 3.1.33, created on 2020-07-13 15:09:24
  from 'D:\phpEnv\www\localhost\xssplatform\themes\default\templates\module_create.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c08a4640e67_13465627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc9eaf631b42dfdc2ef0d1dc2afac11bb6e2696' => 
    array (
      0 => 'D:\\phpEnv\\www\\localhost\\xssplatform\\themes\\default\\templates\\module_create.html',
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
function content_5f0c08a4640e67_13465627 (Smarty_Internal_Template $_smarty_tpl) {
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
		ShowError("模块名称不能为空");
		return false;
	}
	$("#contentForm").submit();
}
function ShowError(content){
	$("#contentShow").attr("class","alert alert-danger");
	$("#contentShow").html(content);
}
function AddKey(obj,keyname){
	var liObj=document.createElement("li");
	$(obj).parent().before(liObj);
	var input=document.createElement("input");
	$(liObj).append(input);
	var btn=document.createElement("input");
	$(liObj).append(btn);
	$(liObj).append(document.createTextNode(" "));
	btn.type="button";
	$(btn).val("添加");
	$(liObj).append(document.createTextNode(" "));
	var del=document.createElement("a");
	$(liObj).append(del);
	$(del).attr("href","javascript:void(0)");
	$(del).html("删除");
	$(btn).click(function(){
		var txt=$(input).val();
		if(txt==""){
			alert("请输入参数名");
		}else{
			$(input).remove();
			$(btn).remove();
			var checkObj=document.createElement("input");
			$(del).before(checkObj);
			checkObj.type="checkbox";
			checkObj.checked="checked";
			var keyName=keyname!=null ? keyname : "keys[]";
			$(checkObj).attr("name",keyName);
			$(checkObj).attr("value",txt);
			$(del).before(document.createTextNode(" "+txt+" "));
		}
	});
	$(del).click(function(){
		$(liObj).remove();
	});
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
    	<div class="panel-heading">创建模块</div>
<form  style="padding: 10px 15px;" id="contentForm" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module&act=create_submit" method="post">
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
" />
<fieldset>
	<div id="contentShow"></div>

	<div class="form-group">
		<label for="title">模块名称</label>
		<input type="text" class="form-control"  name="title" id="title">
	</div>
	<p>
		<label for="description">模块描述</label><br>
		<textarea style="height:80px" class="form-control" name="description" id="description"></textarea>
	</p>
    <p>
		<label for="description">参数 (需要服务器接收的参数名)</label><br>
        <ul id="keyList">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keys']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        	<li> <input name="keys[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
" type="checkbox" checked="checked" /> <?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['value'];?>
)</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li><a href="javascript:void(0)" onclick="AddKey(this)">添加</a></li>
        </ul>
	</p>
	<p>
		<label for="description">配置参数 (使用此模块时需要配置的参数，如参数名为user，则代码引用：{set.user})</label><br>
        <ul id="setkeyList">
            <li><a href="javascript:void(0)" onclick="AddKey(this,'setkeys[]')">添加</a></li>
        </ul>
	</p>
    <p>
		<label for="description">代码</label> ({projectId}为项目id,{set.***}为***配置参数)<br>
		<textarea  class="form-control" name="code" id="code" ></textarea>
	</p>
    <p>
		<label for="description">是否公开</label>
        <input type="radio" name="isOpen" value="0" checked="checked" /> 私有
        <input type="radio" name="isOpen" value="1" /> 公开
        <br>
	</p>
	<p>

		<input class="btn btn-success" type="button" value="创建" onclick="SubmitContent()"> &nbsp;&nbsp;
		<input class="btn btn-success" type="button" value="取消" onclick="history.go(-1)">
	</p>
</fieldset>
</form>
</div>
</div>
</div>
</body>
</html><?php }
}
