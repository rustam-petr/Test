<?php

include "../config.php";
include "../script.php";

//print_r($_POST);

$qvuery = ("SELECT COUNT(*) FROM `users` WHERE email= ? and password= ? and is_blocked= ?");

$query = $pdo->prepare($qvuery);
$query->execute([$_POST['email'], $_POST['pass'], 0]);
$a = $query->fetchColumn();

if($a>0){
    $sql = $pdo->prepare("SELECT * FROM `users`");
    $sql->execute();
    $result1 = $sql->fetchAll(PDO::FETCH_OBJ);

//print_r($result);
} else{
    Alert('Вы должны быть авторизированы!!!');

}