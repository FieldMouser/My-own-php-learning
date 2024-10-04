<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST["language"];
    setcookie("language", $language, time() + 3600, "/");
}
    


header("Location: flag.php");
exit;
?>