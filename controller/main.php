<?php
import("Mail.php");
import("Tool.php");

class main extends spController
{
    function index(){
        $res = spClass("FeedBack")->findAll();
        $this->bug_list = $res;
        $reply = spClass('Reply');
        $replyList = array();
        foreach ($res as $item)
        {
            $replyList[$item['id']] =
                    $reply->findAll('`fb_id` = '.$item['id']);
        }
        $count = $reply->findSql('SELECT * FROM reply;')[0]['count'];
        $this->reply_list = $replyList;
        $this->display("list.html");
    }

    function in()
    {
        $this->display("index.html");
    }

    function li()
    {
        $id = $this->spArgs('id');
        $ver = $this->spArgs('ver');

        if(is_null($id) || is_null($ver) || $id == '' || $ver == '')
        {
            echo "参数错误!";
        }else{
            $_SESSION['fb_id'] = $id;
            $_SESSION['fb_ver'] = $ver;

            if(!is_null($this->spArgs('dev')) && !$_SESSION['login'])
            {
                $this->jump(spUrl('main', 'login'));
            }

            $feedback = spClass("FeedBack")->find("id=$id and ver='$ver'");
            if($feedback)
            {
                $reply = spClass('Reply')->findAll('`fb_id` = '.$feedback['id']);
                $this->feedback = $feedback;
                $this->replyList = $reply;
                if($_SESSION['login'])
                {
                    $this->isDev = true;
                }
                if($feedback['status'] == 0 && $_SESSION['login'])
                {
                    $feedback['status'] == 1;
                    spClass("FeedBack")->update("id=$id", $feedback);
                }

                if(Tool::isMobile())
                {
                    $this->display("feedback_mobile.html");
                }else{
                    $this->display("feedback.html");
                }
            }else{
                echo "非法访问!";
            }
        }
    }

    function login()
    {
        if(!is_null($_SESSION['fb_id']))
        {
            $this->display('login.html');
        }
    }

    function logingo()
    {
        $user = $this->spArgs('user');
        $pwd = $this->spArgs('pwd');
        if(Tool::login($user, $pwd))
        {
            $args = array(
                'id' => $_SESSION['fb_id'],
                'ver' => $_SESSION['fb_ver']
            );
            $this->jump(spUrl('main', 'li', $args));
        }
    }

    function logout()
    {
        $args = array(
            'id' => $_SESSION['fb_id'],
            'ver' => $_SESSION['fb_ver']
        );
        Tool::logout();
        $this->jump(spUrl('main', 'li', $args));
    }
}
?>