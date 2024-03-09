<?php
// Подключение к БД
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbname = 'social';

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения

if ($conn->connect_error) {
    // die - Выводит сообщение и прекращает выполнение текущего скрипта
    die("Connection failed: " . $conn->connect_error);
}
