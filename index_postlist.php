<html>
<head>
<!-- Title and meat data  -->
<!-- This file is index_postlist.php -->
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
//本專案使用GNU GENERAL PUBLIC LICENSE Version 2為授權條款，詳情請訪問此目錄的LICENSE.txt
//本檔案為 index_* 群組下 ，將被index.php引用顯示本Blog所有文章，請勿放置到 admin 資料夾中 ! 
	echo "<h1>"."Hello World"."</h1>"."<p />";
	
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
			
		//查詢SQL語法：
		//SELECT * FROM postdata LIMIT 0 , 30;
		//
		//以 prepare 方法處裡SQL語法，使用方法如下
		//prepare("SQL句子");
		//
		//關於prepare的說明及範例，請參考以下網址：
		//http://php.net/manual/en/pdo.prepare.php
			$sql = $db_link -> prepare("SELECT * FROM postdata LIMIT 0 , 30");
		
?>
</body>
</html>