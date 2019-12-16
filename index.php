<?php
    include('test_mysqli_select.php');
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <title>留言板</title>
</head>
<body>
    <div class="wrap">
        <!-- 留言操作 -->
        <div class="rdd">
            <form action="save.php" method="post">
                <textarea class="content" name="content" id="" cols="30" rows="10" placeholder="请发表您的评论....." style=" resize: none;font-size: 20px ;margin-top: 100px;"></textarea>
                <input class="user" name="user" type="text" placeholder="请输入你的昵称..">
                <input class="btn" type="submit" value="发表" style="color:green;background:#fff;">
            </form>
        </div>
        <!-- 留言显示 -->
        <?php
        foreach ($rows as $row) {
        ?>
            <div class="show">
                <div class="user"><?php echo $row['user'] ?></div> <div class="time"><?php echo date("Y-m-d H:i:s",$row['intime']) ?></div>
                <div class="content" style="font-size: 30px; font-family: '楷体'"><?php echo $row['content'] ?></div>
            </div>
         <?php
        }
        ?>
    </div>
</body>
</html>