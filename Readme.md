#Blog Project 的 Readme.md (使用說明)
這是個網站開發專案，用語法刻出Blog網站，使用者可以建立帳號，並發表文章
網站的性質有點類似Wordpress或仿間的部落格服務提供商，Blog後台管理系統

網站開發的進度及順序會列在本文件後面，順序是先把網站架構及後端搞定，先讓使用者可以註冊帳號並邊寫文章，首頁也能顯示使用者寫出來的文章，再利用CSS框架設計Blog的樣板  


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

帳號：root  
密碼：Es6LXSXEm6r96wRN  
編碼：UTF-8  

以上資訊是本次開發端的phpMyAdmin帳密，不過看過SQL檔似乎沒有寫入這行限制，因此大家能自行設定root帳號，詳情請參考**SQL相關**章節


##安全性警告
本專案包含資料庫均為開源，所以將帳密公布在此，方便開發者存取本專案的資料庫，但此帳密並不安全，建議開發者自行修改相關的密碼  

但請注意，除了伺服器端的帳密設定要改以外，PHP檔案裏頭關於SQL連線的帳密資訊也記得更改，以免因為帳密不符而造成ERROR


##導入GitHub說明 
本次開發導入GitHub雲端版本管理，將專案目錄建立在網頁伺服器根目錄，這樣檔案測試存檔後，能直接透過GitHub客戶端Commit並將程式碼即時同步上去

本專案資料夾網址：https://github.com/toppy368/Blog_Project  
Commit網址：https://github.com/toppy368/Blog_Project/commits/master

雖然GitHub有Commit功能，可以追蹤程式碼的變化，不過我還是會每行寫註解，幫助大家了解每一行含式的功能是做什麼用的


##SQL 相關
路徑：http://localhost/phpMyAdmin/  

直接把路徑網址複製到瀏覽器上，就能進入phpMyAdmin登入畫面  

**Q：**為什麼這個專案需要SQL資料庫呢 ?   
**A:**這個專案是要自己建立一個部落格後台系統，類似商業網誌如無名小站(已倒站)及痞客邦，或類似部落格架站軟體Wordpress的一種Blog系統，不過本專案不會有那麼多功能，只是想建立一個小型的Blog架站機制，練習互動式網頁語法  

如果只透過HTML或網頁設計丙級所設計出來的網站，也許只用到了HTML跟CSS跟少量的繪圖軟體(PhotoImpact)，但是HTML只能建立簡易表單，**按下"送出"後，文件卻無法送出**，因為**資料沒有儲存的地方，所以按了也無法送出資料**  

如果網友在討論版透過HTML輸入表單後，留言能顯示在網頁上，那一定得透過程式碼儲存(**參見Tips**)，在本專案中**你在HTML表單輸入資料後，會透過PHP傳到SQL後端伺服器**，部分網站可能會用到ASP.NET，可達到同樣的效果  

Tips：建議把此機制想成Google Docs，填好內容按下"送出"後，Google Docs的主人可透過Docs的試算表看到你的回應  


###初始設定：修改phpMyAdmin預設的root密碼
####1. 進入phpMyAdmin後台  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_head.JPG)

路徑：http://localhost/phpMyAdmin/  
直接把路徑網址複製到瀏覽器上，就能進入phpMyAdmin登入畫面  

一進去會直接看到錯誤訊息：**您的設定檔當中使用了** (**無設定密碼的 root**) **的設定，該設定是 MySQL 預設的管理帳號。若您繼續使用預設 MySQL 管理帳號執行伺服器，可能會導致伺服器被入侵，強烈建議您設定管理者帳號 'root' 的密碼以避免這個安全性的漏洞。**  

因為root是管理員權限，預設沒有設定密碼，因此必須修改root密碼以策安全(**參見註解第3條**)  
一般來說，通常會由伺服器後台(**參見註解1、2說明**)設定SQL帳號密碼，但WAMP則是要求從phpMyAdmin設定，所以比較麻煩，本章節將說明如何從phpMyAdmin設定SQL的root帳密  

