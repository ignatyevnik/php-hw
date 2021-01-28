<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: form.php');
} // если логина нет, то перенаправляем на форму авторизации
$login = $_SESSION['login']; // сохраняем логин, чтобы не обращаться к сессии


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
<nav>
    <a href="page.php">Страница</a>
    <a href="logout.php">Выйти</a>
</nav>
<h2><?php echo $login ?>, добро пожаловать в личный кабинет</h2>
</body>
</html>
