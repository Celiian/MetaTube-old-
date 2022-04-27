<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT");
header("Access-Control-Allow-Headers: Content-Type");

$array = json_decode(file_get_contents("php://input"), true);

var_dump($array)

//require_once __DIR__. '/bdd.php';

/*
$sql = 'SELECT profilePicture FROM user WHERE username = "celian"';

$query = $conn->prepare($sql);

$query->execute();
$data = $query->fetch(PDO::FETCH_ASSOC);

var_dump($data) 

$query = 'SELECT * FROM user';
$result = $conn->query($query);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        var_dump('username : ' . $row["profilePicture"]);    }
}

*/
/*

$command = $conn->prepare('INSERT INTO video (id,buffer,date,privacy) VALUES (1, ?, "2022-05-27", "Public")');
$command->bind_param("");

if($conn->query($query) === TRUE)
{
    echo "Sucess";
}
else
{
    echo "Error : " . $conn->error;
}

$conn->close();
*/
?>