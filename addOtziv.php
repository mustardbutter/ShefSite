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
    $username = $_POST["usernametex"];
    $password = $_POST["descr"];
    $date = date('Y-m-d H:i:s');

    // Создание запроса SQL
    $sql = "INSERT INTO Otzivy (OtzName,OtzText)
    VALUES ('".$username."','".$password."'); ";
    $result = $conn->query($sql);

    // Закрытие соединения
    header("Location: otzivy.php");
    $conn->close();
?>