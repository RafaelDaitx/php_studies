<?php

require_once(dirname(__FILE__, 2). '/src/config/config.php');
//o 2 representa o nível do diretório acima de onde estou

require_once(dirname(__FILE__, 2). '/src/models/User.php');

$user = new User(['name' => 'rafael', '']);
echo $user->getSelect('id');