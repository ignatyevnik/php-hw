<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $files = $_FILES;

    $file_name = $files['picture']['name'];

    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    $pics_name = 'pics.txt';

    $tmp_name = $files['picture']['tmp_name'];

    if (move_uploaded_file($tmp_name, "img/$file_name")) {
        echo 'Файл успешно загружен';
    } else {
        echo 'Файл загрузить не удалось';
    }

    if (file_put_contents($pics_name, $files['picture']['name'] . PHP_EOL,
            FILE_APPEND | LOCK_EX) !== false) {
        echo "Имя файла записано";
    }

    $file_type = $files['picture']['type'];

    if (!$file_type) {
        echo "Нельзя загрузить файл с таким расширением.";
    }

}

$data_arr = file('pics.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вывод изображения</title>
</head>

<body>
<?php include_once 'menu.php' ?>
<section>
    <?php foreach ($data_arr as $img): ?>
        <div>
            <p>Название файла: <?php echo $img ?></p>
            <img src="img/<?php echo $img ?>">
        </div>
    <?php endforeach; ?>
</section>
</body>
</html>
