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
				$sql = NULL;		/* $sql SQL句子相關操作 */
			
			//判斷帳號是否存在
			if (isset($_POST['account'])){
				try {
					//判斷新輸入姓名值是否存在
					$db_data = new PDO($db_url,$db_user,$db_pw);
				} catch(PDOException $e) {
					//發生錯誤將馬上停止程式碼
					die($e->getMessage());
				}
			}
			
			//查詢SQL語法：
			//SELECT * FROM 'userdata' WHERE account = :account AND password = :password;
			//
			//以 prepare 方法處裡SQL語法，使用方法如下
			//prepare("SQL句子");
			//
			//關於prepare的說明及範例，請參考以下網址：
			//http://php.net/manual/en/pdo.prepare.php
				$sql = $db_link -> prepare("SELECT * FROM userdata"."WHERE account = :account AND password = :password;");
				
			//以bindParam方式將參數寫入60行SQL句子中 
			//
			//當下達 INSERT INTO '資料表名稱'   ... 時，請用PDOStatement::bindValue
			//當下達 SELECT * FROM '資料表名稱' ... 時，請用PDOStatement::bindParam
			//
			//bindParam格式如下：
			//bindParam(":SQL對應欄位",參數對應欄位,PDO::PARAM_*資料型態)
			//
			//詳細說明：
			//http://php.net/manual/en/pdostatement.bindparam.php
				$sql -> bindParam(":account",$_POST['account'],PDO::PARAM_STR);
				$sql -> bindParam(":password",$_POST['password'],PDO::PARAM_STR);
			
			//以 execute() 方法執行寫入 SQL 資料庫的動作：77行prepaer預先處裡SQL句子、89及90行bindValue參數代入
				$sql->execute();
			
			//以 fatchAll 方法，將上述SQL句子以陣列方式存回 $result 參數
				$result = $db_link -> fetchall(PDO::FETCH_ASSOC);
				
		?>
	</body>
</html>