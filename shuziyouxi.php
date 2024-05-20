<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>猜数字游戏</title>
</head>

<body>
<?php
    session_start();
    if (!empty($_SESSION['rand'])) {
        if($_SESSION['count']>0){
		    if($_SESSION['rand']>$_POST['num']){
				$message='猜小了，你还有'.($_SESSION['count']--).'次机会';
			}
			elseif($_SESSION['rand']>$_POST['num']){
				$message='猜大了，你还有'.($_SESSION['count']--).'次机会';
			}
			else{
				$message='猜对了';
				unset($_SESSION['rand']);
			    unset($_SESSION['count']);
			    session_destroy();
			}
		}
		else{
			$message='次数耗尽，游戏结束';
			unset($_SESSION['rand']);
			unset($_SESSION['count']);
			session_destroy();
		}
    }else{
		$_SESSION['rand'] = rand(1, 10);
		echo $_SESSION['rand'];
        $_SESSION['count'] = 3;
	}
?>
<form action="#" method="post">
<p>猜数字游戏:<?php if(isset($message)) echo $message;?></p>
<p>输入整数（1-10）</p>
<input type="number" name="num">
<input type="submit" name="sub" value="确定">
</form>

</body>
</html>