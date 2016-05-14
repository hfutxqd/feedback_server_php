<?php

/**
 * Created by PhpStorm.
 * User: imxqd
 * Date: 2016/5/13
 * Time: 21:11
 */
class Tool
{
    public static function getRandChar($length){
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol)-1;
        for($i=0;$i<$length;$i++){
            $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }

    public static function isMobile()
    {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);

        $is_iphone = (strpos($agent, 'iphone')) ? true : false;
        $is_ipad = (strpos($agent, 'ipad')) ? true : false;
        $is_android = (strpos($agent, 'android')) ? true : false;
        if($is_iphone || $is_android)
        {
            return true;
        }else{
            return false;
        }
    }

    public static function login($user, $pwd)
    {
        $login = $GLOBALS['G_SP']['login'];
        if($user == $login['user'] && $pwd == $login['passwd'])
        {
            spClass('spAcl')->set('developer');
            $_SESSION['login'] = true;
            return true;
        }else{
            $_SESSION = array();
            session_destroy();
            return false;
        }
    }
    
    public static function logout()
    {
        $_SESSION = array();
        session_destroy();
    }

    public static function isEmail($str)
    {
        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        return preg_match($pattern, $str);
    }
}