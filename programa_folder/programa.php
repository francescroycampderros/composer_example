
<?php

//require __DIR__ . '/../vendor/autoload.php'; // Si el crides des d'un altre projecte composer aquesta ruta no es correcte
require __DIR__.'/../../../autoload.php';
require __DIR__ . '/programa2.php';


function myMessage() {

	$log = new Monolog\Logger('name');
	$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
	$log->warning('Foo');

	echo first(1, "omg looooooooooooooooooooooooooool"); //returns omg lol;
	echo first(1, "omg looooooooooooooooooooooooooool"); //returns omg lol;
}

