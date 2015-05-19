#Blog Project 的 Readme.md (使用說明)
這是個網站開發專案，用語法刻出Blog網站，使用者可以建立帳號，並發表文章
網站的性質有點類似Wordpress或仿間的部落格服務提供商，Blog後台管理系統

網站開發的進度及順序會列在本文件後面
順序是先把網站架構及後端搞定
先讓使用者可以註冊帳號並邊寫文章
首頁也能顯示使用者寫出來的文章
再利用CSS框架設計Blog的樣板

##授權方式
本專案選用的授權方式為GNU General Public License v2.0，詳情請訪問本目錄的LICENSE.txt檔案

##開發環境
作業系統：Windows 7 家用進階版
WAMP軟體：Wamp server2.5 64bit(從2015/5/19 更改為此版本為開發端) 
XAMPP for Windows v5.6.8 (已停用)
開發SDK：Notepad++

注意：自2015/5/19，變更開發端，已移除WAMPP for Windows v5.6.8，並由Wamp server2.5 64bit取代

#開發語言
前端：HTML、CSS  
後端：PHP、MySQL

編碼：一律採用UTF-8


###MySQL 帳號密碼

帳號：<初始設定，等SQL章節寫完會填入帳密> 
密碼：<初始設定，等SQL章節寫完會填入帳密>
編碼：UTF-8

帳號密碼等SQL章節完成之後，會把設定的帳密填入上方欄位，詳細的使用說明請參考SQL章節

##安全性警告
本專案包含資料庫均為開源，所以將帳密公布在此，方便開發者存取本專案的資料庫，但此帳密並不安全，建議開發者自行修改相關的密碼  

但請注意，除了伺服器端的帳密設定要改以外，PHP檔案裏頭關於SQL連線的帳密資訊也記得更改，以免因為帳密不符而造成ERROR


##導入GitHub說明 
本次開發導入GitHub雲端版本管理，將專案目錄建立在網頁伺服器根目錄，這樣檔案測試存檔後，能直接透過GitHub客戶端Commit並將程式碼即時同步上去

本專案資料夾網址：https://github.com/toppy368/Blog_Project  
Commit網址：https://github.com/toppy368/Blog_Project/commits/master

雖然GitHub有Commit功能，可以追蹤程式碼的變化，不過我還是會每行寫註解，幫助大家了解每一行含式的功能是做什麼用的

##SQL 相關
路徑：http://localhost/phpmyadmin/  

直接把路徑網址複製到瀏覽器上，就能進入phpmyadmin登入畫面  

一般來說，通常會由伺服器後台(安裝軟體提示或localhost根目錄可設定SQL密碼，虛擬主機則是從類似localhost的後台，如cPanel平台中設定)設定SQL帳號密碼，但WAMP則是要求從phpmyadmin設定，所以比較麻煩，下面將說明如何從phpmyadmin設定SQL的root帳密  


###初始設定：修改 root 密碼
1. 進入phpmyadmin後台  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_head.JPG)

一進去會直接看到錯誤訊息：您的設定檔當中使用了 (無設定密碼的 root) 的設定，該設定是 MySQL 預設的管理帳號。若您繼續使用預設 MySQL 管理帳號執行伺服器，可能會導致伺服器被入侵，強烈建議您設定管理者帳號 'root' 的密碼以避免這個安全性的漏洞。  
因此必須修改root密碼以策安全

