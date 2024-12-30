<?php
session_start();

// 檢查是否有現有的分數，若沒有則設為0
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

// 增加分數
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['score'] += 10; // 每次遊戲進行就增加分數
}

// 顯示分數
echo "分數: " . $_SESSION['score'];
?>
