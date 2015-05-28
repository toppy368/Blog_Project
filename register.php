<html>
<head>
	<!-- title And meat data -->
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--This file is register.php-->
		<title>註冊帳號 - 帳號管理介面</title>
</head>
	<body>
<!--本專案使用GNU GENERAL PUBLIC LICENSE Version 2為授權條款，詳情請訪問此目錄的LICENSE.txt-->
		<h1>註冊帳號 - 帳號管理介面</h1></p>
		<!--功能切換區，已申請帳號的訪客，按下"登入"連結可以回到登入頁面-->
		<a href="login.php">登入</a> <b>註冊</b></p>
		<!--HTML表單，註冊用途-->
		<h2>請輸入您想申請的帳號密碼</h2></p>
		<!--本HTML表單將以POST方式回傳資料回本檔案-->
		<form action="register.php" method="post">
		請輸入帳號：<input type="text" name="account" /><br />
		請輸入密碼：<input type="password" name="password" /><br />
		再輸入密碼：<input type="password" name="check_password" /><p />
		<input type="submit" value="申請帳號"></p>
		
		<!--以下為PHP章節，將使用者填好的帳號密碼透過PHP寫入到MySQL資料庫-->
		<?php
			//PHP區域，本區域將連結phpMyAdmin，MySQL資料庫伺服器
				
				//phpMyAdmin主機連線內容資訊：
				//
				//本檔案以PDO法連線到SQL資料庫，此功能PHP5以上才支援
				//如果你自行安裝Web伺服器後台，改了root帳號密碼，也請修改本檔案以下資訊
				//左邊的參數會儲存右邊雙引號的連線資訊，您可以自行修改右邊雙引號的內容而不必修改整個檔案
				//
				/*資料庫連線位置：*/
				$db_url = "mysql:host=localhost;dbname=blog_project";
				/*資料庫管理員帳號：*/
				$db_user = "root";											
				/*資料庫管理員密碼：*/
				$db_pw = "password";
				
				//定義SQL語法相關參數為NULL(空值)
				//同時作為參數對照表：
				$db_link = NULL; 	/* $db_link 資料庫連接指標*/
				
				//採用try catch處理PDO錯誤訊息
				try {
						//判斷"輸入密碼"欄位與"再輸入密碼"欄位數值一樣
						//判定條件：以 if else 判斷條件是否相符
						// A == B 雙等號等於兩者數字相符
						if ($_POST['password'] == $_POST['check_password']) {
							
							//顯示密碼相符字樣(開發用途，稍後刪除)
							echo "<font color='ff0000'>"."<h3>"."密碼相符"."</h3>"."</font>"."</ p>";
							
							//放置$db_link及PDO連接帳密的語法
							//透過PDO連線到phpMyAdmin
							//資料庫帳號密碼及連線資訊儲存在 $db_link 參數中(連線指標)
							$db_link = new PDO($db_url,$db_user,$db_pw);
						} else {
							//如果帳密輸入錯誤，會以文字警告並跳出判斷式
							echo "<font color='ff0000'>"."<h3>"."密碼不相符！請重新輸入"."</h3>"."</font>"."</ p>";
						}
					}
					catch(PDOException $e)
					{
						//如果出現PDOException訊息，將終止程式碼並以 Exception::getMessage 錯誤訊息
						die($e->getMessage());
					}
				
				

				
		 ?>
	</body>
</html>