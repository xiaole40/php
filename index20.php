<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $_SESSION['user']='admin';
	$_SESSION['password']='1234';
?>

<?php
    session_start();
	$time = 1 * 40;
	setcookie(session_name(),session_id(),time()+$time,"/");
	
	$_SESSION['user']="cm";
	$expiry = date("H:i:s");
	if(!empty($_SESSION))
	{
		echo "<a href='session.php?time=$expiry'>SESSION存在，请点击此处！</a>";
	}else
	{
		echo "SESSION不存在";
	}
?>
</body>
</html>