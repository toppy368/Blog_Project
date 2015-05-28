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
				$db_data = NULL;

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

				
				//寫入SQL語法：
				//INSERT INTO postdata (title , context) VALUES(:title,:context);
				//
				//以 prepare 方法處裡SQL語法，使用方法如下
				//prepare("SQL句子");
				postdata("INSERT INTO postdata ('title','context') VALUES('title','context')");
	?>
</body>
</html>