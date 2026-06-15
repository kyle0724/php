<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("120.105.96.90", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";    // 組合 SQL 刪除指令：從 user 資料表刪除 id 等於網址列傳入之 $_GET["id"] 的資料
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";   // 如果執行失敗，顯示錯誤訊息
        }else{
            echo "使用者刪除成功";   // 如果執行成功，顯示成功訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";   // 無論刪除成功或失敗，皆在 3 秒後自動跳轉回使用者管理列表頁 (18.user.php)
    }
?>
