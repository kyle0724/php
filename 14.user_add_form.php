<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);  // 隱藏所有的錯誤報告（避免讓使用者看到網頁報錯的敏感資訊）
    session_start();     // 啟動 Session 機制，這樣才能讀取或儲存跨網頁的使用者登入變數
    if (!$_SESSION["id"]) {   // 如果沒有 id（代表未登入），顯示提示訊息
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
