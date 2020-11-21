<?php
/* Smarty version 3.1.33, created on 2020-08-03 16:07:40
  from 'D:\phpstudy_pro\WWW\xssplatform\themes\default\templates\user_seting.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f27c5cce15d59_49486260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fcad34634aa8e1648ed31b3611ca88925fa3e73' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\xssplatform\\themes\\default\\templates\\user_seting.html',
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
function content_5f27c5cce15d59_49486260 (Smarty_Internal_Template $_smarty_tpl) {
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
        function CheckAll(obj) {
            if ($(obj).is(":checked")) {
                $(".checon").attr("checked", "checked");
            } else {
                $(".checon").removeAttr("checked");
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
            <div class="panel-heading">个人设置</div>
            <form style="padding: 10px 15px;" id="formSeting" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=user&act=submit"
                  method="post">
                <div style="padding:5px 10px">
                    邮箱:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                    <div class="checkbox disabled">
                        <label>
                            <?php echo $_smarty_tpl->tpl_vars['input1']->value;?>

                            发送邮件提醒
                        </label>
                    </div>
                </div>
                <div style="padding:5px 10px">
                    手机:<input id="phone" class="form-control" name="phone" type="text" maxlength="11" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/>
                    <p>
                    <div class="checkbox disabled">
                        <label>
                            <?php echo $_smarty_tpl->tpl_vars['input2']->value;?>

                            发送短信提醒(暂时已废弃)
                        </label>
                    </div>
                </div>
                <div style="padding:5px 10px">
                    钉钉机器人Key:<input id="dingding" class="form-control" name="dingding" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['dingding']->value;?>
"/>
                    <p>
                    <div class="checkbox disabled">
                        <label>
                            <?php echo $_smarty_tpl->tpl_vars['input3']->value;?>

                            发送钉钉通知
                        </label>
                    </div>
                </div>
                <p>
                    <input class="btn btn-success" id="btnSeting" type="submit" value="提交"/>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }
}
