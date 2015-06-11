#Blog Project 的 Readme.md (使用說明)
這是個網站開發專案，用語法刻出Blog網站，使用者可以建立帳號，並發表文章，網站的性質有點類似Wordpress或仿間的部落格服務提供商，Blog後台管理系統

網站開發的進度及順序會列在本文件後面，順序是先把網站架構及後端搞定，先讓使用者可以註冊帳號並邊寫文章，首頁也能顯示使用者寫出來的文章，後端系統逐漸完成後，再利用CSS框架設計Blog的樣板  

專案的相關檔案及SQL欄位內的資料**會隨者開發及測試過程中的資料而增加或刪除**，詳細的資料變動請參考本專案的commits


##授權方式
本專案選用的授權方式為GNU General Public License v2.0，詳情請訪問本目錄的LICENSE.txt檔案

此段說明已寫在本專案的所有PHP、HTML檔，在Body標籤後面、H1標題前面以註解說明，而SQL檔則寫在主機資訊的註解，位於第9與第10行


##開發環境
作業系統：Windows 7 家用進階版  
WAMP軟體：(**以下兩者並存，但同時開啟會相衝突**)  
1. Wamp server2.5 64bit  
2. XAMPP for Windows v5.6.8  
開發SDK：Notepad++    


##開發語言
前端：HTML、CSS  
後端：PHP、MySQL

資料庫檔案：blog_project.sql  
編碼：一律採用UTF-8 (詳細：utf8_unicode_ci)

**開發環境額外說明：**  
以上是開發環境的硬體及開發語言，本專案目前沒有在虛擬主機或VPS等外部伺服器上測試或運作，不同作業系統的開發者只要找到能執行PHP+SQL的伺服器軟體，都可以協助測試此專案(但**須注意伺服器安裝包內含的語言版本**)  


##導入GitHub說明 
本次開發導入GitHub雲端版本管理，將專案目錄建立在網頁伺服器根目錄，這樣檔案測試存檔後，能直接透過GitHub客戶端Commit並將程式碼即時同步上去

本專案資料夾網址：https://github.com/toppy368/Blog_Project  
Commit網址：https://github.com/toppy368/Blog_Project/commits/master

雖然GitHub有Commit功能，可以追蹤程式碼的變化，不過我還是會每行寫註解，幫助大家了解每一行含式的功能是做什麼用的

**注意：**本專案的檔案隨時可能有更新，因此下載檔案時請直接從專案資料夾下載檔案覆蓋即可  


##安全性警告
1. 本專案會使用部分資料庫語法，專案中為了講解方便，使用了預設的帳號及密碼，這些設定都是**參考就好**，**引用並開發這些檔案時，請另外設定自己的帳號密碼，請勿原封不動的照抄設定值**  
2. 自行主機連線帳密時，除了伺服器端的帳密設定要改以外，PHP檔案裏頭關於SQL連線的帳密資訊也記得更改，以免因為帳密不符而造成ERROR  
3. 開發的過程會隨者進度而開始處理安全性的問題，不過因為我是初學者，並沒有學到加密技術，所以目前網站的資料庫還是明碼顯示，在此提醒大家  
4. 等專案接近尾聲，確定資料庫能正常運作時，會開始處理安全性問題，也可能實作登入系統加密/解密功能(可能採用AES法)  


##SQL 相關
每個瀏覽器的SQL登入路徑都不同，加上資料安全的疑慮，所以就不寫出登入連結了，請參考各網頁伺服器的phpMyAdmin登入方法

**Q：為什麼這個專案需要SQL資料庫呢？**  
**A：** 這個專案是要自己建立一個部落格後台系統，類似商業網誌如無名小站(已倒站)及痞客邦，或類似部落格架站軟體Wordpress的一種Blog系統，不過本專案不會有那麼多功能，只是想建立一個小型的Blog架站機制，練習互動式網頁語法  

如果只透過HTML或網頁設計丙級所設計出來的網站，也許只用到了HTML跟CSS跟少量的繪圖軟體(PhotoImpact)，但是HTML只能建立簡易表單，**按下"送出"後，文件卻無法送出**，因為**資料沒有儲存的地方，所以按了也無法送出資料**  

如果網友在討論版透過HTML輸入表單後，留言能顯示在網頁上，那一定得透過程式碼儲存(**參見Tips第1項**)，在本專案中**你在HTML表單輸入資料後，會透過PHP傳到SQL後端伺服器**(參見Tips第2項)，部分網站可能會用到ASP.NET，可達到同樣的效果  

