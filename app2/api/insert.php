<?php
//處理新增資料的請求
include_once "db.php";
// post過來的直接丟資料庫
$Stu->save($_POST);

// to("../index.html");
?>