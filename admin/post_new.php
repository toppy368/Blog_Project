<html>
<head>
<!-- meat data -->
<!-- This file is post_new.html -->
	<title>新增文章</title>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<!--本專案使用GNU GENERAL PUBLIC LICENSE Version 2為授權條款，詳情請訪問此目錄的LICENSE.txt-->
<h1>新增文章</h1><p />
	<!--新增文章表單內容-->
	<form action="post_new.php" method="get">
			文章標題：<input type="text" name="title" /></br>
			文章內文：<br />
			<textarea rows="10" cols="50" name="context" /></textarea><p />
	<input type="submit" value="發表"><p />
	</form>
	
	<?php
	//PHP區域，本區域將連結phpMyAdmin，MySQL資料庫伺服器
	
	?>
</body>
</html>