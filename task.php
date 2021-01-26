<?php
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка изображений</title>
</head>
<body>
<?php include_once 'menu.php' ?>
<form action="output.php" method="post" enctype="multipart/form-data" name="upload-form">
    <div>
        <input name="picture" accept="image/*" type="file">
    </div>
    <input type="submit" value="Загрузить изображение">
</form>

</body>
</html>
