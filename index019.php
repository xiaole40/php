<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    date_default_timezone_set("Asia/shanghai");
	if(!isset($_COOKIE['visit'])){
		echo '您是首次访问该网站';
		setcookie("visit",date("Y-m-d H:i:s"));
	}else{
		setcookie("visit",date("Y-m-d H:i:s"),time()+120);
		echo '你上次访问的时间:'.$COOKIE['visit'];	
	}
	echo '<br>';
	echo '本次的登录时间：'.date("Y-m-d H:i:s");

?>
</body>
</html>