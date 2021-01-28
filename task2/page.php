<?php
session_start(); // проверяется, есть ли идентификатор, если его нет, то создается файлик
// main.php
// form.php
// account.php
// logout.php
$login = $_SESSION['login']; // в первый раз в массиве ничего нет.

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
</head>
<body>
<nav>
    <?php if (isset($login)): ?>
        <a href="logout.php">Выйти</a>
    <?php else: ?>
        <a href="form.php">Войти</a> <!--если пользователь не залогинен, то ему выводится войти-->
    <?php endif; ?>
</nav>

<h2>Контент доступен всем пользователям</h2>
<div></div>

<?php if (isset($login)): ?> <!-- если пользователь не залогинен, то ему не отобразится поле комментария-->
    <form action="page.php" method="post" name="comment">
        <div>
            <textarea name="text"></textarea>
        </div>
        <input type="submit" value="Добавить">
    </form>
<?php endif; ?>
<script src="js/ajax.js"></script>
</body>
</html>