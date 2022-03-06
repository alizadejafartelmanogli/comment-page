<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href=../styles/styles.css>
    <title>Comment</title>
</head>
<body onload="getComments()">
<div class="container mt-5">
    <div class="row">
        <img src="../images/180557.970.jpg" alt="guitar" class="guitar">
    </div>
    <div class="alert alert-info mt-2">
        <form id="comment-form" >
            <input type="text" name="name" id="name" placeholder="Введите ваше имя" class="form-control">
            <textarea name="comment" id="comment" placeholder="Введите текст комментария"
                      class="form-control"></textarea>
            <span>Введите  сумму чисел </span><span id="firstCount"><?=rand(0, 10)?></span> и <span id="secondCount"><?=rand(0, 10)?></span>

            <input id="sumCount" type="text"><br>
            <button type="submit" class="btn btn-success" id="addComment">Добавить комментарий</button>
        </form>
        <div id="formError"></div>
        <div id="captchaError"></div>
        <br>
        <h6>Комментарии:</h6>
        <div class="alert alert-info mt-2 mb-5" id="comments">
        </div>
    </div>
</div>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/getComments.js"></script>
<script src="../js/addComment.js"></script>
</body>
</html>