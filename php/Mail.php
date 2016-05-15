<?php
date_default_timezone_set($GLOBALS['G_SP']['timezone']);
/**
 * Created by PhpStorm.
 * User: imxqd
 * Date: 2016/5/13
 * Time: 9:31
 */
class Mail
{
    public $to_mail;
    public $from_email;
    public $from_name;
    public $headers;

    /**
     * mail constructor.
     * @param $to_mail
     */
    public function __construct()
    {
        $mail = $GLOBALS['G_SP']['mail'];
        $this->from_email = $mail['from_mail'];
        $this->to_mail = $mail['to_mail'];
        $this->from_name = $mail['from_name'];

        ini_set('SMTP','imxqd.xyz');
        ini_set('smtp_port',465);
        ini_set('sendmail_from',"$this->from_name <$this->from_email>");
        
        $this->headers = "Organization: Sender Organization\r\n";
        $this->headers .= "MIME-Version: 1.0\r\n";
        $this->headers .= "Content-type: text/html; charset=utf-8\r\n";
        $this->headers .= "Content-Transfer-Encoding: 8bit\r\n";
        $this->headers .= "X-Priority: 3\r\n";
        $this->headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        $this->headers .= "Reply-To: $this->from_name <$this->from_email>\r\n";
        $this->headers .= "Return-Path: $this->from_name <$this->from_email>\r\n";
        $this->headers .= "From: $this->from_name <$this->from_email>\r\n";
    }

    /**
     * @return true
     */
    public function sendToDev($subject, $body)
    {
        if (mail($this->to_mail, $subject, $body, $this->headers)) {
            return true;
        } else {
            return false;
        }
    }

    public function send($to, $subject, $body)
    {

        if (mail($to, $subject, $body, $this->headers)) {
            return true;
        } else {
            return false;
        }
    }

    public function sendDevComment($feedBack, $content)
    {
        if(Tool::isEmail($feedBack['user_email']))
        {
            $args = array(
                'id' => $feedBack['id'],
                'ver' => $feedBack['ver']
            );
            $subject = "开发者评论了您对".$feedBack['app_title']."的反馈";
            $body = $feedBack['app_title']."的开发者评论了您对".$feedBack['app_title']."的反馈:<br/>";
            $body .= $content;
            $body .= "若要回复或者想了解详情,请点击以下链接(若链接无法点击,请复制链接后通过浏览器访问):<br/>";
            $body .= $GLOBALS['G_SP']['hostname'].spUrl('main', 'li', $args);
            $body .= '<br>感谢您的反馈';
            $this->send($feedBack['user_email'], $subject, $body);
        }
    }

    public function sendStatusChange($feedBack)
    {
        if(Tool::isEmail($feedBack['user_email']))
        {
            $status = $feedBack['status'];
            $args = array(
                'id' => $feedBack['id'],
                'ver' => $feedBack['ver']
            );

            switch ($status)
            {
                case '1':
                    $statusStr = '正在定位该问题';
                    $subject = "开发者查看了您对".$feedBack['app_title']."的反馈";
                    break;
                case '2':
                    $statusStr = '开发者已经确定该问题';
                    $subject = "开发者确定了您在".$feedBack['app_title']."反馈的问题";
                    break;
                case '3':
                    $statusStr = '问题还需进一步了解';
                    $subject = "开发者还需要进一步了解您在".$feedBack['app_title']."反馈的问题";
                    break;
                case '4':
                    $statusStr = '问题正在解决';
                    $subject = "开发者正在解决您在".$feedBack['app_title']."反馈的问题";
                    break;
                case '5':
                    $statusStr = '问题已经解决';
                    $subject = "开发者已经解决您在".$feedBack['app_title']."反馈的问题";
                    break;
                case '6':
                    $statusStr = '感谢反馈';
                    $subject = "开发者不同意您在".$feedBack['app_title']."反馈的看法";
                    break;
                default:
                    $statusStr = '未发现该问题';
                    $subject = "开发者经过测试后未发现您在".$feedBack['app_title']."反馈的问题";
            }

            $body = $feedBack['app_title'].'的开发者更改了您对'.$feedBack['app_title'].'的反馈状态<br/>';
            $body .= '当前状态:'.$statusStr.'<br>';
            $body .= '若要回复或者想了解详情,请点击以下链接(若链接无法点击,请复制链接后通过浏览器访问):<br/>';
            $body .= $GLOBALS['G_SP']['hostname'].spUrl('main', 'li', $args);
            $body .= '<br>感谢您的反馈';
            $this->send($feedBack['user_email'], $subject, $body);
        }
    }

}