<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    /*
	<form method="post">
    <label for="number">请输入一个数字:</label>
    <input type="text" name="number" id="number">
    <input type="submit" value="提交">
</form>
	
	if(isset($_POST['number'])){
        $input = $_POST['number']; 
        if(is_numeric($input)){
            $absoluteValue = abs($input);
            echo "你输入的数字是：$absoluteValue 这个数的绝对值是$absoluteValue";
    } else {
        echo "请输入一个数字";
    }
}

    $number = $POST['number'];
	if(isset($number)){
		if(is_numeric($number)){
		echo "你输入的数字是".$number.'<br>';
		echo "该数的绝对值：".abs($number);
	}
	else
	   echo "输入错误";
	}
	*/
?>
<form method="post">
    <label for="number1">数字 1:</label>
    <input type="text" name="number1" id="number1" value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : ''; ?>"><br>
    
    <label for="number2">数字 2:</label>
    <input type="text" name="number2" id="number2" value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : ''; ?>" ><br>
    
    <input type="submit" name="add" value="+">
    <input type="submit" name="subtract" value="-">
    <input type="submit" name="multiply" value="X">
    <input type="submit" name="divide" value="÷">
</form>

<?php
if(isset($_POST['number1']) && isset($_POST['number2'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    
    if(isset($_POST['add'])){
        $result = $number1 + $number2;
        $operation = '+';
    } elseif(isset($_POST['subtract'])){
        $result = $number1 - $number2;
        $operation = '-';
    } elseif(isset($_POST['multiply'])){
        $result = $number1 * $number2;
        $operation = '*';
    } elseif(isset($_POST['divide'])){
        $result = $number1 / $number2;
        $operation = '/';
    }
    echo "结果：";
    echo "$result";
}
?>
</body>
</html>