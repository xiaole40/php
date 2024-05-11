<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
    class Site{
		const TABLE = 'PHP技术';
		public $student;
		static $number = 1;
		public function getT(){
			echo self::TABLE;
		}
		public function getN(){
			echo self::$number;
			self::$number++;
		}
		public function getS(){
			echo $this->student;
		}
	}
	class ChildSite extends Site{
		const TABLE = 'PHP编程';
		public function getT(){
			echo parent::TABLE;
			echo '<br>';
			echo self::TABLE;
		}
	}
	$s = new Site();
	$s->getN();
	echo Site::$number;
	//$s->getT();
	//$s1 = new ChildSite();
	//$s1->getT();
?>
</body>
</html>