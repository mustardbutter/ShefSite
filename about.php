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
            <a href="uslugi.php" >Перечень услуг</a>
            <a href="news.php">Новости</a>
            <a href="about.php" class="activated">О нас</a>
            <a href="otzivy.php" style="background-color: chartreuse;">Отзывы</a>
            <a class="number">+7(787)8781488</a>
            <a class="feedback" href="feedback.php">Обратная связь</a>
            <a class="lk" href="lkadmin.php">'.$row["UsersLogin"].'</a>
            <a class="ex" href="logout.php">Выйти</a>
            </div>';

            }
            }
            else{
            echo '<div class="topnav">
            <a href="index.php">Главная</a>
            <a href="uslugi.php" >Перечень услуг</a>
            <a href="news.php">Новости</a>
            <a href="about.php" class="activated">О нас</a>
            <a href="otzivy.php" style="background-color: chartreuse;">Отзывы</a>
            <a class="number">+7(787)8781488</a>
            <a class="feedback" href="feedback.php">Обратная связь</a>
            <a class="lk" href="reglog.php">Войти</a>
            </div>';
            }
            $conn->close();
        ?>

    </head>
    
    

    <body>
        
        <div>
            <h1 class="title-one">
                О нас:
            </h1>

            <h2 class="nottitle-one">
                <br>Добро пожаловать в нашу специализированную службу дезинсекции, <br>
                где мы специализируемся на ликвидации и контроле вредителей и насекомых, которые представляют
                угрозу для здоровья человека и благополучия.<br>
                Наша команда высококвалифицированных и опытных специалистов стремится обеспечить эффективные, <br>
                экологически чистые и индивидуальные решения для всех ваших потребностей в Дезинсекции.<br>
                Мы понимаем важность поддержания среды без вредителей как для домов, так и для предприятий,<br>
                и мы стремимся создавать здоровые и удобные места для наших клиентов.
            </h2>
        </div>

        <div class="legs" style="margin-top: 45%;">
            <a style="margin-left: 1%;">"Дезинфектор"</a>
            <a class="number" style="margin-left: 75%;">+7(787)8781488</a>
        </div>
    </body>
</html>