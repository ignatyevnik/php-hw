<?php
session_start(); // при переходе с page сервер получает идентификатор сессии
$server = $_SERVER;

if (isset($_SESSION['login'])) {
    header('Location: account.php');
} // есил уже залогинен, то переход на страницу аккаунта

if ($server['REQUEST_METHOD'] === 'POST') { //
    $post = $_POST; // login === qwerty, password === 123
    // получаем значения логина и пароля
    if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123') { // проверям пароль и логин на соответсвие
        $_SESSION['login'] = $post['login'];
        header('Location: account.php'); // перенаправляем запрос на account.php
    } else {
        $error = 'Ошибка авторизации'; // если пользователь неверно ввел пароль и логин
    }
}


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>
    <?php if (isset($error)): ?>
    <p><? echo $error ?></p>
    <?php endif; ?>
<form action="form.php" method="post">
    <div>
        <label>Введите логин <input type="text" name="login"></label>
    </div>
    <div>
        <label>Введите пароль <input type="password" name="password"></label>
    </div>
    <input type="submit" value="Войти">
</form>

</body>
</html>