**Tips：**  
1. 建議把此機制想成Google Docs，填好內容按下"送出"後，Google Docs的主人可透過Docs的試算表看到你的回應  
2. 部分 [內容管理系統] (http://zh.wikipedia.org/wiki/%E5%86%85%E5%AE%B9%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F) ，或架站平台，如**部落格**架站軟體 [**Wordpress**] (https://tw.wordpress.org/) 、 **論壇**架站軟體 [**Discuz**] (http://www.discuz.net/forum.php) 、 商業網站架站軟體 [**Joomla!**] (http://www.joomla.org.tw/) 也採用HTML+PHP+MySQL架構  
3. 關於今天被刪除的root帳密設定，請參見以下說明

####2015/5/29 文章變動說明
因為要整理章節，把本專案聚焦於網頁資料庫開發，因此整個SQL相關的章節，即日起進行調整，調整項目如下：  

1. **刪除** root 帳密設定相關內容，只保留SQL檔的匯入/匯出章節  
2. 資料庫**匯入/匯出**功能因為關係到網站的**資料備份**，予以**保留**  

關於phpMyAdmin操作，本文件將只會說明**匯入/匯出**功能  
其他功能的使用說明請參考新專案 phpMyAdmin_hele 專案： 
https://github.com/toppy368/phpMyAdmin_help 

###透過phpMyAdmin匯入SQL檔

####1.進入phpMyAdmin主畫面
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_import_1.JPG)

####2. 新增資料庫
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_import_2.JPG)
可用此SQL指令替代：**CREATE DATABASE 資料庫名稱；**  
請到左邊資料庫選單中選擇"新增"選項，然後到右邊紅框框起來的地方，**最左邊第一格**請輸入你想新增的**資料庫名稱**、**第二項**請選擇**資料庫編碼**，考慮到使用者可能是不同國籍的人，為了語言相容性，所以本專案的資料庫設定成**utf8_unicode_ci**(**參見註解**)，**想採用utf8mb4的開發者，請將編碼資料庫設定為utf8mb4_unicode**  

註解：
1. 在還沒有Unicode概念時，每個電腦系統使用各自的編碼語言，比方說台灣的正體中文使用Big5、日本使用Shift_JIS、中國大陸簡體中文使用GB18030及GB2312、英文使用的是[ASCII] (http://zh.wikipedia.org/zh-tw/ASCII)，不同的語言，2進位代碼不同，如果編碼設錯，瀏覽器讀不出來將造成 [亂碼] (http://zh.wikipedia.org/zh-tw/%E4%BA%82%E7%A2%BC)，後來為了將這些語言統一才推出 [Unicode編碼] (http://zh.wikipedia.org/zh-tw/Unicode) ，可在同頁面上顯示不同語言的文字  
2. phpMyAdmin在5.5以後開始支援utf8mb4編碼，而 [Wordpress也採用此編碼] (https://tw.wordpress.org/2015/04/29/wordpress-4-2/) ，不過我目前還是以UTF-8為主(想採用utf8mb4的開發者，請將編碼資料庫設定為utf8mb4_unicode)  

####3. 匯入資料庫
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_import_3.JPG)
新增資料庫看到成功訊息之後，請直接到右邊的資料庫選擇區中，選擇剛才建立的資料庫，選好之後，請按下**匯入**進到此頁面  

確定現在要匯入的位置是剛才剛新建好的資料庫後，請選擇**要匯入的檔案**，我選擇同樣名稱的blog_project.sql，根據後台說明，從虛擬主機下載下來的.zip檔也可以匯入  

之後請檢查**檔案編碼**，可以透過Notepad++或其他文字編輯器開啟sql檔，因為匯入檔案編碼必須與原檔案的編碼相同，**原始檔案如果是Big5，匯入選項也只能選擇Big5；如果資料庫檔案是UTF-8，那檔案編碼也請選UTF-8**  

如果上面這些選項都沒有問題，請按下"執行"，將SQL檔匯入此資料庫

####4. 匯入成功
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_import_4.JPG)  
看到這訊息，就成功了 ! 成功將檔案匯入到剛才建好的資料庫當中，現在你可以直接從phpMyAdmin編輯這個資料庫
###透過phpMyAdmin匯出SQL檔(備份成 *.sql檔)
舊文網址：[WordPress 多種方式的網誌備份教學<<toppy368的研究書房] (http://www.toppy368.tw/archives/1437)  
我之前在我的Blog寫過備份方法，雖然是針對Wordpress的筆記文，但只要是基於SQL語法運作的網站或採用SQL資料庫運作的 [內容管理系統 CMS] (http://zh.wikipedia.org/zh-tw/%E5%86%85%E5%AE%B9%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F) 都可以利用此方法備份網站資料庫為SQL檔  
 

####1. 進入phpMyAdmin主頁面
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_Backup_1.JPG)
這裡假設大家已經在自己的電腦裡安裝好伺服器軟體或WAMP架構並可進入phpMyAdmin，或申請好虛擬主機並設定好root帳密者，如果無法進入，請看前面章節  

**請大家先以root帳號登入phpMyadmin首頁**，確定正確登入再進行第二步  


####2. phpMyAdmin資料庫介面說明
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_Backup_2.JPG)
先說明資料庫的介面好了：  
左邊紅框顯示的是**資料庫選單**，一台SQL主機可能有好幾個資料庫，包含運作此資料庫的必要資料庫在內，你可以在此選擇你想備份的資料庫  
右邊上面紅框框起來的是**功能選單，**按下SQL可以下達SQL指令、也有匯出資料或匯入資料或搜尋等功能
右邊中間是**資料表編輯區**，你選中資料庫之後，資料表顯示區會顯示這個資料庫有幾張資料表等內容，空的資料庫也會顯示  


