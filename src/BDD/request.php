<?php
session_start();
require_once  __DIR__ . '/../db.php';

$verifsql = 'SELECT * FROM user';

$query = $db->prepare($verifsql);
$query->execute();

$data = $query->fetchAll();
var_dump($data);