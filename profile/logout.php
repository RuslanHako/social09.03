<?php
// Инициализация сессиии
session_start();
// Очистка всех значений сессии
session_unset();
// Уничтожение сессии
session_destroy();
// Перенаправление на главную страницу index.php
header("Location: http://localhost/social/");
exit;
