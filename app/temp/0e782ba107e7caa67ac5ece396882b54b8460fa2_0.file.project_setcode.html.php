<?php
/* Smarty version 3.1.33, created on 2020-07-13 15:15:57
  from 'D:\phpEnv\www\localhost\xssplatform\themes\default\templates\project_setcode.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c0a2d37bb01_40965834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e782ba107e7caa67ac5ece396882b54b8460fa2' => 
    array (
      0 => 'D:\\phpEnv\\www\\localhost\\xssplatform\\themes\\default\\templates\\project_setcode.html',
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
function content_5f0c0a2d37bb01_40965834 (Smarty_Internal_Template $_smarty_tpl) {
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

function ShowContent(id,o){
	if($("#"+id).css("display")=="none"){
		$("#"+id).show();
		$(o).html("折叠");
	}else{
		$("#"+id).hide();
		$(o).html("展开");	
	}
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
    	<div class="panel-heading">配置代码</div>
<form style="padding: 10px 15px;" id="contentForm" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=setcode_submit" method="post">
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
" />
<input type="hidden" name="ty" value="<?php echo $_smarty_tpl->tpl_vars['ty']->value;?>
" />
<fieldset> 
	<div id="contentShow"></div>
	<p> 
		<label for="title">项目名称</label><br> 
		<h2><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</h2> 
	</p> 
	<p> 
		<ul id="moduleList">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modulesCan']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        	<li style="margin-bottom:10px"> <input onclick="if(this.checked){ $('#mset_'+this.value).show() }else{ $('#mset_'+this.value).hide() }" name="modules[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" type="checkbox"<?php if (isset($_smarty_tpl->tpl_vars['v']->value['choosed']) && $_smarty_tpl->tpl_vars['v']->value['choosed'] == 1) {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

            <a href="javascript:void(0)" onclick="ShowContent('m_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
',this)">展开</a>
            <?php if (is_array($_smarty_tpl->tpl_vars['v']->value['setkeys']) && count($_smarty_tpl->tpl_vars['v']->value['setkeys']) > 0) {?>
            <div id="mset_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="display:<?php if (isset($_smarty_tpl->tpl_vars['v']->value['choosed']) && $_smarty_tpl->tpl_vars['v']->value['choosed'] == 1) {?>block<?php } else { ?>none<?php }?>">
            需要配置的参数<br/>
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['setkeys'], 'setkey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['setkey']->value) {
?>
            	<?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 1 && $_smarty_tpl->tpl_vars['setkey']->value['key'] == 'keepsession') {?>
	            <input type="radio" name="setkey_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['setkey']->value['key'];?>
" value="0"<?php if (empty($_smarty_tpl->tpl_vars['setkey']->value['value']) || $_smarty_tpl->tpl_vars['setkey']->value['value'] != 1) {?> checked="checked"<?php }?> /> 无keepsession &nbsp;
	            <input type="radio" name="setkey_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['setkey']->value['key'];?>
" value="1"<?php if (isset($_smarty_tpl->tpl_vars['setkey']->value['value']) && $_smarty_tpl->tpl_vars['setkey']->value['value'] == 1) {?> checked="checked"<?php }?> /> keepsession
	            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['setkey']->value['key'];?>
 : <input type="text" name="setkey_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['setkey']->value['key'];?>
" value="<?php echo isset($_smarty_tpl->tpl_vars['setkey']->value['value']) && $_smarty_tpl->tpl_vars['setkey']->value['value'];?>
" /><br/>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
            <ul id="m_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="display:none">
                <li style="list-style:none">参数:<br /><pre><?php echo $_smarty_tpl->tpl_vars['v']->value['keys'];?>
</pre></li>
                <li style="list-style:none">代码:<br /><pre><?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
</pre></li>
            </ul>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
	</p>
	<p> 
		<label for="code"><input type="checkbox" checked="checked" disabled="disabled" /> 自定义代码</label><br> 
		<textarea name="code" id="code"></textarea>
	</p>
	<p> 
		<input class="btn btn-success" type="submit" value="<?php if ($_smarty_tpl->tpl_vars['ty']->value == 'create') {?>下一步<?php } else { ?>配置<?php }?>"> &nbsp;&nbsp;
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
