<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//第一题
$n = array("a"=>"word","c"=>"excel","b"=>"ppt");
 foreach($n as $key => $value){ 
    echo $key . " => " . $value."&nbsp;&nbsp;"; 
	} 
	echo "<hr>";
//第二题
	echo "<br>数组未排序前元素依次为：<br>";
foreach($n as $key => $value){
	echo $key." => " . $value . "<br>";
	}
	sort($n);/*sort 升序 ，rsort 降序*/
	echo "<br>数组升序后前元素依次为：<br>";
	foreach($n as $key => $value){
	echo $key." => " . $value . "<br>";
	}
	//第三题
	rsort($n);/*sort 升序 ，rsort 降序*/
	echo "<br>数组降序后前元素依次为：<br>";
	foreach($n as $key => $value){
	echo $key." => " . $value . "<br>";
	}
	echo "<hr>";
//第四题
 
// 按键升序排序数组
ksort($n);
 
// 打印排序后的数组
print_r($n);
echo "<hr>";
//第五题
$count = count($n);
echo "数组元素的个数是: $count";
echo "<hr>";
?>
<?php
 //编写程序，先声明一个数组，然后输出数组中最大元素和最小元素的索引值。去掉最大数和最小数，求剩下所有数字的平均值
 
 // 声明一个数组 
 $arr = array(5,8,2,3,7,6,9,1,8,4,3,0); 
 // 输出数组中最大元素和最大元素的索引值 
 $max_value = max($arr);
 $max_index = array_search($max_value, $arr);
 echo "最大索引值是： " . $max_index . "<br>"; 
 // 输出数组中最小元素和最小元素的索引值 
 $min_value = min($arr);
  $min_index = array_search($min_value, $arr);
  echo  "最小索引值是： " . $min_index . "<br>"; 
 // 去掉最大数和最小数
  unset($arr[$max_index]);
   unset($arr[$min_index]); 
  // 求剩下所有数字的平均值
   $average = array_sum($arr) / count($arr);
    echo "平均值是: " . $average;
?>
</body>
</html>