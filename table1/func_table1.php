<?php

include "../config.php";
//include "../script.php";
//
////print_r($_POST);
//
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

$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$resultUsers = $sql->fetchAll(PDO::FETCH_OBJ);