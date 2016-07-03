<?php
$content=$_GET[content];
$size=$_GET[size];
echo '<img src="https://blog.mayuko.cn/api/qrcode?content='.$content.'&size='.$size.'" class="img-responsive center-block">';
?>