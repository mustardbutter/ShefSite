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
    $username = $_POST["userFIO"];
    $phonemail = $_POST["phoneemail"];
    $descr = $_POST["descr"];

    $date = date('Y-m-d H:i:s');

    // Создание запроса SQL
    $sql = "INSERT INTO feedback (FIO,backsmth,comment)
    VALUES ('".$username."','".$phonemail."','".$descr."'); ";
    $result = $conn->query($sql);

    // Закрытие соединения
    header("Location: feedback.php");
    $conn->close();
?>