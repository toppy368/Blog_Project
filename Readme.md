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
WAMP軟體：XAMPP for Windows v5.6.8 
(包含以下：Apache 2.4.12, MySQL 5.6.24, PHP 5.6.8, phpMyAdmin 4.3.11)
開發SDK：Notepad++

#開發語言
前端：HTML、CSS  
後端：PHP、MySQL

編碼：一律採用UTF-8


###MySQL 帳號密碼

帳號：Blog_Project  
密碼：NQvZsN93vXcnJtwR
編碼：UTF-8

使用說明：資料庫SQL檔會放在專案根目錄下，請先進入phpmyadmin後，再"匯入"SQL資料庫檔，編碼請記得設定為UTF-8，以免發生錯誤

###Apach 目錄帳密 (www目錄中的.htaccess)

帳號：Blog  
密碼：Open

##安全性警告
本專案包含資料庫均為開源，所以將帳密公布在此，方便開發者存取本專案的資料庫，但此帳密並不安全，建議開發者自行修改相關的密碼  

但請注意，除了伺服器端的帳密設定要改以外，PHP檔案裏頭關於SQL連線的帳密資訊也記得更改，以免因為帳密不符而造成ERROR


##導入GitHub說明 
本次開發導入GitHub雲端版本管理，將專案目錄建立在網頁伺服器根目錄，這樣檔案測試存檔後，能直接透過GitHub客戶端Commit並將程式碼即時同步上去

本專案資料夾網址：https://github.com/toppy368/Blog_Project  
Commit網址：https://github.com/toppy368/Blog_Project/commits/master

雖然GitHub有Commit功能，可以追蹤程式碼的變化，不過我還是會每行寫註解，幫助大家了解每一行含式的功能是做什麼用的

##SQL 備份方式