####3. 選定資料庫並按下"匯出"
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_Backup_3.JPG)
請按下右邊的資料庫，本專案的資料庫名稱為"blog_project"，選中之後，會顯示裏頭的資料表，接下來請按下"匯出"，匯出資料庫

####4. 匯出選項
按下匯出之後，請檢查你要匯出的資料庫是否正確，本專案的資料庫檔案為"blog_project"  

新版phpMyAdmin的**匯出選項**區分為**"快速"**及**"自訂"**兩種，以下將針對這兩種選項說明

**4A. 快速匯出**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_Backup_4A.JPG)  
快速匯出只要檢查資料庫名稱是否正確，再確認格式是否為SQL(下載為 .sql 檔)，之後按下執行，就會跳出下載畫面，直接下載.sql檔就好

**4B. 自訂匯出**
![image] (https://github.com/toppy368/Blog_Project/blob/master/Readme_image/SQL_Backup_4B.JPG)
自訂匯出選項可以讓你自訂匯出的資料表、檔案編碼等等，你可以檢查資料表是否全選(如果漏選可能會造成網站異常)，還有檔案編碼是否正確等等(匯出的編碼要與匯入的格式相同)  

確定沒問題，就跟快速匯出一樣，畫面移動到最下方，按下**"執行"**，下載.sql檔就完成了  


#專案檔案使用方式(流程)  
###安裝方式：
1. 在自己的電腦安裝能支援HTML+PHP、MySQL的伺服器  
2. 將 Blog_Project 整個專案下載下來，有兩種下載方法，第一種是按下**Download zip**按鈕、第二種是按下**Clone in Disktop**(**需安裝Github客戶端軟體**)  
3. 將資料夾裏頭的所有檔案複製到Web伺服器的根目錄  
4. 進入phpMyAdmin建立空的資料庫並將blog_project.sql匯入資料庫    


###使用方式：  
1. 進入index.html (**未完成**)  
2. 從首頁點選連結到  register.php 註冊帳號  
2. 點選"登入"進到 login.php 登入帳號密碼 (**未完成**)  
4. "登入"後會進入 /admin/admin.php (**未完成**)  
5. 點選"新增文章"，進入post_new.php，打一篇文章並按下"發表"  
6. 文章標題及內容會顯示在"首頁"(index.html)上 (**未完成**)  


##各檔案功能說明
這個專案目前為止將分為四大功能，分別為**首頁**、**帳號**、**後台**、**文章**四大區域，其中**首頁與帳號**都在專案資料夾的**根目錄**中、**後臺及文章**放在**admin資料夾**中  

以下將顯示每個功能所包含的檔案名稱及目前進度，，當有檔案結構變動時，也會在以下章節中註明清楚  


###首頁系統
####index.php  
進度條：90%  
用途：引入文章清單及功能清單  

近況顯示：  
1. 能正常顯示index_postlist.html的超連結內容及index_postlist.php的Hello World標題  
2. 等index.postlist.php開發完成，首頁功能就完成了 !    


####index_function.html  
進度條：100%  
用途：供index.php引入用，內有連結引導使用者進帳號管理頁面  


####index_postlist.php  
進度條：1%  
用途：供index.php引入用  

近況顯示：先在php區域顯示Hello World為h1標題，並讓index.php能看到此字樣  

  
###帳號管理  
####register.php   
進度條：99% (需修改)  
用途：註冊會員帳號  
近況：**可正常使用**


####login.php  
進度條：50%  
用途：登入會員帳號  

近況表示：出現 **Fatal error: Call to a member function prepare**() **on null** 錯誤訊息


###後臺  
####Admin/admin.php  
進度條：0%  
用途：引入會員參數(門禁&通行證)、引入選單及文章管理功能

近況：**尚未產生檔案**  


####文章  
####Admin/post_new.php  
進度條：90%  
用途：發表新文章  

近況：**可正常使用，但後續功能可能增加**
