<?php

require '../vendor/autoload.php';
//require '../app/functions/functions.php';

use app\controllers\TesteController;
$routerCore = new \app\core\RouterCore();

$testecontroller = new TesteController();

echo '<br/>';

dd($testecontroller->seta('Anderson'));
