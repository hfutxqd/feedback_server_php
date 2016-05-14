<?php
header('Content-type:application/json;charset=UTF-8');

import("uploadFile.php");
import("Mail.php");
import("Tool.php");

class api extends spController
{
    function upload(){
        $rtn = array(
            "result"=>false,
        );
        $description = $this->spArgs('description');
        $level = $this->spArgs('level');
        $user_email = $this->spArgs('user_email');
        $user_qq = $this->spArgs('user_qq');
        $app_title = $this->spArgs('app_title');
        $app_package = $this->spArgs('app_package');
        $app_version = $this->spArgs('app_version');
        $device_imei = $this->spArgs('device_imei');
        $device_model = $this->spArgs('device_model');
        $system_version = $this->spArgs('system_version');
        if(!is_null($_FILES['app_attachment']))
        {
            $file = new uploadFile();
            $res = $file->upload_file($_FILES['app_attachment']);
            if(!$res)
            {
                $rtn['message'] = $file->errmsg;
                if($_FILES['app_attachment']['error'] != 4)
                 {
                    echo json_encode($rtn);
                    exit(-1);
                }
            }else{
                $url = $file->uploaded;
            }
        }
        
        $newrow = array(
            'description' => $description,
            'level' => $level,
            'ver' => Tool::getRandChar(10),
            'user_email' => $user_email,
            'user_qq' => $user_qq,
            'user_ip' => $_SERVER["REMOTE_ADDR"],
            'app_title' => $app_title,
            'app_package' => $app_package,
            'app_version' => $app_version,
            'app_attachment' => $url,
            'device_imei' => $device_imei,
            'device_model' => $device_model,
            'system_version' => $system_version,
        );
        $feedBack = spClass("FeedBack");
        $feedBack->create($newrow);
        $rtn['result'] = true;
        echo json_encode($rtn);
    }

    function comment()
    {
        $id = $this->spArgs('id');
        $content = $this->spArgs('content');
        $reply = spClass('Reply');
        $type = 'user';
        if($_SESSION['login'])
        {
            $type = 'developer';
        }
        $newrow = array(
            'fb_id' => $id,
            'content' => $content,
            'type' => $type
        );
        $reply->create($newrow);
        $rtn['result'] = true;

        if($_SESSION['login'])
        {
            $feedBack = spClass("FeedBack")->find("id=$id");
            if(Tool::isEmail($feedBack['user_email']))
            {
                $args = array(
                    'id' => $feedBack['id'],
                    'ver' => $feedBack['ver']
                );
                $mail = new Mail();
                $subject = "开发者评论了您对".$feedBack['app_title']."的反馈";
                $body = $feedBack['app_title']."的开发者评论了您对".$feedBack['app_title']."的反馈:<br>";
                $body .= $content;
                $body .= "若要回复或者想了解详情,请点击以下链接:<br>";
                $body .= spUrl('main', 'li', $args);
                $mail->send($feedBack['user_email'], $subject, $body);
            }
        }
        echo json_encode($rtn);
    }
    
    function image()
    {
        if(!is_null($_FILES['wangEditorMobileFile']))
        {
            $file = new uploadFile('comment');
            $res = $file->upload_file($_FILES['wangEditorMobileFile']);
            if($res)
            {
                echo $file->uploaded;
            }else{
                echo $file->errmsg;
            }
        }else if(!is_null($_FILES['wangEditorH5File'])){
            $file = new uploadFile('comment');
            $res = $file->upload_file($_FILES['wangEditorH5File']);
            if($res)
            {
                echo $file->uploaded;
            }else{
                echo $file->errmsg;
            }
        }
    }

    function test()
    {

    }

    function get_comment()
    {
        $id = $this->spArgs('id');
        $reply = spClass('Reply');
        $newrow = array(
            'fb_id' => $id
        );
        $res = $reply->findAll($newrow);
        $rtn['result'] = true;
        $rtn['data'] = $res;
        echo json_encode($rtn);
    }

}
?>