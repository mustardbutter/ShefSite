<!DOCTYPE html>
<html>
    <head>
        <!-- Заголовок -->
        <title>Дезинсектор</title>
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
            <a href="news.php" class="activated">Новости</a>
            <a href="about.php" >О нас</a>
            <a href="otzivy.php" style="background-color: chartreuse;">Отзывы</a>
            <a class="number">+7(787)8781488</a>
            <a class="feedback" href="feedback.php">Обратная связь</a>
            <a class="lkadmin.php" href="lk.php">'.$row["UsersLogin"].'</a>
            <a class="ex" href="logout.php">Выйти</a>
            </div>';

            }
            }
            else{
            echo '<div class="topnav">
            <a href="index.php">Главная</a>
            <a href="uslugi.php">Перечень услуг</a>
            <a href="news.php" class="activated">Новости</a>
            <a href="about.php" >О нас</a>
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
                Новости:
            </h1>
        
            
        <div class="nottitle-two" style="margin-bottom: 20%;"><b><img src="/shef/pics/sqwed.jpg" height="50%" style="position: absolute; right: 5%;">
            <br>
                25.03.2024г. Автор: Дезинсектор<br>  
                <hr>
                Всемирная организация здравоохранения (ВОЗ) выпустила новое руководство по 
                контролю вектора для денге, <br>
                 вирусного заболевания комаров, которое затрагивает миллионы людей во всем мире.Руководство дает комплексные<br>
                  рекомендации по использованию инновационных и эффективных мер контроля вектора, включая материалы, обработанные<br>
                   инсектицидом, пространственные репелленты и генетические технологии.   
               
            </b>
            <br>
        </div>

        <div>         

            <img src="/shef/pics/dezinsektsiya2.jpg" height="45%" style="position: absolute; left: 5%;">
            <div class="nottitle-three" style="margin-bottom: 5%;">
            <b>
                <br>
                14.06.2023г. Автор: Администратор
                <hr>
                Исследователи из Калифорнийского университета в Сан -Диего разработали новую ловушку для комаров,<br>
                 которая использует химические аттрактанты для приманки у комаров.Ловушка предназначена для того,<br>
                  чтобы быть высокоэффективным и экологически чистым, поскольку она не полагается на пестициды или инсектициды.
                    
                </b>
                <br>
            </div>
        </div>

        <div class="legs">
            <a style="margin-left: 1%;">"Дезинфектор"</a>
            <a class="number" style="margin-left: 75%;">+7(787)8781488</a>
        </div>
    </body>
</html>