<?php
require_once 'read.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/blog.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Comment</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <img src="../images/180557.970.jpg" alt="guitar" class="guitar">
        </div>

        <div class="alert alert-info mt-2">
        
            <form action="create.php" method="post">
                <input type="text" name="name" placeholder="Введите ваше имя" class="form-control">
                <textarea name="comment" placeholder="Введите текст комментария" class="form-control"></textarea>
                <button type="submit" class="btn btn-success">Добавить комментарий</button>
            </form>
            <br>
            <h6>Комментарии:</h6>
            <div class="alert alert-info mt-2 mb-5">
                <?php $comments = get_Results(); ?>
                <?php foreach (@$comments as $comment): ?>
                <h3>User: <?=$comment['user_name']?></h3>
                <h4>Comment: <?=$comment['comment_text']?></h4>
                <h6>Data: <?=$comment['data_time']?></h6>
                <?php endforeach; ?>
            </div>
        </div>
</body>
</html>