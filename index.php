<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="charset" content="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>二维码生成系统</title>
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="http://www.mayuko.cn/favicon.ico" />
<style>
body {
	font-family: "微软雅黑", "Microsoft YaHei";
	word-wrap: break-word;
	word-break: break-all;
}
a {
	text-decoration: none;
}
a:hover, a:focus {
	text-decoration: none;
	text-shadow: 0 1px 1px #555;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header"> <a class="navbar-brand" href="./">二维码生成系统</a></div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">STACK<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://blog.mayuko.cn">Hadestack</a></li>
            <li><a href="https://blog.mayuko.cn/daily">Daily</a></li>
            <li><a href="https://blog.mayuko.cn/gallery">Gallery</a></li>
          </ul>
        </li>
      </ul>
</div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <h2>二维码生成系统Beta0.0.1.6</h2>
      <div class="input-group">
        <input id="sears" type="text"  style="width:80%" placeholder="请输入字符串" onkeydown="if(event.keyCode==13){$('#search').click()}" class="form-control input-lg" >
        <input id="size" type="text"  style="width:20%" placeholder="尺寸" value="4" onkeydown="if(event.keyCode==13){$('#search').click()}" class="form-control input-lg" >
        <span class="input-group-btn">
        <button id="search" class="btn btn-primary btn-lg" type="button" > 生成二维码 </button>
        </span> </div>
      <div id="page"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#search").click(function(){
		if(document.getElementById('sears').value.length==0){
			alert('请输入字符串或网址！');
        document.getElementById('sears').focus();
        return false;
		}
		showresult($("#sears").val(),$("#size").val())
	});
});
function showresult(content,size){
	$('#page').html('<div id="lodding" style="text-align:center;"><img src="load.gif"></div>');
	$.ajax({
		type : "GET",
		url : "qr.php?content="+content+"&size="+size,
		dataType : 'html',
		success : function(result) {
			$('#page').html(result);
		} 
	});
}
</script>
</body>
</html>