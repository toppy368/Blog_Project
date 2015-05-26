<?php
	//session_start();
		//include ('login.php');
			//if($_SESSION['login']==true) {
				//持有session登入許可證者，顯示歡迎訊息
				//但因為login.php沒完成，暫時不放帳號參數
				//echo "歡迎光臨！"."<p />";
			//} else {
				//未登入者，顯示訊息引導登入
				//echo "<FONT COLOR='ff0000'>"."您尚未登入，請透過下方頁面中的"."<b>"."登入"."</b>"."連結登入後再發文"."</font>"."<p />";

			//}
?>
<html>
<head>
<!-- Title and meat data  -->
<!-- This file is index.php -->
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>部落格首頁</title>
</head>
<body>
<!--本專案使用GNU GENERAL PUBLIC LICENSE Version 2為授權條款，詳情請訪問此目錄的LICENSE.txt-->
	<h1>Blog首頁</h1><p /> 

	<!--PHP區域，引用其他網頁-->
	<?php
	
	//引入index_function.html
	include_once("index_function.html");
	

	?>
</body>
</html>