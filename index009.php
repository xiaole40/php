<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<h2>商品订货单</h2>
<table>
<tr>
   <td>序号</td>
   <td>书名</td>
   <td>数量</td>
   <td>单价</td>
   <td>总价</td>
</tr>
<?php
    $goods = array(
	array('1','PHP编程',200,32.3),
	array('2','WEB编程',300,30.3),
	array('3','PHP编程',150,45),
	array('4','ASP编程',500,30)
	);
	foreach($goods as $value){
		echo '</tr>';
		foreach($value as $v){
			echo '<td>'.$v.'</td>';
			$sum = $value[2]*$value[3];
		}
		echo '<td>'.$sum.'</td>';
		$total+=$sum;
		echo '</tr>';
	}
	echo '<tr><td>'.$total.'</td></tr>';
?>
</table>
</body>
</html>