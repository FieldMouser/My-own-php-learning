<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
</head>
<body>
    <center>
        <h1>Гостевая книга</h1>
        <p>Введите имя пользователя и сообщение ниже</p>
        <form action="fileEditor.php" method="post">
            <p>Имя пользователя:</p>
            <input type="text" name="nickname" id="inckname">
            <p>Ваше сообщение:</p>
            <input type="text" name="message" id="message">
            <br>
            <button type="submit">Отправить</button>
        </form>

        <h1>Записи гостей:</h1>
        <?php 
            $fileContent = file_get_contents("journal.txt");
            echo "$fileContent";
        ?>
    </center>
</body>
</html>