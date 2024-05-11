<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
        table {
            border-collapse: collapse; /*把表格合并*/
            width: 500px;
            margin: auto;
        }
        table, th, td {
            border: 1px solid black;
			border:solid 1px;
        }
        th, td {
            padding: 5px;
            text-align: center;
			
        }
    </style>
</head>

<body>
<?php
    /*$string='php';
	$num=10;
    echo $string,$num;
	echo '<br>';
	print $string.'<br>';
	$a=array('a','b','c');
	print_r($a);
	echo '<br>';
	var_dump($a);
	echo '<br>';
	var_dump($string);
	$file = fopen("casual.txt","w");
	var_dump($file);
	echo "变量(\$string1)直接赋值为null: ";
	$string1 = null;
	$string3 = "str";
	if(is_null($string1))
	       echo "string1 = null";
    echo "<p>变量(\$string2)未被赋值: ";
	if(is_null($string2))
	       echo "string2 = null";
	echo "<p>被unset()函数处理过的变量(\$string3): ";
	unset($string3);
	if(is_null($string3))
	       echo "string3 = null";
    var_dump(is_bool('1'));
	var_dump(is_string('1'));
	var_dump(is_float('1.0'));
	var_dump(is_int(1));ssssssss
	var_dump(is_numeric('1'));
	var_dump((bool)-5.9);
	echo '<br>';
	var_dump((int)'hello');
	echo '<br>';
	var_dump((float)false);
	echo '<br>';
	var_dump((string)12);	
	$str1 = 'HelloWorld!';	
	$int1 = 666;
	echo $str1 = $int1;
	var_dump($str1);
	
	$x = 10;
	function  test(){
	global $x;
	$x = 50;
	echo "在函数内输出的内容：$x.</br>";
	echo '<br>';
	}
	test();
	echo "在函数外输出的内容：$x.</br>";
	function str1(){
		static $message = 0;
		$message++;
		echo $message." ";
	}
	function str2(){
		$message = 0;
		$message++;
		echo $message." ";
	}
	$i=0;
	while($i<10){
		str1();
		$i++;
	}
	echo '<hr>';
	$i=0;
	while($i<10){
	     str2();
		 $i++;	
	}
	function ecample1(){
		static $a=100;
		$a++;
		echo $a.'</br>';
	}
	function ecample2(){
		$a=100;
		$a++;
		echo $a.'</br>';
	}
	ecample1();
	ecample1();
	ecample1();
	ecample2();
	ecample2();
	$change_name="casual";
	$casual="I like to sing!";
	echo $change_name;
	echo '<p>';
	echo $$change_name;
	var_dump(define("PI","3.1415926",true));
	echo pi;
	$a = -100;
	$b = 50;
	$c = 30;
	echo "\$a = ".$a.",";
	echo "\$b = ".$b.",";
	echo "\$c = ".$c."<p>";
	echo "\$a + \$b = ".($a + $b)."<p>";	
	echo "\$a - \$b = ".($a - $b)."<p>";
	echo "\$a * \$b = ".($a * $b)."<p>";
	echo "\$a / \$b = ".($a / $b)."<p>";
	echo "\$a % \$b = ".($a % $b)."<p>";
	
	$a=10;$b=30;$c=20;

	
	
	
	$n = rand(1,10);
	if($n % 2 == 0){
		echo "\$n = $n";
		
		echo "<br>$n是偶数。";
	}
    判断能否构成三角形,并判断是什么类型的三角形
	function shuzi($a, $b, $c) {
    return ($a > 0 && $b > 0 && $c > 0) && ($a + $b > $c && $a + $c >    $b && $b + $c > $a);
    }
 
    function shuchu($a, $b, $c) {
        if (!shuzi($a, $b, $c)) {
        return "不能构成三角形";
    }
 
        if ($a === $b && $b === $c) {
            return "等边三角形";
    }     elseif ($a === $b || $a === $c || $b === $c) {
            return "等腰三角形";
    }
 
        return "普通三角形";
    }
    $a = 1;
    $b = 4;
    $c = 5;
    echo shuchu($a, $b, $c);
	
	
$Month = date('n');
switch ($Month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $days = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $days = 30;
        break;
    case 2:
        
        if ((date('Y') % 4 == 0 && date('Y') % 100 != 0) || date('Y') % 400 == 0) {
            $days = 29;
        } else {
            $days = 28;
        }
        break;
    default:
        $days = 0;
        break;
}
echo "当前月份是：" . $Month . "\n";
echo "当前月份的天数是：" . $days . "\n";
	
	$sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 1) {
            $sum += $i;
        }  else {
            $sum -= $i;
        }
    }

    echo "sum = " . $sum;
	
	$number = 100;
    $count = 0;
	echo "100到200之间不能被3整除的数：";
    do {
        if ($number % 3 != 0) {
            echo $number . " ";
            $count++;
        }
        $number++;
    }
	 while ($number <= 200);
    echo "\n不能被3整除的数的个数是：" . $count;
	
	
	$i=1;
	while($i<=10){
		if($i%2==0)
		$sum-=$i;
		else
		$sum+=$i;
		$i++;
	}
	echo $sum;
	
	for($i=9;$i>=1;$i--){
	    for($j=$i;$j<=9;$j++){
		    echo "$j ";
	    }
	    echo '<br>'; 
	}
	echo '<br>';
	
	*/
	echo "<table>";
	for($i=1;$i<=9;$i++){
		echo '<tr>';
		for($j=1;$j<=$i;$j++){
			echo "<td>{$i}X{$j}=".$i*$j.'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";
	echo '<br>';
	
	echo"<table>";
	for($i=1;$i<=3;$i++){
	    echo '<tr>';
	    for($j=1;$j<=3;$j++){
		 echo "<td>" ."第".$i."行第".$j."列"."</td>";
	    }
		echo "</tr>";
	}
	echo"</table>";
	echo"<br>";
	echo"<table>";
	for($i=2;$i<=8;$i++){
		if($i % 2 != 0){
        continue;
	}
	for($j=2;$j<=8;$j++){
		if($j % 2 != 0){
        continue;
	}
	 echo "<td>{$i}X{$j}=".$i*$j.'</td>';
	}
	echo "</tr>";
	}
	echo"</table>";
	echo"<br>";
    $radius = 1;
    while (true) {
        $area = round(pi() * $radius * $radius, 2);
        if ($area > 100) {
            break;
        }
        echo "半径=". $radius, "面积="." $area <br>";
        $radius++;
    }
	
	for ($i = 1; $i <= 3; $i++) {
		
    if ($i == 3) {
        break;
    }
    echo "这是第{$i}张照片。";
}
?>
</body>
</html>