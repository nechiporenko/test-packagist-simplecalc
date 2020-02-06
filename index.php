<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Nechiporenko\Classes\App;

$app = new App();

$app->execute(12, 3);
$app->execute(5, 2);
$app->execute(3, null);
$app->showTotal();
