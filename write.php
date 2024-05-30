<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$content = $_POST['content'];

//文字作成
$str = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("data/data.txt", "a");  // ファイル読み込み
// $ret = fwrite($file, $str . "," . $name . "," . $mail . "," . $age . "\n");
$ret = fwrite($file, "$name,$mail,$age,$content,$str\n");
fclose($file);

header("Location: ./index.php");
?>
