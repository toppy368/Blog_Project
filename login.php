<html>
<head>
	<!-- title And meat data -->
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--This file is login.php-->
		<title>登入帳號 - 帳號管理介面</title>
</head>
	<body>
<!--本專案使用GNU GENERAL PUBLIC LICENSE Version 2為授權條款，詳情請訪問此目錄的LICENSE.txt-->	
		<h1>登入帳號 - 帳號管理介面</h1></p>
		<!--此行可讓使用者切換登入及註冊功能，首次訪問的朋友請註冊帳號-->
		<b>登入</b>　<a href="register.php">註冊</a></p>
		<!--HTML表單，使用者請在此欄輸入帳號密碼-->
		<h2>請輸入您的帳號密碼</h2></br>
		<!--本表單將以POST方式傳送資料回本檔案-->
			<form action="login.php" method="post">
				帳號：<input type="text" name="account" /></br>
				密碼：<input type="password" name="password" /></p>
			<input type="submit" value="登入"></p>
		<!--以下為PHP章節，此區的PHP負責核對使用者輸入的資料是否與資料庫的帳密相符合-->
		<?php
		
		
		
		
		?>
	</body>
</html>