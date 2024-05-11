<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<p>1.以下属于web开发语言的有哪些?</p>
<form action="" method="post">
    <input type="checkbox" name="lan[]" value="Ajax"> Ajax
    <input type="checkbox" name="lan[]" value="PHP"> PHP
    <input type="checkbox" name="lan[]" value="ASP"> ASP
    <input type="checkbox" name="lan[]" value="JSP"> JSP
    <input type="checkbox" name="lan[]" value="FLASH"> FLASH
    
    <input type="submit" name="sub" value="提交">
</form>
<?php
if($_POST['sub']=='提交'){
	$la=$_POST['lan'];
	if(in_array("Ajax",$la) or in_array("FLASH",$la)){
		echo "回答错误";
		exit();	
	}else if(in_array("PHP",$la) and in_array("ASP",$la) and in_array("JSP",$la)){
        echo "回答正确";	
	}
	 else{
		echo "回答不全"; 
	}
	
}
?>

</body>
</html>