<!-- このファイルは使用していない -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPページ</title>
</head>

<body>
    <h1>こんにちは、世界！</h1>

    <p>今日は <?php echo date("Y年m月d日"); ?> です。</p>

    <?php
    $name = "太郎";
    echo "<p>こんにちは、" . $name . "さん！</p>";
    ?>
</body>

</html>
