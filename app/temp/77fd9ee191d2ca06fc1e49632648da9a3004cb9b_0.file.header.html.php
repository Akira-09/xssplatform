<?php
/* Smarty version 3.1.33, created on 2020-07-20 10:06:28
  from 'D:\phpstudy_pro\WWW\xssplatform\themes\default\templates\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f14fc24b46537_64949302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77fd9ee191d2ca06fc1e49632648da9a3004cb9b' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\xssplatform\\themes\\default\\templates\\header.html',
      1 => 1594623455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f14fc24b46537_64949302 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-fixed-top navbar-inverse">
   <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php">Xss平台</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php">主页</a></li>
			<!--
            <li><a href="#about">关于</a></li>
            <li><a href="#contact">博客</a></li>
			-->
          </ul>
		  <?php if (empty($_smarty_tpl->tpl_vars['show']->value['user']) || $_smarty_tpl->tpl_vars['show']->value['user']['userId'] < 1) {?>
		  	<ul class="nav navbar-nav navbar-right ng-scope" ng-controller="user_ctrl" id="header_me">
                <li>
                    <a class="mr_15" wt-tracker="Header|Menu|Goto Signin" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=login">登录</a>
                <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=register" wt-tracker="Header|Menu|Goto Apply">注册</a>
                </li>
                
            </ul>
			<?php }?>
		  <?php if (isset($_smarty_tpl->tpl_vars['show']->value['user']) && $_smarty_tpl->tpl_vars['show']->value['user']['userId'] > 0) {?>
		  <ul class="nav navbar-nav navbar-right ng-scope" ng-controller="user_ctrl" id="header_me">
                <li>
                    <a href="#" wt-tracker="Header|Menu|Goto Apply">用户：<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['userName'];?>
</a>
                <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=user&act=seting" wt-tracker="Header|Menu|Goto Apply">个人设置</a>
                </li>
				<?php if ($_smarty_tpl->tpl_vars['show']->value['user']['adminLevel'] > 0) {?>
				  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=user&act=invite" wt-tracker="Header|Menu|Goto Apply">邀请</a>
                </li>
				<?php }?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=login&act=logout" wt-tracker="Header|Menu|Goto Apply">退出登陆</a>
                </li>
            </ul>
			<?php }?>
        </div><!--/.nav-collapse -->
      <iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
    </div><?php }
}
