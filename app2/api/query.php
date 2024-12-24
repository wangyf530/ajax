<?php
include_once "db.php";
$code = $_GET['code'];
$students = $Stu->all(['classroom'=>$code]);
// $stu = q("SELECT * FROM `students` WHERE `classroom`='$class'");
// 後端只做後端的東西

echo json_encode($students);
?>