<?php
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
    // Данные для подключения
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shef";

    // Создание соединения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Вытаскивание данных с формы авторизации
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Создание запроса SQL
    $sql = "SELECT * FROM users WHERE userslogin = '$username' AND userspass = '$password'";
    $result = $conn->query($sql);

    // Проверка существования пользователя
    if ($result->num_rows > 0) {
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION["usermane"] = $username;
        // Пользователь есть
        header("Location: lkadmin.php");
    } else {
        // Пользователя нет
        header("Location: index.php");
    }

    // Закрытие соединения
    $conn->close();
?>