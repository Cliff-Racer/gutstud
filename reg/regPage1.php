<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <header>
        <!--<img src="https://www.sut.ru/doci/logo/sut-logo.png" alt="standart_logo">-->
    </header>
    <body>
        <div class = "centerBlock">
            <main class = "mainAuth">
                <?php 
                include "../construct/dbOpen.php";
                if(!isset($_GET['support_msg'])){
                    header('Location: /reg/regPage1.php?support_msg=');
                }
                ?>
                <section class = "sectionAuth">
                    <form action="/reg/regPage2.php" method = "post">
                        <p>
                            <input name = "surname" placeholder = "Фамилия" type="text">
                        </p>
                        <p>
                            <input name = "name" placeholder = "Имя" type="text">
                        </p>
                        <p>
                            <input name = "patronymic" placeholder = "Отчество" type="text">
                        </p>
                        <p>
                            <input name = "mail" placeholder = "E-mail" type="text">
                        </p>
                        <p>
                            <input name = "phone" placeholder = "Телефон" type="text">
                        </p>
                        <p>
                            <input name = "password" id = "password" placeholder = "Пароль" type="password">
                        </p>
                        <p>
                            <input name = "repassword" id = "repassword" placeholder = "Повторите пароль" type="password">
                        </p>
                        <p>
                            <label for="faculty:">Факультет:</label>
                            <select id="faculty" name = "faculty" >
                                <?php
                                    $query_faculty = "SELECT * FROM faculty";
                                    $select_faculty = mysqli_query($connection, $query_faculty);
                                    
                                    while($row = mysqli_fetch_assoc($select_faculty)) {
                                        $id_faculty = $row["id_faculty"];
                                        $faculty_abbreviation= $row["faculty_abbreviation"];
                                        echo "<option value='{$id_faculty}'>{$faculty_abbreviation}</option>";
                                    }
                                ?>
                            </select>
                        </p>
                        <p>
                            <label for="checkbox:">Вы преподаватель?</label>
                            <input name = "checkbox" type="checkbox" checked>
                        </p>
                        <button name = "submitReg1" id = "submitReg1" type = "submit">Зарегистрироваться</button>
                    </form>
                    <div id = "href-reg">
                        <a id = "auth-reg" href="../index.php">
                            Вход в лк
                        </a>
                    </div>
                </section>
                <p  class ="support_msg"> <?php echo ($_GET['support_msg']);?></p> <!--переделать через гет-->
            </main>
        </div>
