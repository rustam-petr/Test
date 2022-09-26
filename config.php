<?php

try {
    $pdo = new PDO('mysql:dbname=company; host=localhost', 'root', 'root');
} catch (PDOException $e) {
    echo "Ошибка соединения с базой данных".$e->getMessage();
}