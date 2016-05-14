<?php /* Smarty version Smarty-3.0.8, created on 2016-05-13 16:59:20
         compiled from "F:\Code\www\feedback/tpl\list.html" */ ?>
<?php /*%%SmartyHeaderCode:18752573597684145d5-60571351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '261e9f844db435e5d8f1f46a26b6813100ba80be' => 
    array (
      0 => 'F:\\Code\\www\\feedback/tpl\\list.html',
      1 => 1463129955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18752573597684145d5-60571351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bug_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
    <lu>
        <li>ID:<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</li>
        <li>应用名：<?php echo $_smarty_tpl->tpl_vars['v']->value['app_title'];?>
</li>
        <li>描述：<?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</li>
        <li>E-Mail：<?php echo $_smarty_tpl->tpl_vars['v']->value['user_email'];?>
</li>
        <li>QQ：<?php echo $_smarty_tpl->tpl_vars['v']->value['user_qq'];?>
</li>
        <li>IP：<?php echo $_smarty_tpl->tpl_vars['v']->value['user_ip'];?>
</li>
        <li>包名：<?php echo $_smarty_tpl->tpl_vars['v']->value['app_package'];?>
</li>
        <li>版本：<?php echo $_smarty_tpl->tpl_vars['v']->value['app_version'];?>
</li>
        <li>IMEI：<?php echo $_smarty_tpl->tpl_vars['v']->value['device_imei'];?>
</li>
        <li>型号：<?php echo $_smarty_tpl->tpl_vars['v']->value['device_model'];?>
</li>
        <li>系统版本：<?php echo $_smarty_tpl->tpl_vars['v']->value['system_version'];?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['app_attachment']!=null){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['app_attachment'];?>
">附件</a></li>
        <?php }?>

    </lu>
    <br>
    评论：
    <lu>
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('reply_list')->value[$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
?>
            <li><?php echo $_smarty_tpl->tpl_vars['r']->value['content'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['r']->value['time'];?>
</li>
        <?php }} ?>
    </lu>
    <br><br><br>
<?php }} ?>
</body>
</html>