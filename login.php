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
									
			//POST傳回本頁的標籤會變成 $_POST['變數名稱'];
			//將POST的變數統一更改為 $post_變數名稱
			$account = $_POST['account'];
			$password = $_POST['password'];
			$check_password = $_POST['check_password'];
				
				
			//將SQL連線資訊重新定義
			//本檔案以PDO法連線到SQL資料庫，此功能PHP5以上才支援
			//如果你自行安裝Web伺服器後台，改了root帳號密碼，也請修改本檔案以下資訊
			//
			/*資料庫連線位置：*/
			$db_url = "mysql:host=localhost;dbname=blog_project";
			/*資料庫管理員帳號：*/
			$db_user = "root";											
			/*資料庫管理員密碼：*/
			$db_pw = "password";										
				
			//儲存SQL句子的參數，初始化定義，設定為"空值"，也就是null
			$db_data = NULL;
			$statement = NULL;
			$result = NULL;
		
		
		
		?>
	</body>
</html>