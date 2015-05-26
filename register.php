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

					
				
				//驗證密碼欄位是否相同
				//兩組密碼欄位分別顯示成功與失敗兩組結果
				if ($password == $check_password) {
					//如果兩組密碼相符的話，會顯示以下字串
					echo "<h3 />"."密碼比對成功"."<p />";
						
						//採用try catch處理PDO錯誤訊息
							try {
									//放置$db_data及PDO連接帳密的語法
									//透過PDO連線到phpMyAdmin
									//資料庫帳號密碼及連線資訊儲存在 $db_data 參數中(連線指標)
									$db_data = new PDO($db_url,$db_user,$db_pw);
								}
								catch(PDOException $e)
								{
									//如果出現PDOException訊息，將終止程式碼並以 Exception::getMessage 錯誤訊息
									die($e->getMessage());
								}
				}
				else {
					//如果兩組密碼不相符，會顯示以下字串
					echo "<h3 />"."密碼比對失敗"."<p />";
				}

				//想像中的SQL句子如下：
				//INSERT INTO <資料表名稱> (account , password) VALUES ('使用者輸入的帳號','使用者輸入的密碼');
				//
				//採用prepae預先執行SQL句子，但是似乎無法直接把參數輸入進SQL句子中，故VALUES後面括弧內的欄位以 ? 代替
				//$db 連線指標的結果先儲存在 $statment 變數中
				//
				//綁定參數請參考此連結(簡體中文/英文)
				//http://php.net/manual/zh/pdo.prepared-statements.php
				$statement = $db_data -> prepare("INSERT INTO userdata (account , password)"."VALUES(?,?)");
				

				
				
				//透過execute，將POST欄位回傳到第63行，括弧的?欄位中
				//步驟如下：(由左到右)
				//$statment：變數傳送資料
				//bindValue：PDO的方法，正式名稱為PDOStatement::bindValue
				//binValue必須填入兩個數值，格式是 bindValue(對應第一個欄位,對應第二個欄位,PDO::PARAM_*)
				//PDO::PARAM_*可對應到SQL欄位對應型態，請參考以下網址：http://php.net/manual/zh/pdo.constants.php
				$statement -> execute -> bindValue(array($account,$password,PDO::PARAM_STR));
				//$statement -> bindValue(array(':password',$password,PDO::PARAM_STR)); 
				$statement -> execute();

				$result = $db_data -> prepare ($statement);
				
				//關閉資料庫連結
				$db_data = NULL;
			 ?>
	</body>
</html>