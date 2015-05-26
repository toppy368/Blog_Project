<html>
<head>
<!-- Title and meat data  -->
<!-- This file is index.php -->
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>部落格首頁</title>
</head>
<body>
<!--本專案使用GNU GENERAL PUBLIC LICENSE Version 2為授權條款，詳情請訪問此目錄的LICENSE.txt-->
	<h1>Blog首頁</h1><p /> 

	<!--PHP區域，引用其他網頁-->
	<?php
	
	//判斷是否登入，如果沒有就希望按下超連結
	echo "測試";
	
	//引入index_function.html
	include_once("index_function.html");
	

	?>
</body>
</html>