<?php
include "phpqrcode/phpqrcode.php";
$content=$_GET[content];
$size=$_GET[size];
$errorLevel = "L";//定义纠错级别
QRcode::png($content, false, $errorLevel, $size);
?>