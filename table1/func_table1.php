<?php

include "../config.php";

//include "../script.php";
//print_r($_POST);
//$qvuery = ("SELECT COUNT(*) FROM `users` WHERE email= ? and password= ? and is_blocked= ?");
//
//$query = $pdo->prepare($qvuery);
//$query->execute([$_POST['email'], $_POST['pass'], 0]);
//$a = $query->fetchColumn();
//
//if($a>0){
//
//    Alert('Успех');
////    header("Location: table2/main_table2.php");
//
//} else{
//    Alert('Вы должны быть авторизированы!!!');
//
//}
//// Создание новой записи
//
//if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $last_name = $_POST['last_name'];
//    $email = $_POST['email'];
//    $password = $_POST['password'];
////      if (is_numeric($password)) {
//        $sql = ("INSERT INTO `users`(`name`, `last_name`,`email`,`password`) VALUES(?,?,?,?)");
//        $query = $pdo->prepare($sql);
//        $query->execute([$name, $last_name, $email, $password]);
////        if ($query) {
////            header("Location:" . $_SERVER['HTTP_REFERER']);
////        }
////    } else {
////        Alert('Внимание!!! Зарплата должна быть числом.');
////    }
//}


$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$resultUsers = $sql->fetchAll(PDO::FETCH_OBJ);