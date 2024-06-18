<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>データ確認</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            color: #333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        h1 {
            color: #5a5a5a;
            text-align: center;
            padding: 20px 0;
            font-size: 2em;
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        li {
            list-style: none;
            text-align: center;
            margin-top: 20px;
        }

        li a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #5a5a5a;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        li a:hover {
            background-color: #444;
        }
    </style>

</head>
<body>
<?php
    $data = file_get_contents('data.csv');
    $lines = explode("\n", $data);

    echo "<table>";
    echo "<tr><th>目的</th><th>レッスン強度</th><th>親しみやすさ</th><th>貢献度</th><th>スタジオ</th><th>ご意見</th></tr>";

    foreach ($lines as $line) {
        if (trim($line) !== '') {
            $parts = explode(",", $line);
            echo "<tr>";
            echo "<td>" . htmlspecialchars($parts[0]) . "</td>";
            echo "<td>" . htmlspecialchars($parts[1]) . "</td>";
            echo "<td>" . htmlspecialchars($parts[2]) . "</td>";
            echo "<td>" . htmlspecialchars($parts[3]) . "</td>";
            echo "<td>" . htmlspecialchars($parts[4]) . "</td>";
            echo "<td>" . htmlspecialchars(isset($parts[5]) ? $parts[5] : '') . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
    ?>
    <li><a href="index.php">アンケートに戻る</a></li>
</body>
</html>