####註解說明：   
1. 各WAMP系統的SQL帳密申請方式不同，如Appserv(已停止開發)是透過安裝軟體的指示設定phpMyAdmin、xampp是透過localhost根目錄的安全選項來設定SQL帳密  
2. 虛擬主機則是依照主機商指示(E-mail內含帳密)或cpanel(主機商網站後台之一)的SQL的帳密設定來新增帳號與權限   
3. **root**為SQL伺服器預設的**管理員帳號**，這個帳號持有**最高權限**，以網路遊戲來說，你就是代表**"官方"**了(類似GM，搞不好比GM還大)，因此請保護好這組帳號  


####2. 進入使用者頁面，選擇"修改root權限"  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_2.JPG)  
進入phpMyAdmin之後，請按下"使用者"進入此頁面，本次要修改root帳號是**主機位置在localhost的root帳號**，請按下**"修改權限"**，或紅框圈起來的這一行，勾選之後按下**"執行"**就能修改該帳號的權限了  

**Q：**畫面中有其他root帳號，那其他root也有管理員權限嗎 ? 怎麼不處裡 ?   
**A：** 在寫這章節時，我實驗了好幾次，但是每次把root帳號刪除掉就會出現錯誤訊息，而且改了下面章節的config.inc.php還是沒用，最後實驗的原因是**你必須有root管理員權限才能刪除帳號，如果刪除所有root帳號，將無人有管理員權限，也無權限登入後台**(當然就無法編輯帳號權限了)，所以我目前的作法是，**先修改其中一個root，確定此帳號有辦法運作，再刪除其他不安全的帳號，確保此root是唯一一組管理員**


####3. 確認root帳號是否擁有全域權限  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_3.JPG)  
請確定你要修改的帳號是否正確 ? 這次要修改的是**'root'@'localhost'**這組帳號，表示是這台機器的**root管理員帳號**，如果沒錯，請檢查權限是否全選 ? 如果有問題，請按照圖片指示修改權限，如果沒問題，請將頁面往下轉到修改密碼的地方

####4. 修改root密碼
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_4.JPG)  
頁面捲到最下面，有兩個表單，第一個表單是**修改密碼**，這個表單是**只能修改密碼的欄位**，另一個表單**能修改帳號與密碼**，如果你想**新增使用者**請填這個表單  

填寫"修改登入資訊/複製使用者"表單時，帳號我這裡一樣是root (**參見Tips**)，主機位置請選擇**"本機"**，欄位請填寫**localhost**，再設定密碼，而無論上面的**"修改密碼"**表單或下面的**"修改使用者/複製使用者"**表單，密碼欄就跟一般申請帳號一樣，需要輸入兩組密碼，而phpMyAdmin則多了一組產生器，可以產生複雜的強密碼(理論上安全性比較高)，不過需要注意一點，一旦按下了**產生**，你自己**輸入的密碼將會被產生器的密碼取代掉**，而產生器旁面會顯示產生出來的密碼，**請將設定好的密碼抄下來妥善保存或背起來，待會修改congig.inc.php會用到**  

Tips：因為root是預設帳號，因此有可能有不肖人士會不斷用root這組帳號去測你的管理員密碼，所以有些人可能會設定別組帳號，但權限一樣是root


####5. ERROR  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/root_pw_error_5.JPG)  
錯誤訊息：**1045 - Access denied for user 'root'@'localhost'** (**using password: NO**) 
一旦設定完成之後，底下root無密碼的提示會消失，但是重新整理頁面會顯示另一組錯誤訊息，原因是phpMyAdmin已幫我設定好了root帳號，但帳號跟預設在congig.inc.php設定檔的初始設定不同，所以會出現錯誤，將新密碼填入該檔案就OK了 ! 


####8. 開啟phpMyAdmin根目錄
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/config.inc_1.jpg)  
WAMP的phpMyAdmin資料夾在此目錄下：C:\wamp\apps\phpMyAdmin4.1.14  

