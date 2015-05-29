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

									
				
			//儲存SQL句子的參數，初始化定義，設定為"空值"，也就是null
			$db_data = NULL;
			$statement = NULL;
			$result = NULL;
			
			//判斷帳號是否存在
			if (isset($account)){
				try {
					//判斷新輸入姓名值是否存在
					$db_data = new PDO($db_url,$db_user,$db_pw);
				} catch(PDOException $e) {
					//發生錯誤將馬上停止程式碼
					die($e->getMessage());
				}
			}
			

				//查詢句型以$statement字串儲存，並送出SQL的SELECT敘述
				//SELECT字串的WHERE會篩選account與password欄位是否與PHP傳過來的值相符，不符合就跳出
				//SELECT * FROM userdata WHERE account = :account AMD password = :password
				$statement = $db_data -> prepare("SELECT * FROM userdata WHERE account = ? AMD password = ?");
				
			
				//bindValue：PDO的方法，正式名稱為PDOStatement::bindValue
				//binValue必須填入兩個數值，格式是 bindValue(對應第一個欄位,對應第二個欄位,PDO::PARAM_*)
				//PDO::PARAM_*可對應到SQL欄位對應型態，請參考以下網址：http://php.net/manual/zh/pdo.constants.php
				$statement -> bindValue(':account',$account,PDO::PARAM_STR);
				$statement -> bindValue(':password',$password,PDO::PARAM_STR);
				
				//解決 PDOStatement相關錯誤：設置 PDOStatement 對象並以 $result 參數儲存
				//
				//以 fetchAll() 方法執行 PDO::FETCH_ASSOC 參數
				//fetchAll() 將訊息以陣列方式傳給 $result 參數
				//
				//解決方法網址：
				//http://stackoverflow.com/questions/21464158/catchable-fatal-error-object-of-class-pdostatement-could-not-be-converted-to-st
				//
				//PDOStatement 文件網址：
				//http://php.net/pdo.query
				$result = $statement -> fetchAll (PDO::FETCH_ASSOC);
				
				//將SQL語法透過execute()方法寫入資料庫中
				$statement->execute();
				
				//關閉資料庫連結
				$db_data = NULL;

		?>
	</body>
</html>