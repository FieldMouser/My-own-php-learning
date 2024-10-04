<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nickname = $_POST["nickname"];
    $message = $_POST["message"];
    date_default_timezone_set('Asia/Novosibirsk');
    $date = date("Y-m-d H:i:s");

    if (!empty($nickname)) {
        $file = fopen("journal.txt", "a");

        flock($file, 2);

        $text = "<p><strong>$nickname ($date) :</strong> $message</p>";

        fwrite($file, $text);
        
        flock($file, 3);
        fclose($file);
    }
    
    // Перенаправляем пользователя на другую страницу после завершения работы
    header("Location: forum.php");
    exit; // Не забудьте добавить exit после header, чтобы остановить выполнение скрипта
}
?>