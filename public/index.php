<?php

require_once(dirname(__FILE__, 2). '/src/config/config.php');
//o 2 representa o nível do diretório acima de onde estou

require_once(MODEL_PATH .  '/Login.php');

$login = new Login([
    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try {
    $login->checkLogin();
    echo 'deu certo';
} catch (Exception $e) {
    echo "Problema no login :P";
}
