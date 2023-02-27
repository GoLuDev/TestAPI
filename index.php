<?php
require __DIR__ . '/vendor/autoload.php';

$connect = \Client\API\ConnectingToService::getInstance();
$result = $connect->connectToService('books?_', 1);
$save = new \Client\API\SaveResultToFile();
$save->saveResult($result);