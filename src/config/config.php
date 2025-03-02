<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt-br', 'pt-br.utf-8', 'portuguese');

//files
define('MODEL_PATH', realpath(dirname(__FILE__). '/../models'));

require_once(realpath(dirname(__FILE__). '/database.php'));