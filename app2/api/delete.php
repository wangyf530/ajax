<?php
//處理刪除資料的請求
include_once "db.php";
$id = $_POST['id'];
$classroom = $_POST['classroom'];

$Stu->del($id);
// echo $Stu->del($id);
echo $classroom;
?>