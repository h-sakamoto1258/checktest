<?php
require_once ("getData.php");
$db = new getData();
$user_data = $db->getUserData();
//$user_data['id'];
//$user_data['last_name'];
//$user_data['first_name'];
$post_data = $db->getPostData();
//$post_data['id'];
//$post_data['title'];
//$post_data['created'];
//$post_data['category_no'];
//$post_data['comment'];
?>

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
    <div class="header_main"></div>
        <div class="header_top">
            <p>ようこそ <?php echo $user_data['last_name']. $user_data['first_name'];?> さん</p>
        </div>
        <div class="header_under">
        <?php
        echo '最終ログイン日：',date('Y-m-d H:i:s');
        ?>
        </div>
    <table border="1">
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
            <?php
            try {
                //$stt = $db->prepare("SELECT * FROM posts ORDER BY id desc");
                $stt = $db->query("SELECT * FROM posts ORDER BY id desc");
                //$stt->execute();
                foreach($stt as $post_data) {
            ?>
            <tr>
                    <td><?=e($post_data['id']) ?></td>
                    <td><?=e($post_data['title']) ?></td>
                    <td><?=e($post_data['created']) ?></td>
                    <td><?=e($post_data['category_no']) ?></td>
                    <td><?=e($post_data['comment']) ?></td>
            </tr>
            <?php
                }
            } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                die();
            }
            ?>
            </table>
            <div class="footer">
            <p2>Y&I group.inc</p2>
            </div>
            </body>
            </html>

