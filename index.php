<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="header_left"></div>
    <div class="header_top">
        <p>ようこそ 〇〇 さん</p>
    </div>
    <div class="header_under">
        <?php
        echo '最終ログイン日：',date('Y-m-d H:i:s');
        ?>
    </div>
    <?php
        require_once("getData.php");
        $getData = new getData();
        $records = $getData->query('SELECT * FROM users');
        while ($record = $records->fetch()) {
        print($record['id'] . "\n");
        }
    ?>
    <div class="footer">
        <p2>Y&I group.inc</p2>
    </div>
</body>
</html>

<?php
/*<div class="main"></div>
        <?php
        <form action="pdo.php" method="post">
        ?>
    <div class="footer"></div>

<div class="img"><img src="images/logo.png"alt="" /></div>
<div class="clearfix">

<form action="3_8_R2_result.php" method="post">
    <br>
    好きな名前を入れてください：
    <br>
    <input type="text" name="my_name" />
    <br>
    1〜6の好きな数字を入れてください：
    <br>
    <input type="text" name="number" />
    <br>
    <input type="submit" value="送信" />
</form>
</body>
</html>


<body>
    <div class="header"></div>
    <div class="clearfix">
        <div class="green"></div>
            <div class="right"></div>
                <div class="yellow"></div>          
                 <div class="blue"></div>
                 <div class="pink"></div>
                 <div class="brown"></div>
             </div>
    </div>
    <div class="footer"></div>
</body>
</html>
    <img src="images/logo.png"alt="" /></div>
*/