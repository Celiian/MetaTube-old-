<?php
session_start();
require_once  __DIR__ . '/../db.php';

$verifsql = 'SELECT Mail FROM Utilisateurs';
$sql = 'INSERT INTO Utilisateurs(Username,FamilyName,name,Date,Mail,Pwd) VALUES (:Username,:FamilyName,:name,:Date,:Mail,:Pwd)';

$query = $db->prepare($verifsql);
$query->execute();

$data = $query->fetchAll();
var_dump($data);