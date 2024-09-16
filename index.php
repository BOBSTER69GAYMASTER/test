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
$sql = "SELECT * FROM todo";
$stmt = $conn->prepare($sql);
$stmt->execute();
$todos=$stmt->fetchAll(PDO::FETCH_ASSOC)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

</head>
<body>
<h1>
    Todo
</h1>
<form action="create.php" method="post">
    <input type="text" name="todo"/>
    <button>
        send
    </button>
</form>
<ul>
<?php  ?>
</ul>
</body>
</html>