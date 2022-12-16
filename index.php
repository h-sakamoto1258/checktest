<?php
require_once ("getData.php");
$db = new getData();
$user_data = $db->getUserData();
$user_data['id'];
$user_data['last_name'];
$user_data['first_name'];
$post_data = $db->getPostData();
$post_data['id'];
$post_data['title'];
$post_data['created'];
$post_data['category_no'];
$post_data['comment'];
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
    <div class="header_top">
        <p>ようこそ <?php echo $user_data['last_name']. $user_data['first_name'];?> さん</p>
    </div>
    <div class="header_under">
        <?php
        echo '最終ログイン日：',date('Y-m-d H:i:s');
        ?>
    </div>
<div class="main1"></div>
    <table border="1">
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
    </table>
<div class="main2"></div>
    <table border="1">
        <tr>
            <?php foreach ($post as $post) : ?>
            <td><?= $post_data['id']?></td>
            <td><?= $post_data['title']?></td>
            <td><?= $post_data['created']?></td>
            <td><?= $post_data['category_no']?></td>
            <td><?= $post_data['comment']?></td>
        </tr>
        <?php //endforeach ?>
    </table>
    <?php
    /*
        $sql = "SELECT * FROM posts";
        $pdo = db_connect();
        try {
            $stml = $pdo->prepare($sql);
            //$stml->bindParam(':id',$id);
            $stml->execute();
            while ($row = $stml->fetch(PDO::FETCH_ASSOC)) {
                //$row['id']=$id . $row['title']=$title . $row['category_no']=$category_no . $row['comment']=$comment . $row['created']=$crested;
                echo $row['id'] . ',' . $row['title'] . ',' . $row['category_no'] . ',' . $row['comment'] . ',' . $row['created'];
                echo '<br />';
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
        /*$db = getUserData();
        $db->exec();
        $db = mysql_query("SELECT * FROM users");
        print "<html>";
        print "<body>";
        print "<table border = 1 >";
        print "<tr><td>記事ID</td><td>タイトル</td><td>カテゴリ</td><td>本文</td><td>投稿日</td></tr>";
        while($que = mysql_fetch_array($db)) {
            print "<tr><td>" , $que["id"] , "</td>";
            print "<td>" , $que["first_name"] , "</td>";
            print "<td>" , $que["last_name"] , "</td>";
            print "<td>" , $que["last_login"] , "</td></tr>";
        print $db->getAttribute(PDO:ATTR_SERVER_INFO);
        }
        print "</table>";
        print "</body>";
        print "</html>";

    <body>
        <table border="1">
            <tr><td>記事ID</td><td>タイトル</td><td>カテゴリ</td><td>本文</td><td>投稿日</td></tr>
            <td>$id</td><td>$title</td><td>$category_no</td><td>$comment</td><td>$created</td>
        </table>
        */
        ?>
    <div class="footer">
        <p2>Y&I group.inc</p2>
    </div>
</body>
</html>