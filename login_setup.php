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
			//SELECT * FROM `userdata` WHERE `account` = 'account' AND `password` = 'password'; 
			//
			//以 prepare 方法處裡SQL語法，使用方法如下
			//prepare("SQL句子");
			//
			//關於prepare的說明及範例，請參考以下網址：
			//http://php.net/manual/en/pdo.prepare.php
				$sql = $db_link -> prepare("SELECT * FROM 'userdata'"."WHERE 'account' = ':account' AND 'password' = ':password';");
				
			//以bindValue方式將參數寫入60行SQL句子中
			//
			//bindValue格式如下：
			//bindValue(":SQL對應欄位",參數對應欄位,PDO::PARAM_*資料型態)
			//
			//詳細網址：
			//http://php.net/manual/en/pdostatement.bindvalue.php
			//
			//詳細類別請參考 php.net 說明：
			//http://php.net/manual/en/pdo.constants.php
				$sql -> bindValue(":account",$_POST['account'],PDO::PARAM_STR);
				$sql -> bindValue(":password",$_POST['password'],PDO::PARAM_STR);
			
			//以 execute() 方法執行寫入 SQL 資料庫的動作：77行prepaer預先處裡SQL句子、89及90行bindValue參數代入
				$sql->execute();
			
			//以 fatchAll 方法，將上述SQL句子以陣列方式存回 $result 參數
				$result = $db_link -> fetchall(PDO::FETCH_ASSOC);
				
			//關閉資料庫連結
			//
			//舊版mysql_close參數已於PHP5以上停用
			//根據 php.net說明，PDO只要將連線指標設定為NULL即可關閉資料庫連結
			//
			//相關討論：
			//http://stackoverflow.com/questions/1046614/do-sql-connections-opened-with-pdo-in-php-have-to-be-closed
				$db_link = NULL;

		?>
	</body>
</html>