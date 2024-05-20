<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>猜数字游戏</title>
</head>

<body>
<?php
session_start();

if (!isset($_SESSION['target'])) {
    $_SESSION['target'] = rand(1, 10);
    $_SESSION['chances'] = 9;
}

if (isset($_POST['guess'])) {
    $guess = $_POST['guess'];

    if ($guess == $_SESSION['target']) {
        echo "恭喜你猜对了！";
        unset($_SESSION['target']);
        unset($_SESSION['chances']);             
    } elseif ($guess > $_SESSION['target']) {
        echo "猜数字游戏：太大了！你还有 " . $_SESSION['chances'] . " 次机会";
        $_SESSION['chances']--;
    } else {
        echo "猜数字游戏：太小了！你还有 " . $_SESSION['chances'] . " 次机会";
        $_SESSION['chances']--;
    }
}
?>

<form method="post">
    <p>猜数字游戏</p>
    <label for="guess">输入整数(1-10)：<br></label>
    <input type="text" name="guess">
    <input type="submit" value="确定">
</form>
</body>
</html>