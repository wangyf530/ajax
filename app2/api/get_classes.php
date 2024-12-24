<?php
include_once "db.php";
// $classes = $Stu->all(" group by `classroom`");
// all 會顯示所有資料 不是我們要的 所以改用q
$classes = q("SELECT `classroom` FROM `students` group by `classroom`");

// 後端只做後端的東西
echo json_encode($classes);
?>