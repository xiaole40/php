<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
function king($n,$m){
	$monkey = range(1,$n);
	for($i=1;count($monkey)>1;$i++){
		$head = array_shift($monkey);
		if($i%$m!=0){
			array_push($monkey,$head);
		}
	}
	return array('total'=>$n,'kick'=>$m,'king'=>$monkey[0]);
}
$aa = king(10,9);
?>
<table width="300px" align="center" bgcolor="#ccc">
<tr><td colspan="2" align="center">寻找猴王</td></tr>
<tr>
  <td>猴子总数：</td><td><?php echo $aa['total'];?></td></tr>
  <td>&nbsp;</td>
  <tr><td>猴王是编号：</td><td><?php echo $aa['king']; ?> </td></tr>
<tr>
  <td>&nbsp;</td></tr>/
<tr><td>被踢出的第m只猴子</td><td> <?php echo $aa['kick']; ?></tr>

</td></tr>
</table>
</body>
</html>