<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;port=8889;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$todo =$_POST["todo"];
$sql="INSERT INTO todo (title) VALUES (:title)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":title",$todo);
$stmt->execute();