<?php

// フォームから送信されたデータを取得します
$occasion = $_POST["occasion"];
$strength = $_POST["strength"];
$kindness = $_POST["kindness"];
$contribution = $_POST["contribution"];
$studioScore = $_POST["studioScore"];
$suggestion = $_POST["suggestion"];

// データをカンマ区切りの文字列にします
$c = ",";
$str = $occasion . $c . $strength . $c . $kindness . $c . $contribution . $c . $studioScore. $c . $suggestion;

// data.csvファイルを追記モードで開きます
$file = fopen("data.csv", "a"); 
if ($file === false) {
    die("ファイルを開けませんでした。");
}

// カンマ区切りのデータ文字列をファイルに書き込みます
$result = fwrite($file, $str . "\n");
if ($result === false) {
    die("ファイルに書き込めませんでした。");
}

// ファイルを閉じます
fclose($file);

// 処理が終わったらindex.phpにリダイレクトします
//header("Location: index.php");
//exit;
?>

<html>

<head>
    <meta charset="utf-8">
    <title>送信完了</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Thank You!</h1>
    <ul>
        <li><a href="read.php">データを確認する</a></li>
        <li><a href="index.php">アンケートに戻る</a></li>
    </ul>
</body>

</html>