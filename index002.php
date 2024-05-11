<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    function fun1($num){
		if(is_int($num))
			echo pow($num,4);
		else
			echo '不是整数';
			}
		fun1(4.4);
?>
<hr />
<?php
    function fun2($snum){
		for($i=1;$snum>1;$i++){
			$arr[$i]=$snum%10;
			$snum=$snum/10;
		}
		return $arr;
		}
		print_r(fun2(321));
?>
<hr />
<?php
    function &fun($temp_str=0){
		return $temp_str;
	}
	    $str=&fun("函数引用");
		echo $str."br";
?>
<hr />
<?php
    function foo(){
		echo "调用foo()函数<br>\n";
	}
	function bar($arg=''){
		echo "调用bar()函数;argument was '$arg'.<br />\n";
	}
	function echoit($string){
		echo $string;
	}
	$func='foo';
	$func();
	$func='bar';
	$func('test');
	$func='echoit';
	$func('test');
?>
<hr />
<?php
    function read($n){
		echo "$n &nbsp;";
		if($n>0)
		    read($n-1);
	}
	read(6);
?>
<hr />
<?php
    date_default_timezone_set("Asia/Shanghai");
    echo date("Y 年 m 月 d 日 H:i:s")."<br>";
?>
<hr />
<?php    
    print_R(getdate());
?>
<hr />
<?php    
    $x="hello";
	$y=000;
	var_dump(empty($x));echo "<br>";
	var_dump(empty($y));echo "<br>";
	echo "<hr>";
	var_dump(isset($x));echo "<br>";
	var_dump(isset($x));echo "<br>";
	echo "<hr>";
	unset($x);
	var_dump(isset($x));echo "<br>";
	echo "<hr>";
?>
<form action="#" method="post"> 
请输入数字：<input type="text" name="text1" />
<input type="submit" name="sub" value="提交" />
</form>
<?php
    $num2=$_POST['text1'];
	if(isset($_POST['sub']) and is_nameric($num2))
	echo "你输入的数字是：{$num2}";
	else
	   
?>


</body>
</html>