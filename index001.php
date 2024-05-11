<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>666666</title>
</head>
<body>
<?php
    function test($number) {
		if(is_int($number)){
        return $number * $number * $number * $number;
		}else{
			return "请输入一个整数：";}
    }
 
    $i = 16;
    $result = test($i);
    echo $result;
	echo '<br>';
?>
<?php
    function shuzu($num) {
    $number = strval($num);
    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        echo $number[$i] . " ";
    }
}

shuzu(123);
echo '<br>';
?>
<?php
   function shuixianhua($num) {
    $temp = $num;
    $sum = 0;
    $digitsCount = strlen($num);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += bcpow($digit, $digitsCount);
        $temp = floor($temp / 10);
    }
    return $sum == $num;
}
    $number = 370;
    if (shuixianhua($number)) {
        echo "{$number} 是水仙花数。";
    } else {
        echo "{$number} 不是水仙花数。";
    }
?>
</body>
</html>