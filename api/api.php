<?php
require_once __DIR__. '/bdd.php';

/* $sql = 'SELECT profilePicture FROM user WHERE username = "celian"';

$query = $conn->prepare($sql);

$query->execute();
$data = $query->fetch(PDO::FETCH_ASSOC);

var_dump($data) */

$query = 'SELECT * FROM user WHERE username = "celian"';
$result = $conn->query($query);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        var_dump('username : ' . $row["profilePicture"]);    }
}
?>