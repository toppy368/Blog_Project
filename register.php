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
				//測試PHP是否有作用
				echo "hello world"."<p />";
				
				//POST傳回本頁的標籤會變成 $_POST['變數名稱'];
				//將POST的變數統一更改為 $變數名稱
				$account = $_POST['account'];
				$password = $_POST['password'];
				$check_password = $_POST['check_password'];
				
				//驗證密碼欄位是否相同
				//兩組密碼欄位分別顯示成功與失敗兩組結果
				IF ($password == $check_password) {
					echo "成功";
				}
				else {
					echo "失敗";
				}
			 ?>
	</body>
</html>