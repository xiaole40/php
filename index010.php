<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    $arr=array('asp','jsp','php');
	var_dump(each($arr));
	echo '<br>';
	var_dump(each($arr));
	echo '<br>';
	var_dump(each($arr));
	echo '<br>';
	list($v1,$v2,$v3)=$arr;
	echo $v1.'<br>';
	echo $v2.'<br>';
	echo $v3.'<br>';
	echo '<hr>';
	while(list($key,$vaule) = each($arr)){
		echo $value.'<br>';
	}
?>
<?php
    $str = "I Love BeJing";
	print_r(explode(" ",$str));
	echo '<hr>';
?>
<?php
function ipdizi($str) {
    $nums = explode('.', $str);
    
    if(count($nums) != 4) {
        return false;
    }
    
    foreach($nums as $num) {
        if(!is_numeric($num) || $num < 0 || $num > 255) {
            return false;
        }
    }
    
    return true;
}
$ipAddress = "222.162.10.111";
echo "原IP地址：".$ipAddress;
echo '<br>';

if(ipdizi($ipAddress)) {
    $nums = explode('.', $ipAddress);
    echo "前两位是: " . $nums[0] . "." . $nums[1];
} else {
    echo "IP地址无效";
}
echo '<br>';
?>
<?php
$arr = array('I','love','Beijing!');
echo implode(" ",$arr);
echo '<br>';
?>
<?php
   $arr = array(1,3,5,6,9,11);
   $cars=array
   (
   "Volvo"=>array("XC60","XC90"),
   "BMW"=>array("X3","X5"),
   "Toyota"=>array("Hihlander")
   );
   echo "数组\$arr元素个数为：".count($arr)."<br>";
   echo "二维数组\$cars元素个数为：".count($cars)."<br>";
   echo "二维数组\$cars递归所有元素个数为：".count($cars,1);
   echo '<br>';
   
?>

<?php
$n = array(3,4,1,28);
echo "<br>数组未排序前元素依次为：<br>";
foreach($n as $a){
	echo $a."&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<hr>";
	sort($n);/*sort 升序 ，rsort 降序*/
	echo "<br>数组未排后前元素依次为：<br>";
	foreach($n as $a){
	echo $a."&nbsp;&nbsp;&nbsp;&nbsp;";
	}
?>
</body>
</html>