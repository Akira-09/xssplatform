<?php
/* Smarty version 3.1.33, created on 2020-07-20 10:13:03
  from 'D:\phpstudy_pro\WWW\xssplatform\themes\default\templates\project_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f14fdaf6cd008_88506062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82fa69ed1607622c4b92af7cb6e93809445b239' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\xssplatform\\themes\\default\\templates\\project_view.html',
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
function content_5f14fdaf6cd008_88506062 (Smarty_Internal_Template $_smarty_tpl) {
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

<style>
#ul1 { margin:0; width:220px; overflow:scroll-x; word-break:break-all}
.ohidden ul { height:18px; overflow:hidden }
a.oall,a.un { text-decoration:none }
td { vertical-align:top }
</style>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
	$("a.oall").click(function(){
		if($(this).attr("class")=="oall"){
			$("table tbody tr").attr("class","");
			$("a.un").html("-折叠");
			$(this).attr("class","uall");
			$(this).html("-全部");	
		}else{
			$("table tbody tr").attr("class","ohidden");
			$("a.un").html("+展开");
			$(this).attr("class","oall");
			$(this).html("+全部");	
		}
	});
	$("a.un").click(function(){
		if($(this).parent().parent().attr("class")=="ohidden"){
			$(this).parent().parent().attr("class","");
			$(this).html("-折叠");
		}else{
			$(this).parent().parent().attr("class","ohidden");
			$(this).html("+展开");	
		}
	});
});
function Delete(id,obj,token){
	if(confirm("确定删除吗?")){
		$.post('index.php?do=project&act=delcontent&r='+Math.random(),{'id':id,'token':token},function(re){
			if(re==1){
				$(obj).parent().parent().remove();
			}
		});
	}
}
function MutiDelete(){
	if(confirm("确定删除选中的内容吗?")){
		var ids=[];
		$.each($(".checon"),function(k,v){
			if($(v).is(":checked")) ids.push($(v).val());
		});
		$.post('index.php?do=project&act=delcontents&r='+Math.random(),{'ids':ids.join("|"),'token':$("#token").val()},function(re){
			if(re==1){
				$(".checon").parent().parent().remove();
			}
		});
	}
}
function CheckAll(obj){
	if($(obj).is(":checked")){
		$(".checon").attr("checked","checked");
	}else{
		$(".checon").removeAttr("checked");
	}
}
function Copy(obj) { 
  var table = $(obj).parent().parent(); 
  var l = table.find("#location").text(); 
  var c = table.find("#cookie").text(); 
  var t = l.split('//')[1]; 
  t = t.split('/')[0]; 
  var d = ""; 
  var t2 = t.split('.'); 
  for (key in t2) { 
    if (key == 0) { 
      continue; 
    } 
    d = d + '.' + t2[key]; 
  }; 
  var arr = c.split(';'); 
  var data = []; 
  for (var key in arr) { 
    var arr2 = arr[key].split('='); 
    data.push(cookie(d,arr2[0], arr2[1])); 
  } 
  alert(JSON.stringify(data)); 
} 

function cookie(d,n,v) 
{ 
  var row ={     
    "domain" : d, 
    "expirationDate" : Math.round(new Date().getTime()/1000)+3600, 
    "hostOnly" : false, 
    "httpOnly" : false, 
    "name" : n.replace(/^\s+|\s+$/g,''), 
    "path" : "\/", 
    "secure" : false, 
    "session" : false, 
    "storeId" : "0", 
    "value" : v.replace(/^\s+|\s+$/g,'') 
    }; 
  return row; 
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
    	<div class="panel-heading">项目内容<a style="font-size:12px; margin-left:10px; float:right;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=viewcode&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">查看代码</a>
    	<a style="font-size:12px;float:right;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=setcode&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">配置</a>
		</div>
<table class="table" border="0" cellspacing="0" cellpadding="0">
	<div style="padding: 10px 15px;">
    <h3>
    	项目名称: <?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>

    </h3>
    Domain: 
    <select onchange="location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/index.php?do=project&act=view&id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
&domain='+this.value">
    	<option value="">全部</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['domain']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select> 
    <br />
    接口地址: <?php echo $_smarty_tpl->tpl_vars['url']->value['root'];?>
/do/auth/<?php echo $_smarty_tpl->tpl_vars['project']->value['authCode'];?>
 ( 加 /domain/xxx 可通过域名过滤内容) <a id="plugin" href="/xsser.crx" download><button class="btn btn-success">安装插件</button></a>
    </div>
	<thead>
		<tr>
			<th width="20"><input type="checkbox" id="checkall" onclick="CheckAll(this)" /></th>
        	<th width="60"><a href="javascript:void(0)" class="oall" style="font-weight:normal">+全部</a></th>
        	<th width="120">时间</th>
        	<th width="220">接收的内容</th>
			<th width="220">Request Headers</th>
            <th width="80">操作</th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr class="ohidden">
			<td><input type="checkbox" class="checon" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
        	<td><a href="javascript:void(0)" class="un">+展开</a></td>
        	<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['addTime'],"%Y-%m-%d %H:%M:%S");?>
</td>
			<td>
                <ul id="ul1">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['content'], 'c', false, 'ck');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ck']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['ck']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
                </ul>
            </td>
            <td>
                <ul id="ul1">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['serverContent'], 's', false, 'sk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sk']->value => $_smarty_tpl->tpl_vars['s']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['sk']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['s']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
                </ul>
            </td>
            <td><a href="javascript:void(0)" onclick="Delete('<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
',this,'<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
')">删除</a>
			<!--
			&nbsp;&nbsp;<a href="javascript:void(0)" onclick="Copy(this)">复制</a> 
			-->
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<div style="padding:5px 10px">选中项操作：<a href="javascript:void(0)" onclick="MutiDelete()">删除</a></div>
</div>
</div>
</div>
<input type="hidden" id="token" value="<?php echo $_smarty_tpl->tpl_vars['show']->value['user']['token'];?>
" />
</body>
</html><?php }
}
