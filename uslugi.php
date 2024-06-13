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
            <a href="uslugi.php" class="activated">Перечень услуг</a>
            <a href="news.php">Новости</a>
            <a href="about.php" >О нас</a>
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
            <a href="uslugi.php" class="activated">Перечень услуг</a>
            <a href="news.php">Новости</a>
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
                Наши услуги:
            </h1>

            <table class="tbles" style="width:100%; border: 1px solid black;">
                <tr>
                    <td style="text-align: center; background-color: #7fffd9;">
                        <h2>Помещение и площадь</h2>
                    </td>
                    <td style="text-align: center; background-color: #7fffd9;">
                        <h2>Эконом</h2>
                    </td>
                    <td style="text-align: center; background-color: #7fffd9;">
                        <h2>Усиленная</h2>
                    </td>
                    <td style="text-align: center; background-color: #7fffd9;">
                        <h2>Гелевая обработка от тараканов и муравьев</h2>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                        Общежитие, гостинка (до 20 м2)
                    </td>
                    <td>
                    от 2000 руб.
                    </td>
                    <td>
                    от 2500 руб.
                    </td>
                    <td>
                    от 3990 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    1-комн  (до 40м2) 
                    </td>
                    <td>
                    от 2200 руб.
                    </td>
                    <td>
                    от 2600 руб.
                    </td>
                    <td>
                    от 3990 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    2-комн  (до 60м2) 
                    </td>
                    <td>
                    от 2500 руб.
                    </td>
                    <td>
                    от 3000 руб.
                    </td>
                    <td>
                    от 5200 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    3-комн (до 90м2)
                    </td>
                    <td>
                    от 3000 руб.
                    </td>
                    <td>
                    от 3500 руб.
                    </td>
                    <td>
                    от 6190 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    3-комн (до 90м2)
                    </td>
                    <td>
                    от 3000 руб.
                    </td>
                    <td>
                    от 3500 руб.
                    </td>
                    <td>
                    от 6190 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    4-комн (более 90м2)
                    </td>
                    <td>
                    от 3500 руб.
                    </td>
                    <td>
                    от 3900 руб.
                    </td>
                    <td>
                    от 7390 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    5-комн (до 150 м2)
                    </td>
                    <td>
                    от 3900 руб.
                    </td>
                    <td>
                    от 4400 руб.
                    </td>
                    <td>
                    от 8190 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    Дом (до 50м2)
                    </td>
                    <td>
                    от 3000 руб.
                    </td>
                    <td>
                    от 3500 руб.
                    </td>
                    <td>
                    от 5090 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    Дом (до 100м2)
                    </td>
                    <td>
                    от 4490 руб.
                    </td>
                    <td>
                    от 4990 руб.
                    </td>
                    <td>
                    от 7390 руб.
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    Дом (до 150м2)
                    </td>
                    <td>
                    от 5890 руб
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    Дом (до 200м2)
                    </td>
                    <td>
                    от 30 руб/м2
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                </tr>
                <tr>
                    <td style="background-color: rgb(165, 255, 255);">
                    Дом (более 200м2)
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                    <td>
                    индивидуальный расчет
                    </td>
                </tr>
            </table>
            <br>
            <div class="nottitle-one">
                <p>Дополнительные услуги:<br>
                Обработка без запаха: + 490 руб.<br>
                Барьерная защита от тараканов: + 490 руб.<br>
                Второе насекомое в добавление к основному: + 50% к стоимости обработки.<br>
                Универсальная обработка от всех насекомых: + 50% к стоимости обработки.<br>
                Присутствие на обработке в нашей маске:  + 990 руб.<br>
                Закрытие вентиляции сеткой марлей: + 490 руб.</p>
                <?php
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

            for ($i=0;$i <= 200;$i++){

                $sql = "SELECT ProductsName,ProductsPrice FROM Products where idProducts = ".$i.";";
                $result = $conn->query($sql);
                
                if ($result != null){
                    
                while($row = $result->fetch_assoc()) {
                echo '<p>'.$row["ProductsName"].' '.$row["ProductsPrice"].'</p>';
                }
            }
            }
                ?>
                <a href="feedback.php" class="button" style="color:white;">Обратится к нам!</a>
            </div>
            
                


        </div>

        <div class="legs" style="margin-top: 45%;">
            <a style="margin-left: 1%;">"Дезинфектор"</a>
            <a class="number" style="margin-left: 75%;">+7(787)8781488</a>
        </div>
    </body>
</html>