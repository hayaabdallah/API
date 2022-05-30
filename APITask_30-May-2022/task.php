<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$dbServerName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'user';
$dsn = "mysql:host=$dbServerName;dbname=$dbName";
$pdo = new PDO($dsn,$dbUserName,$dbPassword);
$id= $_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];

    try {
        $sql="UPDATE user SET age=$age WHERE id = $id";
        $stat=$pdo->query($sql);
        $resultData = array('status' => true, 'message' => 'updated Successfully...');
    }
    catch (PDOException $e){
        $resultData = array('status' => false, 'message' => 'Cant able to update...');
    }
    echo json_encode($resultData);


?>