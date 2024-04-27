<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Валидация email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Пожалуйста, введите корректный email адрес.";
        exit;
    }

    // Сохранение email в базу данных или отправка на почту
    // В данном примере просто выводим сообщение об успешной подписке
    echo "Спасибо за подписку!";
} else {
    echo "Ошибка: доступ запрещен.";
}
?>
