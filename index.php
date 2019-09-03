<!DOCTYPE html>
<html>
<head>
    <title>My First website using PHP Language!</title>
    <link rel="stylesheet" href="style/main.css">
    
    <style type="text/css">
    	
    </style>
</head>
<body>
   
   <?php include ('header.php');
   // 123
   ?>

   <h1>My First website using PHP Language!</h1>
   
   <!-- 失敗
   <div id="content"> -->

   	<div id="content">
   	<?php 
	   	if($_GET['page'])
	   	{
	   		$page= $_GET['page'];
	   		$display=$page. '.php';
	   		include ($display);
	   	}	
	   	else
	   	{
	   		echo 'Welcome! Your now in the XXX!';
	   	};
   ?> 
   <h3>include </h3>
   <p>
   	
   </p>

   <h3>Supplment</h3>
   <ul>
   	<li><a href="https://www.w3school.com.cn/php/php_includes.asp">PHP Include 文件
		</a></li>
	<li><a href="https://ithelp.ithome.com.tw/articles/10193632">套件管理器Composer</a></li>
   </ul>

   	</div>
   
   
   <?php include ('footer.php');
   ?>
</body>
</html>
