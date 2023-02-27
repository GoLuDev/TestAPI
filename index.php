<?php
require __DIR__ . '/vendor/autoload.php';

$b = \Client\API\ConnectingToService::getInstance();
$a = $b->connectToService('books?_', 1);
$save = new \Client\API\SaveResultToFile();
$save->saveResult($a);