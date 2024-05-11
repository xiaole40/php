<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">
请输入身份证号：<input type="text" name="num" />
<input type="submit" value="提交" name="sub">
</form>
<?php
  $num=$POST['num'];
  if(isset($num)){
  if(strlen($num) == 18){
	  if(is_numeric($num) || is_numeric(substr($num,0,-1)) && substr($num,-1)=='X')
	      echo '输入有效，你输入的身份证号是：'.$num;
	  else
	      echo '输入无效';
  }
  else
	  echo '输入无效';
  }
  
  
?>
</body>
</html>