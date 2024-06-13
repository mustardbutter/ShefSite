<?php
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
    $productname = $_POST["log"];
    $productprice = $_POST["pass"];

    // Создание запроса SQL
    $sql = "INSERT INTO Users (UsersLogin,UsersPass, UsersRole)
    VALUES ('".$productname."','".$productprice."','1'); ";
    $result = $conn->query($sql);

    // Закрытие соединения
    header("Location: addMin.php");
    $conn->close();
?>