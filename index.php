<?php
// Устанавливаем HTTP статус код 301 Moved Permanently
header("HTTP/1.1 301 Moved Permanently");
// Устанавливаем заголовок Location для перенаправления
header("Location: http://example.com/new-page.php");
exit(); // Завершаем выполнение скрипта
?>
