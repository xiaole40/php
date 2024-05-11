<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
function addCommas($str) {
    $str = strrev($str);
    $result = '';
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        $result .= $str[$i];
        if (($i + 1) % 3 == 0 && $i != $len - 1) {
            $result .= ',';
        }
    }
    return strrev($result);
}

$input = "1234567890";
$output = addCommas($input);
echo $output;
echo '<hr>';
?>
<?php
    $s='1234567890';
	$s1=strrev($s);
	for($i=0;$i<strlen($s1);$i++){
		$string.=substr($s1,$i,1);
		if($i%3==2)
		$string.=',';
	}
	echo trim(strrev($string),',');
	echo '<hr>';
?>
<h2>商品订货单</h2>
<?php
$order = [
    ['name' => 'php编程', 'quantity' => 200, "price" => 32.3],
    ['name' => 'web编程基础', 'quantity' => 300, "price" => 30.3],
    ['name' => 'PHP编程', 'quantity' => 150, "price" => 45],
	['name' => 'ASP技术', 'quantity' => 500, "price" => 30]
];
 $sum=quantity*price;
echo "<table>";
foreach ($order as $item) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($item['name']) . "</td>";
    echo "<td>" . htmlspecialchars($item['quantity']) . "</td>";
	echo "<td>" . htmlspecialchars($item['price']) . "</td>";
	echo "<td>" . htmlspecialchars($item['sum']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>