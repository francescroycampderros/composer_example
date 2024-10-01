
<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/programa2.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->warning('Foo');

echo first(1, "omg lol"); //returns omg lol;
