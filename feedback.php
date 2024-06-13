<!DOCTYPE html>
<html>
    <head>
        <!-- Заголовок -->
        <title>Дезинфектор</title>
        <meta name="description" content="Сайт дезинфекции" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- Иконки -->
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <!-- Стили -->
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
            <a class="feedback" href="feedback.php" class="activated">Обратная связь</a>
            <a class="lk" href="lkadmin.php">'.$row["UsersLogin"].'</a>
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
            <a class="feedback" href="feedback.php" class="activated">Обратная связь</a>
            <a class="lk" href="reglog.php">Войти</a>
            </div>';
            }
            $conn->close();
        ?>
    </head>
    
    

    <body>
        
        <div>
            <h1 class="title-one">
                Обратная связь
            </h1>

            <h2 class="nottitle-one">
                <br>Наш менеджер быстро свяжутся с вами!

                 <br>
                 <br>

                 <form method="post" action="addFeedBack.php">
                    <label for="name">Введите имя и фамилию</label>
                    <input type="text" id="userFIO" name="userFIO" placeholder="Иванов Иван Иванович" style="margin-left: 1%; width: 55%; background-color: #78cde7;
                    border-radius: 50px 50px 50px 50px;">
                    <br>
                    <label for="name">Куда к вам обратится?</label>
                    <input type="text" id="phoneemail" name="phoneemail" placeholder="Номер телефона/Почта" style="margin-left: 2.7%; width: 55%; background-color: #78cde7;
                    border-radius: 50px 50px 50px 50px;">
                    <br>
                    <label for="name">Комментарий</label>
                    <input type="text" id="descr" name="descr" placeholder="Напишите здесь что нибудь и мы обязательно вам ответим!" style="margin-left: 8.4%; width: 55%; background-color: #78cde7;
                    border-radius: 50px 50px 50px 50px;">
                    <br><br>
                    <input type="submit" value="Заказать обратную связь" class="button" style="margin-left: 5%;">
                  </form>

            </h2>

        </div>
    </body>
</html>