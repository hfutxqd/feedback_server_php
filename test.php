<?php
date_default_timezone_set('PRC');
$to_mail = 'tlxqd@qq.com';
$now = date('Y-m-d h:i:s');
$from_name = 'feedback';
$from_email = 'feedback@imxqd.xyz';
$body = '截至'.$now.',你的应用 完事儿 又发现了4个bug,其中有1个为高危bug,快来看看吧!';
$subject = '你的应用发现新的高危Bug';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "From: $from_name <$from_email>";
if (mail($to_mail, $subject, $body, $headers)) {
    echo 'success!';
} else {
    echo 'fail…';
}