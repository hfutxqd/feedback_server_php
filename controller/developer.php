<?php
import("Tool.php");
import("Mail.php");
/**
 * Created by PhpStorm.
 * User: imxqd
 * Date: 2016/5/13
 * Time: 17:13
 */
class developer extends spController
{
    function login()
    {
        $rtn['result'] = false;
        $user = $this->spArgs('user');
        $pwd = $this->spArgs('passwd');
        if(Tool::login($user, $pwd))
        {
            $rtn['result'] = true;
        }
        echo json_encode($rtn);
    }

    function logout()
    {
        Tool::logout();
        $rtn['result'] = true;
        echo json_encode($rtn);
    }

    function action()
    {
        $type = $this->spArgs('type');
        $id = $this->spArgs('id');
    }

    function update()
    {
        $id = $this->spArgs('id');
        $status = $this->spArgs('status');
        $feedback = spClass('FeedBack')->find("id=$id");

        spClass('FeedBack')->update("id=$id", 
            array(
                'status' => $status
            ));
        $args = array(
            'id' => $_SESSION['fb_id'],
            'ver' => $_SESSION['fb_ver']
        );
        $mail = new Mail();
        $mail->sendStatusChange($feedback);
        $this->jump(spUrl('main', 'li', $args));
    }

}