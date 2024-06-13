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
            <a href="index.php" class="activated">Главная</a>
            <a href="uslugi.php">Перечень услуг</a>
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
            <a href="index.php" class="activated">Главная</a>
            <a href="uslugi.php">Перечень услуг</a>
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
                Дезинфекция и дезинсекция в Москве
            </h1>

            <h2 class="nottitle-one">
                <br>Наши специалисты по дезинфекции и дезинсекции обладают высокой квалификацией и опытом работы, что позволяет им проводить процедуры дезинфекции и дезинсекции эффективно и безопасно.<br>
                 Мы используем только сертифицированные средства, которые устраняют бактерии, вирусы и грибки, обеспечивая длительную защиту от инфекций.<br>
                 Наш подход к дезинфекции и дезинсекции основан на индивидуальном подходе к каждому клиенту и учете особенностей помещения.<br>
                 Мы стремимся к обеспечению максимальной чистоты и безопасности, чтобы вы могли насладиться чистотой и комфортом в своем пространстве<br>
                 Доверьте профессионалам заботу о вашем здоровье и безопасности - обратитесь к нам прямо сейчас!
            </h2>
        </div>

    
        <div class="container" style="margin: 0% 10%;"><img src="/shef/pics/bgCleaning1.png" class="img"/><img src="/shef/pics/bgCleaning2.png" class="img"/><img src="/shef/pics/dezinfekcia-bg.png" class="img"/><img src="/shef/pics/dezinfekcia-site-bg.png" class="img"/><img src="/shef/pics/bgCleaning3.jpg" class="img"/><img src="/shef/pics/bg1.webp" class="img"/></div>

        <div class="nottitle-two" style="margin-bottom: 20%;"><b>
            <img src="/shef/pics/unnamed.jpg" height="33%" class="floatimg" style="position: absolute; right: 20px; bottom: 30;"/>
            <br>
                Найти правильных специалистов по борьбе с вредителями: комплексное руководство<br>    
                Работа с вредителями может быть стрессовым опытом, и выбор подходящих специалистов по борьбе<br>
                с вредителями может изменить ситуацию.Это руководство поможет вам найти идеальную команду для удовлетворения<br>
                ваших потребностей.
            </b>
            
            <br>
        </div>
        <div>
            <img src="/shef/pics/exterminator-work-wear-spraying-pesticide-with-sprayer_516484-1581.jpg" height="40%" class="floatimg2" style="position: absolute; left: 15px; bottom: 30;">
            <div class="nottitle-three" style="margin-bottom: 5%;">
            <b>
                <br>
                Что учитывать:<br>
                Тип вредителей:Различные компании специализируются на разных вредителях.Изучите их опыт и опыт работы<br>
                с конкретным вредителем, с которым вы сталкиваетесь.<br>
                Предлагаемые услуги: Они предоставляют конкретные услуги, которые вам требуются?Некоторые компании предлагают общее борьбу<br>
                с вредителями, в то время как другие специализируются на определенных областях, таких как контроль термитов, контроль комаров или контроль грызунов.<br>
                Лицензирование и страхование: Убедитесь, что компания правильно лицензирована и застрахована для вашего душевного спокойствия.<br>
                Опыт и репутация: Ищите компании с проверенным послужным списком и положительными отзывами клиентов.
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