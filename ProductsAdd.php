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
    $productname = $_POST["TovName"];
    $productprice = $_POST["Price"];

    // Создание запроса SQL
    $sql = "INSERT INTO Products (ProductsName,ProductsPrice)
    VALUES ('".$productname."','".$productprice."'); ";
    $result = $conn->query($sql);

    // Закрытие соединения
    header("Location: AddTovar.php");
    $conn->close();
?>