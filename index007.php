<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
function isEmailBasiclyValid($email) {
    return strpos($email, '@') && strpos($email, '.') && strpos($email, '@') != 0 && strpos($email, '@') != strlen($email) - 1;
}
 
$email = "ncxy@test.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail格式正确";
} else {
    echo "E-mail格式不正确";
}
?>
</body>
</html>