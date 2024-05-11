<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$a1 = array("a"=>"red","b"=>"green");
$a2 = array("c"=>"blue","b"=>"yellow");
$a3 = array("c"=>"blue","d"=>"yellow");
$a4 = array("c"=>"blue","5"=>"yellow","7"=>"red","9"=>"green");
print_r(array_merge($a1,$a2));
print_r(array_merge($a1,$a3));
print_r(array_merge($a4));
echo '<hr>';
?>
<?php
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("c"=>"purple","b"=>"orange");
print_r (array_slice($a1,-1));
echo '<hr>';
print_r (array_splice($a1,0,2,$a2));
print_r($a1);
?>
</body>
</html>