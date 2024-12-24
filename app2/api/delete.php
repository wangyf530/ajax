<?php
//處理刪除資料的請求
include_once "db.php";
$id = $_POST['id'];
$classroom = $_POST['classroom'];

$Stu->del($id);
// echo $Stu->del($id);
echo $classroom;

// 後端作法 前端只傳一個id 然後在後端資料庫撈一次
// 
// $row = $Stu->find($id);
// echo $row;
?>