<?php

loadModel('Login');
session_start();
$exception = null;

if(count($_POST) > 0){
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        $_SESSION['user'] = $user; //usuário na sessao
        header("Location: /day_records.php");
    } catch (Exception $e) {
        $exception = $e;
    }
}


loadView('login', $_POST + ['exception' => $exception]);