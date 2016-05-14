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
    }

    /**
     * @return true
     */
    public function sendToDev($subject, $body)
    {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\r\n";
        $headers .= "From: $this->from_name <$this->from_email>";
        if (mail($this->to_mail, $subject, $body, $headers)) {
            return true;
        } else {
            return false;
        }
    }

    public function send($to, $subject, $body)
    {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "Content-Transfer-Encoding: 8bit\r\n";
        $headers .= "From: $this->from_name <$this->from_email>";
        if (mail($to, $subject, $body, $headers)) {
            return true;
        } else {
            return false;
        }
    }

}