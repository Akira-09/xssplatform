<?php
/* Smarty version 3.1.33, created on 2020-07-20 10:12:58
  from 'D:\phpstudy_pro\WWW\xssplatform\themes\default\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f14fdaaeb9956_84186020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd376f49e2d16ab8b4fa409d93b80d04bd00551ee' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\xssplatform\\themes\\default\\templates\\index.html',
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
function content_5f14fdaaeb9956_84186020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\phpstudy_pro\\WWW\\xssplatform\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
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
    			<div class="panel-heading">我的项目<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=create" style="float:right;">创建项目</a></div>   
	<table border="0" cellspacing="0" cellpadding="0" class="table">
		<thead>
			<tr>
				<th width="200">项目名称</th>
				<th>项目描述</th>
				<th width="100">内容数</th>
				<th width="100">创建时间</th>
				<th width="50">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=view&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['contentNum'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addTime'],'%Y-%m-%d');?>
</td>
				<td>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&token=<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
" onclick="return confirm('确定删除吗?');">删除</a>
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
</body>
</html><?php }
}
