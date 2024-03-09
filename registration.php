<?php
include("application/users.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Регистрация</title>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container">
        <form class="reg" method="post" action="registration.php">
            <h3>Регистрация</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ФИО</label>
                <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваше ФИО">
            </div>

            <div class="mb-3">
                <label for="exampelInputEmail1" class="form-label">Адрес электронной почты</label>
                <input name="email" type="email" class="form-control" id="exampelInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"> Мы никогда и никому не передадим вашу почту</div>
            </div>

            <div class="mb-3">
                <label for="exampelInputAge1" class="form-label">Возраст</label>
                <input name="age" type="text" class="form-control" id="exampelInputAge1">
            </div>

            <div class="mb-3">
                <label for="exampelInputPassword1" class="form-label">Пароль</label>
                <input name="pass-first" type="password" class="form-control" id="exampelInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampelInputPassword2" class="form-label">Введите пароль повторно</label>
                <input name="pass-second" type="password" class="form-control" id="exampelInputPassword2">
            </div>

            <button name="button-reg" type="submit" class="btn btn-primary">Отправить</button>
            <a href="auth.php">Авторизоваться</a>
            <div class="form-text1">Если уже зарегистрированы, нажмите на кнопку выше</div>
        </form>
        <!-- Конец формы регистрации -->
    </div>
</body>

</html>