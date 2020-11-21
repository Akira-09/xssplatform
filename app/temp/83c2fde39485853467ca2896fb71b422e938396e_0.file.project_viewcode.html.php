<?php
/* Smarty version 3.1.33, created on 2020-11-22 00:19:07
  from '/mnt/app/themes/default/templates/project_viewcode.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb93dfb087f02_45527683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c2fde39485853467ca2896fb71b422e938396e' => 
    array (
      0 => '/mnt/app/themes/default/templates/project_viewcode.html',
      1 => 1605883823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:menus.html' => 1,
  ),
),false)) {
function content_5fb93dfb087f02_45527683 (Smarty_Internal_Template $_smarty_tpl) {
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

<style>
ul { margin:0}
</style>

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<?php $_smarty_tpl->_subTemplateRender("file:menus.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-sm-9">
          <div class="panel panel-default">
    	<div class="panel-heading">项目代码</div>
		<div style="padding: 10px 15px;">
<caption><h3>项目名称: <?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</h3></caption>
<p>
<label>项目代码：</label>
<pre>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>

</pre>
</p>
<label>如何使用：</label>
<p>将如下代码植入怀疑出现xss的地方（注意'的转义），即可在 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=view&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">项目内容</a> 观看XSS效果。</p>
<pre>
<?php echo $_smarty_tpl->tpl_vars['scriptShow1']->value;?>

</pre>
</p>
<p>
或者
</p>
<p>
<pre>
<?php echo $_smarty_tpl->tpl_vars['scriptShow2']->value;?>

</pre>
</p>

<p>

再或者以你任何想要的方式插入

</p>

<p>
<pre>
<?php echo $_smarty_tpl->tpl_vars['codeurl']->value;?>

</pre>
</p>
<p> 
*************************************************网址缩短************************************************* 
</p> 
<p> 

再或者以你任何想要的方式插入 

</p> 

<p> 
<pre>
<?php echo $_smarty_tpl->tpl_vars['shortShow1']->value;?>

</pre>
</p>
<p> 


再或者以你任何想要的方式插入 

</p> 

<p> 
<pre>
<?php echo $_smarty_tpl->tpl_vars['shortShow3']->value;?>

</pre>
</p>

<p>
<?php if ($_smarty_tpl->tpl_vars['ty']->value == 'create') {?>
<input class="btn btn-success" type="button" value="完成" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php'" />
<?php } else { ?>
<input class="btn btn-success" type="button" value="返回首页" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php'" />
<?php }?>
</p>
</div>
</div>
</div>
</div>
</body>
</html><?php }
}
