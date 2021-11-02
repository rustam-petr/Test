<?php

include 'config.php';


// Создание новой записи
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $education = $_POST['education'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    if (is_numeric($salary)) {
        $sql = ("INSERT INTO `employees`(`name`, `last_name`,`birthday`,`education`, `position`,`salary`) VALUES(?,?,?,?,?,?)");
        $query = $pdo->prepare($sql);
        $query->execute([$name, $last_name, $birthday, $education, $position, $salary]);
        if ($query) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    } else {
        echo "Зарплата должна быть числом!!!";
    }
//    if ($query) {
//        header("Location:" . $_SERVER['HTTP_REFERER']);
//    }
}

// Чтение данных из таблицы

$sql = $pdo->prepare("SELECT * FROM `employees`");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

// Редактирование данных

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $education = $_POST['education'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $get_id = $_GET["id"];
    $sql = ("UPDATE employees SET name=?, Last_name=?,birthday=?,education=?,position=?,salary=? WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $last_name, $birthday, $education, $position, $salary, $get_id]);
    if ($query) {
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }

}

// Удаление данных

if (isset($_POST['delete'])) {
    $get_id = $_GET["id"];
    $sql = ("DELETE FROM `employees` WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    if ($query) {
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }

}