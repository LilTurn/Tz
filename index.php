<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Задание №1</h1>


    <?php

    $arr = [5, 9, 3, 7, 1, 6, 4, 8, 2];
    foreach ($arr as $num) {
        echo $num . " ";
    }
    sort($arr);
    ?>
    <br>
    <h3>ответ</h3>
    <br>
    <?php

    foreach ($arr as $num) {
        echo $num . " ";
    }
    ?>
    <h1>Задание №2</h1>
    <p>SELECT * FROM название_таблицы WHERE id = 10;</p>
    <h1>Задание №3</h1>
    <?php
    $arrInf = [
        'name' => 'Anton',
        'surmane' => 'Mikhailov',
        'number' => '89505163683',

    ];
    foreach ($arrInf as $key => $value) {
        echo "Ключ: " . $key . " => " . $value . "<br>";
    }
    ?>
    <h1>Задание №4</h1>
    <?php
    $arrMonth =
        [
            1 => 'Январь',
            2 => 'Февраль',
            3 => 'Март',
            4 => 'Апрель',
            5 => 'Май',

        ];
    foreach ($arrMonth as $key => $value) {
        echo "Месяц: " . $value . "<br>";
    }
    ?>
   
    
   
    <h1>Задание №6</h1>
    <p>
        1.В данном коде ошибка, параметры mysqli_connect() указаны в неправильном порядке. Правильный порядок:хост, имя пользователя, пароль и имя базы данных.
        2.Запрос ничего не сделает так как нет подлючения к бд (сам по себе запрос выводит все данные таблицы "users")
        3.DELETE FROM users WHERE id IN (1, 2, 3, 4, 5);
    </p>
    <h1>Задание №7ы</h1>
    <h2>Форма для сохранения данных в файл</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="textData">Введите текст:</label><br>
        <textarea id="textData" name="textData" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Сохранить в файл">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $textData = $_POST["textData"];
        
        $fileName = "saved_data.txt";
        
        $filePath = __DIR__ . "/" . $fileName;

        $file = fopen($filePath, "w");

        fwrite($file, $textData);

        fclose($file);

     
        echo "Файл создался в папке в которой лежит данный проект";
        echo "<p>Данные успешно сохранены в файл $fileName!</p>";
    }
    ?>
     <h1>Задание №5</h1>
     <?php
    $json = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
        ,2009,2010]}';
    ?>
     <pre>
        <?= $json ?>
    </pre>
</body>

</html>