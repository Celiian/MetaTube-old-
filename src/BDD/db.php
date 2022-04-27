<?php

require_once  __DIR__ . '/db_config.php'; 

// Le DSN(data source name) est une chaine de caractere composée d'une partie de la config (sans le user/password)
// https://www.php.net/manual/fr/ref.pdo-mysql.connection.php
$dsn = 'mysql:host=' . $config_db['host'] . ';dbname=' . $config_db['dbname'] . ';port=' . $config_db['port'] . '';

// On essaye de se connecter avec PDO
try {
	$db = new PDO($dsn, $config_db['user'], $config_db['pass']);
}
catch (Exception $e) {
	// sinon on die(), cela fait 'crasher' le site internet avec un message d'erreur
	die('Maintenance in progress for the moment.
		Sorry for the absence of our service ');
}

// si tout est OK, nous avons accès à la variable $db permettant d'intéragir avec la BDD
// ce fichier est à inclure en début de script (souvent dans le init.php)