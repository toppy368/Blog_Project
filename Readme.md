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

一般來說，通常會由伺服器後台(參見註解說明)設定SQL帳號密碼，但WAMP則是要求從phpmyadmin設定，所以比較麻煩，下面將說明如何從phpmyadmin設定SQL的root帳密  

###註解：
1. 各WAMP系統的SQL帳密申請方式不同，如Appserv(已停止開發)是透過安裝軟體的指示設定phpmyadmin、xampp是透過localhost根目錄的安全選項來設定SQL帳密
2. 虛擬主機則是依照主機商指示(E-mail內含帳密)或cpanel(主機商網站後台之一)的SQL的帳密設定來新增帳號與權限

###初始設定：修改 root 密碼
**1. 進入phpmyadmin後台**  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_head.JPG)

一進去會直接看到錯誤訊息：**您的設定檔當中使用了** (**無設定密碼的 root**) **的設定，該設定是 MySQL 預設的管理帳號。若您繼續使用預設 MySQL 管理帳號執行伺服器，可能會導致伺服器被入侵，強烈建議您設定管理者帳號 'root' 的密碼以避免這個安全性的漏洞。**  
因此必須修改root密碼以策安全  

註解：**root**為SQL伺服器預設的**管理員帳號**，這個帳號持有**最高權限**，以網路遊戲來說，你就是代表**"官方"**了(類似GM，搞不好比GM還大)，因此請保護好這組帳號

**2. 進入使用者頁面，選擇"修改root權限"**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_2.JPG)  
進入phpMyAdmin之後，請按下"使用者"進入此頁面，本次要修改root帳號是**主機位置在localhost的root帳號**，請按下**"修改權限"**，或紅框圈起來的這一行，勾選之後按下**"執行"**就能修改該帳號的權限了  

**Q：**畫面中有其他root帳號，那其他root也有管理員權限嗎 ? 怎麼不處裡 ?   

**3. 確認root帳號是否擁有全域權限**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_3.JPG)

**4. 修改root密碼**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_4.JPG)

**5. ERROR**


**8. 開啟phpmyadmin根目錄**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/config.inc_1.jpg)  
WAMP的phpmyadmin資料夾在此目錄下：C:\wamp\apps\phpmyadmin4.1.14  

在任何WAMP伺服器中，管理SQL的後台為phpmyadmin，而config.inc.php就存在phpmyadmin資料夾中，請找到該資料夾才能找到該檔案  

**9. 開啟並修改congig.inc.php設定檔**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/config.inc_2.jpg)  

請透過搜尋方式找到並修改這幾行：  
第35行的**['host']**，等於右邊請修改成**'localhost';**  
第40行的**[AllowNoPassword]**，等於右邊請設定為**false;**作用為**關閉**此功能  