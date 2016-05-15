<?php /* Smarty version Smarty-3.0.8, created on 2016-05-15 11:16:18
         compiled from "F:\Code\www\feedback/tpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:34855737ea02952c04-64368593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61064e260c3764338948316d2ecd5230c3897686' => 
    array (
      0 => 'F:\\Code\\www\\feedback/tpl\\login.html',
      1 => 1463239487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34855737ea02952c04-64368593',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆反馈系统</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/signin.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <form class="form-signin" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logingo'),$_smarty_tpl);?>
">
        <h2 class="form-signin-heading">登陆反馈系统</h2>
        <div class="form-group">
            <label for="inputUsername" class="sr-only">用户名</label>
            <input type="text" id="inputUsername" name="user" class="form-control" placeholder="用户名" required autofocus>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="密码" required>
        </div>
        <button class="btn btn-lg btn-primary btn-block">登陆</button>
    </form>
</div>
</body>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>
