<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Куки-тест</title>
</head>
<body>
    <h1>Задание:</h1>
    <p>Список для выбора языка отображения страницы и кнопка отправки данных.</p>

    <?php
        
        if (isset($_COOKIE["language"])) {
            $language = $_COOKIE["language"];
            echo "Выбранный язык: $language";
        }
        else {
            echo "Язык не выбран";
        }
    
    ?>

    <form action="cookie.php" method="post">
        <label>
            <input type="radio" name="language" value="english"> Английский
        </label>
        <br>
        <label>
            <input type="radio" name="language" value="russian"> Русский
        </label>
        <br>   
        <button type="submit">Поменять язык</button>
    </form>
    
    
    <p>
        <a href="../index.php">На главную</a>
    </p>
    
</body>
</html>