<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
<table width="500px" align="center" bgcolor="#87CEEB">
<tr><td colspan="2" align="center" height="30" bgcolor="#blue">个人信息</td></tr>
<tr>
  <td width="100" align="right">姓 名：</td>
  <td align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
</tr>
<tr>
  <td width="100" align="right">邮 编：</td>
  <td colspan="2" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
</tr>
<tr>
  <td width="100" align="right">手 机 号 码：</td>
  <td colspan="2" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
</tr>
<tr>
  <td align="right">性 别：</td>
  <td colspan="2" align="left"><input name="sex" type="radio" value=" 男 " checked> 男
  <input type="radio" name="sex" value="女">女</td>
</tr>
<tr> 
  <td align="right">爱 好：</td>
  <td colspan="2" align="left">
    <input name="fond[]" type="checkbox" id="fond[]" value="游泳">
    游泳
    <input name="fond[]" type="checkbox" id="fond[]" value="读书">
    读书
    <input name="fond[]" type="checkbox" id="fond[]" value="跑步">
    跑步
  </td>
</tr>
<tr>
  <td align="right">住 址：</td>
  <td colspan="2" align="left">
      <select name="select">
      <option value="北京" selected="selected">北京</option>
      <option value="上海">上海</option>
      <option value="江西">江西</option>
      </select>
  </td>
</tr>
<tr>
  <td align="right">上 传 头 像：</td>
  <td colspan="2" align="left">
  <input name="photo" type="file" id="photo" size="20" maxlength="1000"></td>
</tr>
<tr>
  <td align="right">自我介绍：</td>
  <td colspan="2" align="left"><textarea name="intro" cols="28" rows="3" id="intro"></textarea></td>
</tr>
<tr align="center">
  <td colspan="3">
  <input type="submit"name="submit" value="提交">&nbsp;&nbsp;
  <input type="reset"name="submit2" value="重置">
  </td>
</tr>
</table>
<?php
  if($_POST[submit!=""]){
	 echo "姓名：".$_POST[user]."&nbsp;&nbsp;"; 
	 echo "手机号码：".$_POST[pwd]."&nbsp;&nbsp;";
	 echo "性别：".$_POST[sex]."&nbsp;&nbsp;";
	 echo "爱好：";
}
?>
</body>
</html>