在任何WAMP伺服器中，管理SQL的後台為phpMyAdmin，而config.inc.php就存在phpMyAdmin資料夾中，請找到該資料夾才能找到該檔案  


####9. 開啟並修改congig.inc.php設定檔
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/config.inc_2.jpg)  

請透過搜尋方式找到並修改這幾行：  

**藍色部分**  
第32行的**['uset']**，等號右邊請填寫你的root帳號(如果你有改名的話)，帳號請用單引號包起來，這裡設定的是**'root';**  
第33行的**['password']**，等號右邊請填寫你root的**密碼**，**一旦遺失密碼，整個SQL資料庫就無法登入**，請把你抄下來的密碼填入此欄位，這裡填寫的是'Es6LXSXEm6r96wRN';  

**橘色部分**  
第35行的**['host']**，等號右邊請修改成**'localhost';**  
第40行的**[AllowNoPassword]**，等號右邊請設定為**false;**作用為**關閉**此功能(不過剛才經實驗過，無論true或false，都不會要求輸入帳號密碼的視窗)  


####10. 回到phpMyAdmin使用者頁面，檢查root帳號是否已設定密碼  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/Delete_root_1.JPG)  
回到phpMyAdmin頁面，確定能正常進入後台之後，按下"使用者"回到權限管理頁面，確定root帳號的密碼變成"有"，確定上面把root設定密碼的操作正確無誤  

**最後一個帳號確定有密碼，因此予以保留**


####11. 刪除其他使用者(包含root)  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/Delete_root_2.JPG)  
接下來這個步驟是倒數第二步了，這裡要解決第2步的疑問，因為只有最後一個主機位置在localhost帳號有設定密碼，所以我打算**刪除其他帳號，只保留有密碼的root**  

把上面其他帳號打勾好之後，在**"刪除選中的使用者"**的選項打勾，此時會出現警語：  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/Delete_root_3.JPG)  
警語內容：  
**您正要刪除**(**DESTROY**)**一個完整的資料庫！**  
**您確定要執行 "DROP DATABASE"？**

請按下**"確定"**，回到使用者頁面
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/Delete_root_2.JPG) 
確定上面的**帳號勾選無誤**，且**刪除使用者**的選項也勾選無誤後，請按下左下角的**執行**，**刪除**勾選的帳號


####12. 完成設定  
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/Delete_root_4.JPG)  
警語：**1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1**  
此時會出現警語，但這警語按一下就會關閉，而且重新整理也沒出現異常  

之後按下**"使用者"**，就會出現這個畫面
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/Delete_root_5.JPG)
確認帳號只剩下我這一組位於localhost的root帳號之後，所有設定root帳號密碼及刪除其他帳號的動作都完成了 !   

如果大家還是不放心，可以重新進入phpMyAdmin，應該是可以正常運作才對，SQL章節**修改root密碼**的**所有步驟**都完成了 !   

**本章節到此結束，下一章將說明SQL檔的匯入匯出**  

###透過phpMyAdmin匯出SQL檔(備份成 *.sql檔)
舊文網址：[WordPress 多種方式的網誌備份教學<<toppy368的研究書房] (http://www.toppy368.tw/archives/1437)  
我之前在我的Blog寫過備份方法，雖然是針對Wordpress的筆記文，但只要是透過php+SQL執行的網站或架站軟體都可以用此方式，比如說最近很知名的CMS(內容管理系統)架站軟體，如**部落格**為主的 [**Wordpress**] (https://tw.wordpress.org/)  或**論壇**為主的 [**Discuz**] (http://www.discuz.net/forum.php) 或**商業網站**為主的 [**Joomla!**] (http://www.joomla.org.tw/) 以上這些都可以使用本方法備份SQL資料庫  

本專案是自己用PHP+SQL刻出類似Wordpress的簡易型Blog網站，  

####1. 進入phpMyAdmin

這裡假設大家都已經有資料庫