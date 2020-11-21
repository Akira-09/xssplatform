<?php
/* Smarty version 3.1.33, created on 2020-07-13 15:07:15
  from 'D:\phpEnv\www\localhost\xssplatform\themes\default\templates\menus.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f0c0823241318_77007053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e3736713f7fcae5fe23f7cf305bb33717ca295e' => 
    array (
      0 => 'D:\\phpEnv\\www\\localhost\\xssplatform\\themes\\default\\templates\\menus.html',
      1 => 1594623455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0c0823241318_77007053 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-3">
	<div class="panel panel-default">
		<div class="panel-heading"><a style="color: #2a6496;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php">我的项目</a><a style="float:right;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=create">创建</a></div> 
			<div class="panel-body">
      			<ul class="nav nav-stacked">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=view&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
	</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading"><a style="color: #2a6496;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module">我的模块</a><a style="float:right;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module&act=create">创建</a></div> 
			<div class="panel-body">
      			<ul class="nav nav-stacked">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['isOpen'] == 0 || ($_smarty_tpl->tpl_vars['v']->value['isOpen'] == 1 && $_smarty_tpl->tpl_vars['v']->value['isAudit'] == 0)) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module&act=set&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
	</div>
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading"><a style="color: #2a6496;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module">公共模块</a></div> 
			<div class="panel-body">
      			<ul class="nav nav-stacked">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<?php if ($_smarty_tpl->tpl_vars['v']->value['isOpen'] == 1 && $_smarty_tpl->tpl_vars['v']->value['isAudit'] == 1) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=module&act=view&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></li>
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
	</div>
	</div>
</div><?php }
}
