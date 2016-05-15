<?php /* Smarty version Smarty-3.0.8, created on 2016-05-15 12:16:29
         compiled from "F:\Code\www\feedback/tpl\feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:218685737f81d710740-50627926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c037a1491a579ace150c89928e799b8589015ad9' => 
    array (
      0 => 'F:\\Code\\www\\feedback/tpl\\feedback.html',
      1 => 1463285175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218685737f81d710740-50627926',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->getVariable('feedback')->value['description'];?>
</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--<link href="css/dashboard.css" rel="stylesheet">-->
    <!--<link href="css/bootstrap-select.min.css" rel="stylesheet">-->

    <link rel="stylesheet" type="text/css" href="css/wangEditor.min.css">
    <link rel="stylesheet" type="text/css" href="css/feedback.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">导航栏开关</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">查看反馈</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right nav-pills">
                <li><a href="#" data-toggle="modal" data-target="#user_infor">用户信息</a></li>
                <?php if ($_smarty_tpl->getVariable('isDev')->value==true){?>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        更改状态 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'developer','a'=>'update'),$_smarty_tpl);?>
&status=2&id=<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
" class="btn">确定问题</a></li>
                        <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'developer','a'=>'update'),$_smarty_tpl);?>
&status=3&id=<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
" class="btn">需进一步了解</a></li>
                        <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'developer','a'=>'update'),$_smarty_tpl);?>
&status=4&id=<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
" class="btn">正在解决</a></li>
                        <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'developer','a'=>'update'),$_smarty_tpl);?>
&status=5&id=<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
" class="btn">已经解决</a></li>
                        <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'developer','a'=>'update'),$_smarty_tpl);?>
&status=6&id=<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
" class="btn">暂不解决</a></li>
                        <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'developer','a'=>'update'),$_smarty_tpl);?>
&status=7&id=<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
" class="btn">问题无效</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logout'),$_smarty_tpl);?>
">注销</a></li>
                <?php }?>

            </ul>
        </div>
    </div>
</nav>
<div class="container" id="contentBox">
    <ul class="list-group" id="feedback-main">

        <li class="list-group-item">
            <div>内容:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['description'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>时间:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['time'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>当前状态:</div>
            <div>
                <?php if ($_smarty_tpl->getVariable('feedback')->value['status']==0){?>开发者还没有看呢
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==1){?>正在定位该问题
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==2){?>开发者已经确定该问题
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==3){?>问题还需进一步了解
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==4){?>问题正在解决
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==5){?>问题已经解决
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==6){?>感谢反馈
                <?php }elseif($_smarty_tpl->getVariable('feedback')->value['status']==7){?>未发现该问题
                <?php }else{ ?>未知状态
                <?php }?>
            </div>
        </li>
        <li class="list-group-item">
            <div>软件名称:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['app_title'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>软件包名:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['app_package'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>软件版本:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['app_version'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>手机型号:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['device_model'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>系统版本:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['system_version'];?>
</div>
        </li>
        <li class="list-group-item">
            <div>附件:</div><div><a href="<?php echo $_smarty_tpl->getVariable('feedback')->value['app_attachment'];?>
">点击下载</a></div>
        </li>

    </ul>
    <div class="bs-callout bs-callout-info" id="comment-div">
        <div class="cut-off-rule">
            <b>共有<?php echo count($_smarty_tpl->getVariable('replyList')->value);?>
条相关评论</b>
        </div>
        <?php  $_smarty_tpl->tpl_vars['reply'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('replyList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['reply']->key => $_smarty_tpl->tpl_vars['reply']->value){
?>
        <div class="comment-class cut-off-rule">
            <b>
                <?php if ($_smarty_tpl->tpl_vars['reply']->value['type']=='user'){?>
                <span class="reply_user">用户</span>
                <?php }else{ ?>
                <span class="reply_user">开发者</span>
                <?php }?>
                <span class="reply_time"><?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
</span>
            </b>
            <br>
            <p><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
</p>
        </div>
        <?php }} ?>
    </div>
    <div>
        <div id="comment_content" style="height: 300px;" class="form-control" name="comment"></div>
        <br/>
        <input type="submit" value="评论" id="submit" class="btn btn-primary btn-lg col-md-1 col-md-push-11">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="user_infor" tabindex="-1" role="dialog" aria-labelledby="user_infor">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <li class="list-group-item">

                    <div>用户邮箱:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['user_email'];?>
</div>
                </li>
                <li class="list-group-item">
                    <div>QQ号码:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['user_qq'];?>
</div>
                </li>
                <li class="list-group-item">
                    <div>IP地址:</div><div><?php echo $_smarty_tpl->getVariable('feedback')->value['user_ip'];?>
</div>
                </li>
                <li class="list-group-item">
                    <div>用户地区:</div><div id="ip_region"></div>
                </li>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
</body>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/dot/1.0.3/doT.min.js"></script>
<script type="text/javascript" src='js/wangEditor.min.js'></script>
<script src="js/simply-toast.min.js"></script>
<script type="text/x-dot-template" id="comment">
    <div class="cut-off-rule">
        <b>共有{{=it.data.length}}条相关评论</b>
    </div>
    {{~it.data:value:index}}
    <div class="comment-class cut-off-rule">
        <b>
            {{? value.type == 'user'}}
            <span class="reply_user">用户</span>
            {{?}}
            {{? value.type == 'developer'}}
            <span class="reply_user">开发者</span>
            {{?}}
            <span class="reply_time">{{= value.time }}</span>
        </b>
        <br>
        <p>{{= value.content }}</p>
    </div>
    {{~}}
</script>
<script>
    var ver = "<?php echo $_smarty_tpl->getVariable('feedback')->value['ver'];?>
";
    var id = "<?php echo $_smarty_tpl->getVariable('feedback')->value['id'];?>
";
    var ip = "<?php echo $_smarty_tpl->getVariable('feedback')->value['user_ip'];?>
";
    $.getScript("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip="+ip
            ,function()
            {
                if(remote_ip_info.ret==1)
                {
                    var c = remote_ip_info.country,//国家
                            p=remote_ip_info.province,//省份
                            i=remote_ip_info.city,//城市
                            d=remote_ip_info.desc,//详细
                            s=c+''+p+'省'+i+'市'+d;
                }
                else
                {
                    var s=ip+'信息无法查询';
                }
                $('#ip_region').html(s);
            });

    var editor = new wangEditor('comment_content');
    editor.config.uploadImgUrl = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'api','a'=>'image'),$_smarty_tpl);?>
";
    editor.create();

    var interText = doT.template($("#comment").text());

    function getComments() {
        var data = {
            'id':id,
            'ver':ver
        }
        $.ajax({
            type:"GET",
            url:'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'api','a'=>'get_comment'),$_smarty_tpl);?>
',
            data:data,
            dateType:"text",
            success:
                function(result)
                {
                    var dataInter = {"data":result.data};
                    $("#comment-div").html(interText(dataInter));
                }
        });
    }

    $('#submit').click(function () {
        var content = editor.$txt.html();
        var data = {
            'id':id,
            'ver':ver,
            'content': content
        }
        $.ajax({
            type:"POST",
            url:'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'api','a'=>'comment'),$_smarty_tpl);?>
',
            data:data,
            dateType:"json",
            success:
                function(result)
                {
                    editor.$txt.html('');
                    $.simplyToast('回复成功!','success');
                    getComments();
                }
        });
    });

</script>

</html>