<?php /* Smarty version Smarty-3.0.8, created on 2016-05-13 03:27:45
         compiled from "F:\Code\www\feedback/tpl\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1159457352d916d7899-82082969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd67fdd0dd14834e518ccf357f52c0fc83de87c99' => 
    array (
      0 => 'F:\\Code\\www\\feedback/tpl\\index.html',
      1 => 1463102811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159457352d916d7899-82082969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
	<title>Bug</title>
</head>
<body>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'api','a'=>'upload'),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">
	<input name="app_title" type="text" value="app_title"/>
    <input name="user_email" type="text" value="user_email"/>
    <input name="user_qq" type="text" value="user_qq"/>
    <input name="level" type="text" value="3"/>
    <input name="description" type="text" value="description"/>
    <input name="app_package" type="text" value="app_package"/>
    <input name="app_version" type="text" value="app_version"/>
    <input name="device_imei" type="text" value="device_imei"/>
    <input name="device_model" type="text" value="device_model"/>
    <input name="system_version" type="text" value="system_version"/>
    <input name="app_attachment" type="file"/>
	<input type="submit" value="提交"/>
</form>
</body>
</html>