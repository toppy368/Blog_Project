<html>
<head>
	<!-- title And meat data -->
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--This file is register.php-->
		<title>註冊帳號 - 帳號管理介面</title>
</head>
	<body>
		<h1>註冊帳號 - 帳號管理介面</h1></p>
		<!--功能切換區，已申請帳號的訪客，按下"登入"連結可以回到登入頁面-->
		登入 <b>註冊</b></p>
		<!--HTML表單，註冊用途-->
		<h2>請輸入您想申請的帳號密碼</h2></p>
		<!--本HTML表單將以POST方式回傳資料回本檔案-->
		<form action="register.php" method="post">
		請輸入帳號：<input type="text" name="account" /><br />
		請輸入密碼：<input type="password" name="password" /><br />
		再輸入密碼：<input type="password" name="check_password" /><p />
		<input type="submit" value="申請帳號"></p>
		
		<!--以下為PHP章節，將使用者填好的帳號密碼透過PHP寫入到MySQL資料庫-->
	</body>
</html>