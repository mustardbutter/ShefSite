<!DOCTYPE html>
<html>
  <head>
  <title>Интерактивное веб приложение</title>
        <!-- Описание -->
        <meta name="description" content="Интерактивное приложение" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css">
        <?php
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }

            // Данные подключения
            $servername = "127.0.0.1:3306";
            $username = "root";
            $password = "";
            $dbname = "shef";

            // Создание соединения
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Проверка соединения
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT UsersLogin FROM users where `userslogin` ='".$_SESSION['usermane']."';";


            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
            echo '<div class="topnav">        
            <a href="index.php">Главная</a>
            <a href="uslugi.php">Перечень услуг</a>
            <a href="news.php">Новости</a>
            <a href="about.php" >О нас</a>
            <a href="otzivy.php" style="background-color: chartreuse;">Отзывы</a>
            <a class="number">+7(787)8781488</a>
            <a class="feedback" href="feedback.php">Обратная связь</a>
            <a class="lk" href="lkadmin.php" class="activated">'.$row["UsersLogin"].'</a>
            <a class="ex" href="logout.php">Выйти</a>
            </div>';

            }
            }
            else{
            echo '<div class="topnav">
            <a href="index.php">Главная</a>
            <a href="uslugi.php">Перечень услуг</a>
            <a href="news.php">Новости</a>
            <a href="about.php" >О нас</a>
            <a href="otzivy.php" style="background-color: chartreuse;">Отзывы</a>
            <a class="number">+7(787)8781488</a>
            <a class="feedback" href="feedback.php">Обратная связь</a>
            <a class="lk" href="reglog.php" class="activated">Войти</a>
            </div>';
            }
            $conn->close();
        ?>
  </head>
<body>

<div class="nottitle-one" style="margin-top:20%;">
    <form method="post" action="ProductsAdd.php">
      <label for="TovName" style="color: #ffffff;">Название товара:</label>
      <input type="text" id="TovName" name="TovName" required style="margin-left:5%;"><br>
      <label for="Price" style="color: #ffffff;">Цена товара:</label>
      <input type="text" id="Price" name="Price" required style="margin-left:8%;"><br>
      <br>
      <input type="submit" value="Добавить товар" class="button" style="margin-left: 5%;">
</form>
</div>

</body>
</html>
